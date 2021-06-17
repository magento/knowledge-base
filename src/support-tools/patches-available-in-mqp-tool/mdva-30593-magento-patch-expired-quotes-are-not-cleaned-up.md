---
title: "MDVA-30593 Magento patch: expired quotes are not cleaned up"
labels: 2.3.0,2.3.1,2.3.2,2.3.3,2.3.3-p1,MQP 1.0.5,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,quote,support tools
---

The MDVA-30593 patch solves the issue where quotes that expired according to the **Quote Lifetime** setting, are not cleaned up. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.5 is installed. Please note that the issue was fixed in Magento Commerce 2.3.4.

## Affected products and versions

* Magento Commerce Cloud 2.3.0-2.3.3.x
* Magento Commerce 2.3.0-2.3.3.x

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

Quotes, that expired according to the **Quote Lifetime** setting, are not cleaned up.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. In Magento Admin, go to **Stores** > **Configuration** > **Sales** > **Checkout** > **Shopping Cart** .
1. Set **Quote Lifetime (days)** = *1* 
1. Save configuration and clear cache.
1. Log in as a customer.
1. Add a product to the cart.
1. After one day, go back to the cart.

 <span class="wysiwyg-underline">Expected result:</span> The quote is cleared, and product is removed from the cart, since the old price is no longer valid.

 <span class="wysiwyg-underline">Actual result:</span> The product is still in the cart.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.