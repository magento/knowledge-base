---
title: Magento 2.4.2: Braintree Venmo payment does not work
link: https://support.magento.com/hc/en-us/articles/360054662652-Magento-2-4-2-Braintree-Venmo-payment-does-not-work
labels: Magento Commerce Cloud,Magento Commerce,known issue,orders,2.4.2,Braintree Venmo payment
---

<p>This article describes a known Magento Commerce 2.4.2 issue where orders are not generated when using Braintree Venmo during checkout. There is no resolution available at this time.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.2</li>
<li>Magento Commerce Cloud 2.4.2</li>
</ul>
<h2>Issue</h2>
<p>Precondition:</p>
<p>Enable Venmo payment in Braintree configuration.</p>
<p>Steps to reproduce:</p>
<ol>
<li>On the storefront, add any item to the shopping cart.</li>
<li>Proceed to Checkout.</li>
<li>Select the appropriate shipping method.</li>
<li>Select Venmo as payment method.</li>
<li>Click Pay with Venmo.</li>
<li>Click Place order.</li>
</ol>
<p>Actual results:<br/>The order is not created in Magento after the customer is redirected back to the Magento store from the Venmo app, and no error message appears. The order is created in Braintree.</p>
<p>Expected results:<br/>The order is created in Magento after the customer is redirected back to the Magento store from the Venmo app, and the order is created in Braintree, as expected.</p>
<h2>Solution</h2>
<p>There is no resolution available at this time.</p>