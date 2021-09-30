---
title: _isScopePrivate in private content blocks slows Adobe Commerce performance
labels: 2.2.x,2.3.x,AJAX requests,Magento Commerce,Magento Commerce Cloud,best practices,isScopePrivate,performance,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a potential fix for slow performance by removing `_isScopePrivate` variables in private content. This reduces [AJAX requests](https://support.magento.com/hc/en-us/articles/360039286472-High-throughput-AJAX-requests-cause-poor-performance) due to non-cacheable blocks so that you will have more free resources to handle more critical requests in Adobe Commerce.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x
* Adobe Commerce on-premises 2.2.x, 2.3.x

## Issue

When private content blocks have the `_isScopePrivate` variable in them, it makes the block not cacheable.

As a result, each request to Adobe Commerce can trigger additional AJAX requests for the non-cacheable blocks.

Since private content is specific to individual users, it is reasonable to handle it on the client side (i.e., web browser) instead of hitting the server for retrieving the same data on each customer request.

Reduce AJAX requests due to non-cacheable blocks. This will enable you to have more free resources to handle more business-critical scenarios in your store, such as these examples:

* Add to cart
* Make a payment
* Place order
* Register new customer

## Solution

Use private content instead of the `_isScopePrivate` variable. Review [Private content](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html) in our developer documentation for details. Also review [High throughput AJAX requests cause poor performance](https://support.magento.com/hc/en-us/articles/360039286472) in our support knowledge base.
