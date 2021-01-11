---
title: Most common database issues in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360041739651-Most-common-database-issues-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,performance,duplicate,logs,queries,MySQL,database,best practices,Percona Toolkit
---

This article discusses the most common database issues causing performance degradation for Magento Commerce Cloud sites. 

 Click on each issue description to see the details:

 
 * [Long running queries.](#Long_running_queries)
 * [Primary keys are not defined.](#Primary_keys_not_defined)
 * [Duplicate indexes.](#Duplicate_indexes)
 
 Long running queries
--------------------

 Investigate if you have slow running MySQL queries. Depending on your Magento Cloud plan and therefore tools availability, you can do the following. 

 ### Investigate long running queries using MySQL (available for all plans)

 
 2. Run the [SHOW [FULL] PROCESSLIST](https://dev.mysql.com/doc/refman/8.0/en/show-processlist.html) statement.
 4. If you see long running queries, run [MySQL EXPLAIN and EXPLAIN ANALYZE](https://mysqlserverteam.com/mysql-explain-analyze/) for each of them, to find out what makes the query run for a long time.
 6. Take resolution steps depending on issues found.
 
 ### Investigate long running queries using Percona Toolkit (for Pro plan only)

 
 2. Run the pt-query-digest --type=slowlog against MySQL slow query logs. 
	 * Refer to [Log locations > Service Logs](https://devdocs.magento.com/cloud/project/log-locations.html#service-logs) in Magento Developer Documentation for information on where the slow query logs are stored in Magento Commerce Cloud. 
	 * Refer to [Percona Toolkit > pt-query-digest](https://www.percona.com/doc/percona-toolkit/LATEST/pt-query-digest.html#pt-query-digest) documentation. 
 4. Take resolution steps depending on issues found.
 
 Primary keys are not defined
----------------------------

 Defining primary keys (PK) is a requirement for a good database and table design. They provide a way to uniquely identify a single row in any table. When using InnoDB engine, which is the default in Magento, in tables where no PK is defined the first unique not null key is the primary key. If none is available, InnoDB creates a hidden primary key (6 bytes). The problem with such a key is that you do not have control over it and this value is global for all tables without primary keys. This might cause contention problems if you perform simultaneous writes on these tables. This might lead to performance issues, as they will all share that global hidden PK index increment. 

 Take the following steps to identify missing primary keys and add them:

 
 2. To identify the tables that do not have PK, run the following query: SELECT table\_catalog, table\_schema, table\_name, engine FROM information\_schema.tables WHERE (table\_catalog, table\_schema, table\_name) NOT IN (SELECT table\_catalog, table\_schema, table\_name FROM information\_schema.table\_constraints WHERE constraint\_type = 'PRIMARY KEY') AND table\_schema NOT IN ('information\_schema', 'pg\_catalog');  
 4. To add a PK to a table, update the db\_schema.xml (the declarative schema) of the table, by adding a node similar to the following: <constraint xsi:type="primary" referenceId="PRIMARY"> <column name="id\_column"/> </constraint>  Where referenceID and column name must have your custom values. 

 For more information about using declarative schema in Magento Commerce Cloud refer to [Configure declarative schema](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html) in Magento Developer Documentation.

 
 
 Duplicate indexes
-----------------

 ### Check if there are duplicate indexes in your DB

 For both Starter and Pro plans, you can run the following query to check if you have duplicate indexes: 

 SELECT s.INDEXED\_COL,GROUP\_CONCAT(INDEX\_NAME) FROM (  
SELECT INDEX\_NAME,GROUP\_CONCAT(CONCAT(TABLE\_NAME,'.',COLUMN\_NAME) ORDER BY CONCAT(SEQ\_IN\_INDEX,COLUMN\_NAME)) 'INDEXED\_COL' FROM INFORMATION\_SCHEMA.STATISTICS WHERE TABLE\_SCHEMA = 'db?'   
GROUP BY INDEX\_NAME  
)as s GROUP BY INDEXED\_COL HAVING COUNT(1)>1 The query returns the column names and the names of the duplicated indexes.

 Pro customers can also use the Percona Toolkit to check for duplicate indexes, by running the pt-duplicate-key checker command. For more information refer to [Percona Toolkit > pt-duplicate-key-checker](https://www.percona.com/doc/percona-toolkit/LATEST/pt-duplicate-key-checker.html%C2%A0) documentation. 

 ### Remove duplicate indexes

 Use the DROP INDEX statement to remove the duplicate indexes. See [DROP INDEX Statement](https://dev.mysql.com/doc/refman/8.0/en/drop-index.html) MySQL documentation for details.

 Related reading
---------------

 [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312)

  

  

  

