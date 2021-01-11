---
title: Changes in the database are not reflected on the store front
link: https://support.magento.com/hc/en-us/articles/360039418091-Changes-in-the-database-are-not-reflected-on-the-store-front
labels: Magento Commerce Cloud,Magento Commerce,change log tables,large tables,slow updates,indexer mode,2.3.x,2.2.x,how to
---

This article provides solutions to avoid delays or interruptions in entity updates being applied. This includes how to avoid change log tables from getting oversized and how to set up MySQL table triggers.

 Affected products and versions:

 
 * Magento Commerce Cloud 2.2.x, 2.3.x
 * Magento Commerce 2.2.x, 2.3.x
 
 Issue
-----

 Changes you make in the database are not reflected on the store front, or there is a significant delay in the application of entity updates. The entities that might be affected include products, categories, prices, inventory, catalog rules, sales rules and target rules.

 Cause
-----

 If your indexers are [configured to update by schedule](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers), the issue might be caused by one or more tables with change logs being too large or MySQL triggers being not set up.

 ### Oversized change log tables

 The change log tables grow that big if the indexer\_update\_all\_views cron job is not completed successfully multiple times.

 Change log tables are the database tables where the changes to entities are tracked. A record is stored in a change log table as long as the change is not applied, which is performed by the indexer\_update\_all\_views cron job. There are multiple change log tables in a Magento database, they are named according to the following pattern: INDEXER\_TABLE\_NAME + ‘\_cl’, for example catalog\_category\_product\_cl, catalog\_product\_category\_cl. You can find more details on how changes are tracked in database in the [Indexing overview > Mview](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview) article on Magento DevDocs. 

 ### MySQL database triggers not set up

 You would suspect database triggers not being set up, if after adding or changing an entity (product, category, target rule, and so on) - no records are added to the the corresponding change log table. 

 Solution
--------

 We strongly recommend creating a database backup before performing any manipulations, and avoiding them during high site load periods.

 ### Avoid change log tables being oversized

 Ensure that the indexer\_update\_all\_views cron job is always successfully completed. 

 You can use the following SQL query to get all failed instances of the indexer\_update\_all\_views cron job: 

  select * from cron\_schedule where job\_code = "indexer\_update\_all\_views" and status <> "success" and status <> "pending";  Or you can check its status in the logs by searching for the indexer\_update\_all\_views entries:

 
 *  <install\_directory>/var/log/cron.log - for versions 2.3.1+ and 2.2.8+
 *  <install\_directory>/var/log/system.log - for earlier versions
 
 ### Re-set MySQL table triggers

 To set up the missing MySQL table triggers, you need to re-set the indexer mode:

 1) switch to 'On Save'

 2) switch back to 'On Schedule'.

 Use the following command to perform this operation.

  php bin/magento indexer:set-mode {realtime|schedule} [indexerName] Related reading
---------------

 
 * [MySQL tables are too large](https://support.magento.com/hc/en-us/articles/360038862691)
 * [Indexer overview > Mview](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview)
 
