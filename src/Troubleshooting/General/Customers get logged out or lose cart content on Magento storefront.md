---
title: Customers get logged out or lose cart content on Magento storefront
link: https://support.magento.com/hc/en-us/articles/360049032952-Customers-get-logged-out-or-lose-cart-content-on-Magento-storefront
labels: Magento Commerce Cloud,Magento Commerce,how to,SameSite,session,cookies,cart,logged out
---

<p>This article provides a solution and workaround for the issue, where customers get logged out or lose items from the shopping cart on the storefront, after being re-directed back to Magento store from payment or other third-party services (session cookie "gets lost").</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">all supported versions</a>
</li>
<li>Magento Commerce Cloud, <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">all supported versions</a>
</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>The customer adds products to cart on storefront and proceeds to checkout. </li>
<li>The customer is redirected to the third-party site for payment/shipping or other information/service.</li>
<li>The customer is redirected back to Magento.</li>
</ol>
<p>Actual result: </p>
<p>Customer redirected to the empty shopping cart or a blank page. </p>
<p>Expected result:</p>
<p>Customer redirected to a success payment page (or other success page), without losing the checkout data and progress. </p>
<h2>Cause</h2>
<p>The SameSite cookie attribute is set to <em>Lax</em> or not specified (which is treated as set to <em>Lax</em>). Having <code>SameSite</code> = <em>Lax</em> disables transferring a cookie to external URLs via <code>POST</code> requests.</p>
<h2>Solution</h2>
<p>To solve the issue, contact the third-party service provider and request their developers update their integrations to configure cookie parameters.</p>
<h3>Temporary workaround</h3>
<p>To make your integration work while developers of the third-party service provider resolve the issue, you can set <code>SameSite</code> value to <em>None</em>. <br/>This can be done by configuring headers in Nginx or configuring this parameter via HTTP headers. </p>
<p class="warning">Magento does not recommend such modifications, because it might cause security issues and/or break PCI compliance. Magento recommends contacting the third-party developer who provides your payment platform and requesting changes to cookie settings configuration.</p>
<h2>Related reading</h2>
<p><a href="https://www.chromestatus.com/feature/5088147346030592">Chrome SameSite update</a></p>