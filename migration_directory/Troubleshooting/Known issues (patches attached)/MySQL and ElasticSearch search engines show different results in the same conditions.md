This article provides a patch for the known Magento Commerce (Cloud) 2.2.3 issue related to getting different search results for the same search query with MySQL and ElasticSearch.

## Issue:

Your catalog search results with same filters set, differ depending on the search engine being used, MySQL or ElasticSearch.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   Install and configure ElasticSearch.&nbsp;
2.   On the storefront, select one of the filters.
3.   Make note of the number of matching products.
4.   Configure the default MySQL search.
5.   On the storefront, select one of the filters.
6.   Make note of the number of matching products.

<span class="wysiwyg-underline">Expected result</span>:  
 The number of matching products is the same.

<span class="wysiwyg-underline">Actual result</span>:  
 The number of matching products is different.

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:

<a href="https://support.magento.com/hc/en-us/article_attachments/360023683791/MDVA-12312_EE_2.2.3_COMPOSER_v1.patch" target="_self">Download MDVA-12312\_EE\_2.2.3\_COMPOSER\_v1.patch</a>

<a href="https://support.magento.com/hc/en-us/article_attachments/360023949911/MDVA-14172_EE_2.2.6_COMPOSER_v1.patch" target="_self">Download MDVA-14172\_EE\_2.2.6\_COMPOSER\_v1.patch</a>

### Compatible Magento versions:

The patches were created for:

*   Magento Commerce (Cloud) 2.2.3 (the `` MDVA-12312_EE_2.2.3_COMPOSER_v1.patch&nbsp; ``file)
*   Magento Commerce (Cloud) 2.2.6&nbsp;(the `` MDVA-14172_EE_2.2.6_COMPOSER_v1.patch&nbsp; ``file)

The `` MDVA-12312_EE_2.2.3_COMPOSER_v1.patch  ``patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) 2.2.4
*   Magento Commerce (Cloud) 2.2.5
*   Magento Commerce 2.2.3
*   Magento Commerce 2.2.4
*   Magento Commerce 2.2.5

The `` MDVA-14172_EE_2.2.6_COMPOSER_v1.patch  ``patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce 2.2.6

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files