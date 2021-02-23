---
title: Wrong error message on guest checkout with Paypal via Braintree Magento 2.4.1
link: https://support.magento.com/hc/en-us/articles/360050368111-Wrong-error-message-on-guest-checkout-with-Paypal-via-Braintree-Magento-2-4-1
labels: Magento Commerce Cloud,Magento Commerce,PayPal,known issues,2.4.0,Braintree,Magento Quality Patches,2.4.1,guest checkout,cart
---

<p>This article describes a known Magento 2.4.1 issue where if guest checkout is disabled, a guest customer trying to place an order with PayPal through Braintree gets a non-informative error message. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.0, 2.4.1</li>
<li>Magento Commerce Cloud 2.4.0, 2.4.1</li>
</ul>
<h2>Issue</h2>
<p>When guest checkout is disabled from the backend, and the PayPal through Braintree payment option is selected from the minicart or shopping cart, an unspecific error is shown.<br/><br/></p>
<p>Prerequisites: </p>
<ol>
<li>In Magento Admin, under Stores &gt; Configuration &gt; Sales &gt; Checkout, set Allow Guest Checkout = <em>No</em>.</li>
<li>Enable PayPal through Braintree as described in <a href="https://docs.magento.com/user-guide/payment/braintree.html?">Braintree</a> section of Magento User Guide. </li>
</ol>
<p>Steps to reproduce:</p>
<ol>
<li>
<ins></ins>Add product to cart as a guest.</li>
<li>Select Minicart and click Pay with PayPal.</li>
<li>Complete the Paypal checkout, and then you will land on the Order Review page.</li>
<li>Select shipping method.</li>
<li>Click Place Order.</li>
</ol>
<p>Expected result<br/>When a customer clicks on the PayPal button on mini-cart or on the Shopping Cart page, the following  message should be displayed to the customer:</p>
<pre class="language-bash">To check out, please sign in with your email address.</pre>
<p>If you enable direct Paypal without using Braintree, this scenario behaves differently. It doesn't allow the guest user to continue with the payment process. It will show the following message when the guest user clicks on PayPal button in the minicart:</p>
<div>
<div>
<pre class="language-bash">To check out, please sign in with your email address.</pre>
</div>
</div>
<p>Actual result<br/>The customer is redirected to the Shopping Cart page and shows the following message:</p>
<div>
<div>
<pre class="language-bash">The customer email is missing. Enter and try again.</pre>
</div>
</div>
<h2>Workaround</h2>
<p>The workaround for this issue is the customer can log in at a store instead (Logged-in users do not use guest checkout.) where guest checkout is disabled.<br/>This issue is scheduled to be resolved in Magento version 2.4.2, which is scheduled for release in Q1 2021.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360048550332">Best practice for number of products in cart in Magento</a></li>
<li>DevDocs <a href="https://devdocs.magento.com/guides/v2.4/rest/tutorials/orders/order-add-items.html">Order processing tutorial: Step 5. Add items to the cart</a>
</li>
<li>DevDocs <a href="https://devdocs.magento.com/guides/v2.4/graphql/tutorials/checkout/checkout-add-product-to-cart.html">GraphQL checkout tutorial: Step 3. Add products to the cart</a>
</li>
</ul>