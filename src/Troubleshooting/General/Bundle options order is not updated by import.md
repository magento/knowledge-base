---
title: Bundle options order is not updated by import
link: https://support.magento.com/hc/en-us/articles/360036212671-Bundle-options-order-is-not-updated-by-import
labels: Magento Commerce Cloud,Magento Commerce,order,import,bundle options,2.3.x,2.2.x,how to
---

<p>This article provides a solution for the issue when after importing products from a .csv file, the bundle product options appear in a different order than they are listed in the import file.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<p>Prerequisites: you have a valid .csv file containing bundle products.</p>
<ol>
<li>Import the file using the <a href="https://docs.magento.com/m2/ee/user_guide/system/data-import.html">Import functionality</a>.</li>
<li>Open the bundle product page.</li>
</ol>
<p>Expected result:</p>
<p>The options order is the same as in the .csv file.</p>
<p>Actual result:</p>
<p>The options order is different from that in the .csv file.</p>
<h2>Cause</h2>
<p>The options position was not declared explicitly.</p>
<h2>Solution</h2>
<ol>
<li>Declare a position explicitly for each option in the <code>position</code> parameter of the <code>bundle_values</code> column in the .csv file. For detailed instructions see <a href="https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html#method-2-edit-the-product-data">Edit the Product Data</a>.</li>
<li>Repeat the import operation.</li>
</ol>
<p>For general information on Import, see the <a href="https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html">Importing Bundle Product</a> article in Magento User Guide.</p>