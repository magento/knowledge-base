---
title: Best practice Magento product variations 
link: https://support.magento.com/hc/en-us/articles/360048727271-Best-practice-Magento-product-variations-
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,products,best practices,2.3.x,2.4,attribute,2.4.x
---

<p>This article provides best practices for product variations. Our recommendation is to have not more than 50 variations per product, as performance can be affected.</p>
<p>Potential site impacts can include:</p>
<ul>
<li>Long request time and rendering times on product details and category pages containing complex products</li>
<li>Admin product save operations response time increases above optimal performance targets</li>
<li>Increase in Product Edit form rendering time</li>
<li>Slow checkout.</li>
</ul>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Reduce the number of complex products variations by:</p>
<ul>
<li>Restructuring catalog through the distribution of variations between different products.</li>
<li>Removal of configurable attribute options that are not in stock.</li>
<li>Managing variations through alternative features like custom options, categories, related/grouped/bundle products.</li>
</ul>
<h2>Related reading</h2>
<p>Refer to:</p>
<ul>
<li>Magento User Guide <a href="https://docs.magento.com/user-guide/catalog/product-create-configurable.html">Create products &gt; Configurable Product</a>
</li>
<li>Magento User Guide <a href="https://docs.magento.com/user-guide/catalog/attribute-best-practices.html">Product Attributes &gt; Best Practices</a>
</li>
</ul>
<p> </p>