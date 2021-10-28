---
title: Improve Adobe Commerce search performance with Elasticsearch
labels: 2.x.x,Elasticsearch,Magento Commerce,MySQL,best practices,bottleneck,memory,performance,search,Adobe Commerce
---

>![warning]
>
>[MySQL catalog search engine will be removed in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0). You must have the Elasticsearch host set up and configured prior to installing version 2.4.1. Refer to [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html).

This article discusses that it is a recommended best practice to replace the default [MySQL search engine](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0) in Adobe Commerce with Elasticsearch because Elasticsearch is a better-performing search engine.

## Affected Products and Versions:

* Adobe Commerce 2.x.x

## Cause

The MySQL search engine has a slower performance compared to using Elasticsearch.

## Issue

In large applications of Adobe Commerce, the MySQL data cache stored in RAM can grow very large and be subjected to thousands or millions of requests per second.

MySQL does not have a strong memory-focused search engine. MySQL search has a relatively high overhead and cannot deliver optimal speed. Because MySQL search is not designed for very high concurrency, users can be exposed to bottlenecks and periodic negative performance impacts that can result in slow user experiences.

## Solution

Configure and enable the Elasticsearch engine as described in [Configure Adobe Commerce to use Elasticsearch](https://devdocs.magento.com/guides/v2.2/config-guide/elasticsearch/configure-magento.html).

## Related reading

* [Set up Elasticsearch service](https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html) in our developer documentation.
* [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html) in our developer documentation.
* [MySQL and ElasticSearch search engines show different results in the same conditions](https://support.magento.com/hc/en-us/articles/360025244171) in our support knowledge base.
* [Ensure Elasticsearch is installed properly](https://support.magento.com/hc/en-us/articles/360034939312) in our support knowledge base.
* [Elasticsearch: Getting Started](https://www.elastic.co/webinars/getting-started-elasticsearch) in .elastic.co.
