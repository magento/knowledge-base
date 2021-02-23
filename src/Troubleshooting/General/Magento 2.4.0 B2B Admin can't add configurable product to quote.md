---
title: Magento 2.4.0 B2B Admin can't add configurable product to quote
link: https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-B2B-Admin-can-t-add-configurable-product-to-quote
labels: Magento Commerce Cloud,Magento Commerce,B2B,quote,known issues,products,SKU,2.4.0,shopping cart,add product
---

<p>This article talks about a known issue in Magento Admin when managing a B2B Quote, it is not possible to add a configurable product by SKU to the quote. When clicking the Add to Quote button, the Quote edit page is stuck loading, and you cannot configure the product and save changes. This issue also occurs in Admin when adding a product by SKU to an order, or adding a product by SKU in Advanced Checkout (Admin &gt; Customers &gt; All Customers &gt; Customer Edit &gt; Manage Shopping Cart). This issue will be resolved in a patch for Magento 2.4.1.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Preconditions</p>
<ul>
<li>Magento 2.4.0 is installed.</li>
<li>B2B is installed. </li>
<li>Set B2B features to Enable Company = <em>Yes</em>, Enable Shared Catalog = <em>No</em>, and Enable B2B Quote = <em>Yes</em>. </li>
<li>Create a customer account. </li>
<li>Create a company account with the previously created customer as the company admin. </li>
<li>Create a simple product (Example: name &amp; SKU = TEST SIMPLE 1) that is not assigned to Default (General). </li>
<li>Have the company admin request a quote using the simple product created above (Example: TEST SIMPLE 1). </li>
</ul>
<p>Steps to reproduce</p>
<ol>
<li>Go to Magento Admin panel. </li>
<li>Go to Sales &gt; Quotes. </li>
<li>Open the Quote. </li>
<li>Click the Add Product By SKU button.</li>
<li>Enter the SKU of another (Example: TEST SIMPLE 2) product into the Enter SKU input field. </li>
<li>Enter some valid quantity into the Qty input field.</li>
<li>Click the Add to Quote button.</li>
</ol>
<p>Expected results</p>
<ul>
<li>The Products Not Added to the Quote grid, containing the name and SKU of the created product, appears as expected. </li>
<li>After the product is configured, Admin is able to add it to the Quote by clicking the Add Products to Quote button, as expected. </li>
</ul>
<p>Actual results</p>
<ul>
<li>The Products Not Added to the Quote grid, containing the name and SKU of the created product, does not appear. </li>
<li>The Quote page is stuck loading. </li>
</ul>
<h2>Recommendation</h2>
<p>Currently, there is no workaround for this issue with B2B Quote editing, but for Order and Shopping Cart management, it is possible to select products from the Products List instead of adding them by SKU. A patch to resolve the issue will be available for Magento version 2.4.1, which is scheduled for release in Q4 2020.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 Known Issue: Raw message data display on Storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 Known Issue: Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046802271">Magento 2.4.0 known issue: Orders display error</a></li>
</ul>