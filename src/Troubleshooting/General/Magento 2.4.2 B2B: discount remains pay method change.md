---
title: Magento 2.4.2 B2B: discount remains pay method change
link: https://support.magento.com/hc/en-us/articles/360054667312-Magento-2-4-2-B2B-discount-remains-pay-method-change
labels: Magento Commerce Cloud,Magento Commerce,known issue,discount,B2B,payment method,2.4.2
---

<p>This article describes a known Magento Commerce 2.4.2 B2B issue where a payment method-tied discount persists after a payment method change at checkout. There is no resolution available at this time.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.2</li>
<li>Magento Commerce Cloud 2.4.2</li>
<li>Magento B2B version 1.3.1</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Create a cart Price Rule that is tied to a payment method (Example: Paypal users get a 20% discount.).</li>
<li>Create a Purchase Order (PO) and select Paypal as the payment method. The discount is applied.</li>
<li>The PO is approved.</li>
<li>Go to the payment page to complete the order.</li>
<li>Select a different payment method.</li>
</ol>
<p>Actual results:</p>
<p>The payment method discount remains applied to the order total.  No error message is displayed.<br/>The store owner will be able to see this occurred by checking order history.</p>
<p>Expected results:<br/>The payment method discount is removed from the order total, as expected.</p>
<h2>Solution</h2>
<p>There is no resolution available at this time.</p>