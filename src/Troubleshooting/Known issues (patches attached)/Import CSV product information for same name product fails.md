---
title: Import CSV product information for same name product fails
link: https://support.magento.com/hc/en-us/articles/360025389752-Import-CSV-product-information-for-same-name-product-fails
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,import,known issues,2.2.3
---

<p>This article provides a patch for the known Magento 2.2.3 issue related to getting errors when trying to import a <code>.csv</code> file with products information, if there are products with same name.</p>
<h2>Issue</h2>
<p>When a <code>.csv</code> file with products information is imported, and there are products with same name, you get the the following error on the Check Data step: <em>"<tt>URL Key XYZ was already generated for an item with the SKU %sku%"</tt></em> . The issued is cause by rewriting the products URL's during import, even there's no column for products' URLs in the imported <code>.csv</code> file.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Create two configurable products with the same name in Magento Admin.</li>
<li>Create a <code>.csv</code> file to import data for those products, which has for example these columns:<br/> <code>sku</code> | <code>product_type</code> | <code>name</code> | <code>product_websites</code> | <code>store_view_code</code>
</li>
<li>Go to System &gt; Data Transfer &gt; Import and select the <code>.csv</code> file.</li>
<li>Click Check Data.</li>
</ol>
<p>Expected result:<br/> No issues found, you can import the <code>.csv</code> file successfully.</p>
<p>Actual result:<br/> The following error message is displayed: <em>"URL Key XYZ was already generated for an item with the SKU %sku%"</em>, it is not possible to import the file.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360024448232/MDVA-12899_EE_2.2.3_COMPOSER_v2.patch">Download MDVA-12899_EE_2.2.3_COMPOSER_v2.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.3</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento editions and versions:</p>
<ul>
<li>Magento Commerce (Cloud) from 2.2.0 to 2.2.7, and 2.3.0</li>
<li>Magento Commerce from 2.2.0 to 2.2.2, from 2.2.4 to 2.2.7, and 2.3.0</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Useful links</h2>
<p><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html">Apply custom patches to Magento Commerce (Cloud)</a></p>
<h2>Attached Files</h2>