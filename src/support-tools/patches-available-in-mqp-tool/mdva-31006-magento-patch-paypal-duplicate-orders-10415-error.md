---
title: "MDVA-31006 Magento patch: Paypal Duplicate Orders 10415 error"
labels: 10415 error,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0,2.4.2,MQP 1.0.6,MQP patches,Magento Commerce,Magento Commerce Cloud,PayPal,duplicate,order,orders,support tools
---

The MDVA-31006 Magento patch fixes the issue where using the PayPal Express checkout payment creates duplicate orders with a 10415 error. This patch is available in the [Magento Quality Patches (MQP)](https://support.magento.com/hc/en-us/articles/360047139492) tool version 1.0.6. The issue will be fixed in 2.4.2.

## Affected products and versions

* This patch is compatible with the following Magento versions and editions:Magento Commerce 2.3.2-2.4.0 and Magento Commerce Cloud 2.3.2-2.4.0

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

The user is not being sent to the Magento order success page, so they refresh the blank page and the second order is placed, causing duplicate orders.

 <span class="wysiwyg-underline">Steps to reproducePrerequisites</span> 

* Magento is installed.
* PayPal Express checkout payment is configured.
* Log in to Magento admin. Go to **Stores** > **Configuration** > **Sales** > **Payment Methods** > select **Paypal Express Checkout** > **Configure** > **Advanced Settings** > **Skip Order Review Step** > *No.* 

1. Log in as a user.
1. Select an item and click **Add to Cart** .
1. Click on the cart and click **Proceed to Checkout** .
1. Proceed to the PayPal Express window and make a payment.
1. You are redirected to the Magento Order Review Page.
1. Press the **Place Order** button.
1. Emulate system error due to server infrastructure issues. The user will see a blank page.
1. Refresh the page.

 <span class="wysiwyg-underline">Expected result:</span>  

* The customer is redirected to the Order Review page and sees an error message " *A successful payment transaction has already been completed. Please, check if the order has been placed.* "
* In the payment.log which is located in `/var/log/payment.log` there is an error 10415, but only one order was created.

 <span class="wysiwyg-underline">Actual result:</span> 

* As the customer is not sent to the Magento order success page, they refresh the blank page, and a second order is placed, so two duplicated orders are created.
* In the payment.log which is located in `/var/log/payment.log` there is an error 10415.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.