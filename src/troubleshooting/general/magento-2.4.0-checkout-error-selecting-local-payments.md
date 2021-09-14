---
title: "Adobe Commerce 2.4.0: Checkout error selecting local payments"
labels: 2.4.0,Braintree,Magento Commerce,Magento Commerce Cloud,billing address,checkout,known issues,payment method,Adobe Commerce,cloud infrastructure,on-premises,troubleshooting
---

This article talks about a solution for a known issue in Adobe Commerce during checkout where an error message appears when selecting a local payment method for some countries. This occurs for the countries: Belgium, Italy, Netherlands, Poland, and Spain.

The error message, "*There are currently no available payment methods. Please update your Billing Address.*" will appear, but the local payment methods will still appear and function correctly. A permanent fix will be available in Adobe Commerce 2.4.1.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

## Issue

<ins>Prerequisites</ins>:

* Adobe Commerce 2.4.0 is installed.
* Create one product and one category.
* Configure [Braintree Payment Method](https://devdocs.magento.com/guides/v2.4/graphql/payment-methods/braintree.html).

<ins>Steps to reproduce</ins>:

1. Navigate to the storefront.
1. Select items to add to the cart.
1. Proceed to checkout.
1. Fill out the address form with a valid address.
1. Proceed to the Review & Payments page.

<ins>Expected result</ins>:

The local payment methods should be displayed normally, without an error message.

<ins>Actual result</ins>:

The error message, "*There are currently no available payment methods. Please update your Billing Address.*" appears, but the local payment methods will still display and function correctly.

## Solution

The solution is to ignore the displayed error message and continue with payment as normal, as all local payment methods will function normally. The fix was available starting with Adobe Commerce version 2.4.1.

## Related reading

* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)
* [Adobe Commerce 2.4.0 known issue: returns edit page stops working when creating shipping label](https://support.magento.com/hc/en-us/articles/360046441312)
* [Adobe Commerce 2.4.0 known issue: refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332)
* [Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971)
