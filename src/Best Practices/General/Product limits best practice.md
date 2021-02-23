---
title: Product limits best practice
link: https://support.magento.com/hc/en-us/articles/360045066791-Product-limits-best-practice
labels: catalog,performance,2.3,product,best practices,2.3.x,SKU,2.4,stores,2.4.x
---

<p>It is best practice to minimize the number of product Stocking Keeping Units (SKUs) to avoid performance degradation. The recommended effective product max is 10M.</p>
<p>Effective Number of SKU is calculated as the following:<br/><br/>Effective SKU = N[SKUs] * Stores/Websites * Customer Groups<br/><br/>High Effective SKU slows down product data retrieval and increases admin operations time.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>You can reduce the number of products (SKUs) by:</p>
<ul>
<li>Minimization of multipliers. Removing stores or websites reduces the multiplier. If you have 50k SKUs, 10 Websites and 10 Customer Groups the Effective Number of SKUs = 5M. Removing 5 Customer Groups reduce Effective SKUs to 2.5M.</li>
<li>Restructuring of catalog. This involves reducing the number of products assigned to categories.</li>
<li>Leveraging of alternative product features for custom pricing (replacement of shared catalog and customer groups multipliers). </li>
<li>Restructuring of catalog for minimization of stores numbers. To decrease the number of effective SKUs, you can decrease the number of stores/websites, and customer groups or number of products. </li>
<li>De-activation and/or removal of non-used parts of the system (removal of modules). For steps, refer to Magento DevDocs <a href="https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-uninstall-mods.html">Uninstall modules</a>. </li>
<li>Providing more product variations through custom options rather than through unique products.</li>
<li>Managing products in external Platform Management System (PMS). </li>
</ul>
<h2>Related reading</h2>
<p>DevDocs <a href="https://devdocs.magento.com/cloud/configure/configure-best-practices.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=price%20rules">Magento Commerce Cloud: Best Practices for store configuration</a></p>