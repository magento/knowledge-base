---
title: Magento 2.4.0, 2.4.1: Enable Braintree Venmo partial invoice issue
link: https://support.magento.com/hc/en-us/articles/360046845932-Magento-2-4-0-2-4-1-Enable-Braintree-Venmo-partial-invoice-issue
labels: Magento Commerce Cloud,Magento Commerce,orders,known issues,2.4.0,Braintree,Venmo,partial invoice,2.4.1
---

<p>This article describes a known Magento Commerce 2.4.0 and 2.4.1 issue, where partial invoice is not available for orders placed using Braintree through Venmo. </p>
<h2>Affected products and versions </h2>
<ul>
<li>Magento Commerce 2.4.0 and 2.4.1.</li>
<li>Magento Commerce Cloud 2.4.0 and 2.4.1.</li>
</ul>
<h2>Issue</h2>
<p>Preconditions:</p>
<p>In the Braintree payment method configuration, set Enable Venmo through Braintree = <em>Yes</em> with Payment Action = <em>Authorization</em>; Enable Vault for Card Payments = <em>No</em>. </p>
<p>Steps to reproduce:</p>
<ol>
<li>Create an order for two or more products, using Venmo (Braintree) as a payment method.</li>
<li>Open the order in Magento Admin. </li>
<li>Create an invoice for one of the ordered products.</li>
<li>Try to create invoice for the rest ordered products.</li>
</ol>
<p>Expected result:</p>
<p>Invoice created.</p>
<p>Actual result:</p>
<p>The following error message is displayed: <em>The "vault_capture" command doesn't exist. Verify the command and try again.</em></p>
<h2>Workaround  </h2>
<p>Capture the whole amount when creating invoices for orders placed using Braintree through Venmo.</p>