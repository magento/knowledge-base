This article explains how invalidated cache might cause slow performance of a Magento Commerce store and provides recommendations on how to avoid cache invalidation.

AFFECTED PRODUCTS AND VERSIONS:

*   Magento Commerce 2.2.x, 2.3.x
*   Magento Commerce Cloud&nbsp;2.2.x, 2.3.x

## Issue

Slow site response.

## Cause

Long response time might be caused by the cache being invalidated (flushed).&nbsp;

Cache is used to generate fast responses to the site visitors' requests. If there is no appropriate cache data available, the Magento application fetches the data from the database, calculates and aggregates the data, and stores it to the cache storage. The cache generation process requires additional system resources causing total response time degradation.

&nbsp;There are two types of cache in Magento:

1.   Internal:
    
    *   stores data on the server
    *   stores specific data (configuration, product details, category details, etc.)
    
    
    
2.   External:
    
    *   CDN or Varnish;&nbsp;(in case of Magento Commerce Cloud - Fastly CDN)
    *   stores already generated full pages. For example, catalog/category, catalog/product pages, and so on.&nbsp;
    
    
    

### Check if you have invalidated cache

You can find information regarding the invalidated cache types in the `` &lt;install_directory&gt;/var/log/debug.log `` file.

To do this:

1.   Open `` &lt;install_directory&gt;/var/log/debug.log ``
2.   Search for "_cache\_invalidate_" message.&nbsp;
3.   Then check the tag specified. It indicates what cache was flushed. You might have issues because of the invalidated cache, if you see a tag with no particular entity id specified, for example:
    
    *   `` cat_p `` - stands for catalog product cache.
    *   `` cat_c `` - catalog category cache.
    *   `` FPC `` - full page cache
    *   `` CONFIG `` - configuration cache
    
    
    Having even one of them flushed would slow down the response of the website. If the tag contains an entity id, for example, `` category_product_1258 ``, this would indicate the cache for a particular product or category, and so on. Flushing cache for a particular product or category would not cause response time to drop significally.

Following is a sample of a `` debug.log ``, containing records about the `` cat_p `` and `` category_product_15044 `` cache having been flushed:

![sample of the debug.log content](https://support.magento.com/hc/article_attachments/360049391072/debug_log_sample.png)

Usually, cache becomes invalidated because of the following:&nbsp;

*   Full reindex.
*   Flashing cache from CLI, either manually or using cron.

## Recommendation

1.   Avoid flushing cache from Magento CLI.&nbsp;
2.   Configure indexers to __Update by schedule__ instead of __Update on save mode,__ because the latter triggers&nbsp;full reindexing. For reference, see <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers" target="_self">Manage the indexers &gt; Configure indexers</a> on Magento DevDocs.