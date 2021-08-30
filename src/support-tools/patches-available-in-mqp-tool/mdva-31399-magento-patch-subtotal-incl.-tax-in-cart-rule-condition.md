---
title: "MDVA-31399 Magento patch: Subtotal (Incl. Tax) in cart rule condition"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,QPT 1.0.12,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart price rule,support tools
---

The MDVA-31399 Magento patch adds the *Subtotal (Incl. Tax)* option to [cart price rule condition](https://docs.magento.com/user-guide/v2.3/marketing/price-rules-cart-create.html#step-2-describe-the-conditions) , fixing the issue where it was impossible to apply a cart price rule based on Subtotal (Incl. Tax) number. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.2-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

It is impossible to apply a cart price rule based on Subtotal (Incl. Tax) number.

 <span class="wysiwyg-underline">Step to reproduce:</span> 

1. Configure product price to include tax.
1. Create a tax rule and tax rate for 20%.
1. Create a product with **Price** = *100* (this price includes tax).
1. Create a new cart price rule with a coupon "10off" to apply $10 fixed discount if subtotal matches these conditions: **Conditions** : *If ALL of these conditions are TRUE :*        * **Subtotal** equals or greater than 100.* 

 <span class="wysiwyg-underline">Expected result:</span> 

There is ability to create a subtotal cart price rule with coupon to apply discount to subtotal including tax.

 <span class="wysiwyg-underline">Actual result:</span> 

There are two options in cart rule conditions: *Subtotal* and *Subtotal (Excl. Tax),* and whatever one is selected, the rule is applied only to subtotal excluding tax.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.