---
title: "MDVA-44100: All FPTs are assigned to the last product in shopping cart"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.14,FPT,products,shopping cart,taxes,configuration,2.4.3,2.4.3-p1,2.4.4
---

The MDVA-44100 patch solves the issue where all FPTs are assigned to the last product in the shopping cart. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.14 is installed. The patch ID is MDVA-44100. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.3 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

All FPTs are assigned to the last product in the shopping cart, and the FPT values for the rest of the products are reset.

<ins>Steps to reproduce</ins>:

1. Go to **Stores** > **Configuration** > **Sales** > **Tax** and set:
    * Enable FPT = Yes
    * Apply Tax To FPT = Yes
    * Include FPT In Subtotal = Yes
1. Go to **Stores** > **Attribute** > **Product**, and create a new attribute with type = Fixed Product Tax.
1. Add the attribute to an attribute set.
1. Create two products from the attribute set and configure the FPT attribute for your Country and State.
1. Add both items to the order.
1. Enter an address that requires FPT to be paid.
1. Place the order.
1. Check the items list on the order.

<ins>Expected results</ins>:

The FPTs are displayed under each product.

<ins>Actual results</ins>:

The FPT values from both items are shown under the second item.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
