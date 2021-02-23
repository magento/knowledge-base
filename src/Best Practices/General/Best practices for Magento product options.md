---
title: Best practices for Magento product options 
link: https://support.magento.com/hc/en-us/articles/360048723372-Best-practices-for-Magento-product-options-
labels: Magento Commerce Cloud,Magento Commerce,2.3,products,best practices,2.3.x,2.4,attribute,2.4.x
---

<p>This article provides best practices for product options in Magento. Our recommendation is to have not more than 100 options per product, as performance can be affected.</p>
<p>Many product options leads to an increase in data retrieved for each product on all read and write operations resulting in:</p>
<ul>
<li>Increase in SQL queries traffic and heavier <code class="language-sql">JOIN</code> operations affecting database throughput</li>
<li>Increase of Magento indexes size and full-text search index</li>
</ul>
<p>The increases listed above can cause these potential site impacts:</p>
<ul>
<li>Response time will be increased for most storefront scenarios related to products containing a large number of options in attributes.</li>
<li>Product management operations in Admin will significantly slow down and can lead to timeouts, especially on scenarios related to attributes list and trees retrieval (including promo rules management).</li>
<li>Product mass actions functionality can be blocked.</li>
</ul>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Reduce the number of product options by:</p>
<ul>
<li>Leveraging different variation mechanisms: complex products, custom options as a source of product variations.</li>
<li>Building specific product templates with targeting attributes and options, avoiding generalized product templates and option containers.</li>
<li>Managing products info through external Product Management System (PMS).</li>
</ul>
<h2>Related reading</h2>
<p>Refer to:</p>
<ul>
<li>Magento User Guide <a href="https://docs.magento.com/user-guide/catalog/product-create-configurable.html">Create products &gt; Configurable Product</a>
</li>
<li>Magento User Guide <a href="https://docs.magento.com/user-guide/catalog/attribute-best-practices.html">Product Attributes &gt; Best Practices</a>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045041092">Best practice for attribute SET in Magento</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360048256612">Best practice Magento product attributes</a></li>
<li>DevDocs' <a href="https://devdocs.magento.com/guides/v2.4/rest/modules/inventory/bulk-inventory.html">Inventory mass actions</a>
</li>
</ul>
<p> </p>