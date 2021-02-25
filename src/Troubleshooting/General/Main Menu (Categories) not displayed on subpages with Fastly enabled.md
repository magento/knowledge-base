---
title: Main Menu (Categories) not displayed on subpages with Fastly enabled
link: https://support.magento.com/hc/en-us/articles/115003567594-Main-Menu-Categories-not-displayed-on-subpages-with-Fastly-enabled
labels: Magento Commerce Cloud,Fastly,Magento Commerce,cms,troubleshooting,Varnish,storefront menu
---

This article provides a fix for when the Main Menu (or the [Category Top Navigation menu](https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html)) is not displayed on storefront for subpages (for example, _blog/page_) when Fastly or Varnish is enabled.

Cause: the non-permitted `` / `` character (slash) in the _URL Key_ parameter of the page (Search Engine Optimization settings). The character is usually added when _URL Path_ (with entire page location) is mistakenly specified instead of _URL Key_: for example, _blog/page\_name_ instead of just _page\_name_.

Solution: remove the `` / `` character (slash); for the _URL Key_ parameter, specify only the page name.

## Affected versions

* Magento Commerce 2.X.X
* Magento Commerce Cloud 2.X.X
* Fastly or Varnish

## Issue

The Main Menu (also referred to as the [Category Top Navigation menu](https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html)) is not displayed on storefront for subpages when Fastly or other Varnish-based services are enabled.

## Cause

The issue is caused by the non-permitted `` / `` character (slash), added to the _URL Key_ parameter (Search Engine Optimization settings).

The character is usually added when _URL Path_ (with entire page location, including the parent resource/directory of the page) is mistakenly specified instead of _URL Key_: for example, _blog/page\_name_ instead of just _page\_name_.

![URL Key parameter for SEO settings](https://support.magento.com/hc/article_attachments/115004301374/seo_url_key.png)

## Solution

Remove the `` / `` character (slash) from the _URL Key_ parameter for all pages of your store.

In other words, use _URL Key_ instead of _URL Path_: mention just the page name with no parent resource/directory.

### Recommendations on page hierarchy and SEO

To set the page hierarchy, use the Hierarchy section of the Edit Page menu.

![Hierarchy settings](https://support.magento.com/hc/article_attachments/115004308814/hierarchy_hr.png)

You may also use the Content > Elements > Hierarchy menu — for more complex hierarchy solutions.

For SEO purposes on product pages, use URL Rewrites (Marketing > SEO &amp; Search > URL Rewrites).

## More information in Magento User Guide

The _URL Key_ parameter for SEO:

* [Search Engine Optimization](http://docs.magento.com/m2/ee/user_guide/catalog/categories-search-engine-optimization.html?Highlight=%22url%20key%22)
* [Adding a New Page](http://docs.magento.com/m2/ee/user_guide/cms/page-add.html)

Page Hierarchy:

* [Overview](http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy.html?Highlight=hierarchy)
* [Adding a Node](http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy-node-add.html?Highlight=hierarchy)