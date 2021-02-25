---
title: Magento 2.4.2: Braintree Venmo payment does not work
link: https://support.magento.com/hc/en-us/articles/360054662652-Magento-2-4-2-Braintree-Venmo-payment-does-not-work
labels: Magento Commerce Cloud,Magento Commerce,known issue,orders,2.4.2,Braintree Venmo payment
---

This article describes a known Magento Commerce 2.4.2 issue where orders are not generated when using Braintree Venmo during checkout. There is no resolution available at this time.

## Affected products and versions

* Magento Commerce 2.4.2
* Magento Commerce Cloud 2.4.2

## Issue

Precondition:

Enable Venmo payment in Braintree configuration.

Steps to reproduce:

1. On the storefront, add any item to the shopping cart.
1. Proceed to Checkout.
1. Select the appropriate shipping method.
1. Select Venmo as payment method.
1. Click Pay with Venmo.
1. Click Place order.

Actual results:  
The order is not created in Magento after the customer is redirected back to the Magento store from the Venmo app, and no error message appears. The order is created in Braintree.

Expected results:  
The order is created in Magento after the customer is redirected back to the Magento store from the Venmo app, and the order is created in Braintree, as expected.

## Solution

There is no resolution available at this time.