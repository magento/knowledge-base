---
title: Invalidated cache causes response time degradation
link: https://support.magento.com/hc/en-us/articles/360039658851-Invalidated-cache-causes-response-time-degradation
labels: Magento Commerce Cloud,Magento Commerce,cache,invalidated cache,slow response,response time,2.3.x,2.2.x,how to
---

<p>This article provides a solution on how to avoid cache invalidation which might cause slow performance of a Magento Commerce store.</p>
<p>AFFECTED PRODUCTS AND VERSIONS:</p>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Slow site response.</p>
<h2>Cause</h2>
<p>Long response time might be caused by the cache being invalidated (flushed). </p>
<p>Cache is used to generate fast responses to the site visitors' requests. If there is no appropriate cache data available, the Magento application fetches the data from the database, calculates and aggregates the data, and stores it to the cache storage. The cache generation process requires additional system resources causing total response time degradation.</p>
<p> There are two types of cache in Magento:</p>
<ol>
<li>Internal:
<ul>
<li>stores data on the server</li>
<li>stores specific data (configuration, product details, category details, etc.)</li>
</ul>
</li>
<li>External:
<ul>
<li>CDN or Varnish; (in case of Magento Commerce Cloud - Fastly CDN)</li>
<li>stores already generated full pages. For example, catalog/category, catalog/product pages, and so on. </li>
</ul>
</li>
</ol>
<h3>Check if you have invalidated cache</h3>
<p>You can find information regarding the invalidated cache types in the <code>&lt;install_directory&gt;/var/log/debug.log</code> file.</p>
<p>To do this:</p>
<ol>
<li>Open <code>&lt;install_directory&gt;/var/log/debug.log</code>
</li>
<li>Search for "<em>cache_invalidate</em>" message. </li>
<li>Then check the tag specified. It indicates what cache was flushed. You might have issues because of the invalidated cache, if you see a tag with no particular entity id specified, for example:
<ul>
<li>
<code>cat_p</code> - stands for catalog product cache.</li>
<li>
<code>cat_c</code> - catalog category cache.</li>
<li>
<code>FPC</code> - full page cache</li>
<li>
<code>CONFIG</code> - configuration cache</li>
</ul>
Having even one of them flushed would slow down the response of the website. If the tag contains an entity id, for example, <code>category_product_1258</code>, this would indicate the cache for a particular product or category, and so on. Flushing cache for a particular product or category would not cause response time to drop significantly.</li>
</ol>
<p>Following is a sample of a <code>debug.log</code>, containing records about the <code>cat_p</code> and <code>category_product_15044</code> cache having been flushed:</p>
<p><img alt="sample of the debug.log content" src="https://support.magento.com/hc/article_attachments/360049391072/debug_log_sample.png"/></p>
<p>Usually, cache becomes invalidated because of the following: </p>
<ul>
<li>Full reindex.</li>
<li>Flashing cache from CLI, either manually or using cron.</li>
</ul>
<h2>Recommendation</h2>
<ol>
<li>Avoid flushing cache from Magento CLI. </li>
<li>Configure indexers to Update by schedule instead of Update on save mode, because the latter triggers full reindexing. For reference, see <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers">Manage the indexers &gt; Configure indexers</a> on Magento DevDocs.</li>
</ol>