---
title: "MDVA-39195: Add to Cart is inactive on Category Page"
labels: QPT patches,Quality Patches Tool,QPT,MQP,Support Tools,QPT 1.1.2,Magento,Adobe Commerce,on-premises,cloud infrastructure,Add to Cart,redirect,inactive,Category Page,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-39195 patch solves the issue where the **Add to Cart** button is inactive on the Category Page when the redirect to cart is enabled. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-39195. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The **Add to Cart** button is inactive on the Category Page when the redirect to cart is enabled.

<ins>Steps to reproduce</ins>:

1. Go to **Stores** > Settings > **Configuration** > **Sales** > **Checkout**.
1. Expand the **Shopping Cart** section.
1. Set the **After Adding a Product Redirect to Shopping Cart** to Yes.
1. Visit the Category Page.

<ins>Expected results</ins>:

**Add to Cart** is active on Category Page.

<ins>Actual results</ins>:

**Add to Cart** button is inactive on Category Page.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
