---
title: "MDVA-31006: Paypal Duplicate Orders 10415 error"
labels: 10415 error,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0,2.4.2,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,PayPal,duplicate,order,orders,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-31006 patch fixes the issue where using the PayPal Express checkout payment creates duplicate orders with a 10415 error. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.6 is installed. The issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

* Adobe Commerce (all deployment methods) 2.3.2 - 2.4.0

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The user is not being sent to the Adobe Commerce order success page, so they refresh the blank page, and the second order is placed, causing duplicate orders.

<ins>Prerequisites</ins>:

* Adobe Commerce is installed.
* PayPal Express checkout payment is configured.
* Log in to the Commerce admin. Go to **Stores** > **Configuration** > **Sales** > **Payment Methods** > select **Paypal Express Checkout** > **Configure** > **Advanced Settings** > **Skip Order Review Step** > *No*.

<ins>Steps to reproduce</ins>:

1. Log in as a user.
1. Select an item and click **Add to Cart**.
1. Click on the cart and click **Proceed to Checkout**.
1. Proceed to the PayPal Express window and make a payment.
1. You are redirected to the Adobe Commerce Order Review Page.
1. Press the **Place Order** button.
1. Emulate system error due to server infrastructure issues. The user will see a blank page.
1. Refresh the page.

<ins>Expected results</ins>:

* The customer is redirected to the Order Review page and sees an error message "*A successful payment transaction has already been completed. Please, check if the order has been placed.*"
* In the payment.log, which is located in `/var/log/payment.log`, there is an error 10415, but only one order was created.

<ins>Actual results</ins>:

* As the customer is not sent to the Adobe Commerce order success page, they refresh the blank page, and a second order is placed, so two duplicated orders are created.
* In the payment.log, which is located in `/var/log/payment.log`, there is an error 10415.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
