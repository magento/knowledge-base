---
title: Most common database issues in Adobe Commerce on cloud infrastructure
labels: Magento Commerce Cloud,MySQL,Percona Toolkit,best practices,database,duplicate,logs,performance,queries,Adobe Commerce,cloud infrastructure,Pro plan architecture,Starter plan architecture,Starter architecture,Pro architecture
---

This article discusses the most common database issues causing performance degradation for Adobe Commerce on cloud infrastructure sites.

Click on each issue description to see the details:

* [Long running queries](#Long_running_queries)
* [Primary keys are not defined](#Primary_keys_not_defined)
* [Duplicate indexes](#Duplicate_indexes)

<h2 id="Long_running_queries">Long running queries</h2>

Investigate if you have slow running MySQL queries. Depending on your Adobe Commerce on cloud infrastructure plan and therefore tools availability, you can do the following.

### Investigate long running queries using MySQL (available for all plans)

1. Run the [SHOW \[FULL\] PROCESSLIST](https://dev.mysql.com/doc/refman/8.0/en/show-processlist.html) statement.
1. If you see long running queries, run [MySQL EXPLAIN and EXPLAIN ANALYZE](https://mysqlserverteam.com/mysql-explain-analyze/) for each of them, to find out what makes the query run for a long time.
1. Take resolution steps depending on issues found.

### Investigate long running queries using Percona Toolkit (for Pro architecture only)

1. Run the `pt-query-digest --type=slowlog` against MySQL slow query logs.
    * Refer to [Log locations > Service Logs](https://devdocs.magento.com/cloud/project/log-locations.html#service-logs) in our developer documentation for information on where the slow query logs are stored in Adobe Commerce on cloud infrastructure.
    * Refer to [Percona Toolkit > pt-query-digest](https://www.percona.com/doc/percona-toolkit/LATEST/pt-query-digest.html#pt-query-digest) documentation.
1. Take resolution steps depending on issues found.

<h2 id="Primary_keys_not_defined">Primary keys are not defined</h2>

Defining primary keys (PK) is a requirement for a good database and table design. They provide a way to uniquely identify a single row in any table. When using InnoDB engine, which is the default in Adobe Commerce, in tables where no PK is defined the first unique not null key is the primary key. If none is available, InnoDB creates a hidden primary key (6 bytes). The problem with such a key is that you do not have control over it and this value is global for all tables without primary keys. This might cause contention problems if you perform simultaneous writes on these tables. This might lead to performance issues, as they will all share that global hidden PK index increment.

Take the following steps to identify missing primary keys and add them:

1. To identify the tables that do not have PK, run the following query:    
    ```sql
    SELECT table_catalog, table_schema, table_name, engine        FROM information_schema.tables        WHERE (table_catalog, table_schema, table_name) NOT IN        (SELECT table_catalog, table_schema, table_name        FROM information_schema.table_constraints        WHERE constraint_type = 'PRIMARY KEY')        AND table_schema NOT IN ('information_schema', 'pg_catalog');    
    ```
1. To add a PK to a table, update the `db_schema.xml` (the declarative schema) of the table, by adding a node similar to the following:    
    ```html
    <constraint xsi:type="primary" referenceId="PRIMARY">         <column name="id_column"/>     </constraint>    
    ```    
    Where `referenceID` and `column name` must have your custom values.    
For more information about using declarative schema in Adobe Commerce on cloud infrastructure refer to [Configure declarative schema](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html) in our developer documentation.    

<h2 id="Duplicate_indexes">Duplicate indexes</h2>

### Check if there are duplicate indexes in your DB

For both Starter and Pro architectures, you can run the following query to check if you have duplicate indexes:

```sql
SELECT s.INDEXED_COL,GROUP_CONCAT(INDEX_NAME) FROM (SELECT INDEX_NAME,GROUP_CONCAT(CONCAT(TABLE_NAME,'.',COLUMN_NAME) ORDER BY CONCAT(SEQ_IN_INDEX,COLUMN_NAME)) 'INDEXED_COL' FROM INFORMATION_SCHEMA.STATISTICS WHERE TABLE_SCHEMA = 'db?' GROUP BY INDEX_NAME)as s GROUP BY INDEXED_COL HAVING COUNT(1)>1
```

The query returns the column names and the names of the duplicated indexes.

Pro architecture merchants can also use the Percona Toolkit to check for duplicate indexes, by running the `pt-duplicate-key checker` command. For more information refer to [Percona Toolkit > pt-duplicate-key-checker](https://www.percona.com/doc/percona-toolkit/LATEST/pt-duplicate-key-checker.html%C2%A0) documentation.

### Remove duplicate indexes

Use the

```SQL
DROP INDEX
```

statement to remove the duplicate indexes. See [DROP INDEX Statement](https://dev.mysql.com/doc/refman/8.0/en/drop-index.html) MySQL documentation for details.

## Related reading in our support knowledge base

 [Database best practices for Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360041997312)
