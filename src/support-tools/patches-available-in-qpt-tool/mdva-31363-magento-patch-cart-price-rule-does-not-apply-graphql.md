---
title: "MDVA-31363 patch: Cart price rule does not apply (GraphQL)"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.1,GraphQL,QPT 1.0.9,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart price rule,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

>![warning]
>
>A new patch called MDVA-33975 fixes GraphQL price calculation issues. MDVA-31363 is depreciated and it is recommended that you apply the patch MDVA-33975. To access this patch, refer to [MDVA-33975 patch: GraphQL price calculations](https://support.magento.com/hc/en-us/articles/360055782351).

The MDVA-31363 patch fixes the issue where the cart price rule with coupon does not apply via GraphQL when the 'Fixed amount discount for whole cart' action is used. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.9 is installed. The issue is scheduled to be fixed in Adobe Commerce version 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.0

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.2 - 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Recalculating quote totals before giving a response about quote prices causes applied rules to be lost.

<ins>Steps to reproduce</ins>:

1. Create a simple product.
1. Create a cart price rule with a fixed amount discount for the whole cart.
1. Create a new shopping cart using GraphQL.
1. Save the card\_id from the response and add the product from step 1 to the cart using GraphQL.
1. Activate the cart price rule by adding the coupon code to cart using GraphQL.
1. Check price in response.

<ins>Expected results</ins>:

Discount is applied.

<ins>Actual results</ins>:

Discount is not applied.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
