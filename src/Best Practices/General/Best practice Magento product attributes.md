---
title: Best practice Magento product attributes
link: https://support.magento.com/hc/en-us/articles/360048256612-Best-practice-Magento-product-attributes
labels: Magento Commerce Cloud,Magento Commerce,2.3,product,best practices,2.3.x,2.4,attribute,2.4.x
---

This article provides best practices for the maximum recommended number of product attributes in Magento. There is a limit of 500. If you exceed the maximum recommended limit, performance can be affected.

 A large number of product attributes affects the size of the Product template saved for each product (EAV structure). This leads to:

 
 * Increase of SQL queries related to EAV data retrieval and size of data processed and as a result decrease of DB throughput
 * Significant increase in full-text search index size
 * Increase in EAV index size
 * Reaching hard MySQL limits when building a FLAT index for oversized product templates and inability to use it
 
 Response time on most storefront scenarios related to catalog browsing, search (quick and advanced), and layered navigation will be decreased.

 Product management operations in the Admin Panel will significantly degrade (slow down) and can lead to timeouts.

 Product Mass Actions functionality can be blocked. Index re-build time for mid/large size catalogs cannot be performed on a daily basis due to long execution times.

 Affected products and versions
------------------------------

 
 * Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 * Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 
 Best practices
--------------

 Recommendations are:

 
 * Use different Product templates (attribute sets) for different products
 * Leverage custom options and complex products for variations management
 * Minimize the number of searchable attributes
 * Remove non-used product properties
 * Store and manage non-commerce related attributes in external PMS systems
 
 If assistance is required or if there are questions or concerns, [submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

 Related reading
---------------

 Refer to DevDocs [Customization tutorials > Customize product creation form](https://devdocs.magento.com/guides/v2.4/howdoi/customize_product.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=product%20attributes).

        