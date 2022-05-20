---
title: PayPal gateway rejected request - duplicate invoice issue
labels: Magento Commerce,Magento Commerce Cloud,PayPal,duplicate,invoice,payments,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for the PayPal gateway rejected request - duplicate invoice issue.

When submitting payment, Customers may see an error for a duplicate invoice:

>PayPal gateway has rejected request. Payment has already been made for this InvoiceID (\#10412: Duplicate invoice)

The issue occurs when invoices with the same IDs are sent to PayPal several times.

To resolve the problem, allow multiple payments per invoice ID in PayPal's Payment Receiving Preferences. When changed, PayPal accepts payments with no error messages, even for invoices with duplicate IDs.

## Affected versions

* Adobe Commerce on-premises, all versions
* Adobe Commerce on cloud infrastructure, all versions

## Issue

When submitting payment, customers see the error message:

```clike
... main.CRITICAL: Exception message: PayPal gateway has rejected request. Payment has already been made for this InvoiceID (#10412: Duplicate invoice).
```

PayPal cannot process the payment and complete the order.

## Cause

The error message is displayed when invoices with the same ID are submitted to PayPal multiple times.

This may happen when using the same credentials across several Adobe Commerce sites (even across the Local and the Staging environments). Particular scenarios might be the following:

* Multiple stores submit invoices to PayPal and use the same invoice IDs
* A new store sends an invoice with an ID that has been previously submitted by an old store

By default, PayPal does not allow processing for the same invoice twice.

## Solution

Change your PayPal profile to allow for multiple payments per invoice ID. You need to make these changes through PayPal.

1. Log in to your account at [https://www.paypal.com](https://www.paypal.com/).
1. Click **Profile** > **Profile and settings** (upper-right corner).
1. Go to **My selling tools**.
1. Navigate to **Getting paid and managing my risk** > **Block payments** and click **Update**.
1. **Selling Preferences**, click **Payment Receiving Preferences**.
1. Under **Block Accidental Payments**, choose **No, allow multiple payments per invoice ID**.    ![paypal_allow_multiple_payments_per_invoice_id.png](assets/paypal_allow_multiple_payments_per_invoice_id.png)    
1. Scroll to the bottom and click **Save**.

## More information

* [Block accidental payments](https://developer.paypal.com/docs/admin/setup-account/#block-accidental-payments) on PayPal Developer Docs.
* PayPal payments in our user guide:
    * [PayPal Express Checkout](http://docs.magento.com/m2/ee/user_guide/payment/paypal-express-checkout.html)
    * [Other PayPal Solutions](http://docs.magento.com/m2/ee/user_guide/payment/paypal.html)
* In our developer documentation:
    * [Set up PayPal payment methods for Adobe Commerce on cloud infrastructure](http://devdocs.magento.com/guides/v2.2/cloud/live/paypal-onboarding.html)
    * [Payments Integrations](http://devdocs.magento.com/guides/v2.2/payments-integrations/bk-payments-integrations.html)
