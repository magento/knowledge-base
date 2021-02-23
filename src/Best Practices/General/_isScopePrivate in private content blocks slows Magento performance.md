---
title: _isScopePrivate in private content blocks slows Magento performance
link: https://support.magento.com/hc/en-us/articles/360040208612--isScopePrivate-in-private-content-blocks-slows-Magento-performance
labels: Magento Commerce Cloud,Magento Commerce,performance,AJAX requests,isScopePrivate,best practices,2.3.x,2.2.x
---

<p>This article provides a potential fix for slow performance by removing <code>_isScopePrivate</code> variables in private content. This reduces AJAX requests due to non-cacheable blocks so that you will have more free resources to handle more critical requests in Magento.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>When private content blocks have the <code>_isScopePrivate</code> variable in them, it makes the block not cacheable.</p>
<p>As a result, each request to Magento can trigger additional AJAX requests for the non-cacheable blocks.</p>
<p>Since private content is specific to individual users, it is reasonable to handle it on the client side (i.e., web browser) instead of hitting the server for retrieving the same data on each customer request.</p>
<p>Reduce AJAX requests due to non-cacheable blocks. This will enable you to have more free resources to handle more business-critical scenarios in your store, such as these examples:</p>
<ul>
<li>Add to cart</li>
<li>Make a payment</li>
<li>Place order</li>
<li>Register new customer</li>
</ul>
<h2>Solution</h2>
<p>Use private content instead of the <code>_isScopePrivate</code> variable. Review DevDocs' <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html">Private content</a> for details.<br/> <br/> Also review <a href="https://support.magento.com/hc/en-us/articles/360039286472">High throughput AJAX requests cause poor performance</a>.</p>