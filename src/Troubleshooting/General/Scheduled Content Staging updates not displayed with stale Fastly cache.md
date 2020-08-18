Magento stores may not display scheduled updates when using Content Staging and Fastly. The issue is due to default enabled Fastly Soft Purge. This feature reduces application resource load and only regenerates a fresh cache on a second request. To resolve, you can enable Purge CMS page through the Magento Admin to always regenerate and serve fresh content.

## Issue

Scheduled updates for a store content asset (page, product, block, etc.) are not displayed on storefront immediately after the start time of the update. This happens when updates have been scheduled using the [Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html) functionality.

## Cause

Due to Fastly's Soft Purge functionality (enabled by default), the Magento storefront still receives the old (stale) cached content when sending __the first__ request for the updated asset to Fastly. Fastly requires a second request to regenerate the site data.

As a result, Fastly may serve stale content until the second request for the updated content.

__Expected caching:__ After we schedule an update for a content asset using Content Staging, Magento sends a request to update the cache to Fastly. Fastly invalidates the previous cached content (without deleting the content) and starts serving the updated content.

__Actual caching:__ If Fastly still serves the stale content when receiving __the first__ request for the updated content, it will only send regenerated, correct content only after receiving __the second__ request. This behavior has been implemented to reduce server load by renewing the cache only in areas with proven traffic, without regenerating the cache for the entire website. Fastly updates the cache gradually, saving the application resources.

## Solution

If serving stale content even for the first request is unacceptable, you may disable Soft Purge and enable Purge CMS page:

1.   Log in to your local Magento Admin as an administrator.
2.   Go to __Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __System__ &gt; __Full Page Cache__.
3.   Expand __Fastly Configuration__, then expand __Advanced__.
4.   Set __Use Soft Purge__ to _No_.
5.   Set __Purge CMS page__ to _Yes_.
6.   Click __Save Config__ at the top of the page.

&nbsp;![purge_options.png](https://support.magento.com/hc/article_attachments/360000593874/purge_options.png)

## Related documentation

*   [Configure purge options](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#purge) (DevDocs)
*   [Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html) (User Guide)
*   [Serving stale content](https://docs.fastly.com/guides/performance-tuning/serving-stale-content) (Fastly documentation)