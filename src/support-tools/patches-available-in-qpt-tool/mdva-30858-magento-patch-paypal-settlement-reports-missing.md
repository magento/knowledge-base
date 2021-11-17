---
title: "MDVA-30858 Magento patch: PayPal Settlement reports missing"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.13,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PayPal,PayPal Settlement Reports,reports,support tools
---

The MDVA-30858 Magento patch fixes missing PayPal Settlement Reports when having multiple PayPal accounts. The reports should be available under Admin sidebar > **Reports** > Sales > **PayPal Settlement** . Instead, the message: *We couldn't find any records.* displays.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **This patch is created for Magento version:** Magento Commerce Cloud 2.3.4. **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.4.1.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Fixes the issue where no records were found in **Reports** > Sales > **PayPal Settlement** when having multiple PayPal accounts. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Configure PayPal Settlement Reports.
1. Go to Admin, to **Reports** > Sales > **PayPal Settlement** .
1. For the most recent updates, click **Fetch Updates** in the upper-right corner.

 <span class="wysiwyg-underline">Actual result:</span> Nothing appears in the grid though reports are available.

 <span class="wysiwyg-underline">Expected result:</span> Reports should appear.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.