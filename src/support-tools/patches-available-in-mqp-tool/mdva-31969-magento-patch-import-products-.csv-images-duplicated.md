---
title: "MDVA-31969 Magento patch: import products .csv images duplicated"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.14,Magento Commerce Cloud,csv file,duplicate,images,images-issues,import,product image,support tools
---

The MDVA-31969 Magento patch fixes the issue where images are duplicated when importing two products .csv files. This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.14 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2.

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.3-2.3.4-p2, 2.4.0-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

New product images are created in the `pub/media` folder, even if the same image already exists, when importing products.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a directory for images:    <pre>mkdir var/import-images</pre>    
1. Add images inside the path `<install dir>/var/import-images` .
1. Import the product .csv file twice.

 <span class="wysiwyg-underline">Expected results:</span> 

Products end up with each product image attached once.

 <span class="wysiwyg-underline">Actual results:</span> 

Products end up with product images duplicated.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.