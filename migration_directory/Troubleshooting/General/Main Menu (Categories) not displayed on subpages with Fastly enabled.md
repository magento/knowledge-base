The Main Menu (or the [Category Top Navigation menu](https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html)) is not displayed on storefront for subpages (for example, _blog/page_) when Fastly or Varnish is enabled.

__Cause:__ the non-permitted `` / `` character&nbsp;(slash) in the _URL Key_ parameter of the page (Search Engine Optimization settings). The character is usually added when _URL Path_ (with entire page location) is mistakenly specified instead of _URL Key_: for example, _blog/page\_name_ instead of just _page\_name_.

__Solution:__ remove the `` / `` character&nbsp;(slash); for the _URL Key_ parameter, specify only the page name.

## Affected versions

*   Magento Open Source, Commerce, Cloud 2.X.X
*   Fastly or Varnish

## Issue

The Main Menu (also referred to as the [Category Top Navigation menu](https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html)) is not displayed on storefront for subpages when Fastly or other Varnish-based services are enabled.

## Cause

The issue is caused by the non-permitted `` / `` character (slash), added to the _URL Key_ parameter (Search Engine Optimization settings).

The character is usually added when _URL Path_ (with entire page location, including the parent resource/directory of the page) is mistakenly specified instead of _URL Key_: for example, _blog/page\_name_ instead of just _page\_name_.

![URL Key parameter for SEO settings](https://support.magento.com/hc/article_attachments/115004301374/seo_url_key.png)

## Solution

Remove the `` / `` character&nbsp;(slash) from the _URL Key_ parameter for all pages of your store.

In other words, use _URL Key_ instead of _URL Path_: mention just the page name with no parent resource/directory.

### <span class="wysiwyg-color-orange120">Recommendations on page hierarchy and SEO</span>

To set the page hierarchy, use the __Hierarchy__ section of the Edit Page menu.

![Hierarchy settings](https://support.magento.com/hc/article_attachments/115004308814/hierarchy_hr.png)

You may also use the __Content__ &gt; __Elements__ &gt; __Hierarchy__ menu — for more complex hierarchy solutions.

For SEO purposes on product pages, use URL Rewrites (__Marketing__ &gt; __SEO &amp; Search__ &gt; __URL Rewrites__).

## More information in Magento User Guide

The _URL Key_ parameter for SEO:

*   <a href="http://docs.magento.com/m2/ee/user_guide/catalog/categories-search-engine-optimization.html?Highlight=%22url%20key%22" rel="noopener">Search Engine Optimization</a>
*   <a href="http://docs.magento.com/m2/ee/user_guide/cms/page-add.html" rel="noopener">Adding a New Page</a>

Page Hierarchy:

*   <a href="http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy.html?Highlight=hierarchy" rel="noopener">Overview</a>
*   <a href="http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy-node-add.html?Highlight=hierarchy" rel="noopener">Adding a Node</a>