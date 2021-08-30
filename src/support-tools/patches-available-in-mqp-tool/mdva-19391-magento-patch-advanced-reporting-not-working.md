---
title: "MDVA-19391 Magento patch: Advanced Reporting not working"
labels: 2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,404 error,Advanced Reporting,QPT 1.0.13,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PageBuilderAnalytics module
---

The MDVA-19391 Magento patch solves the issue when an error in the PageBuilderAnalytics module prevents use of Advanced Reporting. This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.13 is installed. Please note there is currently no solution in Magento planned besides this patch.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.1

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.1 - 2.3.4-p2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. On the Admin sidebar, choose **Reports** .
1. Then under **Business Intelligence** , choose **Advanced Reporting** .

Expected results:

The **Advanced Reporting** report should load, as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The " *404 We can't find what you're looking for.* " error page appears.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.