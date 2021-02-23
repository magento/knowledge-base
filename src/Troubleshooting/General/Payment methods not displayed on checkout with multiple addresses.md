---
title: Payment methods not displayed on checkout with multiple addresses
link: https://support.magento.com/hc/en-us/articles/360029360451-Payment-methods-not-displayed-on-checkout-with-multiple-addresses
labels: Magento Commerce Cloud,Magento Commerce,payments,troubleshooting,Cybersource,multishipping,2.x.x
---

<p>This article explains that most of the payment methods are not displayed on checkout when multiple shipping addresses are specified, because the functionality is only implemented for Cybersource.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, Magento Commerce Cloud</li>
<li>2.x.x</li>
</ul>
<p class="info">The core Magento Cybersource payment integration is deprecated since 2.3.3 and will be completely removed in 2.4.0. Use the <a href="https://marketplace.magento.com/cybersource-global-payment-management.html">official extension</a> from marketplace instead.</p>
<h2>Issue</h2>
<p>Prerequisites: In the Magento Admin, enable and configure PayPal and Cybersource payment methods, and enable Multishipping for your store. </p>
<p>Steps to reproduce:</p>
<ol>
<li>On the storefront, add multiple products to the cart.</li>
<li>Go to the shopping cart page.</li>
<li>Click Check Out with Multiple Addresses.</li>
<li>Log in or create account.</li>
<li>Split up products between the addresses on the Ship to Multiple Addresses page.</li>
<li>Click Go to Shipping Information.</li>
<li>Select shipping methods for each shipment.</li>
<li>Click Continue to Billing Information.</li>
</ol>
<p>Expected result<br/>PayPal and Cybersource are available as payment options.</p>
<p>Actual result<br/>Only Cybersource appears as available payment option.</p>
<h2>Cause </h2>
<p>Currently Cybersource is the only supported live payment method for multishipping checkout, starting from version 2.2.4. Support for multishipping will likely be built for each payment method one by one. No exact dates or release numbers can be provided at the moment.</p>