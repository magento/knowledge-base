---
title: Magento 2.4.1 known issue: error popping up on Checkout with PayPal Braintree  
labels: 2.4.1,Magento Commerce,Magento Commerce Cloud,PayPal Braintree,known issues,troubleshooting
---

This article describes a known Magento 2.4.1 issue, where an error message pops-up and disappears on the Billing step of Checkout, if PayPal Braintree payment is used and multiple addresses shipment selected. 

## Affected products and versions

* Magento Commerce Cloud 2.4.1
* Magento Commerce 2.4.1

##  Issue

An error message pops-up and disappears on the Billing step of Checkout, if PayPal Braintree payment is used and multiple addresses shipment selected. 

Steps to reproduce:

1. On the storefront, log in as a customer. (optionally could be a guest checkout, if it is enabled in Admin)
1. Add a product to the cart. 
1. Click to open the cart preview.
1. Click View and Edit Cart.
1. On the Cart page, click Check Out with Multiple Addresses.
1. Click Go to Shipping Information and specify the addresses. 
1. Click Continue to Billing Information. 
1. Select PayPal Braintree and click the PayPal button.
1. In the pop-up window click Agree &amp; Pay.

Expected result:

The order is placed without any error. 

Actual result: 

The order is placed, but with an error. The _PayPal Checkout could not be initialized. Please contact store owner_.  error is displayed for a second and disappears. 

## Fix

Since the order placing is not blocked, there is no need to perform workaround steps. The issue is scheduled to be fixed in Magento Commerce 2.4.2.