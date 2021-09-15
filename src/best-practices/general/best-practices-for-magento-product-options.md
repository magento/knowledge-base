---
title: Best practices for Adobe Commerce product options
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,attribute,best practices,products,Adobe Commerce,on-premise,cloud infrastructure
---

This article provides best practices for product options in Adobe Commerce. Our recommendation is to have not more than 100 options per product, as performance can be affected.

Many product options leads to an increase in data retrieved for each product on all read and write operations resulting in:

* Increase in SQL queries traffic and heavier    ```sql    JOIN    ```    operations affecting database throughput.
* Increase of Adobe Commerce indexes size and full-text search index.

The increases listed above can cause these potential site impacts:

* Response time will be increased for most storefront scenarios related to products containing a large number of options in attributes.
* Product management operations in Admin will significantly slow down and can lead to timeouts, especially on scenarios related to attributes list and trees retrieval (including promo rules management).
* Product mass actions functionality can be blocked.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

Reduce the number of product options by:

* Leveraging different variation mechanisms: complex products, custom options as a source of product variations.
* Building specific product templates with targeting attributes and options, avoiding generalized product templates and option containers.
* Managing products info through external Product Management System (PMS).

## Related reading

Refer to:
<ul><li title="File storage low/exhausted, specific page loads are slow">Adobe Commerce User Guide<a href="https://docs.magento.com/user-guide/catalog/product-create-configurable.html"> Create products > Configurable Product</a>
</li><li title="File storage low/exhausted, specific page loads are slow">Adobe Commerce User Guide<a href="https://docs.magento.com/user-guide/catalog/attribute-best-practices.html"> Product Attributes > Best Practices</a>
</li><li title="File storage low/exhausted, specific page loads are slow"><a href="https://support.magento.com/hc/en-us/articles/360045041092">Best practice for attribute SET in Adobe Commerce</a></li><li title="File storage low/exhausted, specific page loads are slow"><a href="https://support.magento.com/hc/en-us/articles/360048256612">Best practice Adobe Commerce product attributes</a></li><li title="File storage low/exhausted, specific page loads are slow"> <a href="https://devdocs.magento.com/guides/v2.4/rest/modules/inventory/bulk-inventory.html"> Inventory mass actions</a> in our developer documentation
</li></ul>
