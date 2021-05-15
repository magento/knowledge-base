---
title: MDVA-36424: Images attached to page builder vanish on save
labels: 2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,MQP 1.0.21,MQP patches,Magento Commerce,Magento Commerce Cloud,URL,content,images,save,support tools
---

The MDVA-36424 Magento patch solves the issue where there are multiple websites and the default website base URL is different from the admin URL, the images attached to page builder elements disappeared when the category is saved for the second time. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-36424. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.6

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.5-2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Media images attached to page builder elements are not being saved if the backend base URL is different from the storefront base URL.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a second website - website2.
1. Set a different base URL for website2 (base URL used in admin should be different from the second website).
1. Set the second website as the default website ( **Stores** > *Settings* > **All Stores** > Select the second website > set as *Default* ).
1. Navigate to the category page in backend, go to a category edit view.
1. Navigate to **Content** > *Description* .
1. Add a column to the content and set a background image using the media gallery.
1. Save the category.
1. Go to the **Content** > *Description* again, you will see the saved image correctly.
1. Save the category again.
1. Go to the **Content** > *Description* .

 <span class="wysiwyg-underline">Actual result:</span> 

Image get removed after category second save.

 <span class="wysiwyg-underline">Expected result:</span> 

Image should not be removed when saving the category.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.