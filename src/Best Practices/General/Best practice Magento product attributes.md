---
title: Best practice Magento product attributes
link: https://support.magento.com/hc/en-us/articles/360048256612-Best-practice-Magento-product-attributes
labels: Magento Commerce Cloud,Magento Commerce,2.3,product,best practices,2.3.x,2.4,attribute,2.4.x
---

<p>This article provides best practices for the maximum recommended number of product attributes in Magento. There is a limit of 500. If you exceed the maximum recommended limit, performance can be affected.</p>
<p>Many product attributes affects the size of the Product template saved for each product (EAV structure). This leads to:</p>
<ul>
<li>Increase of SQL queries related to EAV data retrieval and size of data processed and as a result decrease of DB throughput</li>
<li>Significant increase in full-text search index size</li>
<li>Increase in EAV index size</li>
<li>Reaching hard MySQL limits when building a FLAT index for oversized product templates and inability to use it</li>
</ul>
<p>Response time on most storefront scenarios related to catalog browsing, search (quick and advanced), and layered navigation will be decreased.</p>
<p>Product management operations in the Admin Panel will significantly degrade (slow down) and can lead to timeouts.</p>
<p>Product Mass Actions functionality can be blocked. Index re-build time for mid/large size catalogs cannot be performed on a daily basis due to long execution times.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Recommendations are:</p>
<ul>
<li>Use different Product templates (attribute sets) for different products</li>
<li>Leverage custom options and complex products for variations management</li>
<li>Minimize the number of searchable attributes</li>
<li>Remove non-used product properties</li>
<li>Store and manage non-commerce related attributes in external PMS systems</li>
</ul>
<p>If assistance is required or if there are questions or concerns, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.</p>
<h2>Related reading</h2>
<p>Refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.4/howdoi/customize_product.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=product%20attributes">Customization tutorials &gt; Customize product creation form</a>.</p>
<header>
<section>
<div>
<div> </div>
</div>
</section>
</header>