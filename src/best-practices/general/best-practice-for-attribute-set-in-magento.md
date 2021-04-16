---
title: Best practice for attribute SET in Magento
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,MySQL,attribute,best practices,performance,product,set
---

It is best practice to remove non-used attribute sets. Exceeding the maximum attribute sets causes performance degradation and potential outages. 

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practice

Remove attributes that you don't use to ensure that the site is not exceeding the maximum recommended number of attribute sets, which is 1. You can check the number of attribute sets with the following MySQL query:  
   
 `` SELECT COUNT(*) AS 'attribute_set' FROM *${TABLE_PREFIX}*eav_attribute_set; ``

Where `` ${TABLE_PREFIX} `` is a table prefix which can be found in environment variable `` MAGENTO_CLOUD_RELATIONSHIPS ``.

To see this variable, refer to DevDocs [Magento Commerce Cloud > Cloud Variables](https://devdocs.magento.com/cloud/env/variables-cloud.html).  

## Related reading

DevDocs [Magento User Guide > Product Attributes > Attribute Set](https://docs.magento.com/user-guide/stores/attribute-sets.html?itm_source=devdocs&amp;itm_medium=quick_search&amp;itm_campaign=federated_search&amp;itm_term=attribut&amp;_ga=2.117581577.1025526503.1592831910-1966917137.1591621744). 