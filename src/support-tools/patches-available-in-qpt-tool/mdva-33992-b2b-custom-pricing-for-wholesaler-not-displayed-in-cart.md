---
title: "MDVA-33992: B2B custom pricing for wholesaler not displayed in cart"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,B2B,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,custom price,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33992 patch fixes the issue where the custom pricing for a B2B customer is not reflected when a product is added to a cart. This patch is available when the Quality Patches Tool (QPT) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.1 with B2B

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0-2.4.1-p1 with B2B

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Custom pricing for a B2B customer is not reflected when a product is added to a cart.

<ins>Steps to reproduce</ins>:

The issue is reproducible for B2B version with Shared Catalog enabled.

1. Create a B2B company with a custom shared catalog assigned.
1. Create a product in the company's custom catalog with a custom price (tier price).
1. As a B2B customer, check that the custom product price is displayed in the catalog.
1. As a B2B customer, add the product to the cart.

<ins>Expected result</ins>:

The correct price is displayed in the shopping cart, and matches the price in the catalog.

<ins>Actual result</ins>:

The custom price disappears, and the regular price from the default catalog is displayed.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
