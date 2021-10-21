---
title: Best practice for attribute SET in Adobe Commerce
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,MySQL,attribute,best practices,performance,product,set,Adobe Commerce,cloud infrastructure,on-premises
---

It is best practice to remove non-used attribute sets. Exceeding the maximum attribute sets causes performance degradation and potential outages.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practice

Remove attributes that you don't use to ensure that the site is not exceeding the maximum recommended number of attribute sets, which is 1000. You can check the number of attribute sets with the following MySQL query: `SELECT COUNT(*) AS 'attribute_set' FROM *${TABLE_PREFIX}*eav_attribute_set;`

Where `${TABLE_PREFIX}` is a table prefix which can be found in environment variable `MAGENTO_CLOUD_RELATIONSHIPS`.

To see this variable, refer to [Cloud for Adobe Commerce > Cloud Variables](https://devdocs.magento.com/cloud/env/variables-cloud.html) in our developer documentation.

## Related reading

[Adobe Commerce User Guide > Product Attributes > Attribute Set](https://docs.magento.com/user-guide/stores/attribute-sets.html?itm_source=devdocs&itm_medium=quick_search&itm_campaign=federated_search&itm_term=attribut&_ga=2.117581577.1025526503.1592831910-1966917137.1591621744) in our user guide.
