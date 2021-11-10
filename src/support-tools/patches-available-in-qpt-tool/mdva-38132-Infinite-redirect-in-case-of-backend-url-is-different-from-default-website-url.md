---
title: "MDVA-38132: Infinite redirect when backend URL is different from default website URL"
labels: QPT Patches,Quality Patches Tool,Support Tools,QPT 1.0.25,Magento Commerce Cloud,Magento Commerce,2.3.3,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-38132 patch fixes the issue of infinite redirect when the backend URL is different from the default website URL. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-38132. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.3.4-p2

**Compatible with Adobe Commerce versions:**
Adobe Commerce (all deployment methods) 2.3.3-2.4.2-p1
>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue
The Commerce Admin panel has an infinite redirect when the backend URL is different from the default website URL.

<ins>Prerequisites</ins>:

* Base URL is used for both backend and storefront. Base Secure URL is not used.
* The web server is configured so that Adobe Commerce is accessible via two different URLs. URL1 is used for Adobe Commerce installation.

<ins>Steps to reproduce</ins>:

1. Go to Admin Panel > **Stores** > **Configuration** > **Web**.
1. Leave original Base URL in global configuration. It's your URL1.
1. Switch to Main Website scope.
1. Change Base URL to a different URL (see preconditions to set up web server correctly). This is your URL2.
1. Clear cache (if necessary and possible).
1. Open Admin Panel.

<ins>Expected results</ins>:

Admin Panel is successfully opened and can be navigated. Main Website's store is successfully opened and can be navigated.

<ins>Actual results</ins>:

Infinite redirect happens. Adobe Commerce redirects from URL1 to URL2 and continues back and forth.

## Apply the patch

To apply individual patches use the following links depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
