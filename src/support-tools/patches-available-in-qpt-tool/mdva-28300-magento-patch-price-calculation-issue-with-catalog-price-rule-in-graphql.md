---
title: "MDVA-28300: price calculation issue with catalog price rule in GraphQL"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,GraphQL,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,price calculation,support tools,Adobe Commerce,on-premises,cloud infrastructure
---

>![warning]
>
>A new patch called MDVA-33975 fixes GraphQL price calculation issues. MDVA-28300 is depreciated and it is recommended that you apply the patch MDVA-33975. To access this patch, refer to [MDVA-33975: GraphQL price calculations](https://support.magento.com/hc/en-us/articles/360055782351).

The MDVA-28300 patch fixes the issue where GraphQL request doesn't reflect the price changes from catalog price rules. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.6 is installed. Please note that the issue was fixed in Adobe Commerce version 2.3.6.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on-premises 2.3.5-p1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premsies and Adobe Commerce on cloud infrastructure 2.3.0 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a catalog price rule is applied to a certain customer group, items prices in the cart and order total are not calculated correctly in GraphQL.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create a new customer account and change its Customer Group to Wholesale.
1. Create a new Catalog rule in **Marketing** > **Promotions** > **Catalog Price Rules** with the following parameters:
    * Customer Groups: WholesaleActions:
    * Apply: *Apply as percentage of original*
    * Discount: *50*


1. Create a new product with price=100.
1. Log in to the frontend using the previously created customer account (if you were already logged in, log out and log in again).
1. Add the product to the cart. The price of the product is 50 (regular price 100) and Order Total: 55 (50 + 5 of shipment cost).
1. Execute the GraphQL API call described in [customerCart query](https://devdocs.magento.com/guides/v2.3/graphql/queries/customer-cart.html) in our developer documentation.

 <span class="wysiwyg-underline">Expected result:</span>

Both API and frontend have the same order total with the discount introduced by the catalog rule being applied.

 <span class="wysiwyg-underline">Actual result:</span>

The total of the order doesn't apply the catalog rule discount.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the Patches available in QPT section.
