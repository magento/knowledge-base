---
title: Elasticsearch Index Status is ‘yellow’ or 'red'
link: https://support.magento.com/hc/en-us/articles/360039837952-Elasticsearch-Index-Status-is-yellow-or-red-
labels: Magento Commerce Cloud,Magento Commerce,Elasticsearch,Elasticsearch Index Status,yellow,red,2.3.x,2.2.x,how to
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.1. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>

The article provides a fix for when the Elasticsearch Index Status is not '_green_'. '_yellow_' indicates normal, and '_red _' indicates bad. The 'yellow' or 'red' status may occur in conjunction with missing products or the display of old product information. 

## Affected versions and products

* Magento Commerce Cloud 2.2.x, 2.3.x
* Magento Commerce 2.2.x, 2.3.x

## Issue

The Elasticsearch catalog search index is slow, resulting in a status of '_yellow_' or '_red_' rather than ‘_green_.' You may also experience missing changes on the frontend.

## Cause

There can be several potential causes. One cause is the Elasticsearch instance running out of disk space. Another cause is duplicated indices.

## Solution

Create a fresh mysql dump before following these steps and perform them outside of business hours to avoid potentially affecting your clients:

1. Switch temporarily to MySQL search – enable MySQL search. (Note: Remember to switch back to Elasticsearch or you may experience performance issues).
1. To identify duplicated indexes run the following command:  
     <code class="language-clike" style="white-space: pre;">curl --silent -X GET localhost:9200/\_cat/indices?v</code>
1. To delete indexes:  
     <code class="language-clike" style="white-space: pre;">curl -XDELETE localhost:9200/\[your\_index\_name\_here\]</code>
1. Reenable Elasticsearch.
1. Run full re-index.
1. Check indexes status by running the following command:  
     <code class="language-clike" style="white-space: pre;">curl --silent -X GET localhost:9200/\_cat/indices?v </code>

If these steps don't work, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

## Related reading

To learn more refer to [Elasticsearch Cluster health API](https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-health.html).