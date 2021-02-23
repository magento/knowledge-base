---
title: High throughput AJAX requests cause poor performance
link: https://support.magento.com/hc/en-us/articles/360039286472-High-throughput-AJAX-requests-cause-poor-performance
labels: Magento Commerce Cloud,Magento Commerce,slow performance,AJAX requests,high throughput,2.3.x,2.2.x,how to
---

<p>This article provides a solution for performance issues with a Magento Commerce or Magento Commerce Cloud site due to some high throughput requests causing significant server load and traffic. </p>
<h3>AFFECTED PRODUCTS AND VERSIONS </h3>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
</ul>
<p class="info">The issue is fixed in version 2.3.4 of both Magento Commerce Cloud and Magento Commerce.</p>
<h3>Issue</h3>
<p>The site experiences a slow performance due to high throughput requests, like critical AJAX requests.</p>
<h3>Cause</h3>
<p>High throughput AJAX requests include those related to customer private content. </p>
<h3>Solution</h3>
<p>There are three solutions:</p>
<ul>
<li>
<a href="https://devdocs.magento.com/cloud/project/project-upgrade.html">Upgrade to version 2.3.4</a>. If this is not currently possible, <a href="https://support.magento.com/hc/en-us/articles/360041095391-Performance-issues-caused-by-excessive-Ajax-requests-">install the patch fixing the issue</a>. </li>
<li>Ensure lighter requests (cache requests or move to customer private content).</li>
<li>Reduce the number of requests.</li>
</ul>
<p>Ensure lighter requests (cache requests or move to customer private content)</p>
<p>If there are third-party AJAX requests that are triggered on each page, attempt to cache these requests or move them to customer private content. The merchant can do this by making sure that custom AJAX requests are called using the GET HTTP methods. It will make these requests cacheable by Fastly. If there are custom AJAX requests that should not be cached, they should be refactored according to private-content functionality. For steps, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html">Private Content</a>. </p>
<p>Reduce the number of requests</p>
<ul>
<li>Disable the persistent shopping cart, as it can increase the number of <code>customer/section/load</code> requests. Follow the steps in <a href="https://devdocs.magento.com/guides/v2.3/config-guide/prod/config-reference-most.html#persistent-shopping-cart-paths">Persistent shopping cart paths</a> to see if persistent shopping cart is enabled.</li>
<li>
If you need to reload or invalidate content in <code>sections.xml</code> follow the steps in DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html#invalidate-private-content">Private content: Invalidate private content</a>. Please make sure that you are not using the <code>customerData.reload()</code> method directly in your customizations. </li>
<li>Check other POST AJAX requests on the same page. Open Google Chrome developer tool in Google Chrome browser. Click on the Network tab and then the XHR tab, and there will be the list of all AJAX requests from the particular page. Then click on each request and in the field Request Method should be the GET requests. Note: Google Chrome is used as an example and it is possible to do this in other browsers as well. 
</li>
<li>Check Google Tag Manager (GTM) functionality which is a specific AJAX request. The user can remove this AJAX and refactor their customization with private functionality to reduce total number of requests to the server. </li>
<li>Check if Magento Banner is enabled, but not used. You might need to <a href="https://support.magento.com/hc/en-us/articles/360035285852">Disable Magento Banner output to improve site performance</a>. </li>
</ul>
<h3>Related Reading</h3>
<p>For more information on private customer content review DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=ajax%20requests">Private content</a>.</p>