---
title: Best practice Magento product variations
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,attribute,best practices,performance,products
---

This article provides best practices for product variations. Our recommendation is to have not more than 50 variations per product, as performance can be affected.

Potential site impacts can include:

* Long request time and rendering times on product details and category pages containing complex products
* Admin product save operations response time increases above optimal performance targets
* Increase in Product Edit form rendering time
* Slow checkout.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 

## Best practices

Reduce the number of complex products variations by:

* Restructuring catalog through the distribution of variations between different products.
* Removal of configurable attribute options that are not in stock.
* Managing variations through alternative features like custom options, categories, related/grouped/bundle products.

## Related reading

Refer to:
<ul><li title="File storage low/exhausted, specific page loads are slow">Magento User Guide<a href="https://docs.magento.com/user-guide/catalog/product-create-configurable.html">Create products > Configurable Product</a>
</li><li title="File storage low/exhausted, specific page loads are slow">Magento User Guide<a href="https://docs.magento.com/user-guide/catalog/attribute-best-practices.html">Product Attributes > Best Practices</a>
</li></ul>
 