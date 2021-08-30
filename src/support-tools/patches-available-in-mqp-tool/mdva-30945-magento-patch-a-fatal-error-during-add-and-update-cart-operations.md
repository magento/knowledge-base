---
title: "MDVA-30945 Magento patch: a fatal error during add and update cart operations"
labels: QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,PHP Fatal Error,blank cart,support tools
---

The MDVA-30945 Magento patch fixes the issue where you receive a fatal error *Call to a member function getValue() on null in module-configurable-product CartItemProcessor.php* when updating carts. This patch is available when the<a>Quality Patches Tool (QPT) tool</a>1.0.7 is installed. The issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

A fatal PHP error after products in cart are updated in the Admin.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 1. In Magento Admin, create a configurable product without options.2. Add it to the cart on storefront.3. Return to Admin and add configurable options to the product, save the changes.4. Refresh the cart page on the storefront.

 <span class="wysiwyg-underline">Actual result:</span> 

Cart page is blank. In the PHP error.log the following error is logged: *Uncaught exception 'Error' with message 'Call to a member function getValue() on null' in vendor/magento/module-configurable-product/Model/Quote/Item/CartItemProcessor.php:76* 

 <span class="wysiwyg-underline">Expected result:</span> On the cart page, the following validation message is displayed: *Some of the products below do not have all the required options* .

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.