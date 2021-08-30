---
title: "MDVA-31282 Magento patch: double authorization on Paypal PayFlow Pro"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,PayFlow Pro,double authorization,fraud filter,support tools
---

The MDVA-31282 patch solves the issue when double authorizations occur on Paypal PayFlow Pro in Magento. The double authorizations also have the effect of bypassing PayFlow Pro's fraud filters and doubling transaction fees. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.7 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.5-p2.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.2 - 2.3.3 and 2.3.5 - 2.3.6.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

Double authorizations occur in PayPal PayFlow Pro in Magento that have the effect of bypassing PayFlow Pro's fraud filters and doubling transaction fees.

 <span class="wysiwyg-underline">Prerequisite</span> :

Configure PayPal PayFlow Pro payment method.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Go to the frontend as a guest customer.
1. Add products to **Shopping Cart** from product pages.
1. Proceed to **Checkout** .
1. Specify **Shipping address** as an address in Country \#1 (Example: UK address), and select shipping method.
1. Select **PayPal PayFlow Pro** as payment method. Specify the **Billing address** as an address in Country \#2 (Example: USA address).
1. Enter credit card data, and place order.
1. Navigate to **Sales > Orders** in admin, and observe created order.

 <span class="wysiwyg-underline">Expected results:</span> 

* The Payment Information block displays: *"Triggered Fraud Filters: RESPMSG: Under review by Fraud Service*  *Order is in Suspected Fraud status"* 
* Paypal PayFlow Pro shows a single authorization transaction as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

* The Payment Information block displays: *"Triggered Fraud Filters: RESPMSG: Under review by Fraud Service*  *Order is in Processing status"* 
* Paypal PayFlow Pro shows double authorization transactions.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.