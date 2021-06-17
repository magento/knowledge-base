---
title: "MDVA-32313 Magento patch: products added to wishlist with wrong configuration"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,MQP 1.0.10,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,configurable product,product listing,wishlist
---

The MDVA-32313 patch solves the issue where configurable products are not able to be added to the wishlist correctly, because they are assigned wrong configurations when they are added to the wishlist. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.10 is installed. Please note that the issue was fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.0

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisites</span> :

Install Magento with sample data.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a customer.
1. Log into the customer account.
1. Navigate to the **Product Listing** page.
1. Choose a configurable product (Example: *configurable\_1* ) and select preferred color and size options on the **Product Listing** page ( **Do not open the product page.** ).
1. Click on the wishlist icon of another configurable product (Example: *configurable\_2* ) on the same page without selecting any color/size options.

Expected results:

The *configurable\_2* product is added to the wishlist without selected options, as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The *configurable\_2* product added to the wishlist with the configuration from the *configurable\_1* product.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.