---
title: "MDVA-31307: Out of memory on certain categories"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PHP Fatal Error,category pages,error message,memory,support tools,cloud infrastructure,on-premises
---

The MDVA-31307 patch fixes the issue where `Magento\_Csp/Model/BlockCache` consumes a lot of memory and generates enormous cached strings, which causes problems for certain pages with a lot of dynamically whitelisting scripts and styles. The provided patch optimizes this process. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-31307. Please note that the issue is fixed in Adobe Commerce 2.4.2.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.0

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.4.0 - 2.4.1-p1

 >![info]
 >
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Fixes the issue where there are *Out of memory* errors on certain categories due to problems with dynamic CSP whitelisting for cached blocks.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Generate small profile fixtures (`bin/magento setup:performance:generate-fixtures`).
1. Open all category pages in different tabs.

 <span class="wysiwyg-underline">Actual result:</span>

<pre>[date and time] PHP Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 90112 bytes) in Unknown on line 0
[date and time] PHP Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 33554440 bytes) in /app/<project id>/vendor/magento/module-csp/Model/Collector/DynamicCollector.php on line 31</pre>

 <span class="wysiwyg-underline">Expected result:</span>

All the pages have opened correctly.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
