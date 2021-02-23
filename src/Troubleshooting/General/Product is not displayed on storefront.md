---
title: Product is not displayed on storefront
link: https://support.magento.com/hc/en-us/articles/360029754111-Product-is-not-displayed-on-storefront
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,product,not displayed
---

<p>This article provides solutions for when products are not displayed on storefront.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce X.X.X</li>
<li>Magento Commerce Cloud X.X.X</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Login to the Magento Admin.</li>
<li>Go to Catalog &gt; Products.<br/><br/><img alt="open_product_page_magento_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086269991/open_product_page_magento_2.4.1.png"/><br/><br/>
</li>
<li>Click Add Product and go through the product creation process.</li>
</ol>
<p>Or import products from a CSV file.</p>
<p>Expected result</p>
<p>Product is displayed on the storefront.</p>
<p> Actual result </p>
<p>Product is not displayed.</p>
<h2>Cause</h2>
<p>This can be caused by a number of reasons. Please follow the steps below to check the main points that could help to identify and solve the problem.</p>
<h2>Solution</h2>
<p>Each of the following points might solve the issue.</p>
<ul>
<li>Check product settings in Admin. Go to Catalog &gt; Products, open the product page and make sure the following fields are correctly configured:
<ul>
<li>
Enable Product = <em>Yes.</em>
</li>
<li>
Stock Status: <em>In Stock</em>. Or if <em>Out of Stock</em> is the correct value, make sure that Display Out of Stock Products is set to <em>Yes</em> (configured on global level).</li>
<li>
Categories: If you try to find the product on a category page, verify that the product is assigned to the category. To simplify troubleshooting, create a new category from the current page and assign a product to it.</li>
<li>
Visibility = <em>Catalog, Search.</em>
</li>
<li>In the Product in Websites section, make sure the product is assigned to the correct website.</li>
<li>Switch the scope selector to the store view where you try to find your product on the storefront, and verify the same settings.</li>
</ul>
</li>
<li>Perform the full reindex, by running <code>bin/magento indexer:reindex</code> from the console, and flush all cache in the Admin, under  System &gt; Tools &gt; Cache Management, or from the console by running <code>bin/magento cache:clean</code>.</li>
<li>If the above does not help, you can start further investigation by checking logs in the <code>var/log</code> directory.</li>
</ul>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360000318834">Log locations (directories) for Pro plan</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360020127552-Log-locations-directories-for-Starter-plan">Log locations (directories) for Starter plan</a></li>
</ul>