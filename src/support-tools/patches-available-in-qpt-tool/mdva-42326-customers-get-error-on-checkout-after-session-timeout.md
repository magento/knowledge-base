---
title: "MDVA-42326: Customers get error on checkout after session timeout"
labels: QPT patches,Quality Patches Tool,QPT,MQP,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,checkout,shopping cart,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,QPT 1.1.8
---

The MDVA-42326 patch solves the issue where the customers get an error on checkout after the session timeout, even if the Persistent Shopping Cart is enabled. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.8 is installed. The patch ID is MDVA-42326. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.6 - 2.3.7-p2, 2.4.1 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Customers get an error on checkout after the session timeout, even if the Persistent Shopping Cart is enabled.

<ins>Prerequisites</ins>:

1. Go to **Config** > **General** > **Web** > **Default Cookie Settings** > **Cookie Lifetime** and set to **120**.
1. Go to **Config** > **Customers** > **Customer Configuration** > **Online Customers Options** and set both values to **2**.
1. Go to **Config** > **Customers** > **Persistent Shopping Cart** and set to **Enable**.
1. Go to **Config** > **Sales** > **Payment Methods** and turn off all payment methods except **Check/Money Order** (it should be enabled).

<ins>Steps to reproduce</ins>:

1. Log in as a customer and add some products to the cart.
1. Check the shopping cart.
1. Wait for two minutes (set in precondition); the session should timeout.
1. Click **Go to checkout** and do not refresh the page.
1. Checkout as a guest, fill shipping address and choose a shipping method.
1. Click **Next**.
1. On the **Review & Payments** page, click **Place Order**. Since only one payment method is allowed, the customer should be able to place the order without selecting the payment method.

<ins>Expected results</ins>:

The customer should be able to place the order.

<ins>Actual results</ins>:

The customer gets the following error: *Failed address validation: Email has a wrong format*.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
