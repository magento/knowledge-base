---
title: Indexers "Update On Schedule" optimizes Magento performance
labels: .
---

This article provides a fix for low performance due to indexers being set on *Update on Save* mode, and how it is a best practice to set indexers to *Update on Schedule* mode to optimize performance in Magento.

### [None](#affected-products-and-versions) Affected products and versions

* Magento Commerce, versions 2.2.x and 2.3.x
* Magento Commerce Cloud, versions 2.2.x and 2.3.x

## [None](#issue) Issue

Magento has two types of indexer modes: *Update on Save* (default setting) and *Update on Schedule* .

In *Update on Save* mode, indexed data is updated as soon as a change is made in the Admin. An example of this is the category products index is re-indexed after products are added to a category in the Admin.

In *Update on Schedule* mode, the index is set to *Update on Schedule* according to a Cron job.

## [None](#cause) Cause

Having a large store with multiple admins working in the backend or having many imports/exports can cause the indexes to be triggered constantly. The *Update on Save* mode degrades MySQL performance, and for large stores, the process can take hours to complete.

To avoid this issue, set the indexers to *Update on Schedule* .

## [None](#solution) Solution

1. To view the current indexer configuration, run the following commands from CLI:     `bin/magento indexer:show-mode [indexer]`     Where `[indexer]` is a space-separated list of indexers.     `bin/magento indexer:show-mode [indexer]`     Omit `[indexer]` to show the mode of all indexers.    
1. To specify the indexer mode, run following command from CLI:     `bin/magento indexer:set-mode {realtime|schedule} [indexer]`     Where:    
    * `realtime` :  Sets the selected indexers to *Update on Save* .
    * `schedule` : Sets the specified indexers to save according to the Cron schedule. Use this setting to set *Update on Schedule* .
    * `indexer` : Is a space-separated list of indexers. Omit `[indexer]` to configure all indexers the same way.
## [None](#related-reading) Related reading

* [Magento\_Indexer Overview](https://devdocs.magento.com/guides/v2.3/mrg/ce/Indexer.html)
* [Manage the indexers - Configure indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers)
* [Indexer optimization](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html)
* [Indexing overview - Indexing modes](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-indexing-modes)
* [Configuration best practices - Indexers](https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers)
* [Slow performance due to full reindexing](https://support.magento.com/hc/en-us/articles/360039207872)

