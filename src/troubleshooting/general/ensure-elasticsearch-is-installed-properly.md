---
title: Ensure Elasticsearch is installed properly
labels: 2.2.3,2.2.4,2.2.5,2.2.6,2.2.7,2.2.8,2.2.9,2.3.0,2.3.1,Elasticsearch 2.x,Elasticsearch 5.x,Elasticsearch 6.x,Elasticsearch configuration,Elasticsearch version,Magento Commerce,Magento Commerce Cloud,how to,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

This article talks about solutions for issues caused by incorrect Elasticsearch (ES) installation and configuration.

>![warning]
>
>On Adobe Commerce on cloud infrastructure please note that service upgrades cannot be pushed to the Production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) detailing your required service upgrade and stating the time when you want the upgrade process to start.

## Elasticsearch version compatibility with Adobe Commerce

* Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure:
    * v2.2.3+ supports ES 5.x
    * v2.2.8+ and v2.3.1+ support ES 6.x
    * ES v2.x and v5.x are not recommended because of [End of Life](https://www.elastic.co/support/eol). However, if you have Adobe Commerce v2.3.1 and want to use ES 2.x or ES 5.x, you must [Change the Elasticsearch php Client](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html).
* Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).

## Issue

The following symptoms indicate Elasticsearch is not configured correctly:

* `Error: No alive nodes in your cluster` - this error can appear in Adobe Commerce logs:
    * `var/log/system.log`
    * `var/log/support_report.log`
    * `var/log/cron.log`
    * `var/log/exception.log`
    * or in the prompt (when you run a reindex, for example)
* Errors indicating that the Elasticsearch version is not compatible with your current version of Adobe Commerce (this is an Adobe Commerce on cloud infrastructure specific error):
    ```clike
    [YYYY-MM-DD HH:MM:SS] CRITICAL: Fix configuration with given suggestions:    - Elasticsearch version #<version> is not compatible with current version of magento    Upgrade elasticsearch version to ~5.0
    ```
Where *version* is the Elasticsearch Service running on the cloud environment.    

## Cause

Elasticsearch is not installed properly. This could be due to:

* A typo in the configuration file.
* A version in the configuration file that does not match any version of Elasticsearch that is installed for the environment.
* A version that is correctly installed in the environment, correctly configured in the configuration file, but is not a supported version for the currently installed version of Adobe Commerce.

## Solution

To correctly set up Elasticsearch:

* Merchants on Adobe Commerce on cloud infrastructure can follow the steps in our developer documentation: [Set up Elasticsearch service](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html).
* Merchants on Adobe Commerce on-premises and Magento Open Source can follow the steps in our developer documentation: [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html).

After you have set up Elasticsearch, check that it's configured correctly:

1. Log in to your server.
1. Check the version number of Elasticsearch (2.x, 5.x, or 6.x) in the output of running the command: `curl -XGET <Elasticsearch hostname>:<Elasticsearch server port>` For example, in Adobe Commerce on cloud infrastructure: `curl -XGET localhost:9200`
1. Check what is configured in Adobe Commerce on cloud infrastructure Configuration by running the command: `php bin/magento config:show catalog/search`
1. Check `catalog/search/engine` and ensure it matches with the Elasticsearch version number. For example, in Adobe Commerce on cloud infrastructure:
    * ElasticSearch 5.X - elasticsearch5
    * ElasticSearch 6.X - elasticsearch6
    * ElasticSearch 2.X - elasticsearch
1. Check `index_prefix`. If you have several environments, make sure you have different `index_prefix` values for them.
