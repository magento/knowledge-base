---
title: Elasticsearch Index Status is ‘yellow’ or 'red'
link: https://support.magento.com/hc/en-us/articles/360039837952-Elasticsearch-Index-Status-is-yellow-or-red-
labels: Magento Commerce Cloud,Magento Commerce,Elasticsearch,Elasticsearch Index Status,yellow,red,2.3.x,2.2.x,how to
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
<p>The article provides a fix for when the Elasticsearch Index Status is not '<em>green</em>'. '<em>yellow</em>' indicates normal, and '<em>red </em>' indicates bad. The 'yellow' or 'red' status may occur in conjunction with missing products or the display of old product information. </p>
<h2>Affected versions and products</h2>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>The Elasticsearch catalog search index is slow, resulting in a status of '<em>yellow</em>' or '<em>red</em>' rather than ‘<em>green</em>.' You may also experience missing changes on the frontend.</p>
<h2>Cause</h2>
<p>There can be several potential causes. One cause is the Elasticsearch instance running out of disk space. Another cause is duplicated indices.</p>
<h2>Solution</h2>
<p>Create a fresh mysql dump before following these steps and perform them outside of business hours to avoid potentially affecting your clients:</p>
<ol>
<li>Switch temporarily to MySQL search – enable MySQL search. (Note: Remember to switch back to Elasticsearch or you may experience performance issues).</li>
<li>To identify duplicated indexes run the following command:<br/> <code class="language-clike" style="white-space: pre;">curl --silent -X GET localhost:9200/_cat/indices?v</code>
</li>
<li>To delete indexes:<br/> <code class="language-clike" style="white-space: pre;">curl -XDELETE localhost:9200/[your_index_name_here]</code>
</li>
<li>Reenable Elasticsearch.</li>
<li>Run full re-index.</li>
<li>Check indexes status by running the following command:<br/> <code class="language-clike" style="white-space: pre;">curl --silent -X GET localhost:9200/_cat/indices?v </code>
</li>
</ol>
<p>If these steps don't work, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</p>
<h2>Related reading</h2>
<p>To learn more refer to <a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-health.html">Elasticsearch Cluster health API</a>.</p>