---
title: "Adobe Commerce 2.4.2: Braintree Venmo payment does not work"
labels: troubleshooting,2.4.2,Braintree Venmo payment,Adobe Commerce,Magento,cloud infrastructure,known issue,orders,on-premises
---

This article describes a known Adobe Commerce 2.4.2 issue where orders are not generated when using Braintree Venmo during checkout. There is no resolution available at this time.

## Affected products and versions

* Adobe Commerce (all deployment methods) 2.4.2

## Issue

 <span class="wysiwyg-underline">Precondition</span> :

Enable Venmo payment in Braintree configuration.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. On the storefront, add any item to the shopping cart.
1. Proceed to **Checkout**.
1. Select the appropriate shipping method.
1. Select **Venmo** as payment method.
1. Click **Pay with Venmo**.
1. Click **Place order**.

 <span class="wysiwyg-underline">Actual results</span>:

 The order is not created in Adobe Commerce code after the customer is redirected back to the store from the Venmo app, and no error message appears. The order is created in Braintree.

 <span class="wysiwyg-underline">Expected results</span>:

 The order is created in Adobe Commerce after the customer is redirected back to the store from the Venmo app, and the order is created in Braintree, as expected.

## Solution

There is no resolution available at this time.
