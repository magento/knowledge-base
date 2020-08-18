This article discusses that it is a recommended best practice to replace the default MySQL search engine in&nbsp;Magento Commerce with Elasticsearch, because Elasticsearch is a better performing search engine than the MySQL search engine.

## Affected Products and Versions:

*   Magento Commerce 2.x.x

## Cause

The MySQL search engine has slower performance compared to using Elasticsearch.

## Issue

In large applications of Magento Commerce, the MySQL data cache stored in RAM can grow very large and be subjected to thousands or millions of requests per second.

MySQL does not have a strong memory-focused search engine. MySQL search has relatively high overhead and cannot deliver optimal speed. Because MySQL search is not designed for very high concurrency, users can be exposed to bottlenecks and periodic negative performance impacts that can result in slow user experiences.

## Solution

Configure and enable the Elasticsearch engine as described in <a href="https://devdocs.magento.com/guides/v2.2/config-guide/elasticsearch/configure-magento.html" target="_self">Configure Magento to use Elasticsearch</a>.

## Related reading

*   <a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html" rel="noopener" target="_blank">Set up Elasticsearch service</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html" rel="noopener" target="_blank">Install and configure Elasticsearch</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360025244171" rel="noopener" target="_blank">MySQL and ElasticSearch search engines show different results in the same conditions</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360034939312" rel="noopener" target="_blank">Ensure Elasticsearch is installed properly</a>
*   <a href="https://www.elastic.co/webinars/getting-started-elasticsearch" rel="noopener" target="_blank">Elasticsearch: Getting Started</a>