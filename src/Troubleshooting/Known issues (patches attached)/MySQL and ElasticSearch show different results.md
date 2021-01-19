---
title: MySQL and ElasticSearch show different results 
link: https://support.magento.com/hc/en-us/articles/360025244171-MySQL-and-ElasticSearch-show-different-results-
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,search,known issues,2.2.6,2.2.3
---

[MySQL catalog search engine will be removed in Magento 2.4.0](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0). You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html).

This article provides a patch for the known Magento Commerce (Cloud) 2.2.3 issue related to getting different search results for the same search query with MySQL and ElasticSearch.

## Issue:

Your catalog search results with same filters set, differ depending on the search engine being used, MySQL or ElasticSearch.

Steps to reproduce:

1. Install and configure ElasticSearch.

1. On the storefront, select one of the filters.

1. Make note of the number of matching products.

1. Configure the default MySQL search.

10. On the storefront, select one of the filters.

12. Make note of the number of matching products.

Expected result:  
 The number of matching products is the same.

Actual result:  
 The number of matching products is different.

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:

[Download MDVA-12312\_EE\_2.2.3\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360023683791/MDVA-12312_EE_2.2.3_COMPOSER_v1.patch)

[Download MDVA-14172\_EE\_2.2.6\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360023949911/MDVA-14172_EE_2.2.6_COMPOSER_v1.patch)

### Compatible Magento versions:

The patches were created for:

* Magento Commerce (Cloud) 2.2.3 (the MDVA-12312\_EE\_2.2.3\_COMPOSER\_v1.patch file)

* Magento Commerce (Cloud) 2.2.6 (the MDVA-14172\_EE\_2.2.6\_COMPOSER\_v1.patch file)

The MDVA-12312\_EE\_2.2.3\_COMPOSER\_v1.patch patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce (Cloud) 2.2.4

* Magento Commerce (Cloud) 2.2.5

* Magento Commerce 2.2.3

* Magento Commerce 2.2.4

* Magento Commerce 2.2.5

The MDVA-14172\_EE\_2.2.6\_COMPOSER\_v1.patch patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce 2.2.6

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files

