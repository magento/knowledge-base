This article covers the issue where a Magento Commerce or Magento Commerce Cloud site experiences slow performance because some&nbsp;high throughput requests cause significant server load and traffic.&nbsp;

### AFFECTED PRODUCTS AND VERSIONS&nbsp;

<ul class="p-rich_text_list p-rich_text_list__bullet" data-indent="0" data-stringify-type="unordered-list">
<li>Magento Commerce Cloud 2.2.x., 2.3.x</li>
<li>Magento Commerce&nbsp;2.2.x., 2.3x</li>
</ul>

### Issue

The site experiences a slow performance due to high throughput requests, like critical AJAX requests.

### Cause

High throughput AJAX requests include those related to customer private content.&nbsp;

### Solution

There are two solutions:

*   Ensure lighter requests (cache requests or move to customer private content).
*   Reduce the number of requests.

<span class="wysiwyg-underline">Ensure lighter requests (cache requests or move to customer private content)</span>

If there are third-party AJAX requests that are triggered on each page, attempt to cache these requests or move them to customer private content. The merchant can do this by making sure that custom AJAX requests are called using the GET HTTP methods. It will make these requests cacheable by Fastly.&nbsp;If there are custom AJAX requests that should not be cached, they should be refactored according to private-content functionality. For steps, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html" rel="noopener" target="_blank">Private Content</a>.&nbsp;

<span class="wysiwyg-underline">Reduce the number of requests</span>

*   Disable the persistent shopping cart, as it can increase the number of `` customer/section/load `` requests. Follow the steps in <a href="https://devdocs.magento.com/guides/v2.3/config-guide/prod/config-reference-most.html#persistent-shopping-cart-paths" rel="noopener" target="_blank">Persistent shopping cart paths</a> to see if persistent shopping cart is enabled.
*   <span lang="EN-US">If you need to reload or invalidate content in `` sections.xml `` follow the steps in DevDocs&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html#invalidate-private-content" rel="noopener" target="_blank">Private content: Invalidate private content</a>.&nbsp;Please make sure that you are not using the `` customerData.reload() ``&nbsp;method directly&nbsp;</span>in your customizations.&nbsp;
*   Check other POST AJAX requests on the same page. Open Google Chrome developer tool in Google Chrome browser. Click on the&nbsp;__Network__ tab and then the&nbsp;__XHR__ tab, and there will be the list of all AJAX requests from the particular page. Then click on each request and in the field Request Method<span style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif"> should be the GET requests. Note: Google Chrome is used as an example and it is possible to do this in other browsers as well. </span>
*   Check Google Tag Manager (GTM)&nbsp;functionality which is a specific AJAX request. The user can remove this AJAX and refactor their customization with private functionality to reduce total number of requests to the server.&nbsp;
*   Check if Magento Banner is enabled, but not used. You might need to <a href="https://support.magento.com/hc/en-us/articles/360035285852" rel="noopener" target="_blank">Disable Magento Banner output to improve site performance</a>.&nbsp;

### Related Reading

For more information on private customer content review DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=ajax%20requests" rel="noopener" target="_blank">Private content</a>.