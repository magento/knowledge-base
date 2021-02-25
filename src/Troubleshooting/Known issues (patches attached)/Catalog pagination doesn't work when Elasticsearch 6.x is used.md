---
title: Catalog pagination doesn't work when Elasticsearch 6.x is used
link: https://support.magento.com/hc/en-us/articles/360035142371-Catalog-pagination-doesn-t-work-when-Elasticsearch-6-x-is-used
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,pagination,2.3.3,Elasticsearch 6.x
---

This article provides a patch for the Magento 2 issue where catalog pagination doesn't work on Elasticsearch 6.x.

The patch below resolves issues that users of Magento 2.3.3 experience in deployments where Elasticsearch 6.x is used as the catalog search engine. Users see an error message when they attempt to navigate past the first page of search results. 

After this patch is installed, users will be able to page through all search results.

### Affected versions:

* Magento Commerce Cloud 2.3.3
* Magento Commerce 2.3.3
* Magento Open Source 2.3.3
* Elasticsearch 6.x

## Issue

An issue has been discovered in Magento Open Source, Magento Commerce, and Magento Commerce Cloud where Search result page pagination doesn't work if you switch the page. 

Steps to reproduce:

1. Install Magento.
1. Enable Elasticseach 6 as a catalog search engine.
1. Add a number of products to Category that goes past the 1-page limit set in Admin.
    
    
    
    Note: 12 is the default number of products displayed per page in Magento 2.3.1. 1. Open Category on storefront (either search results or category page) and go to page 1. Expected result:

Products should be displayed on the second page.

Actual result:

"_We can't find products matching the selection_" message on the second page.

## Solution 

To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download Catalog pagination issue on Elasticsearch 6.x patch](https://support.magento.com/hc/en-us/article_attachments/360040653971/Catalog_pagination_issue_on_Elasticsearch_6_composer-2019-10-11-08-07-41.patch) - The patch is compatible with all affected versions and editions.

<p class="warning">Magento strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms.</p>

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached files