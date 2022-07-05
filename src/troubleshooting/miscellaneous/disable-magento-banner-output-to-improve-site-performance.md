---
title: Disable Adobe Commerce Banner output to improve site performance
labels: 2.2.x,2.3.x,2.x.x,AJAX requests,Magento Commerce,Magento Commerce Cloud,banner,disable,troubleshooting,how to,performance,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a fix for low site performance. Low site performance can be caused by the `Magento_Banner` module being enabled but not used. Disabling the module output can improve site performance. Review the article for resolution steps.

>![info]
>
>If you use the Adobe Commerce Banner functionality, see the [High throughput AJAX requests cause poor performance](https://support.magento.com/hc/en-us/articles/360039286472-High-throughput-AJAX-requests-cause-poor-performance) article in our support knowledge base for recommendations on how to avoid performance issues caused by excessive Ajax requests.

## Affected products and versions

* Adobe Commerce on cloud infrastructure v.2.x.x
* Adobe Commerce on-premises v.2.2.x and 2.3.x

## Issue

The `Magento_Banner` module is enabled, but not used.

To check if this is the case:

For Adobe Commerce on cloud infrastructure 2.2.x:

1. Log in to the Commerce Admin.
1. Navigate to **Content** > *Elements* > **Banners**.
1. If the grid displayed on this page is empty, you do not have any banners.

If you do not see the **Banners** option under **Content** > *Elements*, then this is not the case, and the recommendations from this article cannot be applied.

For Adobe Commerce on cloud infrastructure 2.3.x (the functionality was [renamed in v 2.3.x](https://devdocs.magento.com/guides/v2.3/release-notes/ReleaseNotes2.3.0Commerce.html#banner-now-dynamic-block)):

1. Log in to the Commerce Admin.
1. Navigate to **Content** > *Elements >*  **Dynamic Blocks**.
1. If the grid displayed on this page is empty, you do not have any dynamic blocks (banners).

If you do not see the **Dynamic Blocks** option under **Content** > *Elements*, then this is not the case, and the recommendations from this article cannot be applied.

## Cause

When the `Magento_Banner` module is enabled, Adobe Commerce sends Ajax requests from the storefront to the server to get the banner information. These Ajax requests have a performance impact, especially in high-load (high-volume and high-traffic) conditions. If the functionality is not used, it is recommended that you disable the module output. It is not recommended to disable the module, because of the dependency issues.

## Solution

>![warning]
>
>We strongly recommend testing changes on [Staging/Integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter) first, before applying it to Production. We also recommend having a recent backup before any manipulations.

1. Disable the `Magento_Banner` module output, as described in [Disable module output](https://devdocs.magento.com/guides/v2.3/config-guide/config/disable-module-output.html) in our developer documentation. The module name you need to use is `Magento_Banner`.
1. Deploy your code. For Adobe Commerce on cloud infrastructure, deploy as described in the [Deploy your store](https://devdocs.magento.com/guides/v2.3/cloud/live/stage-prod-live.html) article in our developer documentation.
