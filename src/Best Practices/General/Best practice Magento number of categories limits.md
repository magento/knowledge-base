---
title: Best practice Magento number of categories limits
link: https://support.magento.com/hc/en-us/articles/360048176832-Best-practice-Magento-number-of-categories-limits
labels: Magento Commerce Cloud,Magento Commerce,category,performance,2.3,index,products,best practices,2.3.x,2.4,2.4.x
---

This article provides best practices for number of categories limit for Magento Commerce and Magento Commerce Cloud.

## Best practices

The maximum recommended number of categories varies depending on Magento version:

* Starting with Magento 2.4.2, the maximum recommended number of categories is 1. * For Magento 2.3.x, and 2.4.0-2.4.1-p1, the maximum recommended number of categories is 1. <p class="info">Note: This article only addresses best practices for <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> of Magento Commerce and Magento Commerce Cloud.</p>

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