---
title: Magento 2.4.0 known issue: 2.4.0 installation fails with outdated stores cache
link: https://support.magento.com/hc/en-us/articles/360046949731-Magento-2-4-0-known-issue-2-4-0-installation-fails-with-outdated-stores-cache
labels: Magento Commerce Cloud,Magento Commerce,installation,cache,troubleshooting,known issues,fail,extensions,2.4.0,stores
---

<p>This article provides a solution for the issue where your Magento 2.4.0 installation fails with the error message "<em>The default website isn't defined. Set the website and try again.</em>" displayed in the console. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.0.</li>
<li>Magento Commerce 2.4.0.</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites<br/><br/>A third-party extension with dependencies on APIs for the Store module in CLI commands is configured as required in <code>composer.json</code>.</p>
<p>During the installation of Magento 2.4.0 this causes the installation to fail with an error message "<em>The default website isn't defined. Set the website and try again.</em>" displayed in the console. </p>
<h2>Cause</h2>
<p>The issue appears for the third-party extensions which have dependencies on stores in their CLI commands. One is Amazon Sales Channels. </p>
<h2>Solution</h2>
<p>Before the installation of Magento 2.4.0 merchants have to:</p>
<ol>
<li>Remove these third-party extensions from <code>composer.json</code>.</li>
<li>Install Magento without extensions.</li>
<li>Add the extensions after the installation.</li>
</ol>
<p>The issue will be fixed in the scope of 2.4.1 release.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna">Magento 2.4.0 known issue: missing "Refund" label in Klarna</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360047481431-Magento-2-4-0-known-issue-two-buttons-missing-on-Create-New-Order-page-in-Admin">Magento 2.4.0 known issue: two buttons missing on Create New Order page in Admin</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046845932-Magento-Commerce-2-4-0-known-issue-when-Braintree-is-enabled-Venmo-partial-invoice-issue">Magento Commerce 2.4.0, 2.4.1: Enable Braintree Venmo partial invoice issue</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout">Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046680632-Magento-2-4-0-known-issue-Amazon-Pay-enabled-payment-methods-missing-when-Return-to-standard-checkout-used">Magento 2.4.0 known issue: Amazon Pay enabled, payment methods missing when Return to standard checkout used</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout">Magento 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error">Magento 2.4.0 known issue: orders display error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032-Magento-2-4-0-known-issue-Export-Tax-Rates-does-not-work-">Magento 2.4.0 known issue - Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332-Magento-2-4-0-known-issue-raw-message-data-display-on-storefront">Magento 2.4.0 known issue: raw message data display on storefront</a></li>
</ul>