---
title: "Adobe Commerce best practice: conducting critical actions in Admin"
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,actions,cache invalidation,critical,event,flush,log,move,save,Adobe Commerce,cloud infrastructre,on-premises
---

It is best practice not to conduct critical actions in the Commerce Admin panel during business hours to avoid performance degradation.

Examples of critical actions:

* Save (update) a product attribute.
* Flush caches after import.
* Move product-subcategory to another category.

These critical actions lead to cache invalidation (a procedure for one or more objects that removes data regarding the objects from all caches) and cause a significant negative performance impact on the site during business hours, and can potentially be a root cause of site outages.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practice

Perform any critical actions during off-business hours.

## Related reading

* [Private content: Invalidate private content](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/cache/page-caching/private-content.html#invalidate-private-content) in our developer documentation
* [Hardware recommendations: Caches](https://devdocs.magento.com/guides/v2.4/performance-best-practices/hardware.html#caches) in our developer documentation
* [Advanced setup: Set up Redis](https://devdocs.magento.com/guides/v2.4/performance-best-practices/advanced-setup.html#set-up-redis) in our developer documentation
* Varnish's [What is cache invalidation?](https://www.varnish-software.com/glossary/what-is-cache-invalidation/)
