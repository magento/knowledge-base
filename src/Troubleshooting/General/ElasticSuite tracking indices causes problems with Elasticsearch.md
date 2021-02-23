---
title: ElasticSuite tracking indices causes problems with Elasticsearch
link: https://support.magento.com/hc/en-us/articles/360034921492-ElasticSuite-tracking-indices-causes-problems-with-Elasticsearch
labels: Elasticsearch problem,Elasticsuite tracking indices,how to,ElasticSuite 2.8.0,tracking indices
---

<p class="info">NOTE: ElasticSuite and its affiliated applications are third-party tools not currently supported by Magento. This content is being presented as informational only and not as an indication of what is enabled for Support coverage.</p>
<p>This article talks about the issue of Elasticsearch memory problems caused by tracking indices produced by the ElasticSuite plugin.</p>
<h2>AFFECTED PRODUCTS AND VERSIONS</h2>
<p>It is not confirmed what versions of ElasticSuite have this issue, but the 2.8.0 version contains a fix. </p>
<h2>Issue</h2>
<p>If the ElasticSuite third-party plugin is installed, you might experience Elasticsearch memory issues and the Elasticsearch service might crash caused by ElasticSuite tracking indices. Symptoms include:</p>
<ul>
<li>Elasticsearch crashes with no memory errors.</li>
<li>When running a health command <code>curl -m1 localhost:9200/_cluster/health?pretty </code>or <code>curl -m1 elasticsearch.internal:9200/_cluster/health?pretty </code> (for starter accounts) there are hundreds or thousands of <code>unassigned_shards</code>
</li>
<li>Elasticsearch or site performance is severely degraded.</li>
<li>
<em>"No alive nodes found in your cluster"</em> in Elasticsearch deploy or log errors.</li>
</ul>
<h2>Cause</h2>
<p>ElasticSuite has a new feature that creates tracking indices. These tracking indices record which search terms are the most used, which terms generate the most turnover and which terms are leading to a no results page so merchants can create synonyms to fix them. It does not appear to delete the tracking indices so Elasticsearch runs out of resources and crashes.</p>
<h2>Solution</h2>
<p>To upgrade to ElasticSuite 2.8.0 or to learn how to disable the Search Analytics Dashboard feature in the ElasticSuite plugin follow the steps in <a href="https://support.magento.com/hc/en-us/articles/360035266131">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a>.</p>
<p>However, if you can't upgrade to the 2.8.0 version or disable the Search Analytics Dashboard, you can create a cron job to delete the tracking indices.<br/> <br/> This command deletes indices created in the last month:</p>
<p><code>curl -XDELETE localhost:9200/&lt;name in index&gt;<em>_tracking_log</em>_$(date
    +'%Y%m' -d 'last month')*</code></p>
<p>If you want to delete indices at a set time-frequency create a cron job by referring to these DevDocs articles:</p>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cron/custom-cron-tut.html">Configure a customer cron job and cron group (tutorial)</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html">Set up cron jobs</a></li>
</ul>