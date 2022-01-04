---
title: "MDVA-30945: a fatal error during add and update cart operations"
labels: QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,PHP Fatal Error,blank cart,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30945 patch fixes the issue where you receive a fatal error *Call to a member function getValue() on null in module-configurable-product CartItemProcessor.php* when updating carts. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. The issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.3.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

A fatal PHP error after products in the cart are updated in the Admin.

<ins>Steps to reproduce</ins>:

1. In the Commerce Admin, create a configurable product without options.
1. Add it to the cart on the storefront.
1. Return to Admin, add configurable options to the product and save the changes.
1. Refresh the cart page on the storefront.

<ins>Expected results</ins>:

On the cart page, the following validation message is displayed: *Some of the products below do not have all the required options*.

<ins>Actual results</ins>:

Cart page is blank. In the PHP `error.log`, the following error is logged: *Uncaught exception 'Error' with message 'Call to a member function getValue() on null' in vendor/magento/module-configurable-product/Model/Quote/Item/CartItemProcessor.php:76*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
