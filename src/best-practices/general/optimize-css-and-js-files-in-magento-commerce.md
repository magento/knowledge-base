---
title: Optimize CSS and JS files in Magento Commerce
labels: 2.3,CSS,Javascript,Magento Commerce,Magento Commerce Cloud,best practices,configuration,file optimization,performance
---

This article provides best practices for CSS and Javascript (JS) file optimization, in Magento.

## Issue by affected products and versions

The time it takes to load CSS and Javascript (JS) files can be reduced by merging, minifying, and bundling separate files into a single file:\_\_

* JS merging is available for all versions of Magento Commerce and Magento Commerce Cloud including the currently supported version 2.3 (as of July 2020).
* JS bundling is available for all versions of Magento Commerce and Magento Commerce Cloud including the currently supported version 2.3 (as of July 2020).
* CSS merging and minification is available for all versions of Magento Commerce and Magento Commerce Cloud including the currently supported version 2.3 (as of July 2020).

## Best practices

How to merge or minify CSS files:

To enable CSS merging or minification go into Admin > Stores > Setting > Configuration > Advanced > Developer > CSS Settings.

How to minify JS files

On the *Admin* sidebar, go to Stores > Settings > Configuration > Advanced > Developer > JavaScript Settings.

How to merge and bundle JS files:

* You can turn on merging or bundling in Magento’s Admin UI (merging and bundling cannot be enabled at the same time):Stores > Settings > Configuration > Advanced > Developer > JavaScript Settings.
* You can also enable Magento’s built-in bundling (basic bundling) from the command line: `php -f bin/magento config:set dev/js/enable_js_bundling 1`

>![info]
>
>Note: Magento Commerce Cloud always runs in Production mode and it is not possible to set it otherwise. Therefore to enable Magento's built-in bundling on Magento Commerce Cloud, you **must** use the command line method.

## Related reading

Review the following links:

* To learn more about optimizing resource files, refer to MerchDocs' [Magento User Guide > Optimizing Resource Files](https://docs.magento.com/user-guide/system/file-optimization.html) .    
* To learn to enable CSS file optimization, refer to DevDocs' [Magento > Frontend Developer Guide > Cascading style sheets (CSS) > CSS merging, minification and performance](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/css-topics/css-overview.html#css-merging-minification-and-performance) .    
