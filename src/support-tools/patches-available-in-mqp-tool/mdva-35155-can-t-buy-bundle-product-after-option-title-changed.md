---
title: "MDVA-35155: Can't buy bundle product after option title changed"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,MQP 1.0.19,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,bundle product,can't buy,option title change
---

The MDVA-35155 Magento patch solves the issue where a bundle product can't be bought after the option title is changed.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35155. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.0-2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Create a new bundle product via **Product Import** .
1. The product is normal in both the Admin and frontend (in stock and can be added to cart).
1. Update the same product with changes in the name in `bundle_values` and re-import the product.

 <span class="wysiwyg-underline">Expected results</span> :

The existing bundle option is updated to the new name and keeps the same items in it, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

* Admin attempts to merge products with the same SKU into a single bundle-option section, and results in an empty option section.
* The product is out of stock on the frontend (even after a reindex).

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.