---
title: 'MDVA-35092 Magento patch: Vimeo Error: "Video not found"'
labels: 2.3.5-p1,2.3.5-p2,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.2,QPT 1.0.17,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Vimeo,error,support tools,video
---

The MDVA-35092 Magento patch fixes the issue where you see Error: "Video not Found". This error message displays when you enter a Vimeo video using the native Add Video interface in the product admin of Magento. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.5 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The Vimeo simple API stops working as expected.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in to the Admin.
1. To edit an existing product go to **CATALOG** > **Products** > **Edit** or to create a new product go to **CATALOG** > **Products** > **Edit** > **Add Product** .
1. Click the **Images And Videos** tab in the Product page.
1. Click **Add Video** and add a Vimeo video's URL. Click **Save** .

 <span class="wysiwyg-underline">Expected result:</span> 

The new video is found and saved. <span class="wysiwyg-underline">Actuals result:</span> Error: "Video not Found" is displayed. <span class="wysiwyg-underline"></span> 

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
