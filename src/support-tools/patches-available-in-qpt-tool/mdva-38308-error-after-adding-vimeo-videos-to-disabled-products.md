---
title: "MDVA-38308: Error after adding Vimeo videos to disabled products"
labels: QPT patches,Quality Patches Tool,QPT,Support Tools,QPT fixes,Magento Commerce,Magento Commerce Cloud,disabled products,Vimeo,videos,error message,QPT 1.0.26,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce
---

The MDVA-38308 quality patch for Adobe Commerce solves the issue where users get the error message: *Notice: Undefined index: extension in /lib/internal/Magento/Framework/File/Uploader.php on line 806,* when adding Vimeo videos to disabled products. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.26 is installed. The patch ID is MDVA-38308. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.4.1-p1, 2.4.2-p1

**Compatible with Adobe Commerce versions:**
Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.5 - 2.3.6-p1, 2.4.0 - 2.4.1-p1, 2.4.2 - 2.4.2-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When adding Vimeo videos to disabled products, you receive the following error message:  *Notice: Undefined index: extension in /lib/internal/Magento/Framework/File/Uploader.php on line 806*

<ins>Steps to reproduce</ins>:

1. Create a simple product.
1. Disable the created product.
1. Try to add a Vimeo video to the disabled product.

<ins>Expected results</ins>:

Video is added without any error.

<ins>Actual results</ins>:

You get the following error:  
*Notice: Undefined index: extension in /lib/internal/Magento/Framework/File/Uploader.php on line 806*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html)
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html)

## Related reading

To learn more about Quality Patches Tool in our support knowledge base, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492)
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252)

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section in our support knowledge base.
