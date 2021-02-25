---
title: Best practice Magento number of categories limits
link: https://support.magento.com/hc/en-us/articles/360048176832-Best-practice-Magento-number-of-categories-limits
labels: Magento Commerce Cloud,category,performance,2.3,index,products,best practices,2.3.x,2.4,2.4.x
---

This article provides best practices for number of categories limit. The maximum recommended number of categories is 1. ## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

The potential site impact of exceeding the limit is:

* Tangible increase in response time on non-cached catalog pages
* Long execution/timeouts during managing categories in the Admin Panel
* Increase in size of corresponding DB tables
* Growth of indexation time \[category/product relation index\]
* Heavier operations on categories tree building, menu retrieval, and category rules management operations.

Recommendations to reduce the number of categories are:

* Managing unique product features through attributes and custom options
* Removing inactive categories
* Optimizing catalog depth

## Related reading

Refer to [Magento User Guide > Configuring Product Options](https://docs.magento.com/user-guide/catalog/inventory-product-stock-options.html).