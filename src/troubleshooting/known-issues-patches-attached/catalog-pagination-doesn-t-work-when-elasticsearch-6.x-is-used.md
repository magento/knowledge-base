---
title: Catalog pagination doesn't work with Elasticsearch 6.x
labels: 2.3.3,Elasticsearch 6.x,Magento Commerce,Magento Commerce Cloud,known issues,pagination,patch,troubleshooting
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

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Install Magento.
1. Enable Elasticseach 6 as a catalog search engine.
1. Add a number of products to Category that goes past the 1-page limit set in Admin.     **Note** : 12 is the default number of products displayed per page in Magento 2.3.3.    
1. Open Category on storefront (either search results or category page) and go to page 2.

 <span class="wysiwyg-underline">Expected result:</span>

Products should be displayed on the second page.

 <span class="wysiwyg-underline">Actual result:</span>

 **"**  *We can't find products matching the selection*  **"** message on the second page.

## Solution

To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download Catalog pagination issue on Elasticsearch 6.x patch](assets/Catalog_pagination_issue_on_Elasticsearch_6_composer-2019-10-11-08-07-41.patch.zip) - The patch is compatible with all affected versions and editions.

>![warning]
>
>Magento strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms.

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached files
