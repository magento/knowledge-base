---
title: MDVA-37916: Paypal Payment Advance not returning to confirmation page
labels:
---

The MDVA-37916 Magento patch solves/fixes the issue where ***Paypal Payment Advance not returning to confirmation page.*** This patch is available when the Magento Quality Patch (MQP) tool 1.0.25 is installed. The patch ID is MDVA-37916. Please note that the issue is scheduled to be fixed in Magento 2.4.4.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.6-p1

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.5-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue
***The SameSite=LAX for PHPSESSID makes unavailable this cookie and session inside iframe. PayPal redirects customer inside iframe and can't get orderId from session.***

<ins>Steps to reproduce</ins>:

1. Add product to cart and navigate the payment step of the checkout page.
1. Select "Credit Card (Payflow Advanced)" payment option.
1. Click "Continue" button to bring up the iframe with the payment form.
1. Fill the payment form with sandbox credit card details.
     * Card number: 4444 3333 2222 1111 or 4111 1111 1111 1111
     * Expiration date: 12/23
     * CSC: 123
1. Click "Pay Now" button.

<ins>Expected results</ins>:
***After the payment is processed (and no payment error), the customer is redirected to the Order Confirmation page.***

<ins>Actual results</ins>:
1. The customer is NOT redirected to the Order Confirmation page.
1. No payment error (means the payment was successful).
1. But the order has been created in Magento.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
