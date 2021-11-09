---
title: "Adobe Commerce 2.4.0: Braintree not in Multiple Addresses checkout"
labels: 2.4.0,Braintree,Magento Commerce,Magento Commerce Cloud,address,checkout,known issues,payment,payment method,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a workaround for an Adobe Commerce 2.4.0 known issue where Braintree payment methods are not included in working with Multiple Addresses checkout. Please note that the issue was fixed in Adobe Commerce 2.4.1.

Note: Adobe Commerce recommends using the [Commerce Marketplace Braintree extension](https://marketplace.magento.com/paypal-module-braintree.html) for versions 2.3 and later in order to keep PSD compliance. The extension does not offer the multi-address checkout functionality.

## Affected products and versions

* Adobe Commerce on-premises v2.4.0
* Adobe Commerce on cloud infrastructure v2.4.0

## Issue

<ins>Prerequisites</ins>:

The core Braintree integration is used.

<ins>Steps to reproduce</ins>:

1. Go to the storefront.
1. Log in as a customer.
1. Add a product to the cart.
1. Open your cart.
1. Press **View and Edit Cart**.
1. Press **Check Out with Multiple Addresses**.
1. Press **Go to Shipping Information**.
1. Press **Continue to Billing Information**.

<ins>Expected result</ins>:

Braintree is available as a payment method.

<ins>Actual result</ins>:

Braintree is not available as a payment method.

## Workaround

Do not enable multi-address options if using Braintree in Adobe Commerce 2.4.0. This issue was fixed in Adobe Commerce 2.4.1.

## Related reading in our support knowledge base

* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332)
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 known issue - Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
