---
title: Best practices for Magento product attribute options
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,attribute,best practices,products
---

This article provides best practices for product attribute options in Magento. Our recommendation is to have not more than 100 attribute options per attribute, as performance can be affected.

Many product options lead to an increase in data retrieved for each product on all read and write operations resulting in:

* Increase in SQL queries traffic and heavier `JOIN` operations affecting database throughput
* Increase of Magento indexes size and full-text search index

Potential site impacts can include:

* Long request time and rendering times on product details and category pages containing complex products.
* Admin product save operations response time increases above optimal performance targets.
* Increase in Product Edit form rendering time.
* Slow checkout.

## Affected products and versions

* Adobe Commerce (on-premise), all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

Reduce the number of product attribute options by:

* Leveraging different variation mechanisms: complex products, custom options as a source of product variations.
* Building specific product templates with targeting attributes and options, avoiding generalized product templates and option containers.
* Maintaining a list of actual attribute options.
* Managing products info through external Product Management System (PMS).

## Related reading

Refer to:

* Adobe Commerce User Guide [Create products > Configurable Product](https://docs.magento.com/user-guide/catalog/product-create-configurable.html)
* Adobe Commerce User Guide [Product Attributes > Best Practices](https://docs.magento.com/user-guide/catalog/attribute-best-practices.html)
* [Best practice for attribute SET in Magento](https://support.magento.com/hc/en-us/articles/360045041092)
* [Best practice Magento product attributes](https://support.magento.com/hc/en-us/articles/360048256612)
