---
title: "Magento 2.4.2: Braintree Venmo payment does not work"
labels: "2.4.2,Braintree Venmo payment,Magento Commerce,Magento Commerce Cloud,known issue,orders"
---

This article describes a known Magento Commerce 2.4.2 issue where orders are not generated when using Braintree Venmo during checkout. There is no resolution available at this time.

## Affected products and versions

* Magento Commerce 2.4.2
* Magento Commerce Cloud 2.4.2

## Issue

 <span class="wysiwyg-underline">Precondition</span> :

Enable Venmo payment in Braintree configuration.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. On the storefront, add any item to the shopping cart.
1. Proceed to **Checkout** .
1. Select the appropriate shipping method.
1. Select **Venmo** as payment method.
1. Click **Pay with Venmo** .
1. Click **Place order** .

 <span class="wysiwyg-underline">Actual results</span> :The order is not created in Magento after the customer is redirected back to the Magento store from the Venmo app, and no error message appears. The order is created in Braintree.

 <span class="wysiwyg-underline">Expected results</span> :The order is created in Magento after the customer is redirected back to the Magento store from the Venmo app, and the order is created in Braintree, as expected.

## Solution

There is no resolution available at this time.