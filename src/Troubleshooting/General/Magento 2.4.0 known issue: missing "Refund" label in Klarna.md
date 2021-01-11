---
title: Magento 2.4.0 known issue: missing "Refund" label in Klarna
link: https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna
labels: Magento Commerce Cloud,Magento Commerce,refund,known issues,2.4.0,Klarna,label
---

This article provides a workaround for a known issue in Admin for a missing **Refund** label in Klarna VBE (Vendor Bundled Extension). When in the Klarna portal conducting a refund, the **Refund** label is not displayed next to the Bundled product which was refunded.

 Affected products and versions
------------------------------

 
 * Magento Commerce version 2.4.0
 * Magento Commerce Cloud version 2.4.0
 
 Issue
-----

 Preconditions

 
 * Klarna is enabled.
 * A Bundled product is created.
 
 Steps to reproduce

 
 2. Go to Magento frontend, and add a Bundled product to **cart**.
 4. Navigate to checkout.
 6. Input consumer information into checkout and click **Next**.
 8. Select **KP option** and click **Place Order**.
 10. Go to **Admin > Sales > Orders**.
 12. Open the order.
 14. Create Invoice for product.
 16. Go to **Invoices > Select invoice >** Click **Credit Memo** > Click **Refund** (Not **Refund Offline**).
 18. Go to Klarna portal.
 20. Open the order.
 22. The **Refund** label is present.
 
 Expected result

 On the Klarna portal, the **Refund** label is displayed next to the product which was refunded.

 Actual result 

 On the Klarna portal, the **Refund** label is not displayed next to the product which was refunded.

 Workaround
----------

 The workaround for this issue is to ignore the missing **Refund** label in the Klarna portal for refunded bundled products. The refund has occurred, even though the **Refund** label did not display. The issue is expected to be fixed in Magento version 2.4.1, which is scheduled for release in Q4 2020.

 Related reading
---------------

 
 * [Magento 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
 * [Magento 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
 * [Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)
 * [Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
 * [Magento 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout](https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout)
 * [Magento 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
 * [Magento 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
 * [Shipping labels creation known issue in Magento 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
 * [Magento 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work)
 * [Magento 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
 
