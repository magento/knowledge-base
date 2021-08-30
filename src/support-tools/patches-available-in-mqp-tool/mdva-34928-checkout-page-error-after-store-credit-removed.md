---
title: "MDVA-34928: checkout page error after store credit removed"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,checkout,error,store credit,support tools
---

The MDVA-34928 Magento patch solves the issue where after removing store credit there is an infinite loader at the checkout page. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-34928. Please note that the issue was fixed in Magento 2.3.6.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.5 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a customer account.
1. Determine a possible item to add to the cart - take note of the price.
1. Edit the account in the Admin.
1. Click **Store Credit** .
1. Add an amount to cover the price of the item.
1. Log in as the customer on the store front.
1. Add the item to the cart.
1. Proceed to checkout.
1. Apply the store credit.
1. Try to remove the store credit.

 <span class="wysiwyg-underline">Actual result:</span> 

Infinite loader spins until the page is refreshed.

 <span class="wysiwyg-underline">Expected result:</span> 

Store credit removed.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.