---
title: MySQL and ElasticSearch show different results 
link: https://support.magento.com/hc/en-us/articles/360025244171-MySQL-and-ElasticSearch-show-different-results-
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,search,known issues,2.2.6,2.2.3
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
<p>This article provides a patch for the known Magento Commerce (Cloud) 2.2.3 issue related to getting different search results for the same search query with MySQL and ElasticSearch.</p>
<h2>Issue:</h2>
<p>Your catalog search results with same filters set, differ depending on the search engine being used, MySQL or ElasticSearch.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Install and configure ElasticSearch. </li>
<li>On the storefront, select one of the filters.</li>
<li>Make note of the number of matching products.</li>
<li>Configure the default MySQL search.</li>
<li>On the storefront, select one of the filters.</li>
<li>Make note of the number of matching products.</li>
</ol>
<p>Expected result:<br/> The number of matching products is the same.</p>
<p>Actual result:<br/> The number of matching products is different.</p>
<h2>Patch</h2>
<p>The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023683791/MDVA-12312_EE_2.2.3_COMPOSER_v1.patch">Download MDVA-12312_EE_2.2.3_COMPOSER_v1.patch</a></p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023949911/MDVA-14172_EE_2.2.6_COMPOSER_v1.patch">Download MDVA-14172_EE_2.2.6_COMPOSER_v1.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patches were created for:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.3 (the <code>MDVA-12312_EE_2.2.3_COMPOSER_v1.patch </code>file)</li>
<li>Magento Commerce (Cloud) 2.2.6 (the <code>MDVA-14172_EE_2.2.6_COMPOSER_v1.patch </code>file)</li>
</ul>
<p>The <code>MDVA-12312_EE_2.2.3_COMPOSER_v1.patch </code>patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.4</li>
<li>Magento Commerce (Cloud) 2.2.5</li>
<li>Magento Commerce 2.2.3</li>
<li>Magento Commerce 2.2.4</li>
<li>Magento Commerce 2.2.5</li>
</ul>
<p>The <code>MDVA-14172_EE_2.2.6_COMPOSER_v1.patch </code>patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.2.6</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>