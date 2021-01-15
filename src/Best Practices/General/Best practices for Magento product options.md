---
title: Best practices for Magento product options 
link: https://support.magento.com/hc/en-us/articles/360048723372-Best-practices-for-Magento-product-options-
labels: Magento Commerce Cloud,Magento Commerce,2.3,products,best practices,2.3.x,2.4,attribute,2.4.x
---

This article provides best practices for product options in Magento. Our recommendation is to have not more than 100 options per product, as performance can be affected.

 A large number of product options leads to an increase in data retrieved for each product on all read and write operations resulting in:

 
 * Increase in SQL queries traffic and heavier JOIN operations affecting database throughput
 * Increase of Magento indexes size and full-text search index
 
 The increases listed above can cause these potential site impacts:

 
 * Response time will be increased for most storefront scenarios related to products containing a large number of options in attributes.
 * Product management operations in Admin will significantly slow down and can lead to timeouts, especially on scenarios related to attributes list and trees retrieval (including promo rules management).
 * Product mass actions functionality can be blocked.
 
 Affected products and versions
------------------------------

 
 * Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 * Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 
 Best practices
--------------

 Reduce the number of product options by:

 
 * Leveraging different variation mechanisms: complex products, custom options as a source of product variations.
 * Building specific product templates with targeting attributes and options, avoiding generalized product templates and option containers.
 * Managing products info through external Product Management System (PMS).
 
 Related reading
---------------

 Refer to:

 
 * Magento User Guide [Create products > Configurable Product](https://docs.magento.com/user-guide/catalog/product-create-configurable.html) 
 * Magento User Guide [Product Attributes > Best Practices](https://docs.magento.com/user-guide/catalog/attribute-best-practices.html) 
 * [Best practice for attribute SET in Magento](https://support.magento.com/hc/en-us/articles/360045041092)
 * [Best practice Magento product attributes](https://support.magento.com/hc/en-us/articles/360048256612)
 * DevDocs' [Inventory mass actions](https://devdocs.magento.com/guides/v2.4/rest/modules/inventory/bulk-inventory.html) 
 
  

