---
title: 'Adobe Commerce 2.4.0 known issue: missing "Refund" label in Klarna'
labels: 2.4.0,Klarna,Magento Commerce,Magento Commerce Cloud,known issues,label,refund,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a workaround for a known issue in Admin for a missing **Refund** label in Klarna VBE (Vendor Bundled Extension). When in the Klarna portal conducting a refund, the **Refund** label is not displayed next to the Bundled product which was refunded.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

## Issue

<span class="wysiwyg-underline">Prerequisites:</span>

* Klarna is enabled.
* A Bundled product is created.

<span class="wysiwyg-underline">Steps to reproduce</span>

1. Go to Adobe Commerce frontend, and add a Bundled product to **cart**.
1. Navigate to checkout.
1. Input consumer information into checkout and click **Next**.
1. Select **KP option** and click **Place Order**.
1. Go to **Admin** > **Sales** > **Orders**.
1. Open the order.
1. Create Invoice for product.
1. Go to **Invoices** > **Select invoice** > Click **Credit Memo** > Click **Refund** (Not **Refund Offline**).
1. Go to Klarna portal.
1. Open the order.
1. The **Refund** label is present.

<span class="wysiwyg-underline">Expected result</span>

On the Klarna portal, the **Refund** label is displayed next to the product which was refunded.

<span class="wysiwyg-underline">Actual result</span>

On the Klarna portal, the **Refund** label is not displayed next to the product which was refunded.

## Workaround

The workaround for this issue is to ignore the missing **Refund** label in the Klarna portal for refunded bundled products. The refund has occurred, even though the **Refund** label did not display. The issue is expected to be fixed in Adobe Commerce 2.4.1, which is scheduled for release in Q4 2020.

## Related readings in our support knowledge base:

* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)
* [Adobe Commerce 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
* [Adobe Commerce 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout](https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout)
* [Adobe Commerce 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
* [Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work)
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
