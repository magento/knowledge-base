---
title: "MDVA-43605: Order data returns negative values for row totals when using Rest API"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.14,Rest API,order data,row totals,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.4
---

The MDVA-43605 patch fixes the issue where the order data returns negative values for row totals when using Rest API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.14 is installed. The patch ID is MDVA-43605. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.1 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The order data returns negative values for row totals when using Rest API.

<ins>Steps to reproduce</ins>:

1. Enable free shipping.
1. Navigate to **Configuration** > **Catalog** > **Price** > and set Catalog Price Scope = Website.
1. Navigate to **Configuration** > **Sales** > **Tax** and update:
    * Tax Class For Shipping = Taxable Goods
    * Calculation Settings:
        * Catalog Price = Including Tax
        * Shipping Price = Including Price
        * Applying Discount On Prices = Including Tax
    * Price Display Settings: Including Tax (all fields)
    * Shopping Cart Display Settings: Including Tax (all fields)
    * Orders, Invoices, Credit Memos:
        * Display shipping Amount = Including Tax
1. Create a tax rate for US (State = '*'), Rate Percent = 24.00
1. Create a Tax Rule with the Tax Rate above.
1. Create a cart price rule with a specific coupon, and Discount = $50 of the Fixed amount for the whole cart.
1. Create four products with the following prices: $8.90, $5.90, $6.90, and $5.95.
1. Create an admin order including four of these products using the coupon code created in the previous step. Use the free shipping.
1. Payment should not be required as the coupon code covers the cart total.
1. Retrieve the order that was just created via Rest API endpoint:
    ```json
    GET rest/V1/orders/1
    ```

<ins>Expected results</ins>:

The values of `base_row_total` and `base_row_total_incl_tax` in the response are zero.

<ins>Actual results</ins>:

The `base_row_total` and `base_row_total_incl_tax` fields in the response have negative values.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
