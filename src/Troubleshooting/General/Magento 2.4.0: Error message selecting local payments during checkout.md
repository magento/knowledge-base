---
title: Magento 2.4.0: Error message selecting local payments during checkout
link: https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-Error-message-selecting-local-payments-during-checkout
labels: Magento Commerce Cloud,Magento Commerce,checkout,known issues,payment method,2.4.0,Braintree,billing address
---

<p>This article talks about a solution for known issue in Magento during checkout where an error message appears when selecting a local payment method for some countries. This occurs for the countries Belgium, Italy, Netherlands, Poland, and Spain. The error message, "<em>There are currently no available payment methods. Please update your Billing Address.</em>" will appear, but the local payment methods will still appear and function correctly. A permanent fix will be available in Magento 2.4.1.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Preconditions</p>
<ul>
<li>Magento 2.4.0 is installed.</li>
<li>Create 1 product and 1 category.</li>
<li>Configure <a href="https://devdocs.magento.com/guides/v2.4/graphql/payment-methods/braintree.html">Braintree Payment Method</a>.</li>
</ul>
<p>Steps to reproduce</p>
<ol>
<li>Navigate to the storefront.</li>
<li>Select items to add to the cart. </li>
<li>Proceed to checkout.</li>
<li>Fill out the address form a with valid address.</li>
<li>Proceed to the Review &amp; Payments page. </li>
</ol>
<p>Expected result</p>
<p>The local payment methods should be displayed normally, without an error message.</p>
<p>Actual result </p>
<p>The error message, "<em>There are currently no available payment methods. Please update your Billing Address.</em>" appears, but the local payment methods will still display and function correctly.</p>
<h2>Solution</h2>
<p>The solution is to ignore the displayed error message, and continue with payment as normal, as all local payment methods will function normally. A fix will be available in Magento version 2.4.1, which is scheduled for release in Q4 2020.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue: Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046354992">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046441312">Magento 2.4.0 known issue: returns edit page stops working when creating shipping label</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
</ul>