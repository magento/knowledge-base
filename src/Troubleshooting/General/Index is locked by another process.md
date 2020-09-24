This article talks about a common indexing issue in Magento where the index is locked by another process and skipped.

### Affected products and versions

*   Magento Commerce 2.X
*   Magento Open Source 2.X

## Issue

During a full reindex in your CLI, Magento gives you the error message: _'Index is locked by another reindex process. Skipping.'_ In other words, when the process or the index type is locked then you cannot reindex that particular locked index type. The reindex will always skip that index type.

## Cause

This error could occur if the previous index was not completed successfully. A few possible reasons are:

*   The process was interrupted by another process or user.
*   Memory limit.
*   MySQL error, like a timeout.
*   Fatal PHP error during the reindex.

## Steps To Reproduce

1.   For example, say that the&nbsp;<code class="language-bash">cataloginventory\_stock</code>&nbsp;index type is locked.
2.   When you try to reindex all data by running the CLI command&nbsp;<code class="language-bash">php bin/magento indexer:reindex</code>, you will get the following output result:
    
    <pre><code class="language-bash">
customer_grid index has been rebuilt successfully in 00:00:09
catalog_category_product index has been rebuilt successfully in 00:00:07
catalog_product_category index has been rebuilt successfully in 00:00:00
catalogrule_rule index has been rebuilt successfully in 00:00:05
catalog_product_attribute index has been rebuilt successfully in 00:00:04
cataloginventory_stock index is locked by another reindex process. Skipping.
catalog_product_price index has been rebuilt successfully in 00:00:01
catalogrule_product has been rebuilt successfully in 00:00:00
catalogsearch_fulltext index has been rebuilt successfully in 00:00:01
    </code></pre>
    
    
3.   As you can see above, the&nbsp;<code class="language-bash">cataloginventory\_stock</code> index process has been skipped.

&nbsp;

## Solution

You need to reset index status, and then try to run the new reindex process. For the reset index status, you need to run the command:

<pre><code class="language-bash">bin/magento indexer:reset &lt;index identifier&gt;</code></pre>

If you are unsure what the index identifiers (code) are, you can list them using the command:

<pre><code class="language-bash">bin/magento indexer:info</code></pre>

For completeness, here are all possible combinations for native indexes:

<pre><code class="language-bash">bin/magento indexer:reset design_config_grid;
bin/magento indexer:reset customer_grid;
bin/magento indexer:reset catalog_category_product;
bin/magento indexer:reset catalog_product_category;
bin/magento indexer:reset catalogrule_rule;
bin/magento indexer:reset catalog_product_attribute;
bin/magento indexer:reset cataloginventory_stock;
bin/magento indexer:reset catalog_product_price;
bin/magento indexer:reset catalogrule_product;
bin/magento indexer:reset catalogsearch_fulltext;</code></pre>

&nbsp;

## Related reading

*   <a href="https://support.magento.com/hc/en-us/articles/360029219812" target="_self"><span style="font-size: 15px;">Cron tasks lock tasks from other groups (Magento Commerce Cloud)</span></a>
*   <a href="https://docs.magento.com/m1/ce/user_guide/system-operations/index-manual.html" target="_self"><span style="font-size: 15px;">Manual Reindexing</span></a>
*   [Index Management](https://docs.magento.com/m1/ce/user_guide/system-operations/index-management.html)
*   <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html" target="_self"><span style="font-size: 15px;">Indexing Overview</span></a>
*   [Indexers Best Practices](https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers)
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html" target="_self"><span style="font-size: 15px;">Configure And Run Cron</span></a>
*   [Manage The Indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html)
*   <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html" target="_self"><span style="font-size: 15px;">Indexer Optimization</span></a>