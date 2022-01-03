---
title: "MDVA-30782: dynamic block is displayed regardless of cart rule"
labels: 2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,cart_rules,dynamic block,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30782 patch fixes the issue where a dynamic block is displayed regardless of the cart rule. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p1

**Compatible with Adobe Commerce versions:**

 Adobe Commerce (all deployment methods) 2.3.5 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The dynamic block is displayed on the page even when the related catalog price rule condition is not satisfied.

<ins>Steps to reproduce</ins>:

1. Create two products.
1. Create a catalog price rule applicable only for one of these products.
1. Create a dynamic block and assign the newly created catalog price rule to it.
1. Create a widget with the following parameters:
    * Type = Dynamic Block Rotator
    * Dynamic Blocks to Display = Specified Dynamic Blocks
    * Specify Dynamic Blocks = block form step \#3Layout Updates (can be any)
    * Display on = All Product Types
    * Container = Product auxiliary info
1. Perform reindex and flush the cache.
1. Check both product pages for dynamic block form step \#3

<ins>Expected results</ins>:

Dynamic block appears on the first product page only.

<ins>Actual results</ins>:

Dynamic block appears on both product pages. With Dynamic Blocks to Display = Catalog Price Rule Related on step \#3, the result is the same.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
