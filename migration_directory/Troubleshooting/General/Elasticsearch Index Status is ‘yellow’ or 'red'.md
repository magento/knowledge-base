The article provides a fix for when the&nbsp;Elasticsearch Index Status is not '_green_'.&nbsp;'_yellow_' indicates normal, and '_red&nbsp;_' indicates bad. The 'yellow' or 'red' status may occur in conjunction with missing products or the display of old product information.&nbsp;

## Affected versions and products

*   Magento Commerce Cloud 2.2.x, 2.3.x
*   Magento Commerce&nbsp;2.2.x, 2.3.x

## Issue

The Elasticsearch catalog search index is slow, resulting in a status of '_yellow_' or '_red_' rather than ‘_green_.' You may also experience missing changes on the frontend.

## Cause

There can be several potential causes. One cause is the Elasticsearch instance running&nbsp;out of disk space. Another&nbsp;cause is duplicated indices.

## Solution

Create a fresh mysql dump before following these steps and perform them outside of business hours to avoid potentially affecting your clients:

1.   Switch to MySQL search – enable MySQL search.
2.   To identify duplicated indexes run the following command:  
     <code class="language-clike" style="white-space: pre;">curl --silent -X GET localhost:9200/\_cat/indices?v</code>
3.   To delete indexes:  
     <code class="language-clike" style="white-space: pre;">curl -XDELETE localhost:9200/\[your\_index\_name\_here\]</code>
4.   Reenable Elasticsearch.
5.   Run full re-index.
6.   Check&nbsp;indexes status by running the following command:  
     <code class="language-clike" style="white-space: pre;">curl --silent -X GET localhost:9200/\_cat/indices?v </code>

If these steps don't work,&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a>.

## Related reading

To learn more refer to <a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-health.html" rel="noopener" target="_blank">Elasticsearch Cluster health API</a>.