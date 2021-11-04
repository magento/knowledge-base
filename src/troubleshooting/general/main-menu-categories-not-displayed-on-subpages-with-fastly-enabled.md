---
title: Main Menu (Categories) not displayed on subpages with Fastly enabled
labels: Fastly,Magento Commerce,Magento Commerce Cloud,Varnish,cms,storefront menu,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a fix for when the Main Menu (or the [Category Top Navigation menu](https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html) in our user guide) is not displayed on storefront for subpages (for example, *blog/page*) when Fastly or Varnish is enabled.

 **Cause:** the non-permitted `/` character (slash) in the *URL Key* parameter of the page (Search Engine Optimization settings). The character is usually added when *URL Path* (with entire page location) is mistakenly specified instead of *URL Key*: for example, *blog/page\_name* instead of just *page\_name*.

 **Solution:** remove the `/` character (slash); for the *URL Key* parameter, specify only the page name.

## Affected versions

* Adobe Commerce on-premises 2.X.X
* Adobe Commerce on cloud infrastructure 2.X.X
* Fastly or Varnish

## Issue

The Main Menu (also referred to as the [Category Top Navigation menu](https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html) in our user guide) is not displayed on storefront for subpages when Fastly or other Varnish-based services are enabled.

## Cause

The issue is caused by the non-permitted `/` character (slash), added to the *URL Key* parameter (Search Engine Optimization settings).

The character is usually added when *URL Path* (with entire page location, including the parent resource/directory of the page) is mistakenly specified instead of *URL Key*: for example, *blog/page\_name* instead of just *page\_name*.

![URL Key parameter for SEO settings](assets/seo_url_key.png)

## Solution

Remove the `/` character (slash) from the *URL Key* parameter for all pages of your store.

In other words, use *URL Key* instead of *URL Path*: mention just the page name with no parent resource/directory.

### Recommendations on page hierarchy and SEO

To set the page hierarchy, use the **Hierarchy** section of the Edit Page menu.

![Hierarchy settings](assets/hierarchy_hr.png)

You may also use the **Content** > **Elements** > **Hierarchy** menu — for more complex hierarchy solutions.

For SEO purposes on product pages, use URL Rewrites (**Marketing** > **SEO & Search** > **URL Rewrites**).

## More information in our user guide

The *URL Key* parameter for SEO:

* [Search Engine Optimization](http://docs.magento.com/m2/ee/user_guide/catalog/categories-search-engine-optimization.html?Highlight=%22url%20key%22)
* [Adding a New Page](http://docs.magento.com/m2/ee/user_guide/cms/page-add.html)

Page Hierarchy:

* [Overview](http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy.html?Highlight=hierarchy)
* [Adding a Node](http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy-node-add.html?Highlight=hierarchy)
