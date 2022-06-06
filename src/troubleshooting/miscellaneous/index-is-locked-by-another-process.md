---
title: Index is locked by another process
labels: 2.x.x,Magento Commerce,index,troubleshooting,Adobe Commerce
---

This article talks about a common indexing issue in Adobe Commerce where the index is locked by another process and skipped.

## Affected products and versions

* Adobe Commerce 2.X

## Issue

During a full reindex in your CLI, Adobe Commerce gives you the error message: *'Index is locked by another reindex process. Skipping.'* In other words, when the process or the index type is locked, then you cannot reindex that particular locked index type. The reindex will always skip that index type.

## Cause

This error could occur if the previous index was not completed successfully. A few possible reasons are:

* The process was interrupted by another process or user.
* Memory limit.
* MySQL error, like a timeout.
* Fatal PHP error during the reindex.

## Steps to Reproduce

1. For example, say that the    ```bash    cataloginventory_stock ```    index type is locked.
1. When you try to reindex all data by running the CLI command    ```bash    php bin/magento indexer:reindex    ```, you will get the following output result:    ```bash    customer_grid index has been rebuilt successfully in 00:00:09    catalog_category_product index has been rebuilt successfully in 00:00:07    catalog_product_category index has been rebuilt successfully in 00:00:00    catalogrule_rule index has been rebuilt successfully in 00:00:05    catalog_product_attribute index has been rebuilt successfully in 00:00:04    cataloginventory_stock index is locked by another reindex process. Skipping.    catalog_product_price index has been rebuilt successfully in 00:00:01    catalogrule_product has been rebuilt successfully in 00:00:00    catalogsearch_fulltext index has been rebuilt successfully in 00:00:01    ```    
1. As you can see above, the    ```bash    cataloginventory_stock```    index process has been skipped.


## Solution

You need to reset index status, and then try to run the new reindex process. For the reset index status, you need to run the command:

```bash
bin/magento indexer:reset <index identifier>
```

If you are unsure what the index identifiers (code) are, you can list them using the command:

```bash
bin/magento indexer:info
```

For completeness, here are all possible combinations for native indexes:

```bash
bin/magento indexer:reset design_config_grid;
bin/magento indexer:reset customer_grid;
bin/magento indexer:reset catalog_category_product;
bin/magento indexer:reset catalog_product_category;
bin/magento indexer:reset catalogrule_rule;
bin/magento indexer:reset catalog_product_attribute;
bin/magento indexer:reset cataloginventory_stock;
bin/magento indexer:reset catalog_product_price;
bin/magento indexer:reset catalogrule_product;
bin/magento indexer:reset catalogsearch_fulltext;
```


## Related reading

In our support knowledge base:

* [Cron tasks lock tasks from other groups (Adobe Commerce on cloud infrastructure)](https://support.magento.com/hc/en-us/articles/360029219812)

In our user guide:

* [Index Management](https://docs.magento.com/user-guide/system/index-management.html?itm_source=merchdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=reindexing)

In our developer documentation:

* [Indexing Overview](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html)
* [Indexers Best Practices](https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers)
* [Configure And Run Cron](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html)
* [Manage The Indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html)
* [Indexer Optimization](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html)
