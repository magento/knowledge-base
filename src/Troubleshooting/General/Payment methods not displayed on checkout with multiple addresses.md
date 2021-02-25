---
title: Payment methods not displayed on checkout with multiple addresses
link: https://support.magento.com/hc/en-us/articles/360029360451-Payment-methods-not-displayed-on-checkout-with-multiple-addresses
labels: Magento Commerce Cloud,Magento Commerce,payments,troubleshooting,Cybersource,multishipping,2.x.x
---

This article explains that most of the payment methods are not displayed on checkout when multiple shipping addresses are specified, because the functionality is only implemented for Cybersource.

### Affected products and versions

* Magento Commerce, Magento Commerce Cloud
* 2.x.x

<p class="info">The core Magento Cybersource payment integration is deprecated since 2.3.3 and will be completely removed in 2.4.1. Use the <a href="https://marketplace.magento.com/cybersource-global-payment-management.html">official extension</a> from marketplace instead.</p>

## Issue

Prerequisites: In the Magento Admin, enable and configure PayPal and Cybersource payment methods, and enable Multishipping for your store. 

Steps to reproduce:

1. On the storefront, add multiple products to the cart.
1. Go to the shopping cart page.
1. Click Check Out with Multiple Addresses.
1. Log in or create account.
1. Split up products between the addresses on the Ship to Multiple Addresses page.
1. Click Go to Shipping Information.
1. Select shipping methods for each shipment.
1. Click Continue to Billing Information.

Expected result  
PayPal and Cybersource are available as payment options.

Actual result  
Only Cybersource appears as available payment option.

## Cause 

Currently Cybersource is the only supported live payment method for multishipping checkout, starting from version 2.2.1. Support for multishipping will likely be built for each payment method one by one. No exact dates or release numbers can be provided at the moment.