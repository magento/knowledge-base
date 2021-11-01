---
title: Invalidated cache causes response time degradation
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,cache,how to,invalidated cache,response time,slow response,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a solution on how to avoid cache invalidation, which might cause the slow performance of an Adobe Commerce store.

AFFECTED PRODUCTS AND VERSIONS:

* Adobe Commerce on-premises 2.2.x, 2.3.x
* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x

## Issue

Slow site response.

## Cause

Long response time might be caused by the cache being invalidated (flushed).

The cache is used to generate fast responses to the site visitors' requests. If there is no appropriate cache data available, the Adobe Commerce application fetches the data from the database, calculates and aggregates the data, and stores it to the cache storage. The cache generation process requires additional system resources causing total response-time degradation.

There are two types of cache in Adobe Commerce:

1. Internal:
    * stores data on the server
    * stores specific data (configuration, product details, category details, etc.)
1. External:
    * CDN or Varnish (in case of Adobe Commerce on cloud infrastructure - Fastly CDN)
    * stores already generated full pages. For example, catalog/category, catalog/product pages, and so on.

### Check if you have invalidated cache

You can find information regarding the invalidated cache types in the `<install_directory>/var/log/debug.log` file.

To do this:

1. Open `<install_directory>/var/log/debug.log`
1. Search for " *cache\_invalidate* " message.
1. Then check the tag specified. It indicates what cache was flushed. You might have issues because of the invalidated cache if you see a tag with no particular entity id specified, for example:
    * `cat_p` - stands for catalog product cache.
    * `cat_c` - catalog category cache.
    * `FPC` - full page cache.
    * `CONFIG` - configuration cache.

    Having even one of them flushed would slow down the response of the website. If the tag contains an entity id, for example, `category_product_1258`, this would indicate the cache for a particular product or category, and so on. Flushing cache for a particular product or category would not cause response time to drop significantly.

Following is a sample of a `debug.log` containing records about the `cat_p` and `category_product_15044` cache having been flushed:

![sample of the debug.log content](assets/debug_log_sample.png)

Usually, the cache becomes invalidated because of the following:

* Full reindex.
* Flashing cache from CLI, either manually or using cron.

## Recommendation

1. Avoid flushing cache from the Commerce CLI.
1. Configure indexers to **Update by schedule** instead of **Update on save mode** because the latter triggers full reindexing. For reference, see [Manage the indexers > Configure indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers) in our developer documentation.
