---
title: Optimize CSS and JS files in Adobe Commerce
labels: 2.3,CSS,Javascript,Magento Commerce,Magento Commerce Cloud,best practices,configuration,file optimization,performance,Adobe Commerce,cloud infrastructure
---

This article provides best practices for CSS and Javascript (JS) file optimization in Adobe Commerce.

## Issue by affected products and versions

The time it takes to load CSS and Javascript (JS) files can be reduced by merging, minifying, and bundling separate files into a single file:

* JS merging is available for all versions of Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure, including the currently supported version 2.3 (as of July 2020).
* JS bundling is available for all versions of Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure including the currently supported version 2.3 (as of July 2020).
* CSS merging and minification is available for all versions of Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure including the currently supported version 2.3 (as of July 2020).

## Best practices

### How to merge or minify CSS files?

To enable CSS merging or minification, go into the Admin > **Stores** > Setting > **Configuration** > **Advanced** > **Developer** > **CSS Settings**.

### How to minify JS files?

On the *Admin* sidebar, go to **Stores** > Settings > **Configuration** > **Advanced** > **Developer** > **JavaScript Settings**.

### How to merge and bundle JS files?

* You can turn on merging or bundling in the Commerce Admin UI (merging and bundling cannot be enabled at the same time): **Stores** > Settings > **Configuration** > **Advanced** > **Developer** > **JavaScript Settings**.
* You can also enable Adobe Commerce built-in bundling (basic bundling) from the command line: `php -f bin/magento config:set dev/js/enable_js_bundling 1`

>![info]
>
>Note: Adobe Commerce on cloud infrastructure always runs in Production mode and it is not possible to set it otherwise. Therefore to enable Adobe Commerce's built-in bundling on Cloud infrastructure, you **must** use the command line method.

## Related reading

Review the following links:

* To learn more about optimizing resource files, refer to [Optimizing Resource Files](https://docs.magento.com/user-guide/system/file-optimization.html) in our user guide.  
* To learn to enable CSS file optimization, refer to [Frontend Developer Guide > Cascading style sheets (CSS) > CSS merging, minification and performance](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/css-topics/css-overview.html#css-merging-minification-and-performance) in our developer documentation.
