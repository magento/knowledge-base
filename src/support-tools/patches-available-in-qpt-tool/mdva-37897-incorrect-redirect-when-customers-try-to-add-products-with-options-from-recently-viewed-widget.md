---
title: "MDVA-37897: Incorrect redirect when adding products from Recently Viewed"
labels: QPT patches,Quality Patches Tool,QPT,QPT,Quality Patches Tool,Support Tools,QPT 1.1.1,Magento Commerce,Magento Commerce Cloud,Adobe Commerce,on-premise,cloud infrastructure,Magento,redirect,Recently Viewed,widget,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-37897 patch solves the issue of incorrect redirect when users try to add products with options from the Recently Viewed widget. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.1 is installed. The patch ID is MDVA-37897. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on our cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a user tries to add a product from the Recently Viewed section which has required options to be selected, the user is redirected to the product listing page instead of the product details page.

<ins>Steps to reproduce</ins>:

1. Create a simple product with customizable options (Type: Radio Button).
1. Configure the Recently Viewed widget to show products.
1. Visit products that have customizable options so that they show up in the Recently Viewed widget.
1. Click **Add to Cart** on one of the products in the Recently Viewed widget.

<ins>Expected results</ins>:

You are redirected to the product details page to choose the options.

<ins>Actual results</ins>:

You are redirected to the product listing page.

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:

* Adobe Commerce on-premise: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on our cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about quality patches for Adobe Commerce, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
