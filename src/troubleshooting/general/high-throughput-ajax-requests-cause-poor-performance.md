---
title: High throughput AJAX requests cause poor performance
labels: 2.2.x,2.3.x,AJAX requests,Magento Commerce,Magento Commerce Cloud,high throughput,how to,slow performance
---

This article provides a solution for performance issues with a Magento Commerce or Magento Commerce Cloud site due to some high throughput requests causing significant server load and traffic.

## Affected products and versions

* Magento Commerce Cloud 2.2.x, 2.3.x
* Magento Commerce 2.2.x, 2.3.x

>![info]
>
>The issue is fixed in version 2.3.4 of both Magento Commerce Cloud and Magento Commerce.

### Issue

The site experiences a slow performance due to high throughput requests, like critical AJAX requests.

### Cause

High throughput AJAX requests include those related to customer private content.

### Solution

There are three solutions:

* [Upgrade to version 2.3.4](https://devdocs.magento.com/cloud/project/project-upgrade.html) . If this is not currently possible, [install the patch fixing the issue](https://support.magento.com/hc/en-us/articles/360041095391-Performance-issues-caused-by-excessive-Ajax-requests-) .
* Ensure lighter requests (cache requests or move to customer private content).
* Reduce the number of requests.

 <span class="wysiwyg-underline">Ensure lighter requests (cache requests or move to customer private content)</span>

If there are third-party AJAX requests that are triggered on each page, attempt to cache these requests or move them to customer private content. The merchant can do this by making sure that custom AJAX requests are called using the GET HTTP methods. It will make these requests cacheable by Fastly. If there are custom AJAX requests that should not be cached, they should be refactored according to private-content functionality. For steps, refer to DevDocs [Private Content](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html) .

 <span class="wysiwyg-underline">Reduce the number of requests</span>

* Disable the persistent shopping cart, as it can increase the number of `customer/section/load` requests. Follow the steps in [Persistent shopping cart paths](https://devdocs.magento.com/guides/v2.3/config-guide/prod/config-reference-most.html#persistent-shopping-cart-paths) to see if persistent shopping cart is enabled.
* If you need to reload or invalidate content in `sections.xml` follow the steps in DevDocs [Private content: Invalidate private content](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html#invalidate-private-content) . Please make sure that you are not using the `customerData.reload()` method directly in your customizations.
* Check other POST AJAX requests on the same page. Open Google Chrome developer tool in Google Chrome browser. Click on the **Network** tab and then the **XHR** tab, and there will be the list of all AJAX requests from the particular page. Then click on each request and in the field Request Method should be the GET requests. Note: Google Chrome is used as an example and it is possible to do this in other browsers as well.
* Check Google Tag Manager (GTM) functionality which is a specific AJAX request. The user can remove this AJAX and refactor their customization with private functionality to reduce total number of requests to the server.
* Check if Magento Banner is enabled, but not used. You might need to [Disable Magento Banner output to improve site performance](https://support.magento.com/hc/en-us/articles/360035285852) .

### Related Reading

For more information on private customer content review DevDocs [Private content](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=ajax%20requests) .
