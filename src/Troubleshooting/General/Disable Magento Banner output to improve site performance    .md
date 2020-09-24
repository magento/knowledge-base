Low site performance can be caused by multiple issues. One reason is that the Magento Banner module is enabled but not used. Disabling the module output can improve site performance. Review the article for resolution steps.

### AFFECTED PRODUCTS AND VERSIONS

*   Magento Commerce Cloud, v.2.x.x&nbsp;
*   Magento Commerce, v.2.2.x, 2.3.x

## Issue

The Magento Banner module is enabled, but not used.&nbsp;

To check if this is the case:

For Magento Commerce Cloud 2.2.x:

1.   Log in to the Magento Admin.
2.   Navigate to&nbsp;__Content__ &gt; _Elements_ &gt; __Banners__.&nbsp;
3.   If the grid displayed on this page is empty - you do not have any banners.&nbsp;

If you do not see the __Banners__ option under __Content__ &gt; _Elements_, then this is not the case, and the recommendations from this article cannot be applied.&nbsp;

For Magento&nbsp;Commerce Cloud 2.3.x (the functionality was <a href="https://devdocs.magento.com/guides/v2.3/release-notes/ReleaseNotes2.3.0Commerce.html#banner-now-dynamic-block" target="_self">renamed in v 2.3.x</a>):&nbsp;

1.   Log in to the Magento Admin.
2.   Navigate to&nbsp;__Content__ &gt; _Elements &gt;&nbsp;___Dynamic Blocks__.
3.   If the grid displayed on this page is empty - you do not have any dynamic blocks (banners).&nbsp;

If you do not see the __Dynamic Blocks__ option under __Content__ &gt; _Elements_, then this is not the case, and the recommendations from this article cannot be applied.&nbsp;

## Cause

When the Magento Banner module is enabled, Magento sends Ajax requests from the storefront to the server to get the banner information. These Ajax requests have a performance impact,&nbsp;especially in high-load (high-volume and high-traffic) conditions. If the functionality is not used, it is recommended that you disable the module output. It is not recommended to disable the module, because of the dependency issues.&nbsp;

## Solution

<p class="warning">We strongly recommend testing changes on Staging/Integration environment first, before applying it to Production. We also recommend having a recent backup before any manipulations.</p>

1.   Disable the Magento Banner module output, as described in&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/config-guide/config/disable-module-output.html" target="_self">Disable module output</a>. The module name you need to use is `` Magento_Banner ``.
2.   Deploy your code. For Magento Commerce Cloud, deploy as described in the&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/cloud/live/stage-prod-live.html" target="_self">Deploy your store</a> article.