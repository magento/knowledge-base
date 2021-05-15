---
title: Magento Commerce Cloud v2.3.5 GraphQL caching invalidation not working
labels: GraphQL,Magento Commerce Cloud,cache invalidation,patch,troubleshooting
---

This article provides a patch for the issue where GraphQL `GET` request returns outdated information, if the customer changes product information.

## Affected products and versions

Magento Commerce Cloud v2.3.5.

## Issue

GraphQL requests are cached by Fastly and the cached version is retrieved for each next request from Fastly. When a product is re-saved in the Magento backend, the Fastly cache should invalidate when a product is updated. However, it remains valid.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Trigger the following GraphQL request to get products for certain category:    ```clike    GET http://<magento2-server>/graphql?query={products(currentPage:1,pageSize:6,filter:{web_ready:{eq:"1"},category_id:{eq:"1521"}}){total_count,items{__typename,id,sku,name}}}    ```    

1. Re-save one of the products retrieved by the request above in Magento Admin.
1. Trigger the request again.

 <span class="wysiwyg-underline">Expected result:</span> 

The `X-Cache` header contains `MISS` .

 <span class="wysiwyg-underline">Actual result:</span> 

The `X-Cache` header contains `HIT` , means the response is cached.

## Solution

Disable GraphQL product cache with the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [MDVA-28559\_EE\_2.3.5-p1\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360065269852/MDVA-28559_EE_2.3.5-p1_v1.composer.patch) 

### Compatible Magento versions:

The patch was created for:

* Magento Commerce Cloud v2.3.5

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce Cloud v2.4.0
* Magento Commerce v2.4.0
* Magento Commerce Cloud v2.3.5-p2
* Magento Commerce v2.3.5-p2
* Magento Commerce Cloud v2.3.5-p1
* Magento Commerce v2.3.5-p1
* Magento Commerce v2.3.5
* Magento Commerce Cloud v2.3.4-p2
* Magento Commerce v2.3.4-p2
* Magento Commerce Cloud v2.3.4
* Magento Commerce v2.3.4
* Magento Commerce v2.3.3-p1
* Magento Commerce v2.3.3

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions on how to apply a composer patch.

## Attached files
