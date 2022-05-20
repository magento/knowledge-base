---
title: Payment methods not displayed on checkout with multiple addresses
labels: 2.x.x,Cybersource,Magento Commerce,Magento Commerce Cloud,multishipping,payments,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article explains that most of the payment methods are not displayed on checkout when multiple shipping addresses are specified, because the functionality is only implemented for Cybersource.

## Affected products and versions

* Adobe Commerce on-premises 2.x.x
* Adobe Commerce on cloud infrastructure 2.x.x

>![info]
>
>The core Adobe Commerce Cybersource payment integration is deprecated since 2.3.3 and will be completely removed in 2.4.0. Use the [official extension](https://marketplace.magento.com/cybersource-global-payment-management.html) from marketplace instead.

## Issue

<ins>Prerequisites</ins>: In the Commerce Admin, enable and configure PayPal and Cybersource payment methods, and enable Multishipping for your store.

<ins>Steps to reproduce</ins>:

1. On the storefront, add multiple products to the cart.
1. Go to the shopping cart page.
1. Click **Check Out with Multiple Addresses**.
1. Log in or create account.
1. Split up products between the addresses on the Ship to Multiple Addresses page.
1. Click **Go to Shipping Information**.
1. Select shipping methods for each shipment.
1. Click **Continue to Billing Information**.

<ins>Expected result</ins>: PayPal and Cybersource are available as payment options.

<ins>Actual result</ins>: Only Cybersource appears as available payment option.

## Cause

Currently Cybersource is the only supported live payment method for multishipping checkout, starting from version 2.2.4. Support for multishipping will likely be built for each payment method one by one. No exact dates or release numbers can be provided at the moment.
