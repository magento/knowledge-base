---
title: "MDVA-44505: GraphQL Applying Reward Points does not update Grand Total"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.14,GraphQL,Reward Points,update,Grand Total,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-44505 patch solves the issue where GraphQL Applying Reward Points does not update Grand Total. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.14 is installed. The patch ID is MDVA-44505. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.1 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

GraphQL applying Reward Points does not update Grand Total.

<ins>Steps to reproduce</ins>:

1. Configure reward points.
1. Create a cart and apply some points.
1. Call the `GetCart` query from `GraphQL` endpoint and retrieve your cart.
1. Look at the grand total entry.
1. Now check the same customer's cart totals using the rest API /rest/V1/carts/mine/totals.

<ins>Expected results</ins>:

GraphQL query for carts show correct grand total, considering rewards points same as done in rest API calls.

<ins>Actual results</ins>:

GraphQL results don't consider reward points when showing totals.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
