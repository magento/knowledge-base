---
title: Product images do not  display despite Product Edit image roles 
link: https://support.magento.com/hc/en-us/articles/115002446014-Product-images-do-not-display-despite-Product-Edit-image-roles-
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,product image
---

This article provides a fix for when product images do not display on your storefront, despite image roles set on the Product Edit page.

**Cause:** on Magento instances with more than one store, some product images may have the no\_selection values for image role attributes image, small\_image, thumbnail, swatch. Such no\_selection values emerge when the product image role is set on the global, all-stores scope instead of a particular store's scope (in other words, on the **All Store Views** instead of a particular **Store View**). To understand if that's your case, run the SQL script from the **Cause** section below.

**Solution:** delete rows with the no\_selection values for such images using the SQL script from the Solution section below.

## Affected versions

* Magento Commerce 2.X.X

* Magento Commerce (Cloud) 2.X.X

## Issue

Product images may not display on your storefront, although the image roles (Base, Small, Thumbnail, Swatch) have been set correctly on the Product page of your Admin panel.

When you check the Product page with **Store View** set to **All store views**, the picture has the roles set on the **Image Detail** screen.

![all_store_views.png](https://support.magento.com/hc/article_attachments/115003627194/all_store_views.png)

![image_roles.png](https://support.magento.com/hc/article_attachments/115003602673/image_roles.png)

However, on the storefront, the image does not show up; when you check the Product page on the particular store level (switching the **Store View**), the image is there but the roles are not set.

![image_roles_not_set.png](https://support.magento.com/hc/article_attachments/115003627514/image_roles_not_set.png)

## Cause

On the multi-store Magento instances (with more than one store), some product images may have the no\_selection values for attributes image, small\_image, thumbnail, swatch (these attributes correspond to image roles). Such no\_selection values emerge when the product image role is set on the global, all-stores scope instead of a particular store's scope (in other words, on the **All Store Views** instead of a particular **Store View**).

Technically speaking: on store\_id=0 (which holds the global settings for all stores on your Magento instance), the product image roles might be set: this means that the attributes image, small\_image, thumbnail, swatch have valid values (path to images). At the same time, on store\_id=1 (which is a particular store representation), the values for these attributes are no\_selection.

### How to verify that is your problem

Execute this SQL query:

SELECT `cpev\_s`.*, `cpev\_0`.`value` AS `store\_value` FROM `catalog\_product\_entity\_varchar` `cpev\_s` JOIN `eav\_attribute` `ea` ON `cpev\_s`.`attribute\_id` = `ea`.`attribute\_id` LEFT JOIN `catalog\_product\_entity\_varchar` `cpev\_0` ON `cpev\_0`.`row\_id` = `cpev\_s`.`row\_id` AND `cpev\_0`.`attribute\_id` = `cpev\_s`.`attribute\_id` AND `cpev\_0`.`store\_id` = 0 WHERE `cpev\_s`.`value` = 'no\_selection' AND `ea`.`attribute\_code` IN ('image', 'small\_image', 'thumbnail') AND `cpev\_s`.`store\_id` > 0 AND `cpev\_s`.`value` != `cpev\_0`.`value` AND `cpev\_s`.`value` = 'no\_selection';
If the query returns a result like below, you are dealing with the problem documented in this article:

+----------+--------------+----------+--------+--------------+----------------------------+
| value\_id | attribute\_id | store\_id | row\_id | value | store\_value |
+----------+--------------+----------+--------+--------------+----------------------------+
| 67722 | 87 | 1 | 481 | no\_selection | /3/5/355sss1\_main.jpg |
| 67723 | 88 | 1 | 481 | no\_selection | /3/5/355sss1\_main.jpg |
| 67724 | 89 | 1 | 481 | no\_selection | /3/5/355sss1\_main.jpg |
| 67814 | 87 | 1 | 503 | no\_selection | /s/k/skb2031\_main.jpg |
| 6769 | 87 | 2 | 503 | no\_selection | /s/k/skb2031\_main.jpg |
| 67815 | 88 | 1 | 503 | no\_selection | /s/k/skb2031\_main.jpg |
| 6770 | 88 | 2 | 503 | no\_selection | /s/k/skb2031\_main.jpg |
| 67816 | 89 | 1 | 503 | no\_selection | /s/k/skb2031\_main.jpg |
| 6771 | 89 | 2 | 503 | no\_selection | /s/k/skb2031\_main.jpg |
+----------+--------------+----------+--------+--------------+----------------------------+
9 rows in set (0.06 sec)

### Why does this happen?

If the Magento application has more than one store, it may not synchronize data between a particular store and the Global store settings.

Values on store\_id=1 have more priority than the default (global) store (store\_id=0). Thus, the application may ignore the lobal image settings and use the store scope configuration (no\_selection for image role attributes) when displaying an image.

## Solution

Delete attributes with the no\_selection values using this SQL script:

DELETE `cpev\_s`.* FROM `catalog\_product\_entity\_varchar` `cpev\_s` JOIN `eav\_attribute` `ea` ON `cpev\_s`.`attribute\_id` = `ea`.`attribute\_id` LEFT JOIN `catalog\_product\_entity\_varchar` `cpev\_0` ON `cpev\_0`.`row\_id` = `cpev\_s`.`row\_id` AND `cpev\_0`.`attribute\_id` = `cpev\_s`.`attribute\_id` AND `cpev\_0`.`store\_id` = 0 WHERE `cpev\_s`.`value` = 'no\_selection' AND `ea`.`attribute\_code` IN ('image', 'small\_image', 'thumbnail') AND `cpev\_s`.`store\_id` > 0 AND `cpev\_s`.`value` != `cpev\_0`.`value` AND `cpev\_s`.`value` = 'no\_selection';
After these attributes are removed, the roles for particular stores are set and images are displayed on the storefront.

## Additional details

You will not be able to see the fix results immediately if Full Page Cache is enabled in your Magento instance.

For the changes to display, refresh the page cache using the **Cache Management** menu of your Admin panel.

## More information

### Stores and scopes

[Stores and store scopes](http://docs.magento.com/m2/ee/user_guide/stores/stores-all-stores.html) (User Guide)

### Images

[Uploading Product Images](http://docs.magento.com/m2/ee/user_guide/catalog/product-image-upload.html) (User Guide)

### Cache

* 
[Cache management](http://docs.magento.com/m2/ee/user_guide/system/cache-management.html) (User Guide)

* 
[Manage the cache](http://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-cache.html) (DevDocs)

