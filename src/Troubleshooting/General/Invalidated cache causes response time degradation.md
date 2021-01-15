---
title: Invalidated cache causes response time degradation
link: https://support.magento.com/hc/en-us/articles/360039658851-Invalidated-cache-causes-response-time-degradation
labels: Magento Commerce Cloud,Magento Commerce,cache,invalidated cache,slow response,response time,2.3.x,2.2.x,how to
---

This article provides a solution on how to avoid cache invalidation which might cause slow performance of a Magento Commerce store.

 AFFECTED PRODUCTS AND VERSIONS:

 
 * Magento Commerce 2.2.x, 2.3.x
 * Magento Commerce Cloud 2.2.x, 2.3.x
 
 Issue
-----

 Slow site response.

 Cause
-----

 Long response time might be caused by the cache being invalidated (flushed). 

 Cache is used to generate fast responses to the site visitors' requests. If there is no appropriate cache data available, the Magento application fetches the data from the database, calculates and aggregates the data, and stores it to the cache storage. The cache generation process requires additional system resources causing total response time degradation.

  There are two types of cache in Magento:

 
 2. Internal: 
	 * stores data on the server
	 * stores specific data (configuration, product details, category details, etc.) 
 4. External: 
	 * CDN or Varnish; (in case of Magento Commerce Cloud - Fastly CDN)
	 * stores already generated full pages. For example, catalog/category, catalog/product pages, and so on. 
 
 ### Check if you have invalidated cache

 You can find information regarding the invalidated cache types in the <install\_directory>/var/log/debug.log file.

 To do this:

 
 2. Open <install\_directory>/var/log/debug.log 
 4. Search for "*cache\_invalidate*" message. 
 6. Then check the tag specified. It indicates what cache was flushed. You might have issues because of the invalidated cache, if you see a tag with no particular entity id specified, for example: 
	 *  cat\_p - stands for catalog product cache.
	 *  cat\_c - catalog category cache.
	 *  FPC - full page cache
	 *  CONFIG - configuration cache Having even one of them flushed would slow down the response of the website. If the tag contains an entity id, for example, category\_product\_1258, this would indicate the cache for a particular product or category, and so on. Flushing cache for a particular product or category would not cause response time to drop significantly.
 
 Following is a sample of a debug.log, containing records about the cat\_p and category\_product\_15044 cache having been flushed:

 ![sample of the debug.log content](https://support.magento.com/hc/article_attachments/360049391072/debug_log_sample.png)

 Usually, cache becomes invalidated because of the following: 

 
 * Full reindex.
 * Flashing cache from CLI, either manually or using cron.
 
 Recommendation
--------------

 
 2. Avoid flushing cache from Magento CLI. 
 4. Configure indexers to **Update by schedule** instead of **Update on save mode,** because the latter triggers full reindexing. For reference, see [Manage the indexers > Configure indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers) on Magento DevDocs.
 
