---
title: MDVA-34469 Magento patch: wrong store code specified for cart
labels: 2.4.1,2.4.1-p1,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,cart,default,headers,store,support tools,views
---

The MDVA-34469 Magento patch solves the issue where users get the error message: *Wrong store code specified for cart* when adding a product to the cart after switching store views.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** 

Magento Commerce Cloud 2.4.1.

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.4.1, 2.4.1-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The user sees a cart query error, "Wrong store code specified for cart", when trying to switch store views.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

 <span class="wysiwyg-underline">Prerequisites:</span> 

* Magento 2.4.0.
* Single website with a single store and two store views is configured.
* A customer account is created.

1. Magento backend is configured to have 2 store views (with store codes: default, second).
1. The user creates a shopping cart using the default store code.
1. The user tries to retrieve this cart using the second store code in the<tt>Store</tt>request header.

 <span class="wysiwyg-underline">Actual result:</span> The cart query returns an error and the cart does not display. <span class="wysiwyg-underline"></span> 

 <span class="wysiwyg-underline">Expected result:</span> 

The cart displays because switching the store (sending the new code in the `Store` request header) associates the cart to the requested store.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.