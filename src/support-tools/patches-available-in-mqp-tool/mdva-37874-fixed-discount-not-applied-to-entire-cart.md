---
title: "MDVA-37874: Fixed discount not applied to entire cart"
labels: "2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,2.4.2-p1,2.3.6,2.3.6-p1,2.3.7,MQP 1.0.24,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools,fixed discount amount,bundle product,order"
---

The MDVA-37874 Magento patch fixes the issue when the **fixed discount amount** for the whole cart is incorrectly applied to a bundle product containing more than one option. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.24 is installed. The patch ID is MDVA-37874. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.4.2
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.6-2.3.7 and 2.4.1-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue


 <ins>Steps to reproduce</ins>:

1. Create a cart rule with a **fixed discount amount** for the whole cart.
1. Add a bundle product to the cart (The bundle product should contain several selected options.).
1. Go to the cart page, and check the discount.


 <ins>Expected results</ins>:

The fixed discount amount is applied to the entire cart, as expected.

 <ins>Actual results</ins>:

The fixed discount amount is applied to only part of the cart.


## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
