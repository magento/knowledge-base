---
title: PayPal gateway rejected request - duplicate invoice issue
link: https://support.magento.com/hc/en-us/articles/115002457473-PayPal-gateway-rejected-request-duplicate-invoice-issue
labels: Magento Commerce Cloud,Magento Commerce,PayPal,payments,duplicate,invoice,troubleshooting
---

<p>This article provides a fix for the PayPal gateway rejected request - duplicate invoice issue.</p>
<p>When submitting payment, Customers may see an error for a duplicate invoice:</p>
<blockquote>PayPal gateway has rejected request. Payment has already been made for this InvoiceID (#10412: Duplicate invoice)</blockquote>
<p>The issue occurs when invoices with the same IDs are sent to PayPal several times.</p>
<p>To resolve the problem, allow multiple payments per invoice ID in PayPal's Payment Receiving Preferences. When changed, PayPal accepts payments with no error messages, even for invoices with duplicate IDs.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce, all versions</li>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Issue</h2>
<p>When submitting payment, customers see the error message:</p>
<pre><code class="language-clike">... main.CRITICAL: Exception message: PayPal gateway has rejected request. Payment has already been made for this InvoiceID (#10412: Duplicate invoice).</code></pre>
<p>PayPal cannot process the payment and complete the order.</p>
<h2>Cause</h2>
<p>The error message is displayed when invoices with the same ID are submitted to PayPal multiple times.</p>
<p>This may happen when using the same credentials across several Magento sites (even across the Local and the Staging environments). Particular scenarios might be the following:</p>
<ul>
<li>Multiple stores submit invoices to PayPal and use the same invoice IDs</li>
<li>A new store sends an invoice with an ID that has been previously submitted by an old store</li>
</ul>
<p>By default, PayPal does not allow processing for the same invoice twice.</p>
<h2>Solution</h2>
<p>Change your PayPal profile to allow for multiple payments per invoice ID. You need to make these changes through PayPal.</p>
<ol>
<li>Log in to your account at <a href="https://www.paypal.com/">https://www.paypal.com</a>.</li>
<li>Click Profile &gt; Profile and settings (upper-right corner).</li>
<li>Go to My selling tools.</li>
<li>Navigate to Getting paid and managing my risk &gt; Block payments and click Update.</li>
<li>
Selling Preferences, click Payment Receiving Preferences.</li>
<li>Under Block Accidental Payments, choose No, allow multiple payments per invoice ID.<br/><img alt="paypal_allow_multiple_payments_per_invoice_id.png" src="https://support.magento.com/hc/article_attachments/115003047154/paypal_allow_multiple_payments_per_invoice_id.png"/>
</li>
<li>Scroll to the bottom and click Save.</li>
</ol>
<h2>More information</h2>
<ul>
<li>
<a href="https://developer.paypal.com/docs/classic/admin/setup-account/#block-accidental-payments">Block accidental payments</a> on PayPal Developer Docs.</li>
<li>PayPal payments on Magento User Guide:
<ul>
<li><a href="http://docs.magento.com/m2/ee/user_guide/payment/paypal-express-checkout.html">PayPal Express Checkout</a></li>
<li><a href="http://docs.magento.com/m2/ee/user_guide/payment/paypal.html">Other PayPal Solutions</a></li>
</ul>
</li>
<li>Magento DevDocs:
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/live/paypal-onboarding.html">Set up PayPal payment methods for Magento Commerce (Cloud)</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/payments-integrations/bk-payments-integrations.html">Payments Integrations</a></li>
</ul>
</li>
</ul>