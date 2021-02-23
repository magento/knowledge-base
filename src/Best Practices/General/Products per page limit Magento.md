---
title: Products per page limit Magento
link: https://support.magento.com/hc/en-us/articles/360048176472-Products-per-page-limit-Magento
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,best practices,2.3.x,2.4,products per page,allow all products,2.4.x
---

<p>This article provides a best practice for using the Allow All Products per Page setting, depending on your catalog size, to optimize Magento storefront performance.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practice</h2>
<p>You can configure Magento to allow shoppers to view all category products on a single page. But if the number of category products significantly exceeds 48 products, it may take a long time for them to render.</p>
<p>The recommendation is to set the Allow All Products per page configuration to <em>No</em>, if you have more than 48 products in any category. </p>
<p>To change this configuration, in the Magento Admin Panel go to Stores &gt; Configuration &gt; Catalog &gt; Catalog &gt; Storefront &gt; Allow All Products per page = <em>No</em>.<br/><br/><img alt="magento_allow_all_products_per_page_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086186352/magento_allow_all_products_per_page_2.4.1.png"/></p>
<h2>Related reading</h2>
<p><a href="https://docs.magento.com/user-guide/configuration/catalog/catalog.html">Catalog page in Magento Commerce User Guide</a></p>