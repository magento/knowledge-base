---
title: Best practice for attribute SET in Magento
link: https://support.magento.com/hc/en-us/articles/360045041092-Best-practice-for-attribute-SET-in-Magento
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,product,MySQL,best practices,2.3.x,2.4,attribute,2.4.x,set
---

It is best practice to remove non-used attribute sets. Exceeding the maximum attribute sets causes performance degradation and potential outages. 

 Affected products and versions
------------------------------

 
 * Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 * Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 
 Best practice
-------------

 Remove attributes that you don't use to ensure that the site is not exceeding the maximum recommended number of attribute sets, which is 1000. You can check the number of attribute sets with the following MySQL query:  
   
 SELECT COUNT(*) AS 'attribute\_set' FROM *${TABLE\_PREFIX}*eav\_attribute\_set;

 Where ${TABLE\_PREFIX} is a table prefix which can be found in environment variable MAGENTO\_CLOUD\_RELATIONSHIPS.

 To see this variable, refer to DevDocs [Magento Commerce Cloud > Cloud Variables](https://devdocs.magento.com/cloud/env/variables-cloud.html). 

 Related reading
---------------

 DevDocs [Magento User Guide > Product Attributes > Attribute Set](https://docs.magento.com/user-guide/stores/attribute-sets.html?itm_source=devdocs&itm_medium=quick_search&itm_campaign=federated_search&itm_term=attribut&_ga=2.117581577.1025526503.1592831910-1966917137.1591621744). 

