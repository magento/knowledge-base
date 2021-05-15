---
title: Magento best practice: conducting critical actions in Admin
labels: .
---

It is best practice to not conduct critical actions in the Magento Admin Panel during business hours to avoid performance degradation.

Examples of critical actions:

* Save (update) a product attribute.
* Flush caches after import.
* Move product subcategory to another category.

These critical actions lead to cache invalidation (a procedure for 1 or more objects, that removes data regarding the objects from all caches) and cause a significant negative performance impact on the site during business hours, and can potentially be a root cause of site outages.

## [None](#affected-products-and-versions) Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 

## [None](#best-practice) Best practice

Perform any critical actions during off-business hours.

## [None](#related-reading) Related reading

* DevDocs' [Private content: Invalidate private content](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/cache/page-caching/private-content.html#invalidate-private-content) 
* DevDocs' [Hardware recommendations: Caches](https://devdocs.magento.com/guides/v2.4/performance-best-practices/hardware.html#caches) 
* DevDocs' [Advanced setup: Set up Redis](https://devdocs.magento.com/guides/v2.4/performance-best-practices/advanced-setup.html#set-up-redis) 
* Varnish's [What is cache invalidation?](https://www.varnish-software.com/glossary/what-is-cache-invalidation/) 

