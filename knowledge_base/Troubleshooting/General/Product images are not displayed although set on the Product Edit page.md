Product images may not display on your storefront, although the image roles (Base, Small, Thumbnail, Swatch) have been set on the Product page of your Admin panel.

__Cause:__ on Magento instances with more than one store, some product images may have the `` no_selection `` values for image role attributes&nbsp;`` image ``, `` small_image ``, `` thumbnail ``, `` swatch ``.&nbsp;Such `` no_selection `` values emerge when the product image role is set on the global, all-stores scope instead of a&nbsp;particular store's scope (in other words, on the __All Store Views__ instead of a particular __Store View__). To understand if that's your case, run the SQL script from the __Cause__ section below.

__Solution:__ delete rows with the `` no_selection `` values for such images using the SQL script from the Solution section below.

## Affected versions

*   Magento Commerce 2.X.X
*   Magento Commerce (Cloud) 2.X.X

## Issue

Product images may not display on your storefront, although the image roles (Base, Small, Thumbnail, Swatch) have been set correctly on the Product page of your Admin panel.

When you check the Product page with __Store View__ set to __All store views__, the picture has the roles set on the __Image Detail__ screen.

![all_store_views.png](https://support.magento.com/hc/article_attachments/115003627194/all_store_views.png)

![image_roles.png](https://support.magento.com/hc/article_attachments/115003602673/image_roles.png)

However, on the storefront, the image does not show up; when you check the Product page on the particular store level (switching the __Store View__), the image is there but the roles are not set.

![image_roles_not_set.png](https://support.magento.com/hc/article_attachments/115003627514/image_roles_not_set.png)

## Cause

On the multi-store Magento instances (with more than one store), some product images may have the `` no_selection `` values for attributes&nbsp;`` image ``, `` small_image ``, `` thumbnail ``, `` swatch `` (these attributes correspond to image roles). Such `` no_selection `` values emerge when the product image role is set on the global, all-stores scope instead of a&nbsp;particular store's scope (in other words, on the __All Store Views__ instead of a particular __Store View__).

Technically speaking: on `` store_id=0 `` (which holds the global settings for all stores on your Magento instance), the product image roles might be set: this means that the attributes `` image ``, `` small_image ``, `` thumbnail ``, `` swatch `` have valid values (path to images). At the same time, on `` store_id=1 `` (which is a particular store representation), the values for these attributes are `` no_selection ``.

### <span class="wysiwyg-color-orange">How to verify that is your problem</span>

Execute this SQL query:&nbsp;

<pre><code class="language-sql">SELECT `cpev_s`.*, `cpev_0`.`value` AS `store_value` FROM `catalog_product_entity_varchar` `cpev_s` JOIN `eav_attribute` `ea` ON `cpev_s`.`attribute_id` = `ea`.`attribute_id` LEFT JOIN `catalog_product_entity_varchar` `cpev_0` ON `cpev_0`.`row_id` = `cpev_s`.`row_id` AND `cpev_0`.`attribute_id` = `cpev_s`.`attribute_id` AND `cpev_0`.`store_id` = 0 WHERE `cpev_s`.`value` = 'no_selection' AND `ea`.`attribute_code` IN ('image', 'small_image', 'thumbnail') AND `cpev_s`.`store_id` &gt; 0 AND `cpev_s`.`value` != `cpev_0`.`value` AND `cpev_s`.`value` = 'no_selection';</code></pre>

If the query returns a result like below, you are dealing with the problem documented in this article:

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

### <span class="wysiwyg-color-orange">Why does this happen?</span>

If the Magento application has more than one store, it may not synchronize data between a particular store and the Global store settings.&nbsp;

Values on `` store_id=1 `` have more priority than the default (global) store (`` store_id=0 ``). Thus, the application may ignore the lobal image settings and use the store scope configuration (`` no_selection `` for image role attributes) when displaying an image.

<h2 id="solution">Solution</h2>

Delete attributes with the `` no_selection `` values using this SQL script:

<pre><code class="language-clike">DELETE `cpev_s`.* FROM `catalog_product_entity_varchar` `cpev_s` JOIN `eav_attribute` `ea` ON `cpev_s`.`attribute_id` = `ea`.`attribute_id` LEFT JOIN `catalog_product_entity_varchar` `cpev_0` ON `cpev_0`.`row_id` = `cpev_s`.`row_id` AND `cpev_0`.`attribute_id` = `cpev_s`.`attribute_id` AND `cpev_0`.`store_id` = 0 WHERE `cpev_s`.`value` = 'no_selection' AND `ea`.`attribute_code` IN ('image', 'small_image', 'thumbnail') AND `cpev_s`.`store_id` &gt; 0 AND `cpev_s`.`value` != `cpev_0`.`value` AND `cpev_s`.`value` = 'no_selection';</code></pre>

After these attributes are removed, the roles for particular stores are set and images are displayed on the storefront.

## Additional details

You will not be able to see the fix results immediately if Full Page Cache is enabled in your&nbsp;Magento instance.

For the changes to display, refresh the page cache using the __Cache Management__ menu of your&nbsp;Admin panel.

## More information

### <span class="wysiwyg-color-orange">Stores and scopes</span>

<a href="http://docs.magento.com/m2/ee/user_guide/stores/stores-all-stores.html" rel="noopener" target="_blank">Stores and store scopes</a> (User Guide)

### <span class="wysiwyg-color-orange">Images</span>

<a href="http://docs.magento.com/m2/ee/user_guide/catalog/product-image-upload.html" rel="noopener" target="_blank">Uploading Product Images</a> (User Guide)

### <span class="wysiwyg-color-orange">Cache</span>

*   <a href="http://docs.magento.com/m2/ee/user_guide/system/cache-management.html" rel="noopener" target="_blank">Cache management</a> (User Guide)
*   <a href="http://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-cache.html" rel="noopener" style="background-color: #ffffff;" target="_blank">Manage the cache</a> (DevDocs)