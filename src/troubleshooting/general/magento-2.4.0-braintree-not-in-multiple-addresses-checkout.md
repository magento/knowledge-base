---
title: "Magento 2.4.0: Braintree not in Multiple Addresses checkout"
labels: 2.4.0,Braintree,Magento Commerce,Magento Commerce Cloud,address,checkout,known issues,payment,payment method,troubleshooting
---

This article provides a solution for a Magento 2.4.0 known issue where Braintree payment methods are not included in working with Multiple Addresses checkout. There is currently no solution, but a solution is planned for 2.4.1.

Note: Magento recommends using the [Magento Marketplace Braintree extension](https://marketplace.magento.com/paypal-module-braintree.html) for versions 2.3 and later in order to keep PSD compliance. The extension does not offer the multi-address checkout functionality.

## Affected products and versions

* Magento Commerce v2.4.0
* Magento Commerce Cloud v2.4.0

## Issue

Prerequisites: core Braintree integration is used.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Go to the storefront.
1. Log in as a customer.
1. Add a product to the cart.
1. Open your cart.
1. Press **View and Edit Cart** . ** ** 
1. Press **Check Out with Multiple Addresses** .
1. Press **Go to Shipping Information** .
1. Press **Continue to Billing Information** .

 <span class="wysiwyg-underline">Expected result:</span> 

Braintree is available as a payment method.

 <span class="wysiwyg-underline">Actual result:</span> 

Braintree is not available as a payment method.

## Solution

Do not enable multi-address options if using Braintree in Magento 2.4.0. A solution is planned for 2.4.1.

## Related reading

* KB [Magento 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332) 
* [Shipping labels creation known issue in Magento 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* KB [Magento 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332) 
* KB [Magento 2.4.0 known issue - Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032) 
* KB [Magento 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work) 

