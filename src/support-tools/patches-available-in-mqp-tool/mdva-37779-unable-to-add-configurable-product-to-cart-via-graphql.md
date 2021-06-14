---
title: "MDVA-37779: Unable to add configurable product to cart via GraphQL"
labels: "MQP patches,Magento Quality Patches,2.4.2,2.4.2-p1,MQP 1.0.24,configurable,cart"
---


The MDVA-37779 Magento patch solves the issue where it is impossible to add a configurable product to cart when the website ID is not equal to the store ID. This patch is available when the Magento Quality Patch (MQP) tool 1.0.24 is installed. The patch ID is MDVA-37779. Please note that the issue is scheduled to be fixed in Magento 2.4.4. 

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.4.2

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.4.2 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

It is impossible to add configurable product to the cart when the website ID is not equal to the store ID.

<ins>Prerequisites</ins>:
Have a second website, store and store view where website ID is not equal to the store ID.

<ins>Steps to reproduce</ins>:

1. Create an empty cart using GraphQl mutation `createEmptyCart`.
1. Try to add a configurable product to the cart using the `addConfigurableProductsToCart` mutation.

<ins>Expected results</ins>:
Product added to cart.

<ins>Actual results</ins>:
Get an error: *Could not add the product with SKU xxxx to the shopping cart: The website with ID 3 that was requested wasn't found. Verify the website and try again.*

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).


## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
