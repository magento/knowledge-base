---
title: Magento 2.4.2 B2B: discount remains pay method change
labels: Magento Commerce Cloud,Magento Commerce,known issue,discount,B2B,payment method,2.4.2
---

This article describes a known Magento Commerce 2.4.2 B2B issue where a payment method-tied discount persists after a payment method change at checkout. There is no resolution available at this time.

## Affected products and versions

* Magento Commerce 2.4.2
* Magento Commerce Cloud 2.4.2
* Magento B2B version 1.3.1

## Issue

Steps to reproduce:

1. Create a cart Price Rule that is tied to a payment method (Example: Paypal users get a 20% discount.).
1. Create a Purchase Order (PO) and select Paypal as the payment method. The discount is applied.
1. The PO is approved.
1. Go to the payment page to complete the order.
1. Select a different payment method.

Actual results:

The payment method discount remains applied to the order total.  No error message is displayed.  
The store owner will be able to see this occurred by checking order history.

Expected results:  
The payment method discount is removed from the order total, as expected.

## Solution

There is no resolution available at this time.