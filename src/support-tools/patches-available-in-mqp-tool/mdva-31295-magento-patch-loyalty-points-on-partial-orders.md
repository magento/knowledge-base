---
title: "MDVA-31295 Magento Patch: Loyalty points on partial orders"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.1,QPT 1.0.8,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,order,rewards points,support tools,tax
---

The MDVA-31295 Magento patch fixes the issue where reward points are not calculated correctly when a partial order completes and items are taxed. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.8 is installed. Please note that the issue will be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce 2.3.0.
* The patch is also compatible with the following Magento versions: Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Rewards are not applied to customer's accounts when the order is complete (partially shipped) and items are taxed. When the items are not taxed, the rewards are added to the customer's accounts successfully.

 <span class="wysiwyg-underline">Step to reproduce</span> 

1. Log in to storefront as a customer.
1. Add two products to the cart.
1. Go to checkout, set shipping address that has tax and place order.
1. In admin, go to the recently placed order.
1. Click **Invoice** and set **Qty to Invoice** to 0 for one of the items and click **Update Qty** . Submit invoice.
1. Click Ship and set **Qty to Ship** to 0 for the item that was not invoiced. Click **Submit Shipment** .
1. Click Cancel order. The status will be set as Complete.
1. In admin go to **Customers** > Choose customer purchase made before > **Reward Points** > **Reward Points History** .
1. Check earned reward points for the placed order.

 <span class="wysiwyg-underline">Expected result</span> The reward points should be calculated for taxable orders when a partial order completes.

 <span class="wysiwyg-underline">Actual result</span> Reward points are not calculated for a taxable order when a partial order completes.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.