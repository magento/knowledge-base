---
title: Magento Commerce Cloud v2.3.5 GraphQL caching invalidation not working
link: https://support.magento.com/hc/en-us/articles/360048463931-Magento-Commerce-Cloud-v2-3-5-GraphQL-caching-invalidation-not-working
labels: Magento Commerce Cloud,patch,troubleshooting,GraphQL,cache invalidation
---

<p>This article provides a patch for the issue where GraphQL <code>GET</code> request returns outdated information, if the customer changes product information.</p>
<h2>Affected products and versions</h2>
<p>Magento Commerce Cloud v2.3.5. </p>
<h2>Issue</h2>
<p>GraphQL requests are cached by Fastly and the cached version is retrieved for each next request from Fastly. When a product is re-saved in the Magento backend, the Fastly cache should invalidate when a product is updated. However, it remains valid.</p>
<p>Steps to reproduce</p>
<ol>
<li>Trigger the following GraphQL request to get products for certain category:<br/> <br/>
<pre class="line-numbers language-clike"><code class="language-clike">GET http://&lt;magento2-server&gt;/graphql?query={products(currentPage:1,pageSize:6,filter:{web_ready:{eq:"1"},category_id:{eq:"1521"}}){total_count,items{__typename,id,sku,name}}}</code></pre>
</li>
</ol>
<ol>
<li>Re-save one of the products retrieved by the request above in Magento Admin.</li>
<li>Trigger the request again.</li>
</ol>
<p>Expected result:</p>
<p>The <code>X-Cache</code> header contains <code>MISS</code>.</p>
<p>Actual result:</p>
<p>The <code>X-Cache</code> header contains <code>HIT</code>, means the response is cached.</p>
<h2>Solution</h2>
<p> Disable GraphQL product cache with the patch provided in this article. </p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360065269852/MDVA-28559_EE_2.3.5-p1_v1.composer.patch">MDVA-28559_EE_2.3.5-p1_COMPOSER_v1.patch<br/><br/></a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud v2.3.5</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce Cloud v2.4.0</li>
<li>Magento Commerce v2.4.0</li>
<li>Magento Commerce Cloud v2.3.5-p2</li>
<li>Magento Commerce v2.3.5-p2</li>
<li>Magento Commerce Cloud v2.3.5-p1</li>
<li>Magento Commerce v2.3.5-p1</li>
<li>Magento Commerce v2.3.5</li>
<li>Magento Commerce Cloud v2.3.4-p2</li>
<li>Magento Commerce v2.3.4-p2</li>
<li>Magento Commerce Cloud v2.3.4</li>
<li>Magento Commerce v2.3.4</li>
<li>Magento Commerce v2.3.3-p1</li>
<li>Magento Commerce v2.3.3</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions on how to apply a composer patch.</p>
<h2>Attached files</h2>