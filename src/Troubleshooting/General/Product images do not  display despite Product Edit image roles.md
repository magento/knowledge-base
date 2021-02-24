---
title: Product images do not  display despite Product Edit image roles 
link: https://support.magento.com/hc/en-us/articles/115002446014-Product-images-do-not-display-despite-Product-Edit-image-roles-
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,product image
---

<p>This article provides a fix for when product images do not display on your storefront, despite image roles set on the Product Edit page.</p>
<p>Cause: on Magento instances with more than one store, some product images may have the <code>no_selection</code> values for image role attributes <code>image</code>, <code>small_image</code>, <code>thumbnail</code>, <code>swatch</code>. Such <code>no_selection</code> values emerge when the product image role is set on the global, all-stores scope instead of a particular store's scope (in other words, on the All Store Views instead of a particular Store View). To understand if that's your case, run the SQL script from the Cause section below.</p>
<p>Solution: delete rows with the <code>no_selection</code> values for such images using the SQL script from the Solution section below.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce 2.X.X</li>
<li>Magento Commerce (Cloud) 2.X.X</li>
</ul>
<h2>Issue</h2>
<p>Product images may not display on your storefront, although the image roles (Base, Small, Thumbnail, Swatch) have been set correctly on the Product page of your Admin panel.</p>
<p>When you check the Product page with Store View set to All store views, the picture has the roles set on the Image Detail screen.</p>
<p><img alt="all_store_views.png" src="https://support.magento.com/hc/article_attachments/115003627194/all_store_views.png"/></p>
<p><img alt="image_roles.png" src="https://support.magento.com/hc/article_attachments/115003602673/image_roles.png"/></p>
<p>However, on the storefront, the image does not show up; when you check the Product page on the particular store level (switching the Store View), the image is there but the roles are not set.</p>
<p><img alt="image_roles_not_set.png" src="https://support.magento.com/hc/article_attachments/115003627514/image_roles_not_set.png"/></p>
<h2>Cause</h2>
<p>On the multi-store Magento instances (with more than one store), some product images may have the <code>no_selection</code> values for attributes <code>image</code>, <code>small_image</code>, <code>thumbnail</code>, <code>swatch</code> (these attributes correspond to image roles). Such <code>no_selection</code> values emerge when the product image role is set on the global, all-stores scope instead of a particular store's scope (in other words, on the All Store Views instead of a particular Store View).</p>
<p>Technically speaking: on <code>store_id=0</code> (which holds the global settings for all stores on your Magento instance), the product image roles might be set: this means that the attributes <code>image</code>, <code>small_image</code>, <code>thumbnail</code>, <code>swatch</code> have valid values (path to images). At the same time, on <code>store_id=1</code> (which is a particular store representation), the values for these attributes are <code>no_selection</code>.</p>
<h3>How to verify that is your problem</h3>
<p>Execute this SQL query: </p>
<pre><code class="language-sql">SELECT `cpev_s`.*, `cpev_0`.`value` AS `store_value` FROM `catalog_product_entity_varchar` `cpev_s` JOIN `eav_attribute` `ea` ON `cpev_s`.`attribute_id` = `ea`.`attribute_id` LEFT JOIN `catalog_product_entity_varchar` `cpev_0` ON `cpev_0`.`row_id` = `cpev_s`.`row_id` AND `cpev_0`.`attribute_id` = `cpev_s`.`attribute_id` AND `cpev_0`.`store_id` = 0 WHERE `cpev_s`.`value` = 'no_selection' AND `ea`.`attribute_code` IN ('image', 'small_image', 'thumbnail') AND `cpev_s`.`store_id` &gt; 0 AND `cpev_s`.`value` != `cpev_0`.`value` AND `cpev_s`.`value` = 'no_selection';</code></pre>
<p>If the query returns a result like below, you are dealing with the problem documented in this article:</p>
<pre><code class="language-sql">
+----------+--------------+----------+--------+--------------+----------------------------+
| value_id | attribute_id | store_id | row_id | value        | store_value                |
+----------+--------------+----------+--------+--------------+----------------------------+
|    67722 |           87 |        1 |    481 | no_selection | /3/5/355sss1_main.jpg      |
|    67723 |           88 |        1 |    481 | no_selection | /3/5/355sss1_main.jpg      |
|    67724 |           89 |        1 |    481 | no_selection | /3/5/355sss1_main.jpg      |
|    67814 |           87 |        1 |    503 | no_selection | /s/k/skb2031_main.jpg      |
|     6769 |           87 |        2 |    503 | no_selection | /s/k/skb2031_main.jpg      |
|    67815 |           88 |        1 |    503 | no_selection | /s/k/skb2031_main.jpg      |
|     6770 |           88 |        2 |    503 | no_selection | /s/k/skb2031_main.jpg      |
|    67816 |           89 |        1 |    503 | no_selection | /s/k/skb2031_main.jpg      |
|     6771 |           89 |        2 |    503 | no_selection | /s/k/skb2031_main.jpg      |
+----------+--------------+----------+--------+--------------+----------------------------+
9 rows in set (0.06 sec)
</code></pre>
<h3>Why does this happen?</h3>
<p>If the Magento application has more than one store, it may not synchronize data between a particular store and the Global store settings. </p>
<p>Values on <code>store_id=1</code> have more priority than the default (global) store (<code>store_id=0</code>). Thus, the application may ignore the lobal image settings and use the store scope configuration (<code>no_selection</code> for image role attributes) when displaying an image.</p>
<h2>Solution</h2>
<p>Delete attributes with the <code>no_selection</code> values using this SQL script:</p>
<pre><code class="language-clike">DELETE `cpev_s`.* FROM `catalog_product_entity_varchar` `cpev_s` JOIN `eav_attribute` `ea` ON `cpev_s`.`attribute_id` = `ea`.`attribute_id` LEFT JOIN `catalog_product_entity_varchar` `cpev_0` ON `cpev_0`.`row_id` = `cpev_s`.`row_id` AND `cpev_0`.`attribute_id` = `cpev_s`.`attribute_id` AND `cpev_0`.`store_id` = 0 WHERE `cpev_s`.`value` = 'no_selection' AND `ea`.`attribute_code` IN ('image', 'small_image', 'thumbnail') AND `cpev_s`.`store_id` &gt; 0 AND `cpev_s`.`value` != `cpev_0`.`value` AND `cpev_s`.`value` = 'no_selection';</code></pre>
<p>After these attributes are removed, the roles for particular stores are set and images are displayed on the storefront.</p>
<h2>Additional details</h2>
<p>You will not be able to see the fix results immediately if Full Page Cache is enabled in your Magento instance.</p>
<p>For the changes to display, refresh the page cache using the Cache Management menu of your Admin panel.</p>
<h2>More information</h2>
<h3>Stores and scopes</h3>
<p><a href="http://docs.magento.com/m2/ee/user_guide/stores/stores-all-stores.html">Stores and store scopes</a> (User Guide)</p>
<h3>Images</h3>
<p><a href="http://docs.magento.com/m2/ee/user_guide/catalog/product-image-upload.html">Uploading Product Images</a> (User Guide)</p>
<h3>Cache</h3>
<ul>
<li>
<a href="http://docs.magento.com/m2/ee/user_guide/system/cache-management.html">Cache management</a> (User Guide)</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-cache.html">Manage the cache</a> (DevDocs)</li>
</ul>