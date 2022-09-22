---
title: Elasticsearch Index Status is ‘yellow’ or 'red'
labels: 2.2.x,2.3.x,Elasticsearch,Elasticsearch Index Status,Magento Commerce,Magento Commerce Cloud,how to,red,yellow,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

>![warning]
>
> [MySQL catalog search engine will be removed in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0). You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html).

The article provides a fix for when the Elasticsearch Index Status is not '*green*'. '*yellow*' indicates normal, and '*red*' indicates bad. The 'yellow' or 'red' status may occur in conjunction with missing products or the display of old product information.

## Affected versions and products

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x
* Adobe Commerce on-premise 2.2.x, 2.3.x

## Issue

The Elasticsearch catalog search index is slow, resulting in a status of '*yellow*' or '*red*' rather than ‘*green*'. You may also experience missing changes on the frontend.

## Cause

There can be several potential causes. One cause is the Elasticsearch instance running out of disk space. Another cause is duplicated indices.

## Solution

Create a fresh mysql dump before following these steps and perform them outside of business hours to avoid potentially affecting your clients:

1. Switch temporarily to MySQL search – enable MySQL search. (Note: Remember to switch back to Elasticsearch or you may experience performance issues).
1. To identify duplicated indexes run the following command:
    ```clike
    curl --silent -X GET localhost:9200/_cat/indices?v
    ```    
1. To delete indexes:
    ```clike
    curl -XDELETE localhost:9200/[your_index_name_here]
    ```    
1. Reenable Elasticsearch.
1. Run full re-index.
1. Check indexes status by running the following command:
    ```clike
    curl --silent -X GET localhost:9200/_cat/indices?v
    ```    

If these steps don't work, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

## Related reading

To learn more, refer to [Elasticsearch Cluster health API](https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-health.html).
