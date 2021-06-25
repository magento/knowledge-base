---
title: "MDVA-38132: Infinite redirect when backend URL is different from default website URL"
labels: MQP Patches,Magento Quality Patches,Support Tools,MQP 1.0.25,Magento Commerce Cloud,Magento Commerce,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-38132 Magento patch fixes the issue of infinite redirect when the backend URL is different from the default website URL. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-38132. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.4-p2
**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.3-2.4.2-p1
>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue
Magento Admin panel has an infinite redirect when the backend URL is different from the default website URL.

<ins>Prerequisites</ins>:

* Base URL is used for both backend and storefront. Base Secure URL is not used.
* The web server is configured so that Magento is accessible via two different URLs. URL1 is used for Magento installation.

<ins>Steps to reproduce</ins>:

1. Go to Admin Panel > **Stores** > **Configuration** > **Web.**
1. Leave original Base URL in global configuration. It's your URL1.
1. Switch to Main Website scope.
1. Change Base URL to a different URL (see preconditions to set up web server correctly). This is your URL2.
1. Clear cache (if necessary and possible).
1. Open Admin Panel.

<ins>Expected results</ins>:

Admin Panel is successfully opened and can be navigated. Main Website's store is successfully opened and can be navigated.

<ins>Actual results</ins>:

Infinite redirect happens. Magento redirects from URL1 to URL2 and continues back and forth.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
