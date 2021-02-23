---
title: 504 gateway time-out error when saving a category with 1k+ products
link: https://support.magento.com/hc/en-us/articles/360034731011-504-gateway-time-out-error-when-saving-a-category-with-1k-products
labels: Magento Commerce Cloud,Magento Commerce,timeout,time-out,products,2.3.3,how to,504 error,URL rewrites
---

<p>This article suggests a solution for the timeout issue you might have, when performing operations with large categories (1k+ plus products).</p>
<h3>Affected products and versions:</h3>
<ul>
<li>Magento Commerce Cloud 2.3.3</li>
<li>Magento Commerce 2.3.3</li>
<li>Magento Open Source 2.3.3</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites: The Stores &gt; Configuration &gt; CATALOG &gt; Catalog &gt; Use Categories Path for Product URLs option is set to <em>Yes</em> for your store view.</p>
<p>Steps to reproduce</p>
<ol>
<li>In Magento Admin, go to  Catalog &gt; Categories.</li>
<li>Open a large category, like more than 1000 assigned products.</li>
<li>Add a product to the category.</li>
<li>Click Save Category.
</li>
</ol>
<p>Expected result</p>
<p>Category is saved successfully.</p>
<p>Actual result</p>
<p>After 5 minutes of saving process, the 504 gateway timeout error page appears.</p>
<h2>Cause</h2>
<p>The process takes longer than the server's configured timeout.</p>
<h2>Solution</h2>
<p>Disabling the Generate "category/product" URL Rewrites option will remove all category/product URL rewrites from the database, and significantly decrease the time required for the operations with big categories. </p>
<p class="warning">Turning this option off will result in permanent removal of category/product URL rewrites without an ability to restore them.</p>
<p>To disable the Generate "category/product" URL Rewrites option:</p>
<ol>
<li>In the Magento Admin, navigate to Stores &gt; Configuration &gt; CATALOG &gt; Catalog.</li>
<li>In the top left corner of the configuration page, in the Scope field, set your configuration scope to <em>Default Config</em>.</li>
<li>Set Generate "category/product" URL Rewrites to<em> No</em>.</li>
<li>Click Save Config. </li>
<li>Clean cache by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin under System &gt; Tools &gt; Cache Management.</li>
</ol>
<p>Now you can proceed to adding products to categories, or moving categories with a large number of products, and these operations will take much less time and should not cause timeout.</p>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://docs.magedevteam.com/244/m2/ce/user_guide/marketing/url-redirect-product-automatic.html">Automatic Product Redirects</a> in <a href="https://docs.magedevteam.com/244/m2/ce/user_guide/">Magento 2.3 User Guide</a>
</li>
</ul>