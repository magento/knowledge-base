This article provides a patch for the Magento 2 issue where catalog pagination doesn't work on Elasticsearch 6.x.

The patch below resolves issues that users of Magento 2.3.3 experience in deployments where Elasticsearch 6.x is used as the catalog search engine. Users see an error message when they attempt to navigate past the first page of search results.&nbsp;

After this patch is installed, users will be able to page through all search results.

### Affected versions:

*   Magento Commerce Cloud 2.3.3
*   Magento Commerce 2.3.3
*   Magento Open Source 2.3.3

## Issue

An issue has been discovered in Magento Open Source, Magento Commerce, and&nbsp;Magento Commerce Cloud where Search result page pagination doesn't work if you switch the page.&nbsp;

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   Install Magento.
2.   Enable Elasticseach 6 as a catalog search engine.
3.   
    
    Add a number of products to Category that goes past the 1-page limit set in Admin.
    
    
    
    _Note: 12 is the default number of products displayed per page in Magento 2.3.3._
    
    
4.   Open Category on storefront (either search results or category page) and go to page 2.

<span class="wysiwyg-underline">Expected result:</span>

Products should be displayed on the second page.

<span class="wysiwyg-underline">Actual result:</span>

__"We can't find products matching the selection."__ message on the second page.

## Solution&nbsp;

To fix the issue, please apply the patch attached to this article.&nbsp;To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360040653971/Catalog_pagination_issue_on_Elasticsearch_6_composer-2019-10-11-08-07-41.patch" rel="noopener" target="_blank">Download Catalog pagination issue on Elasticsearch 6.x patch</a>&nbsp;- The patch is compatible with all affected versions and editions.

<p class="warning">Magento strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms.</p>

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached files