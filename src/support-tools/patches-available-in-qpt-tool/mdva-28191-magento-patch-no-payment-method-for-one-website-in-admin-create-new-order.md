---
title: "MDVA-28191 Magento patch: No payment method for one website in Admin Create New Order"
labels: 2.3.3,2.3.2-p2,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.5,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,order,payment method,support tools
---

The MDVA-28191 Magento patch fixes the issue where a payment method is not loading in the Admin **Create New Order** for one website, although payment methods may be showing for other websites.  This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) tool version 1.0.5 is installed.

## Affected products and versions

Magento Commerce and Magento Commerce Cloud 2.3.3 to 2.4.1 (including 2.3.5-p1).

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When creating an order from the backend Magento creates two quotes, one is inactive and the other is active. But the session holds the inactive quote id.

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. Go to **Admin Panel** > **Sales** > **Orders** and click the **Create New Order** button.    
1. Choose the customer you want to create the order for.
1. If your store has multiple views, choose the store view where the order is to be placed, on the **Create New Order** page for the user you selected.
1. Add products from the **Customer's Activities** section or from the catalog by clicking **Add Products** . Scroll down the page to complete the following sections as needed for the order:
    * Apply Coupon Codes
    * Payment Method
    * Shipping Method
    * Order Comments
 <span class="wysiwyg-underline">Expected result:</span> Payment methods should be loaded in the Admin for all websites.

 <span class="wysiwyg-underline">Actual result:</span>

No payment method available (neither is the message " *No Payment Information Required* " displayed) for this website, although payment methods may show when testing orders for other websites.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
