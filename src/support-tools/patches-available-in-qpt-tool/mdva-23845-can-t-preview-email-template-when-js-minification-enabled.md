---
title: "MDVA-23845: can't preview email template when JS minification enabled"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,JS minification enabled,QPT 1.0.20,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,email template
---

The MDVA-23845 Magento patch fixes the issue when unable to preview the email template in Admin when JS minification is enabled.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-23845. Please note that the issue was fixed in Magento version 2.3.5.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.2-2.3.4-p2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Enable **JS minification** in **Admin > Stores > Configuration > JavaScript Settings > Minify JavaScript Files** = *Yes* .
1. Switch Magento to production mode.
1. Go to **Admin > Marketing > Communications > Email Templates** .
1. Click **Add New Template** .
1. Select the **New Order** template.
1. Click the **Load Template** button.
1. Fill up **Template Name** with **New Order.** 
1. Click the **Save Template** button.
1. In the email templates grid, click on **Preview** link in the **Actions** column.

 <span class="wysiwyg-underline">Expected results</span> :

The email template preview appears in the opened popup window, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The email template preview does not appear in the opened popup window. The popup window is empty, and JS errors may appear.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.