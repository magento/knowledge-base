---
title: Slow performance due to non-cacheable pages
labels: 2.x.x,Magento Commerce,Magento Commerce Cloud,cacheable page,how to,slow performance,uncacheable page
---

This article provides solutions for increased website load times or outages due to full page cache (for example Fastly) having been disabled for any block on any page(s) that need to be cached.

## Affected products and versions

* Magento Commerce Cloud 2.x.x
* Magento Commerce 2.x.x

### Issue

The site experiences slow performance because there are cache blocks on pages which need to be cacheable but have been set to `cacheable="false"` .

### Cause

There are pages that need to be cached by Magento. These pages have the biggest throughput. Each request of these types of pages not from cache, makes Magento perform slower.

These pages are:

* Catalog Category (PLP)
* Catalog Product Page (DPD)
* Static Content Pages (Home Page, Contact Us, etc.)

Cacheable and uncacheable are terms used to indicate whether or not a page should be cached. By default, all pages are cacheable. However, if any block in a layout is designated as uncacheable, the entire page is uncacheable.

The screen shot below shows a block with a setting `cacheable="false”`  ** ** which creates an uncacheable page.

![non_cacheable_kb.png](assets/non_cacheable_kb.png)
Examples of uncacheable pages include compare products, cart, and checkout pages.

The following list of pages are not cached (Fastly, Block, and Layout caches are avoided.). This occurs because of the “cacheable” configuration in layout.

### Solution

Check if the files specified above have the setting `cacheable="false”` . If they have, check if this setting is needed or required.

* If needed, consider moving non-cacheable blocks to [private content mechanism](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html?itm_source=devdocs&itm_medium=quick_search&itm_campaign=federated_search&itm_term=private%20co) instead.
* If not needed, remove the attribute `cacheable="false”` and flush the layout cache.

### Related Reading

For more information on cacheable and uncacheable pages review the DevDocs [Magento cache overview](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/cache_for_frontdevs.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=cacheable%2) article.
