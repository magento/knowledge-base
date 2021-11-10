---
title: "MDVA-22026: Can't import product images from external URL"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,QPT 1.0.20,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,external URL,import,product image,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-22026 patch fixes the issue of being unable to import product images from an external URL.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-22026. Please note that the issue was fixed in Adobe Commerce version 2.3.4.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.2-p2

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure  2.3.2-2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span>:

1. In Admin, go to **System** > **Import**.
1. Set **Entity Type** = *Products*.
1. Set **Import Behavior** = *Add/Update*.
1. Set **Allowed Errors Count** = *10000*.
1. Select the file for import.
1. Click the **Check Data** button (which should validate the file).
1. Click the **Import** button.

 <span class="wysiwyg-underline">Expected results</span>:

Successful import of products from CSV files, including images from external URLs, as expected.

 <span class="wysiwyg-underline">Actual results</span>:

Unsuccessful import of products from CSV files, including images from external URLs, and receive a similar error:

```php
1. Imported resource (image) could not be downloaded from external resource due to timeout or access permissions in row(s): 4, 5, 8, 9, 16, 18, 20, 21, 22, 23, 26, 27, 28, 52, 53, 55, 58, 63, 70, 71, 77, 78, 83, 84, 91
```

## Apply the patch

To apply individual patches use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html).
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check patch for Adobe Commerce issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
