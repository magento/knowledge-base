---
title: Best practice for attribute SET in Magento
link: https://support.magento.com/hc/en-us/articles/360045041092-Best-practice-for-attribute-SET-in-Magento
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,product,MySQL,best practices,2.3.x,2.4,attribute,2.4.x,set
---

<p>It is best practice to remove non-used attribute sets. Exceeding the maximum attribute sets causes performance degradation and potential outages. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practice</h2>
<p>Remove attributes that you don't use to ensure that the site is not exceeding the maximum recommended number of attribute sets, which is 1000. You can check the number of attribute sets with the following MySQL query:<br/> <br/> <code>SELECT COUNT(*) AS 'attribute_set' FROM *${TABLE_PREFIX}*eav_attribute_set;</code></p>
<p>Where <code>${TABLE_PREFIX}</code> is a table prefix which can be found in environment variable <code>MAGENTO_CLOUD_RELATIONSHIPS</code>.</p>
<p>To see this variable, refer to DevDocs <a href="https://devdocs.magento.com/cloud/env/variables-cloud.html">Magento Commerce Cloud &gt; Cloud Variables</a>.  </p>
<h2>Related reading</h2>
<p>DevDocs <a href="https://docs.magento.com/user-guide/stores/attribute-sets.html?itm_source=devdocs&amp;itm_medium=quick_search&amp;itm_campaign=federated_search&amp;itm_term=attribut&amp;_ga=2.117581577.1025526503.1592831910-1966917137.1591621744">Magento User Guide &gt; Product Attributes &gt; Attribute Set</a>. </p>