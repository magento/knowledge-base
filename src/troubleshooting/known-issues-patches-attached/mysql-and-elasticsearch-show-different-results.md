---
title: MySQL and ElasticSearch show different results
labels: 2.2.3,2.2.6,Magento Commerce,Magento Commerce Cloud,known issues,patch,search,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

>![warning]
>
> [MySQL catalog search engine will be removed in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0). You must have the Elasticsearch host set up and configured prior to installing version 2.4.0. Refer to [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html) in our developer documentation.

This article provides a patch for the known Adobe Commerce on cloud infrastructure 2.2.3 issue related to getting different search results for the same search query with MySQL and ElasticSearch.

## Issue:

Your catalog search results with the same filter set differ depending on the search engine being used, MySQL or ElasticSearch.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Install and configure ElasticSearch.
1. On the storefront, select one of the filters.
1. Make a note of the number of matching products.
1. Configure the default [MySQL search](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-Magento-2-4-0).
1. On the storefront, select one of the filters.
1. Make a note of the number of matching products.

 <span class="wysiwyg-underline">Expected result</span>:
 The number of matching products is the same.

 <span class="wysiwyg-underline">Actual result</span>:
 The number of matching products is different.

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click on the following links:

 [Download MDVA-12312\_EE\_2.2.3\_COMPOSER\_v1.patch](assets/MDVA-12312_EE_2.2.3_COMPOSER_v1.patch.zip)

 [Download MDVA-14172\_EE\_2.2.6\_COMPOSER\_v1.patch](assets/MDVA-14172_EE_2.2.6_COMPOSER_v1.patch.zip)

### Compatible Adobe Commerce versions:

The patches were created for:

* Adobe Commerce on cloud infrastructure 2.2.3 (the `MDVA-12312_EE_2.2.3_COMPOSER_v1.patch` file)
* Adobe Commerce on cloud infrastructure 2.2.6 (the `MDVA-14172_EE_2.2.6_COMPOSER_v1.patch` file)

The `MDVA-12312_EE_2.2.3_COMPOSER_v1.patch` patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure 2.2.4
* Adobe Commerce on cloud infrastructure 2.2.5
* Adobe Commerce on-premises 2.2.3
* Adobe Commerce on-premises 2.2.4
* Adobe Commerce on-premises 2.2.5

The `MDVA-14172_EE_2.2.6_COMPOSER_v1.patch` patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on-premises 2.2.6

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.

## Attached Files
