---
title: Adobe Commerce on cloud infrastructure v2.3.5 GraphQL caching invalidation not working
labels: GraphQL,Magento Commerce Cloud,cache invalidation,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the issue where GraphQL `GET` request returns outdated information if the customer changes product information.

## Affected products and versions

Adobe Commerce on cloud infrastructure v2.3.5.

## Issue

GraphQL requests are cached by Fastly, and the cached version is retrieved for each subsequent request from Fastly. When a product is re-saved in the Adobe Commerce backend, the Fastly cache should invalidate when a product is updated. However, it remains valid.

<ins>Steps to reproduce</ins>:

1. Trigger the following GraphQL request to get products for certain category like:
    <pre><code class="language-graphql">GET http://<magento2-server>/graphql?query={products(currentPage:1,pageSize:6,filter:{web_ready:{eq:"1"},category_id:{eq:"1521"}}){total_count,items{__typename,id,sku,name}}}</code>
    </pre>    
1. Re-save one of the products retrieved by the request above in the Commerce Admin.
1. Trigger the request again.

<ins>Expected results</ins>:

The `X-Cache` header contains `MISS`.

<ins>Actual results</ins>:

The `X-Cache` header contains `HIT`, which means the response is cached.

## Solution

Disable GraphQL product cache with the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [MDVA-28559\_EE\_2.3.5-p1\_COMPOSER\_v1.patch](assets/MDVA-28559_EE_2.3.5-p1_v1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure v2.3.5

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure v2.4.0
* Adobe Commerce on-premises v2.4.0
* Adobe Commerce on cloud infrastructure v2.3.5-p2
* Adobe Commerce on-premises v2.3.5-p2
* Adobe Commerce on cloud infrastructure v2.3.5-p1
* Adobe Commerce on-premises v2.3.5-p1
* Adobe Commerce on-premises v2.3.5
* Adobe Commerce on cloud infrastructure v2.3.4-p2
* Adobe Commerce on-premises v2.3.4-p2
* Adobe Commerce on cloud infrastructure v2.3.4
* Adobe Commerce on-premises v2.3.4
* Adobe Commerce on-premises v2.3.3-p1
* Adobe Commerce on-premises v2.3.3

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions on how to apply a composer patch.

## Attached files
