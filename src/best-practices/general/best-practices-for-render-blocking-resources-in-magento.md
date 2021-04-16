---
title: Best practices for render-blocking resources in Magento 
labels: 2.3,2.3.x,2.4,2.4.x,CSS,Javascript,Magento Commerce,Magento Commerce Cloud,best practices
---

This article provides guidance on preventing resources blocking page rendering in Magento, which can lead to a significant increase in page rendering time and cause performance degradation.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

Consider delivering critical JS/CSS features inline and deferring all non-critical JS/CSS styles. For guidance, refer to web.dev [Eliminate render-blocking resources](https://web.dev/render-blocking-resources/).

If assistance is required or if there are questions or concerns, [submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related reading

* [Magento User Guide > Optimizing Resource Files](https://docs.magento.com/user-guide/system/file-optimization.html)
* KB [Optimize CSS and JS files Magento Commerce Cloud and Magento Commerce](https://support.magento.com/hc/en-us/articles/360044482152-CSS-and-Javascript-file-optimization-on-Magento-Commerce-Cloud-and-Magento-Commerce)
* DevDocs [Magento > Frontend Developer Guide > Cascading style sheets (CSS) > CSS merging, minification and performance](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/css-topics/css-overview.html#css-merging-minification-and-performance)