---
title: "Magento 2.4.0: Checkout error selecting local payments"
labels: 2.4.0,Braintree,Magento Commerce,Magento Commerce Cloud,billing address,checkout,known issues,payment method
---

This article talks about a solution for known issue in Magento during checkout where an error message appears when selecting a local payment method for some countries. This occurs for the countries Belgium, Italy, Netherlands, Poland, and Spain. The error message, " *There are currently no available payment methods. Please update your Billing Address.* " will appear, but the local payment methods will still appear and function correctly. A permanent fix will be available in Magento 2.4.1. 

## Affected products and versions

* Magento Commerce version 2.4.0
* Magento Commerce Cloud version 2.4.0

## Issue

### Preconditions

* Magento 2.4.0 is installed.
* Create one product and one category.
* Configure [Braintree Payment Method](https://devdocs.magento.com/guides/v2.4/graphql/payment-methods/braintree.html) .

### Steps to reproduce

1. Navigate to the storefront.
1. Select items to add to the cart.
1. Proceed to checkout.
1. Fill out the address form a with valid address.
1. Proceed to the Review & Payments page.

### Expected result

The local payment methods should be displayed normally, without an error message.

### Actual result

The error message, " *There are currently no available payment methods. Please update your Billing Address.* " appears, but the local payment methods will still display and function correctly.

## Solution

The solution is to ignore the displayed error message, and continue with payment as normal, as all local payment methods will function normally. A fix will be available in Magento version 2.4.1, which is scheduled for release in Q4 1. 

## Related reading

* [Magento 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Magento 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)
* [Magento 2.4.0 known issue: returns edit page stops working when creating shipping label](https://support.magento.com/hc/en-us/articles/360046441312)
* [Magento 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332)
* [Magento 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971)

