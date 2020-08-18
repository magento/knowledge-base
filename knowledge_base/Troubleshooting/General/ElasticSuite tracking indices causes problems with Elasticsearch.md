<p class="info">NOTE: ElasticSuite and its affiliated applications are third-party tools not currently supported by Magento. This content is being presented as informational only and not as an indication of what is enabled for Support coverage.</p>

This article talks about the issue of Elasticsearch memory problems caused by tracking indices produced by the ElasticSuite plugin.

## AFFECTED PRODUCTS AND VERSIONS

It is not confirmed what versions of ElasticSuite have this issue, but the 2.8.0 version contains a fix.&nbsp;

## Issue

If the ElasticSuite third-party plugin is installed, you might experience Elasticsearch memory issues and the Elasticsearch service might crash caused by ElasticSuite tracking indices. Symptoms include:

*   Elasticsearch crashes with no memory errors.
*   When running a health command&nbsp;`` curl -m1 localhost:9200/_cluster/health?pretty&nbsp; ``or `` curl -m1 elasticsearch.internal:9200/_cluster/health?pretty  `` (for starter accounts) there are hundreds or thousands of `` unassigned_shards ``
*   Elasticsearch or site performance is severely degraded.
*   _"No alive nodes found in your cluster"_ in Elasticsearch deploy or log errors.

## Cause

ElasticSuite has a new feature that creates tracking indices. These tracking indices record which search terms are the most used, which terms generate the most turnover and which terms are leading to a no results page so merchants can create synonyms to fix them.&nbsp;It does not appear to delete the tracking indices so Elasticsearch runs out of resources and crashes.

## Solution

To upgrade to ElasticSuite 2.8.0 or to learn how to disable the Search Analytics Dashboard feature in the ElasticSuite plugin follow the steps in <a href="https://support.magento.com/hc/en-us/articles/360035266131" rel="noopener" target="_blank">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a>.

However, if you can't upgrade to the 2.8.0 version or disable the Search Analytics Dashboard, you can create a cron job to delete the tracking indices.  
   
 This command deletes indices created in the last month:

<code>curl -XDELETE localhost:9200/&lt;name in index&gt;<em><strong>_tracking_log</strong></em>_$(date
    +'%Y%m' -d 'last month')*</code>

If you want to delete indices at a set time-frequency create a cron job by referring&nbsp;to these DevDocs articles:

*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cron/custom-cron-tut.html" rel="noopener" target="_blank">Configure a customer cron job and cron group (tutorial)</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html" rel="noopener" target="_blank">Set up cron jobs</a>