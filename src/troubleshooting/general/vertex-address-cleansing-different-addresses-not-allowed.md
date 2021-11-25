---
title: "Vertex Address Cleansing: different addresses not allowed"
labels: 2.3.5-p1,2.4.0,Magento Commerce,Magento Commerce Cloud,Vertex,address,billing,checkout,how to,known issues,shipping,Adobe Commerce,cloud infrastructure,on-premises
---

This article talks about the solution for the issue where when the user tries to enter a **different** billing and shipping address, with Vertex address validation enabled, the storefront will not let the user enter it.

## Affected products and versions

* Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.5-p1

## Issue

<ins>Steps to reproduce</ins>:

1. Go to Admin > **Stores** > **Configuration** > **Sales** > **Address Cleansing**.
1. Select *Enabled* from the **Use Vertex Address Cleansing** drop-down and **Save Config**.
1. Go to the frontend as a guest and add a product to the cart.
1. Click on the Cart icon and **Proceed to Checkout**.
1. Fill in the address fields.
1. Select desired **Shipping Method** and click **Next**.
1. Click on the **Next** button again.
1. Uncheck **My billing and shipping address** **are the same**, and enter a new billing address (different to Address).
1. Click the **Update** button, then click **Update address**.

<ins>Expected results</ins>:

The user sees different billing and shipping addresses.

<ins>Actual results</ins>:

When the user hits update, the billing and shipping addresses revert to being the same.

## Cause

Vertex address verification has failed.

## Solution

Disable Vertex Address verification or upgrade to 2.4.0.

## Related reading

* [Adobe Commerce 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
* [Adobe Commerce 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout](https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout)
* [Adobe Commerce 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
* [Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout)
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work)
* [Adobe Commerce 2.4.0 known issue - Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032-Magento-2-4-0-known-issue-Export-Tax-Rates-does-not-work-)
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332-Magento-2-4-0-known-issue-raw-message-data-display-on-storefront)
* [Adobe Commerce 2.4.0 known issue: missing "Refund" label in Klarna](https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna)
* [Adobe Commerce 2.4.0 known issue: two buttons missing on Create New Order page in Admin](https://support.magento.com/hc/en-us/articles/360047481431-Magento-2-4-0-known-issue-two-buttons-missing-on-Create-New-Order-page-in-Admin)
* [Adobe Commerce 2.4.0 known issue: when Braintree is enabled, Venmo partial invoice issue](https://support.magento.com/hc/en-us/articles/360046845932-Magento-Commerce-2-4-0-known-issue-when-Braintree-is-enabled-Venmo-partial-invoice-issue)
* [Adobe Commerce 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
* [Adobe Commerce 2.4.0 known issue: Amazon Pay enabled, payment methods missing when Return to standard checkout used](https://support.magento.com/hc/en-us/articles/360046680632-Magento-2-4-0-known-issue-Amazon-Pay-enabled-payment-methods-missing-when-Return-to-standard-checkout-used)
* [Adobe Commerce 2.4.0 known issue: 2.4.0 installation fails with outdated stores cache](https://support.magento.com/hc/en-us/articles/360046949731-Magento-2-4-0-known-issue-2-4-0-installation-fails-with-outdated-stores-cache)
