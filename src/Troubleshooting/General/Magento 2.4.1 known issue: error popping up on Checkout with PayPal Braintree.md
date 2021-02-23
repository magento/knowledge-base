---
title: Magento 2.4.1 known issue: error popping up on Checkout with PayPal Braintree  
link: https://support.magento.com/hc/en-us/articles/360050253211-Magento-2-4-1-known-issue-error-popping-up-on-Checkout-with-PayPal-Braintree-
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,2.4.1,PayPal Braintree
---

<p>This article describes a known Magento 2.4.1 issue, where an error message pops-up and disappears on the Billing step of Checkout, if PayPal Braintree payment is used and multiple addresses shipment selected. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.1</li>
<li>Magento Commerce 2.4.1</li>
</ul>
<h2> Issue</h2>
<p>An error message pops-up and disappears on the Billing step of Checkout, if PayPal Braintree payment is used and multiple addresses shipment selected. </p>
<p>Steps to reproduce:</p>
<ol>
<li>On the storefront, log in as a customer. (optionally could be a guest checkout, if it is enabled in Admin)</li>
<li>Add a product to the cart. </li>
<li>Click to open the cart preview.</li>
<li>Click View and Edit Cart.</li>
<li>On the Cart page, click Check Out with Multiple Addresses.</li>
<li>Click Go to Shipping Information and specify the addresses. </li>
<li>Click Continue to Billing Information. </li>
<li>Select PayPal Braintree and click the PayPal button.</li>
<li>In the pop-up window click Agree &amp; Pay.</li>
</ol>
<p>Expected result:</p>
<p>The order is placed without any error. </p>
<p>Actual result: </p>
<p>The order is placed, but with an error. The <em>PayPal Checkout could not be initialized. Please contact store owner</em>.  error is displayed for a second and disappears. </p>
<h2>Fix</h2>
<p>Since the order placing is not blocked, there is no need to perform workaround steps. The issue is scheduled to be fixed in Magento Commerce 2.4.2.</p>