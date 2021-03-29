---
title: Import CSV product information for same name product fails
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,import,known issues,2.2.3
---

This article provides a patch for the known Magento 2.2.3 issue related to getting errors when trying to import a `` .csv `` file with products information, if there are products with same name.

## Issue

When a `` .csv `` file with products information is imported, and there are products with same name, you get the the following error on the Check Data step: _"<tt>URL Key XYZ was already generated for an item with the SKU %sku%"</tt>_ . The issued is cause by rewriting the products URL's during import, even there's no column for products' URLs in the imported `` .csv `` file.

Steps to reproduce:

1. Create two configurable products with the same name in Magento Admin.
1. Create a `` .csv `` file to import data for those products, which has for example these columns:  
     `` sku `` | `` product_type `` | `` name `` | `` product_websites `` | `` store_view_code ``
1. Go to System > Data Transfer > Import and select the `` .csv `` file.
1. Click Check Data.

Expected result:  
 No issues found, you can import the `` .csv `` file successfully.

Actual result:  
 The following error message is displayed: _"URL Key XYZ was already generated for an item with the SKU %sku%"_, it is not possible to import the file.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-12899\_EE\_2.2.3\_COMPOSER\_v2.patch](https://support.magento.com/hc/en-us/article_attachments/360024448232/MDVA-12899_EE_2.2.3_COMPOSER_v2.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce 2.2.3

The patch is also compatible (but might not solve the issue) with the following Magento editions and versions:

* Magento Commerce (Cloud) from 2.2.0 to 2.2.7, and 2.3.0
* Magento Commerce from 2.2.0 to 2.2.2, from 2.2.4 to 2.2.7, and 2.3.0

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Useful links

[Apply custom patches to Magento Commerce (Cloud)](https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html)

## Attached Files