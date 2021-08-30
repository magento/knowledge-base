---
title: "MDVA-31307 Magento patch: Out of memory on certain categories"
labels: 2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PHP Fatal Error,category pages,error message,memory,support tools
---

The MDVA-31307 Magento patch fixes the issue where Magento\_Csp/Model/BlockCache consumes a lot of memory and generates enormous cached strings, which causes problems for certain pages with a lot of dynamically whitelisting scripts and styles. The provided patch optimizes this process.This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-31307. Please note that the issue is fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.4.0 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Fixes the issue where there are *Out of memory* errors on certain categories due to problems with dynamic CSP whitelisting for cached blocks.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Generate small profile fixtures ( `bin/magento setup:performance:generate-fixtures` ).
1. Open all category pages in different tabs.

 <span class="wysiwyg-underline">Actual result:</span> 

<pre>[date and time] PHP Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 90112 bytes) in Unknown on line 0
[date and time] PHP Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 33554440 bytes) in /app/<project id>/vendor/magento/module-csp/Model/Collector/DynamicCollector.php on line 31</pre>

 <span class="wysiwyg-underline">Expected result:</span> 

All the pages have opened correctly.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.