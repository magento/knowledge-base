---
title: "Adobe Commerce 2.4.0 known issue: Create New Order buttons missing"
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,SKU,button,known issues,order,products,Adobe Commerce
---

This article provides a workaround for a known issue in the Commerce Admin for two missing buttons on the order creation page. When creating a new order for a new or existing customer, it is not possible to add products to the order from the catalog since the **Add Products By SKU** and **Add Products** buttons are missing. This is caused by JS bundling being enabled. A fix will be available in Adobe Commerce 2.4.1.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1. Go to **Customers > All Customers**.
1. Click the **Edit** link on a customer.
1. Click the **Create Order** button.

<span class="wysiwyg-underline">Expected result</span>

The **Add Products By SKU** and **Add Products** buttons appear on the **Create New Order** page.

<span class="wysiwyg-underline">Actual result</span>

The **Add Products By SKU** and **Add Products** buttons are missing on the **Create New Order** page.

## Workaround

The workaround for this issue is to disable JS bundling for the Adobe Commerce instance. The issue is expected to be fixed in Adobe Commerce 2.4.1, which is scheduled for release in Q4 2020.

## Related readings in our support knowledge base

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
