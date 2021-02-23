---
title: Magento 2.4.0: Braintree not in Multiple Addresses checkout
link: https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-Braintree-not-in-Multiple-Addresses-checkout
labels: Magento Commerce Cloud,Magento Commerce,payment,troubleshooting,checkout,known issues,payment method,2.4.0,Braintree,address
---

<p>This article provides a solution for a Magento 2.4.0 known issue where Braintree payment methods are not included in working with Multiple Addresses checkout. There is currently no solution, but a solution is planned for 2.4.1.</p>
<p>Note: Magento recommends using the <a href="https://marketplace.magento.com/paypal-module-braintree.html">Magento Marketplace Braintree extension</a> for versions 2.3 and later in order to keep PSD compliance. The extension does not offer the multi-address checkout functionality.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce v2.4.0</li>
<li>Magento Commerce Cloud v2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites: core Braintree integration is used.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Go to the storefront.</li>
<li>Log in as a customer.</li>
<li>Add a product to the cart.</li>
<li>Open your cart.</li>
<li>Press View and Edit Cart. 
</li>
<li>Press Check Out with Multiple Addresses. </li>
<li>Press Go to Shipping Information.</li>
<li>Press Continue to Billing Information.</li>
</ol>
<p>Expected result:</p>
<p>Braintree is available as a payment method.</p>
<p>Actual result:</p>
<p>Braintree is not available as a payment method.</p>
<h2>Solution</h2>
<p>Do not enable multi-address options if using Braintree in Magento 2.4.0. A solution is planned for 2.4.1. </p>
<h2>Related reading 
</h2>
<ul>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046091332">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a></li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue - Export Tax Rates does not work</a>
</li>
<li>KB  <a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a>
</li>
</ul>