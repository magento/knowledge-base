---
title: Elasticsearch issues after Adobe Commerce cloud infrastructure 2.3.1+ upgrade
labels: Elasticsearch,Elasticsearch 2.x,Elasticsearch 5.x,Elasticsearch 6.x,Elasticsearch problems,Elasticsearch service version not compatible,End of Life,Magento Commerce Cloud,how to,upgrade,Adobe Commerce,cloud infrastructure,troubleshooting
---

>![warning]
>
>[MySQL catalog search engine will be removed in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0). You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html).

>![warning]
>
>Please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) detailing your required service upgrade and stating the time when you want the upgrade process to start.

This article discusses a fix for problems during deployment after upgrading to Adobe Commerce on cloud infrastructure versions 2.3.1+, if you are on Elasticsearch versions 2.x and 5.x.

## Affected Products and Versions:

* Adobe Commerce on cloud infrastructure 2.3.1+
* Elasticsearch 2.x and 5.x

## Cause

Merchants that have upgraded to Adobe Commerce on cloud infrastructure (versions 2.3.1 and onwards) and are on a version of Elasticsearch prior to 6.x can experience errors when deploying. This is because Elasticsearch versions 2.x and 5.x are [End of Life](https://www.elastic.co/support/eol) and are no longer supported in Adobe Commerce. The Elasticsearch client has to be up to date, or running a deployment risks triggering an error. To learn more, refer to [Change the Elasticsearch client](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html) in our developer documentation.

## Issue

When deploying you see an error message similar to the following, indicating that your Elasticsearch version is not compatible: *Elasticsearch service version 5.2.2 on infrastructure layer is not compatible with current version of elasticsearch/elasticsearch module (6.7.0.0), used by your Magento application.*  *You can fix this issue by upgrading the Elasticsearch service on your Magento Cloud infrastructure to version 6.x*. Other symptoms of this issue may be missing images and problems with filters in your environment.

## Solution

>![warning]
>
>If you have a shared environment, ensure staging and production are ready to be upgraded.

To solve this issue, the Elasticsearch client module and Elasticsearch service need to be on the latest recommended versions:

1. Follow the instructions to [change the Elasticsearch module](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html) in our developer documentation so you have the latest recommended version of the Elasticsearch client module.
1. [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) and request an Elasticsearch service update to 6.x on staging and production. Please note that an upgrade to the Elasticsearch service may take some time to complete.

## Related reading

* [Adobe Commerce 2.3 technology stack requirements](https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements-tech.html) in our developer documentation.
* [Set up Elasticsearch service](https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html) in our developer documentation.
* [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html) in our developer documentation.
* [Ensure Elasticsearch is installed properly](https://support.magento.com/hc/en-us/articles/360034939312) in our support knowledge base.
