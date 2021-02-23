---
title: Most common database issues in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360041739651-Most-common-database-issues-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,performance,duplicate,logs,queries,MySQL,database,best practices,Percona Toolkit
---

<p>This article discusses the most common database issues causing performance degradation for Magento Commerce Cloud sites. </p>
<p>Click on each issue description to see the details:</p>
<ul>
<li><a href="#Long_running_queries">Long running queries.</a></li>
<li><a href="#Primary_keys_not_defined">Primary keys are not defined.</a></li>
<li><a href="#Duplicate_indexes">Duplicate indexes.</a></li>
</ul>
<h2>Long running queries</h2>
<p>Investigate if you have slow running MySQL queries. Depending on your Magento Cloud plan and therefore tools availability, you can do the following. </p>
<h3>Investigate long running queries using MySQL (available for all plans)</h3>
<ol>
<li>Run the <a href="https://dev.mysql.com/doc/refman/8.0/en/show-processlist.html">SHOW [FULL] PROCESSLIST</a> statement.</li>
<li>If you see long running queries, run <a href="https://mysqlserverteam.com/mysql-explain-analyze/">MySQL EXPLAIN and EXPLAIN ANALYZE</a> for each of them, to find out what makes the query run for a long time.</li>
<li>Take resolution steps depending on issues found.</li>
</ol>
<h3>Investigate long running queries using Percona Toolkit (for Pro plan only)</h3>
<ol>
<li>Run the <code>pt-query-digest --type=slowlog</code> against MySQL slow query logs. 
<ul>
<li>Refer to <a href="https://devdocs.magento.com/cloud/project/log-locations.html#service-logs">Log locations &gt; Service Logs</a> in Magento Developer Documentation for information on where the slow query logs are stored in Magento Commerce Cloud. </li>
<li>Refer to <a href="https://www.percona.com/doc/percona-toolkit/LATEST/pt-query-digest.html#pt-query-digest">Percona Toolkit &gt; pt-query-digest</a> documentation. </li>
</ul>
</li>
<li>Take resolution steps depending on issues found.</li>
</ol>
<h2>Primary keys are not defined</h2>
<p>Defining primary keys (PK) is a requirement for a good database and table design. They provide a way to uniquely identify a single row in any table. When using InnoDB engine, which is the default in Magento, in tables where no PK is defined the first unique not null key is the primary key. If none is available, InnoDB creates a hidden primary key (6 bytes). The problem with such a key is that you do not have control over it and this value is global for all tables without primary keys. This might cause contention problems if you perform simultaneous writes on these tables. This might lead to performance issues, as they will all share that global hidden PK index increment. </p>
<p>Take the following steps to identify missing primary keys and add them:</p>
<ol>
<li>To identify the tables that do not have PK, run the following query:
<pre><code class="language-sql">SELECT table_catalog, table_schema, table_name, engine
    FROM information_schema.tables
    WHERE (table_catalog, table_schema, table_name) NOT IN
    (SELECT table_catalog, table_schema, table_name
    FROM information_schema.table_constraints
    WHERE constraint_type = 'PRIMARY KEY')
    AND table_schema NOT IN ('information_schema', 'pg_catalog');
</code></pre>
</li>
<li>To add a PK to a table, update the <code>db_schema.xml</code> (the declarative schema) of the table, by adding a node similar to the following:
<pre><code class="language-html">&lt;constraint xsi:type="primary" referenceId="PRIMARY"&gt; 
    &lt;column name="id_column"/&gt; 
&lt;/constraint&gt;
</code></pre>
<p>Where <code>referenceID</code> and <code>column name</code> must have your custom values. </p>
<p>For more information about using declarative schema in Magento Commerce Cloud refer to <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html">Configure declarative schema</a> in Magento Developer Documentation.</p>
</li>
</ol>
<h2>Duplicate indexes </h2>
<h3>Check if there are duplicate indexes in your DB</h3>
<p>For both Starter and Pro plans, you can run the following query to check if you have duplicate indexes: </p>
<pre><code class="language-sql">SELECT s.INDEXED_COL,GROUP_CONCAT(INDEX_NAME) FROM (<br/>SELECT INDEX_NAME,GROUP_CONCAT(CONCAT(TABLE_NAME,'.',COLUMN_NAME) ORDER BY CONCAT(SEQ_IN_INDEX,COLUMN_NAME)) 'INDEXED_COL' FROM INFORMATION_SCHEMA.STATISTICS WHERE TABLE_SCHEMA = 'db?' <br/>GROUP BY INDEX_NAME<br/>)as s GROUP BY INDEXED_COL HAVING COUNT(1)&gt;1</code></pre>
<p>The query returns the column names and the names of the duplicated indexes.</p>
<p>Pro customers can also use the Percona Toolkit to check for duplicate indexes, by running the <code>pt-duplicate-key checker</code> command. For more information refer to <a href="https://www.percona.com/doc/percona-toolkit/LATEST/pt-duplicate-key-checker.html%C2%A0">Percona Toolkit &gt; pt-duplicate-key-checker</a> documentation. </p>
<h3>Remove duplicate indexes</h3>
<p>Use the <code class="language-SQL">DROP INDEX</code> statement to remove the duplicate indexes. See <a href="https://dev.mysql.com/doc/refman/8.0/en/drop-index.html">DROP INDEX Statement</a> MySQL documentation for details.</p>
<h2>Related reading</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360041997312">Database best practices for Magento Commerce Cloud</a></p>
<p> </p>
<p> </p>
<p> </p>