---
title: "MDVA-35286: error switching Multiple Address to Onepage checkout"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.18,QPT patches,Quality Patches Tool,checkout,multiple addresses,multishipping,onepage,support tools
---

The MDVA-35286 Magento patch fixes the issue where there is an error if a customer has bundle products in cart and switches from Multiple Address checkout to Onepage checkout. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-35286. Please note that the issue is fixed in Magento 2.4.2, consider upgrading to this version!

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.4.0-2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

An error is displayed if there's a bundle product in cart and user attempts to use Onepage Checkout after abandoning Multi-Shipping Checkout.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in to the customer account and add more than one bundle product to cart.
1. Click the link to view and edit the cart.
1. Click the **Check Out with Multiple Addresses** link.
1. Select different addresses for products added to the cart.
1. Click **Back to Shopping Cart** .
1. In the cart click **Proceed to Checkout** .

 <span class="wysiwyg-underline">Expected result:</span> 

You get redirected to the Checkout page.

 <span class="wysiwyg-underline">Actual result:</span> The error message is displayed: *There has been an error processing your request* .

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.