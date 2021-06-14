---
title: "MDVA-36253: Incorrect total in mini cart after deleting item"
labels: "2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,MQP 1.0.22,Magento Commerce Cloud,Magento Quality Patches,cart,support tools"
---

The MDVA-36253 Magento patch solves the issue where the product price is not being updated, if you go back to the mini cart page after deleting a product, when using multi-shipping checkout step. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-36253. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Commerce Cloud 2.4.0-2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Incorrect total in mini cart after deleting item.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in as a customer that has at least one address.
1. Add four products to cart (price = $10 for each).
1. Go to the cart and click **Check Out with Multiple Addresses** .
1. Remove one item.
1. Navigate back to the Home page.
1. Open the cart and check the total price.

 <span class="wysiwyg-underline">Actual result:</span> 

Total is $40.

 <span class="wysiwyg-underline">Expected result:</span> 

Total is $30.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.