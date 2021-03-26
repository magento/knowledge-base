---
title: Database best practices for Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,performance,ece-tools,Pro,MySQL,database,triggers,best practices,Starter,lock
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.1. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>

This article explains how to improve performance of your Magento Commerce Cloud store by working efficiently with the database. The recommendations are relevant for both, Starter and Pro plan customers.

Click on the links below to see recommendations:

* [Convert all MyISAM tables to InnoDb](#convert)
* [ Use ElasticSearch instead of MySQL native FULLTEXT indexes](#ElasticSearch)
* [ Avoid triggers](#Triggers)
* [ Upgrade ECE-Tools to version 2002.0.21 or higher ](#ECE-Tools)
* [ Switch indexer mode safely ](#indexer)
* [ Avoid running DDL (Data Definition Language) statements ](#DDL_statements)

## Convert all MyISAM tables to InnoDb

Magento recommends using the InnoDb database engine, and in the out-of-the-box Magento installation all tables in the database are stored using the InnoDb engine. However, some third-party modules (extensions) can introduce tables in the MyISAM format. After you install a third-party module, you should check the database to identify any tables in MyISAM format and convert them to InnoDb.

### Determine if you have MyISAM tables

You can analyze the third-party module code before installing it, to determine if it uses MyISAM tables.

If you have already installed an extension, run the following query to determine whether the database has any MyISAM tables: 

<code class="language-sql">
    SELECT table\_schema, CONCAT(ROUND((index\_length+data\_length)/1024/1024),'MB')
    AS total\_size FROM information\_schema. TABLES WHERE engine='myisam' AND table\_schema
    NOT IN ('mysql', 'information\_schema', 'performance\_schema', 'sys');
  </code>

### Change the storage engine to InnoDb 

In the `` db_schema.xml `` file declaring the table, set the `` engine `` attribute value for the corresponding `` table `` node to `` innodb ``. For reference, see [Configure declarative schema>table node](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html#table-node).

The declarative scheme was introduced in Magento Commerce Cloud version 2.3

Related reading:

* [What are the main differences between INNODB and MYISAM](http://www.expertphp.in/article/what-are-the-main-differences-between-innodb-and-myisam)

## Use ElasticSearch instead of native MySQL search

Magento recommends replacing the default [MySQL search engine](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-Magento-2-4-0) in Magento Commerce Cloud with Elasticsearch, because Elasticsearch is a better performing search engine than the MySQL search engine.

To determine which search engine is currently in use, run the following command:

<code class="language-bash">./bin/magento config:show catalog/search/engine</code>

To enable and configure the Elasticsearch engine, see the [Configure Magento to use Elasticsearch](https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html) instructions in Magento Developer documentation.

## Avoid custom triggers  

Avoid using custom triggers if possible. 

Triggers are used to log changes into audit tables. Magento recommends configuring the application to write directly to the audit tables instead of using the trigger functionality for these reasons: 

* Triggers are interpreted as code and MySQL does not precompile them. Hooking onto your query’s transaction space, they add the overhead to a parser and interpreter for each query performed with the table.
* The triggers share the same transaction space as the original queries, and while those queries compete for locks on the table, the triggers independently compete on locks on another table.

To learn about alternatives to using custom triggers, refer to KB [Best Practice triggers usage](https://support.magento.com/hc/en-us/articles/360048050352).

## Upgrade ECE-Tools to version 2002.0.21 or higher 

To avoid potential issues with cron deadlocks, upgrade ECE-Tools to version 2002.0.21 or higher. For instructions, see [Update ece-tools version](https://devdocs.magento.com/cloud/project/ece-tools-update.html) in the Magento Developer documentation.

## Switch indexer mode safely 

Switching indexers generates DDL statements to create triggers and can cause database locks. 

Follow the process below to switch an indexer mode in a way that prevents creating locks:

1. Enable maintenance mode. For instructions refer to [Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html) in Magento Developer Documentation.
1. Disable cron. For instructions refer to  [Set up cron jobs > Disable cron jobs](https://devdocs.magento.com/cloud/configure/setup-cron-jobs.html#disable-cron-jobs) in Magento Developer Documentation.
1. Switch indexer mode. For information refer to  [Manage the indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html) in Magento Developer Documentation.
1. Enable cron.
1. Disable maintenance mode.

## Avoid running DDL statements

Avoid running DDL (Data Definition Language) statements on Production environments, to ensure you do not create conflicts (like table modifications, creations). The `` setup:upgrade `` process is an exception.

If you need to run a DDL statement, put the website to maintenance mode and disable cron (see the instructions for switching indexes safely in the previous section).

## Related reading

[Most common database issues in Magento Commerce Cloud ](https://support.magento.com/hc/en-us/articles/360041739651)

 