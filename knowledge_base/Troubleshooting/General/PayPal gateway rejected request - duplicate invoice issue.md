When submitting payment, Customers may see an error for a duplicate invoice:

>  PayPal gateway has rejected request. Payment has already been made for this InvoiceID (\#10412: Duplicate invoice)

The issue occurs when invoices with the same IDs are sent to PayPal several times.

To resolve the problem, allow multiple payments per invoice ID in PayPal's Payment Receiving Preferences. When changed, PayPal accepts payments with no error messages, even for invoices with duplicate&nbsp;IDs.

## Affected versions

*   Magento Commerce: any version
*   Magento Commerce (Cloud): any version
*   Magento Open Source: any version

## Issue

When submitting payment, customers see the error message:

<pre><code class="language-clike">... main.CRITICAL: Exception message: PayPal gateway has rejected request. Payment has already been made for this InvoiceID (#10412: Duplicate invoice).</code></pre>

PayPal cannot process the payment and complete the order.

## Cause

The error message is displayed when invoices with the same ID are submitted to PayPal multiple times.

This may happen when using the same credentials across several Magento sites (even across the Local and the Staging environments). Particular scenarios might be the following:

*   Multiple stores submit invoices to PayPal and use the same invoice IDs
*   A new store sends an invoice with an&nbsp;ID&nbsp;that has been previously submitted&nbsp;by an old store

By default, PayPal does not allow processing for the same invoice twice.

## Solution

Change your PayPal profile to allow for multiple payments per invoice ID. You need to make these changes through PayPal.

<ol><li>Log in&nbsp;to your account at&nbsp;<a class="external-link" href="https://www.paypal.com/" rel="nofollow">https://www.paypal.com</a>.</li><li>Click <strong>Profile</strong> &gt; <strong>Profile and settings&nbsp;</strong>(upper-right&nbsp;corner).</li><li>Go to <strong>My selling tools</strong>.</li><li>Navigate to&nbsp;<strong>Getting paid and managing my risk</strong> &gt; <strong>Block payments</strong> and click <strong>Update</strong>.</li><li>
<strong>Selling Preferences</strong>, click&nbsp;<strong>Payment Receiving Preferences</strong>.</li><li>Under&nbsp;<strong>Block Accidental Payments</strong>, choose&nbsp;<strong>No, allow multiple payments per invoice ID</strong>.<br/><img alt="paypal_allow_multiple_payments_per_invoice_id.png" height="253" src="https://support.magento.com/hc/article_attachments/115003047154/paypal_allow_multiple_payments_per_invoice_id.png" width="723"/>
</li><li>Scroll to the bottom and click&nbsp;<strong>Save</strong>.</li></ol>

## More information

*   [Block accidental payments](https://developer.paypal.com/docs/classic/admin/setup-account/#block-accidental-payments) on PayPal Developer Docs.
*   PayPal payments on Magento User Guide:
    
    *   [PayPal Express Checkout](http://docs.magento.com/m2/ee/user_guide/payment/paypal-express-checkout.html)
    *   [Other PayPal Solutions](http://docs.magento.com/m2/ee/user_guide/payment/paypal.html)
    
    
    
*   Magento DevDocs:
    
    *   [Set up PayPal payment methods for Magento Commerce (Cloud)](http://devdocs.magento.com/guides/v2.2/cloud/live/paypal-onboarding.html)
    *   [Payments Integrations](http://devdocs.magento.com/guides/v2.2/payments-integrations/bk-payments-integrations.html)
    
    
    