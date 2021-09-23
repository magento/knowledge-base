---
title: "Adobe Commerce 2.4.2 B2B: discount remains pay method change"
labels: 2.4.2,B2B,Magento Commerce,Magento Commerce Cloud,discount,known issue,payment method,Adobe Commerce,cloud infrastructure
---

This article describes a known Adobe Commerce 2.4.2 B2B issue where a payment method-tied discount persists after a payment method change at checkout. There is no resolution available at this time.

## Affected products and versions

* Adobe Commerce 2.4.2
* Adobe Commerce on cloud infrastructure 2.4.2
* B2B for Adobe Commerce 1.3.1


## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Create a cart **Price Rule** that is tied to a payment method (Example: Paypal users get a 20% discount.).
1. Create a Purchase Order (PO) and select Paypal as the payment method. The discount is applied.
1. The PO is approved.
1. Go to the payment page to complete the order.
1. Select a different payment method.

 <span class="wysiwyg-underline">Actual results</span> :

The payment method discount remains applied to the order total.  No error message is displayed.The store owner will be able to see this occurred by checking order history.

 <span class="wysiwyg-underline">Expected results</span> :The payment method discount is removed from the order total, as expected.

## Solution

There is no resolution available at this time.
