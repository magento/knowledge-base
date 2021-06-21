---
title: "MDVA-34943 Magento patch: Quick order can't add 2+ products to cart"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,MQP 1.0.17,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,SKU,cart,products,quick order
---

The MDVA-34943 Magento patch solves the issue where a quick order can't add 2 or more products to the cart.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.17 is installed. Please note that the issue was fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0-p1

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Preconditions</span> :

Magento Commerce with simple products.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Go to **Quick Order** on the Storefront (while not logged in).
1. Enter a valid SKU, click the product that shows up in the autocomplete field, and set **Quantity** = *1* .
1. Enter the same valid SKU, but change the case (change uppercase to lowercase, or change lowercase to uppercase) of the 1st character, and click the product that shows up in the autocomplete field, and set **Quantity** = *1* .
1. Enter a `random_sting_value` for **SKU** , and set **Quantity** = *1* .
1. Set **SKU** = *123123123* , and set **Quantity** = *1* .
1. Delete everything except the 1st entry you added to the **Quick Order** page.
1. Enter the 1st SKU (similar to Step 2 above) in the **Enter Multiple SKUs** field, and click **Add to List** .
1. This results in a quantity of 2 for the 1st SKU and a line for a `random_sting_value` .
1. To test more, refresh the page.
1. This results in no SKUs for quick order, as expected.
1. Enter a `random_sting_value2` into the **Enter Multiple SKUs** field, and click **Add to List** .
1. This results in 2 valid SKUs from before and a `random_sting_value2` .

 <span class="wysiwyg-underline">Expected results</span> :

Two or more products are able to be added to the cart, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

When taken to the **Cart** page, the 1st added product appears normally, but for the 2nd product and any subsequent products added to the cart, a " *1 product requires attention* " error message appears. The 2nd or any additional products will be listed on the **Product Requires Attention** section of the **Cart** page.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.