---
title: "MDVA-36138: free shipping rule not applied cart multiple items"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.21,QPT patches,Magento Commerce,Magento Commerce Cloud,cart_rules,coupon,price,shipping,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-36138 patch fixes the issue where when there are multiple items in the cart, the matching SKU in the Free Shipping is not getting free shipping applied to it. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-36138. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.4

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.2 and above

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

If a free shipping rule is applied to only specific items, the discount doesn't apply when there are other items in the cart.

<ins>Steps to reproduce</ins>:

1. Create simple products - simple1 and simple2.
1. Configure USPS (or any online shipping method):

    * Allowed Methods: Priority Mail (one method selected for the purpose of not having a long list of methods in cart and checkout).
    * Free Method: Priority Mail.

1. Create a shopping cart rule:

    * Specify coupon code
    * Conditions tab: leave empty
    * Actions tab:

    `Condition: SKU is simple1`
    `Free Shipping: For matching items only`

1. Add simple1 to the cart.
1. Apply the coupon code.
1. Add simple2 to the cart.

<ins>Expected results</ins>:

* simple1 - should have free shipping.
* simple2 - shipping should be paid.

<ins>Actual results</ins>:

The shipping price includes simple1 and simple2.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
