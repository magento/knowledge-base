---
title: Database best practices for Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,performance,ece-tools,Pro,MySQL,database,triggers,best practices,Starter,lock
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
<p>This article explains how to improve performance of your Magento Commerce Cloud store by working efficiently with the database. The recommendations are relevant for both, Starter and Pro plan customers.</p>
<p>Click on the links below to see recommendations:</p>
<ul>
<li><a href="#convert">Convert all MyISAM tables to InnoDb</a></li>
<li><a href="#ElasticSearch"> Use ElasticSearch instead of MySQL native FULLTEXT indexes</a></li>
<li><a href="#Triggers"> Avoid triggers</a></li>
<li><a href="#ECE-Tools"> Upgrade ECE-Tools to version 2002.0.21 or higher </a></li>
<li><a href="#indexer"> Switch indexer mode safely </a></li>
<li><a href="#DDL_statements"> Avoid running DDL (Data Definition Language) statements </a></li>
</ul>
<h2>Convert all MyISAM tables to InnoDb</h2>
<p>Magento recommends using the InnoDb database engine, and in the out-of-the-box Magento installation all tables in the database are stored using the InnoDb engine. However, some third-party modules (extensions) can introduce tables in the MyISAM format. After you install a third-party module, you should check the database to identify any tables in MyISAM format and convert them to InnoDb.</p>
<h3>Determine if you have MyISAM tables</h3>
<p>You can analyze the third-party module code before installing it, to determine if it uses MyISAM tables.</p>
<p>If you have already installed an extension, run the following query to determine whether the database has any MyISAM tables: </p>
<p><code class="language-sql">
    SELECT table_schema, CONCAT(ROUND((index_length+data_length)/1024/1024),'MB')
    AS total_size FROM information_schema. TABLES WHERE engine='myisam' AND table_schema
    NOT IN ('mysql', 'information_schema', 'performance_schema', 'sys');
  </code></p>
<h3>Change the storage engine to InnoDb </h3>
<p>In the <code>db_schema.xml</code> file declaring the table, set the <code>engine</code> attribute value for the corresponding <code>table</code> node to <code>innodb</code>. For reference, see <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html#table-node">Configure declarative schema&gt;table node</a>.</p>
<p>The declarative scheme was introduced in Magento Commerce Cloud version 2.3</p>
<p>Related reading:</p>
<ul>
<li><a href="http://www.expertphp.in/article/what-are-the-main-differences-between-innodb-and-myisam">What are the main differences between INNODB and MYISAM</a></li>
</ul>
<h2>Use ElasticSearch instead of native MySQL search</h2>
<p>Magento recommends replacing the default MySQL search engine in Magento Commerce Cloud with Elasticsearch, because Elasticsearch is a better performing search engine than the MySQL search engine.</p>
<p>To determine which search engine is currently in use, run the following command:</p>
<p><code class="language-bash">./bin/magento config:show catalog/search/engine</code></p>
<p>To enable and configure the Elasticsearch engine, see the <a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html">Configure Magento to use Elasticsearch</a> instructions in Magento Developer documentation.</p>
<h2>Avoid custom triggers  </h2>
<p>Avoid using custom triggers if possible. </p>
<p>Triggers are used to log changes into audit tables. Magento recommends configuring the application to write directly to the audit tables instead of using the trigger functionality for these reasons: </p>
<ul>
<li>Triggers are interpreted as code and MySQL does not precompile them. Hooking onto your query’s transaction space, they add the overhead to a parser and interpreter for each query performed with the table.</li>
<li>The triggers share the same transaction space as the original queries, and while those queries compete for locks on the table, the triggers independently compete on locks on another table.</li>
</ul>
<p>To learn about alternatives to using custom triggers, refer to KB <a href="https://support.magento.com/hc/en-us/articles/360048050352">Best Practice triggers usage</a>.</p>
<h2>Upgrade ECE-Tools to version 2002.0.21 or higher </h2>
<p>To avoid potential issues with cron deadlocks, upgrade ECE-Tools to version 2002.0.21 or higher. For instructions, see <a href="https://devdocs.magento.com/cloud/project/ece-tools-update.html">Update ece-tools version</a> in the Magento Developer documentation.</p>
<h2>Switch indexer mode safely </h2>
<p>Switching indexers generates DDL statements to create triggers and can cause database locks. </p>
<p>Follow the process below to switch an indexer mode in a way that prevents creating locks:</p>
<ol>
<li>Enable maintenance mode. For instructions refer to <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html">Enable or disable maintenance mode</a> in Magento Developer Documentation.</li>
<li>Disable cron. For instructions refer to  <a href="https://devdocs.magento.com/cloud/configure/setup-cron-jobs.html#disable-cron-jobs">Set up cron jobs &gt; Disable cron jobs</a> in Magento Developer Documentation.</li>
<li>Switch indexer mode. For information refer to  <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html">Manage the indexers</a> in Magento Developer Documentation.</li>
<li>Enable cron.</li>
<li>Disable maintenance mode.</li>
</ol>
<h2>Avoid running DDL statements</h2>
<p>Avoid running DDL (Data Definition Language) statements on Production environments, to ensure you do not create conflicts (like table modifications, creations). The <code>setup:upgrade</code> process is an exception.</p>
<p>If you need to run a DDL statement, put the website to maintenance mode and disable cron (see the instructions for switching indexes safely in the previous section).</p>
<h2>Related reading</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360041739651">Most common database issues in Magento Commerce Cloud </a></p>
<p> </p>