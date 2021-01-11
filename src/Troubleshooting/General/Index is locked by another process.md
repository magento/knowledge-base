---
title: Index is locked by another process
link: https://support.magento.com/hc/en-us/articles/360030683752-Index-is-locked-by-another-process
labels: Magento Commerce,troubleshooting,index,2.x.x
---

This article talks about a common indexing issue in Magento where the index is locked by another process and skipped.

 ### Affected products and versions

 
 * Magento Commerce 2.X
 
 Issue
-----

 During a full reindex in your CLI, Magento gives you the error message: *'Index is locked by another reindex process. Skipping.'* In other words, when the process or the index type is locked then you cannot reindex that particular locked index type. The reindex will always skip that index type.

 Cause
-----

 This error could occur if the previous index was not completed successfully. A few possible reasons are:

 
 * The process was interrupted by another process or user.
 * Memory limit.
 * MySQL error, like a timeout.
 * Fatal PHP error during the reindex.
 
 Steps To Reproduce
------------------

 
 2. For example, say that the cataloginventory\_stock index type is locked.
 4. When you try to reindex all data by running the CLI command php bin/magento indexer:reindex, you will get the following output result:  customer\_grid index has been rebuilt successfully in 00:00:09 catalog\_category\_product index has been rebuilt successfully in 00:00:07 catalog\_product\_category index has been rebuilt successfully in 00:00:00 catalogrule\_rule index has been rebuilt successfully in 00:00:05 catalog\_product\_attribute index has been rebuilt successfully in 00:00:04 cataloginventory\_stock index is locked by another reindex process. Skipping. catalog\_product\_price index has been rebuilt successfully in 00:00:01 catalogrule\_product has been rebuilt successfully in 00:00:00 catalogsearch\_fulltext index has been rebuilt successfully in 00:00:01  
 6. As you can see above, the cataloginventory\_stock index process has been skipped.
 
  

 Solution
--------

 You need to reset index status, and then try to run the new reindex process. For the reset index status, you need to run the command:

 bin/magento indexer:reset <index identifier> If you are unsure what the index identifiers (code) are, you can list them using the command:

 bin/magento indexer:info For completeness, here are all possible combinations for native indexes:

 bin/magento indexer:reset design\_config\_grid; bin/magento indexer:reset customer\_grid; bin/magento indexer:reset catalog\_category\_product; bin/magento indexer:reset catalog\_product\_category; bin/magento indexer:reset catalogrule\_rule; bin/magento indexer:reset catalog\_product\_attribute; bin/magento indexer:reset cataloginventory\_stock; bin/magento indexer:reset catalog\_product\_price; bin/magento indexer:reset catalogrule\_product; bin/magento indexer:reset catalogsearch\_fulltext;  

 Related reading
---------------

 
 

 * [Cron tasks lock tasks from other groups (Magento Commerce Cloud)](https://support.magento.com/hc/en-us/articles/360029219812)
 * [Manual Reindexing](https://docs.magento.com/m1/ce/user_guide/system-operations/index-manual.html)
 * [Index Management](https://docs.magento.com/m1/ce/user_guide/system-operations/index-management.html)
 * [Indexing Overview](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html)
 * [Indexers Best Practices](https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers)
 * [Configure And Run Cron](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html)
 * [Manage The Indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html)
 * [Indexer Optimization](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html)
 
 