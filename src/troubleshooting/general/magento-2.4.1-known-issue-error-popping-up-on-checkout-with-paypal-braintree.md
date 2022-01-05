---
title: "Adobe Commerce 2.4.1 known issue: error popping up on Checkout with PayPal Braintree"
labels: 2.4.1,Magento Commerce,Magento Commerce Cloud,PayPal Braintree,known issues,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article describes a known Adobe Commerce 2.4.1 issue, where an error message pops-up and disappears on the Billing step of Checkout if PayPal Braintree payment is used and multiple addresses shipment selected.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.1
* Adobe Commerce on-premises 2.4.1

## Issue

An error message pops-up and disappears on the Billing step of Checkout if PayPal Braintree payment is used and multiple addresses shipment selected.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. On the storefront, log in as a customer (optionally could be a guest checkout, if it is enabled in Admin).
1. Add a product to the cart.
1. Click to open the cart preview.
1. Click **View and Edit Cart**.
1. On the Cart page, click **Check Out with Multiple Addresses**.
1. Click **Go to Shipping Information** and specify the addresses.
1. Click **Continue to Billing Information**.
1. Select **PayPal Braintree** and click the **PayPal** button.
1. In the pop-up window, click **Agree & Pay**.

<span class="wysiwyg-underline">Expected result:</span>

The order is placed without any error.

<span class="wysiwyg-underline">Actual result:</span>

The order is placed, but with an error. The *PayPal Checkout could not be initialized. Please contact store owner*.  error is displayed for a second and disappears.

## Fix

Since the order placing is not blocked, there is no need to perform workaround steps.
