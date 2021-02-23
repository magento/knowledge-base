---
title: Checkout is stuck when Authorize.net payment method is used
link: https://support.magento.com/hc/en-us/articles/360030844171-Checkout-is-stuck-when-Authorize-net-payment-method-is-used
labels: Magento Commerce,Authorize.net,troubleshooting,checkout,2.3.x
---

<p>This article provides an explanation and fix for the Magento Commerce 2.3.X issue where the checkout gets stuck if Authorize.net is used, with the <em>'Cannot read property 'length' of null'</em> error message in the browser console log.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.3.X</li>
</ul>
<p class="info">The core Magento Authorize.Net payment integration is deprecated since 2.3.4 and will be completely removed in 2.4.0. Use the <a href="https://marketplace.magento.com/authorizenet-magento-module-authorizenet.html">official extension</a> from marketplace instead.</p>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Configure the Authorize.net payment method in the Magento Admin.</li>
<li>Go to the storefront.</li>
<li>Add a product to the cart and proceed to checkout.</li>
<li>Choose Authorize.net as a payment method.</li>
<li>Click Place Order.</li>
</ol>
<p>Expected result</p>
<p>The Authorize.net iframe is loaded.</p>
<p> Actual result </p>
<p>Ajax spinner is displayed, and the page never loads.  The following JS error is displayed in the browser console log:<em> 'Uncaught TypeError: Cannot read property 'length' of null at b (jstest.authorize.net/v1/AcceptCore.js:1)'</em></p>
<h2>Cause</h2>
<p>One of the most common reasons of this issue is the Public Client Key not being specified in the Authorize.Net configuration in the Magento Admin.</p>
<h2>Solution</h2>
<p>Under Stores &gt; Settings &gt; Configuration &gt; Sales &gt; Payment Methods, in the Authorize.net section, check if the value is specified in the Public Client Key field. If it is empty, enter the key value from your Authorize.Net merchant account.</p>
<p>For the changes to be applied, clean the cache by running <code class="language-bash">bin/magento cache:clean</code>.</p>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/payment/authorize-net.html">Authorize.net</a> in Magento User Guide.</li>
</ul>