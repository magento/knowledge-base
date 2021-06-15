---
title: MDVA-22026: Unable to import product images from external URL
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,MQP 1.0.20,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,external URL,import,product image
---

The MDVA-22026 Magento patch fixes the issue of being unable to import product images from an external URL.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-22026. Please note that the issue was fixed in Magento version 2.3.4.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2-p2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.2-2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. In Admin, go to **System > Import** .
1. Set **Entity Type** = *Products* .
1. Set **Import Behavior** = *Add/Update* .
1. Set **Allowed Errors Count** = *10000* .
1. Select the file for import.
1. Click the **Check Data** button (which should validate the file).
1. Click the **Import** button.

 <span class="wysiwyg-underline">Expected results</span> :

Successful import of products from CSV files, including images from external URLs, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

Unsuccessful import of products from CSV files, including images from external URLs, and receive a similar error:

```php
1. Imported resource (image) could not be downloaded from external resource due to timeout or access permissions in row(s): 4, 5, 8, 9, 16, 18, 20, 21, 22, 23, 26, 27, 28, 52, 53, 55, 58, 63, 70, 71, 77, 78, 83, 84, 91
```

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
