---
title: Disable Magento Banner output to improve site performance    
link: https://support.magento.com/hc/en-us/articles/360035285852-Disable-Magento-Banner-output-to-improve-site-performance-
labels: Magento Commerce Cloud,Magento Commerce,performance,disable,banner,AJAX requests,2.3.x,2.2.x,2.x.x,how to
---

This article provides a fix for low site performance. Low site performance can be caused by the Magento Banner module being enabled but not used. Disabling the module output can improve site performance. Review the article for resolution steps.

<p class="info">If you use the Magento Banner functionality, see the <a href="https://support.magento.com/hc/en-us/articles/360039286472-High-throughput-AJAX-requests-cause-poor-performance">High throughput AJAX requests cause poor performance</a> article for recommendations on how to avoid performance issues caused by excessive Ajax requests.</p>

### AFFECTED PRODUCTS AND VERSIONS

* Magento Commerce Cloud, v.2.x.x 
* Magento Commerce, v.2.2.x, 2.3.x

## Issue

The Magento Banner module is enabled, but not used. 

To check if this is the case:

For Magento Commerce Cloud 2.2.x:

1. Log in to the Magento Admin.
1. Navigate to Content > _Elements_ > Banners. 
1. If the grid displayed on this page is empty - you do not have any banners. 

If you do not see the Banners option under Content > _Elements_, then this is not the case, and the recommendations from this article cannot be applied. 

For Magento Commerce Cloud 2.3.x (the functionality was [renamed in v 2.3.x](https://devdocs.magento.com/guides/v2.3/release-notes/ReleaseNotes2.3.0Commerce.html#banner-now-dynamic-block)): 

1. Log in to the Magento Admin.
1. Navigate to Content > _Elements > _Dynamic Blocks.
1. If the grid displayed on this page is empty - you do not have any dynamic blocks (banners). 

If you do not see the Dynamic Blocks option under Content > _Elements_, then this is not the case, and the recommendations from this article cannot be applied. 

## Cause

When the Magento Banner module is enabled, Magento sends Ajax requests from the storefront to the server to get the banner information. These Ajax requests have a performance impact, especially in high-load (high-volume and high-traffic) conditions. If the functionality is not used, it is recommended that you disable the module output. It is not recommended to disable the module, because of the dependency issues. 

## Solution

<p class="warning">We strongly recommend testing changes on <a href="https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter">Staging/Integration environment</a> first, before applying it to Production. We also recommend having a recent backup before any manipulations.</p>

1. Disable the Magento Banner module output, as described in [Disable module output](https://devdocs.magento.com/guides/v2.3/config-guide/config/disable-module-output.html). The module name you need to use is `` Magento_Banner ``.
1. Deploy your code. For Magento Commerce Cloud, deploy as described in the [Deploy your store](https://devdocs.magento.com/guides/v2.3/cloud/live/stage-prod-live.html) article.

 