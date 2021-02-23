---
title: Vertex Address Cleansing: different addresses not allowed
link: https://support.magento.com/hc/en-us/articles/360046998952-Vertex-Address-Cleansing-different-addresses-not-allowed
labels: Magento Commerce Cloud,Magento Commerce,checkout,known issues,2.3.5-p1,2.4.0,shipping,Vertex,how to,billing,address
---

<p>This article talks about the solution for the issue when the user tries to enter a different billing and shipping address when Vertex address validation is enabled, the storefront will not let the user enter separate addresses.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce and Magento Commerce Cloud 2.3.5.p1</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Go to Admin &gt; Stores &gt; Configuration &gt; Sales &gt; Address Cleansing.</li>
<li>Select <em>Enabled</em> from the Use Vertex Address Cleansing drop-down and Save Config.</li>
<li>Go to the frontend as a guest and add a product to the cart.</li>
<li>Click on the Cart icon and Proceed to Checkout.</li>
<li>Fill in the address fields.</li>
<li>Select desired Shipping Method and click Next.</li>
<li>Click on the Next button again.</li>
<li>Uncheck My billing and shipping address are the same and enter a new billing address (different to Address).</li>
<li>Click Update button, then click Update address.</li>
</ol>
<p>Expected result</p>
<p> The user sees different billing and shipping addresses.</p>
<p>Actual result</p>
<p>When the user hits update, the billing and shipping addresses revert to being the same.</p>
<h2>Cause</h2>
<p>Vertex address verification has failed.</p>
<h2>Solution</h2>
<p>Disable Vertex Address verification or upgrade to 2.4.0. </p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout">Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout">Magento 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error">Magento 2.4.0 known issue: orders display error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032-Magento-2-4-0-known-issue-Export-Tax-Rates-does-not-work-">Magento 2.4.0 known issue - Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332-Magento-2-4-0-known-issue-raw-message-data-display-on-storefront">Magento 2.4.0 known issue: raw message data display on storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna">Magento 2.4.0 known issue: missing "Refund" label in Klarna</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360047481431-Magento-2-4-0-known-issue-two-buttons-missing-on-Create-New-Order-page-in-Admin">Magento 2.4.0 known issue: two buttons missing on Create New Order page in Admin</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046845932-Magento-Commerce-2-4-0-known-issue-when-Braintree-is-enabled-Venmo-partial-invoice-issue">Magento Commerce 2.4.0 known issue: when Braintree is enabled, Venmo partial invoice issue</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout">Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046680632-Magento-2-4-0-known-issue-Amazon-Pay-enabled-payment-methods-missing-when-Return-to-standard-checkout-used">Magento 2.4.0 known issue: Amazon Pay enabled, payment methods missing when Return to standard checkout used</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046949731-Magento-2-4-0-known-issue-2-4-0-installation-fails-with-outdated-stores-cache">Magento 2.4.0 known issue: 2.4.0 installation fails with outdated stores cache</a></li>
</ul>