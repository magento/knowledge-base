---
title: Catalog pagination doesn't work with Elasticsearch 6.x
labels: 2.3.3,Elasticsearch 6.x,Magento Commerce,Magento Commerce Cloud,known issues,pagination,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the Adobe Commerce issue where catalog pagination doesn't work on Elasticsearch 6.x.

The patch below resolves issues that users of Adobe Commerce 2.3.3 experience in deployments where Elasticsearch 6.x is used as the catalog search engine. Users see an error message when they attempt to navigate past the first page of search results.

After this patch is installed, users will be able to page through all search results.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.3.3
* Adobe Commerce on-premises 2.3.3
* Magento Open Source 2.3.3
* Elasticsearch 6.x

## Issue

An issue has been discovered in Magento Open Source, Adobe Commerce on-premises, and Adobe Commerce on cloud infrastructure where Search result page pagination doesn't work if you switch the page.

<ins>Steps to reproduce</ins>:

1. Install Adobe Commerce.
1. Enable Elasticseach 6 as a catalog search engine.
1. Add a number of products to Category that goes past the 1-page limit set in the Admin. **Note**: 12 is the default number of products displayed per page in Adobe Commerce 2.3.3.    
1. Open Category on storefront (either search results or category page) and go to page 2.

<ins>Expected result</ins>:

Products should be displayed on the second page.

<ins>Actual result</ins>:

 **"***We can't find products matching the selection***"** message is shown on the second page.

## Solution

To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [Download Catalog pagination issue on Elasticsearch 6.x patch](assets/Catalog_pagination_issue_on_Elasticsearch_6_composer-2019-10-11-08-07-41.patch.zip) - The patch is compatible with all affected versions and editions.

>![warning]
>
>Adobe strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms.

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached files
