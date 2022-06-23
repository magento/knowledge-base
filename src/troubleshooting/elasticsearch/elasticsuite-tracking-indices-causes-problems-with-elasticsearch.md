---
title: ElasticSuite tracking indices causes problems with Elasticsearch
labels: ElasticSuite 2.8.0,Elasticsearch problem,ElasticSuite tracking indices,how to,tracking indices,Adobe Commerce
---

>![info]
>
>NOTE: ElasticSuite and its affiliated applications are third-party tools not currently supported by Adobe. This content is being presented as informational only and not as an indication of what is enabled for Support coverage.

This article talks about the issue of Elasticsearch memory problems caused by tracking indices produced by the ElasticSuite plugin.

## Affected products and versions

ElasticSuite versions prior to 2.8.0 are not able to periodically clean up tracking indices.

ElasticSuite versions prior to 2.9.8 / 2.10.7 are storing tracking indices in daily indices, which causes the number of open indices to grow.

## Issue

If the ElasticSuite third-party plugin is installed, you might experience Elasticsearch memory issues, and the Elasticsearch service might crash caused by ElasticSuite tracking indices. Symptoms include:

* Elasticsearch crashes with no memory errors.
* When running a health command `curl -m1 localhost:9200/_cluster/health?pretty` or `curl -m1 elasticsearch.internal:9200/_cluster/health?pretty` (for starter accounts) there are hundreds or thousands of `unassigned_shards`
* Elasticsearch or site performance is severely degraded.
* *"No alive nodes found in your cluster"* in Elasticsearch deploy or log errors.
* *"Rejecting mapping update to [<\*>_tracking_log_event_<\*>]"* in deploy or log errors.

## Cause

ElasticSuite has a new feature that creates tracking indices. These tracking indices record which search terms are the most used, which terms generate the most turnover, and which terms are leading to a no results page so merchants can create synonyms to fix them. It does not appear to delete the tracking indices, so Elasticsearch runs out of resources and crashes.

## Solution

### Upgrade your ElasticSuite version to be able to cleanup tracking indices periodically

Once you have upgraded the ElasticSuite plugin to version higher than 2.8.0, you can configure a periodical cleaning of indices. 

Go to **Stores** > **Configuration** > **Tracking** > **Global Configuration** > **Retention Delay**

The default retention period is 365 days. You can reduce it to 30 or 15 days.

### Upgrade your ElasticSuite version to use monthly based indices instead of daily based indices

Once you have upgraded the ElasticSuite plugin to version > 2.9.8 / 2.10.7, tracking indices will be monthly based.

You can still reduce the retention period : 

Go to **Stores** > **Configuration** > **Tracking** > **Global Configuration** > **Retention Delay**

The default retention period is 12 months (will generate 12 indices). You can reduce it to 3 or 6 months.

### Use a cronjob to cleanup tracking indices data

Create a cron job to delete the tracking indices. This command deletes indices created in the last month:

 `curl -XDELETE localhost:9200/<name in index> * **\_tracking\_log** * _$(date
    +'%Y%m' -d 'last month')*`

If you want to delete indices at a set time-frequency, create a cron job by referring to the following articles in our developer documentation:

* [Configure a custom cron job and cron group (tutorial)](https://devdocs.magento.com/guides/v2.3/config-guide/cron/custom-cron-tut.html)
* [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html)
