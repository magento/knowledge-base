---
title: Catalog pagination doesn't work when Elasticsearch 6.x is used
link: https://support.magento.com/hc/en-us/articles/360035142371-Catalog-pagination-doesn-t-work-when-Elasticsearch-6-x-is-used
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,pagination,2.3.3,Elasticsearch 6.x
---

<p>This article provides a patch for the Magento 2 issue where catalog pagination doesn't work on Elasticsearch 6.x.</p>
<p>The patch below resolves issues that users of Magento 2.3.3 experience in deployments where Elasticsearch 6.x is used as the catalog search engine. Users see an error message when they attempt to navigate past the first page of search results. </p>
<p>After this patch is installed, users will be able to page through all search results.</p>
<h3>Affected versions:</h3>
<ul>
<li>Magento Commerce Cloud 2.3.3</li>
<li>Magento Commerce 2.3.3</li>
<li>Magento Open Source 2.3.3</li>
<li>Elasticsearch 6.x</li>
</ul>
<h2>Issue</h2>
<p>An issue has been discovered in Magento Open Source, Magento Commerce, and Magento Commerce Cloud where Search result page pagination doesn't work if you switch the page. </p>
<p>Steps to reproduce:</p>
<ol>
<li>Install Magento.</li>
<li>Enable Elasticseach 6 as a catalog search engine.</li>
<li>
<p>Add a number of products to Category that goes past the 1-page limit set in Admin.</p>
<p>Note: 12 is the default number of products displayed per page in Magento 2.3.3.</p>
</li>
<li>Open Category on storefront (either search results or category page) and go to page 2.</li>
</ol>
<p>Expected result:</p>
<p>Products should be displayed on the second page.</p>
<p>Actual result:</p>
<p>"<em>We can't find products matching the selection</em>" message on the second page.</p>
<h2>Solution </h2>
<p>To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360040653971/Catalog_pagination_issue_on_Elasticsearch_6_composer-2019-10-11-08-07-41.patch">Download Catalog pagination issue on Elasticsearch 6.x patch</a> - The patch is compatible with all affected versions and editions.</p>
<p class="warning">Magento strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms.</p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached files</h2>