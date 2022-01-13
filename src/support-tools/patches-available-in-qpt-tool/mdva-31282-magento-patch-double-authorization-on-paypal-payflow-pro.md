---
title: "MDVA-31282: double authorization on Paypal PayFlow Pro"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,PayFlow Pro,double authorization,fraud filter,support tools,Adobe Commmerce,cloud infrastructure,on-premises
---

The MDVA-31282 patch solves the issue when double authorizations occur on Paypal PayFlow Pro in Adobe Commerce. The double authorizations also have the effect of bypassing PayFlow Pro's fraud filters and doubling transaction fees. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.2 - 2.3.3 and 2.3.5 - 2.3.6

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Double authorizations occur in PayPal PayFlow Pro in Adobe Commerce that have the effect of bypassing PayFlow Pro's fraud filters and doubling transaction fees.

<ins>Prerequisites</ins>:

Configure PayPal PayFlow Pro payment method.

<ins>Steps to reproduce</ins>:

1. Go to the frontend as a guest customer.
1. Add products to **Shopping Cart** from product pages.
1. Proceed to **Checkout**.
1. Specify **Shipping address** as an address in Country \#1 (Example: UK address), and select a shipping method.
1. Select **PayPal PayFlow Pro** as the payment method. Specify the **Billing address** as an address in Country \#2 (Example: USA address).
1. Enter credit card data, and place the order.
1. Navigate to **Sales** > **Orders** in admin and observe created order.

<ins>Expected results</ins>:

* The Payment Information block displays: *"Triggered Fraud Filters: RESPMSG: Under review by Fraud Service*. *Order is in Suspected Fraud status"*.
* Paypal PayFlow Pro shows a single authorization transaction as expected.

<ins>Actual results</ins>:

* The Payment Information block displays: *"Triggered Fraud Filters: RESPMSG: Under review by Fraud Service*. *Order is in Processing status"*.
* Paypal PayFlow Pro shows double authorization transactions.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
