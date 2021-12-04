---
title: "MDVA-31399 patch: Subtotal (Incl. Tax) in cart rule condition"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,QPT 1.0.12,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart price rule,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-31399 patch adds the *Subtotal (Incl. Tax)* option to [cart price rule condition](https://docs.magento.com/user-guide/v2.3/marketing/price-rules-cart-create.html#step-2-describe-the-conditions), fixing the issue where it was impossible to apply a cart price rule based on Subtotal (Incl. Tax) number. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.2 - 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

It is impossible to apply a cart price rule based on Subtotal (Incl. Tax) number.

<ins>Steps to reproduce</ins>:

1. Configure product price to include tax.
1. Create a tax rule and tax rate for 20%.
1. Create a product with **Price** = *100* (this price includes tax).
1. Create a new cart price rule with a coupon "10off" to apply $10 fixed discount if subtotal matches these conditions:

**Conditions**: *If ALL of these conditions are TRUE :*        * **Subtotal** equals or greater than 100.*

<ins>Expected results</ins>:

There is ability to create a subtotal cart price rule with coupon to apply discount to subtotal including tax.

<ins>Actual results</ins>:

There are two options in cart rule conditions: *Subtotal* and *Subtotal (Excl. Tax)*, and whatever one is selected, the rule is applied only to subtotal excluding tax.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
