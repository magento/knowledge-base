---
title: Redis deployment error on Cloud (Already in pipeline mode)
link: https://support.magento.com/hc/en-us/articles/115002451014-Redis-deployment-error-on-Cloud-Already-in-pipeline-mode-
labels: Magento Commerce Cloud,deploy,Redis,pipeline,mode,troubleshooting
---

This article provides a solution for the Redis::pipeline(): Already in pipeline mode... error which you might encounter during deployment.

The error occurs due to inconsistencies between the newer Redis versions and older code in the colinmollenhour/credis module.

To resolve the issue, apply newer versions of magento/magento-cloud-configuration (MCC) deployment scripts.

## Affected versions

* Magento Commerce Cloud, all versions

* Redis, PHP-Redis 3.1.3

## Issue

When deploying your Magento Commerce (Cloud) application, you may encounter the following Redis error:

Redis::pipeline(): Already in pipeline mode in /var/www/html/magento2ce/vendor/colinmollenhour/credis/Client.php on line 1037
After the error, the deployment cannot be completed.

## Cause

At a certain moment, the newer Redis versions (3.1.3 and later) were not compatible with the colinmollenhour/credis module, which caused an exception and failure to deploy the Magento application.

## Solution

Follow the steps in the [Redis error on deploy](http://devdocs.magento.com/guides/v2.2/cloud/trouble/redis-troubleshooting.html#update) DevDocs topic to apply newer versions of magento/magento-cloud-configuration (MCC) deployment scripts.

Fixing the issue varies in various Magento versions because of the different Cloud packages, so it is critical to strictly follow the steps in the [Redis error on deploy](http://devdocs.magento.com/guides/v2.2/cloud/trouble/redis-troubleshooting.html#update) topic.

In brief, the following applies to the Magento versions below:

* 
**2.2.1 and later:** the issue does not occur since the fix has been included into Magento Commerce (Cloud) code starting from that version

* 
**2.1.4 - 2.2.0:** the fix has been included into the MCC packages, so you just need to get the latest deployment scripts

* 
**2.1.3 and earlier:** apply the patch manually (see the Redis error on deploy topic)

## More information

Links to related documentation:

* [Composer for 2.1.X](http://devdocs.magento.com/guides/v2.2/cloud/reference/cloud-composer.html)

* [Composer for 2.2.X](http://devdocs.magento.com/guides/v2.2/cloud/reference/cloud-composer.html)

* 
[Patch and upgrade](http://devdocs.magento.com/guides/v2.2/cloud/project/project-patch.html), select the version for your Magento version docs

* [Redis setup](http://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_services-redis.html)

