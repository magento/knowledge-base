---
title: "MDVA-30837 Magento patch: minimum order amount for free shipping"
labels: 2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,QPT 1.0.7,QPT patches,Magento Commerce Cloud,configuration,coupon,quote,shipping,support tools,tax
---

The MDVA-30837 patch adds configuration options for the free shipping calculation so the user can configure the Minimum Order Amount to get Free Shipping based on the Subtotal (or Grand Total). This allows local customizations for tax and shipping methods. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.7 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.4-p2.
* The patch is also compatible with the following Magento versions: Magento Commerce Cloud 2.3.1 to 2.3.4-p2.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The patch MDVA-30837 adds the configuration setting to configure the **Minimum Order Amount** setting to get free shipping based on the Subtotal (or Grand Total):

* **Include Tax to Amount**  *Yes/No* in the Free Shipping method configuration.
* When **Include Tax to Amount** is set to *Yes* the minimum order amount is calculated as Subtotal + Tax - Discount.
* When **Include Tax to Amount** is set to *No* the minimum order amount is calculated as Subtotal - Discount.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Go to **Stores** > Settings > **Configuration** > **Sales** > **Tax** and set the following:
    * Tax Calculation Based on *Shipping Address* 
    * Enable Cross Border Trade: *No* 
    * Display Produce Prices in Catalog: *Excluding Tax* 
    * Display Shipping Prices: *Excluding Tax* 
    * Display Prices: *Excluding Tax* 
    * Display Subtotal: *Excluding Tax* 
    * Display Shipping Amount: *Excluding Tax* 
    * Display Gift Wrapping Prices: *Excluding Tax* 
    * Display Printed Card Prices: *Excluding Tax* 
    * Include Tax in Order Total: *Yes* 
    * Display Full Tax Summary: *Yes* 
1. Go to **Sales** > **Shipping Settings** > **Free Shipping** and set **Minimum Order Amount** = *30.* 
1. Go to **Marketing** > Promotions > **Cart Price Rules** and create a new price rule (for detailed steps refer to [Magento User Guide Create a Cart Price Rule](https://docs.magento.com/user-guide/marketing/price-rules-cart-create.html) ).
    * Coupon Code = *Specific Coupon.* 
    * Conditions: Subtotal equals or greater than $25.
    * Actions: Free Shipping = *For shipments with matching items* .
1. Create a product with the price $23.10.
1. Add the CA tax to the default tax rule.
1. Add this product to the cart.
1. Get a shipping quote - after taxes, the Grand Total = 25.01 and free shipping is applied.
1. Apply the coupon code - it will not be valid because the Subtotal (Excluding Tax) is $23.10.

 <span class="wysiwyg-underline">Expected result:</span> 

There is an additional configuration setting - Include Tax to Amount: *Yes* / *No* in Free Shipping method configuration:

* When Include Tax to Amount is set to *Yes* Minimum Order Amount is calculated as Subtotal + Tax - Discount.
* When Include Tax to Amount is set to *No* Minimum Order Amount is calculated as Subtotal - Discount.

 <span class="wysiwyg-underline">Actual result:</span> 

The Free Shipping price rule condition can only be based on the Subtotal, while the Free Shipping method can only be based on the Grand Total.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.