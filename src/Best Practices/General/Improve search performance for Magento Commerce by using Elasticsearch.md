---
title: Improve search performance for Magento Commerce by using Elasticsearch
link: https://support.magento.com/hc/en-us/articles/360039207432-Improve-search-performance-for-Magento-Commerce-by-using-Elasticsearch
labels: Magento Commerce,performance,search,MySQL,Elasticsearch,bottleneck,memory,best practices,2.x.x
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
<p>This article discusses that it is a recommended best practice to replace the default MySQL search engine in Magento Commerce with Elasticsearch, because Elasticsearch is a better performing search engine.</p>
<h2>Affected Products and Versions:</h2>
<ul>
<li>Magento Commerce 2.x.x</li>
</ul>
<h2>Cause</h2>
<p>The MySQL search engine has slower performance compared to using Elasticsearch.</p>
<h2>Issue</h2>
<p>In large applications of Magento Commerce, the MySQL data cache stored in RAM can grow very large and be subjected to thousands or millions of requests per second.</p>
<p>MySQL does not have a strong memory-focused search engine. MySQL search has relatively high overhead and cannot deliver optimal speed. Because MySQL search is not designed for very high concurrency, users can be exposed to bottlenecks and periodic negative performance impacts that can result in slow user experiences.</p>
<h2>Solution</h2>
<p>Configure and enable the Elasticsearch engine as described in <a href="https://devdocs.magento.com/guides/v2.2/config-guide/elasticsearch/configure-magento.html">Configure Magento to use Elasticsearch</a>.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html">Set up Elasticsearch service</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360025244171">MySQL and ElasticSearch search engines show different results in the same conditions</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360034939312">Ensure Elasticsearch is installed properly</a></li>
<li><a href="https://www.elastic.co/webinars/getting-started-elasticsearch">Elasticsearch: Getting Started</a></li>
</ul>