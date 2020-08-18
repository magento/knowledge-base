This article provides a patch for the known Magento Commerce 2.2.3 issue related to the entity (category, CMS page, etc) itself being removed when the related schedule update is deleted.

<p class="info">The issue was fixed in Magento Commerce 2.2.6.</p>

## Issue

When you delete an active schedule update between it's starting and ending dates, the related entity (category, subcategory, CMS page) is also deleted.

<span class="wysiwyg-underline">Steps to reproduce (with categories)</span>:

1.   Log in to Magento Admin.
2.   Create a new subcategory under __Catalog__ &gt; __Categories__.
3.   Create new Staging Update with the start and end time.
4.   Wait until the update is applied, that is the start time comes.
5.   Delete the update, using the __View/Edit__ link.

<span class="wysiwyg-underline">Expected result</span>:  
 The update is deleted, the subcategory still exists in the Admin.

<span class="wysiwyg-underline">Actual result</span>:  
 The update and the&nbsp;subcategory are deleted.

## Solution

Please apply the patch provided in this article, and clean the cache running&nbsp;<code class="language-bash">bin/magento
  cache:clean</code>

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the file name, or click the corresponding link:

*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025424672/MDVA-11059_EE_2.2.3_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11059\_EE\_2.2.3\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360047580191/MDVA-23505_EE_2.2.4_COMPOSER_v1.patch" target="_self">Download MDVA-23505\_EE\_2.2.4\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360047446032/MDVA-12158_EE_2.2.5_COMPOSER_v2.patch" target="_self">Download MDVA-12158\_EE\_2.2.5\_COMPOSER\_v2.patch</a>

### Compatible Magento versions:

The patches were created for:

*   MDVA-11059\_EE\_2.2.3\_COMPOSER\_v1.patch was created for Magento Commerce 2.2.3
*   MDVA-23505\_EE\_2.2.4\_COMPOSER\_v1.patch&nbsp;was created for Magento Commerce 2.2.4
*   MDVA-12158\_EE\_2.2.5\_COMPOSER\_v2.patch&nbsp;was created for Magento Commerce 2.2.5

The MDVA-11059\_EE\_2.2.3\_COMPOSER\_v1.patch&nbsp;patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce 2.2.0-2.2.2
*   Magento Commerce Cloud 2.2.0-2.2.3

The MDVA-23505\_EE\_2.2.4\_COMPOSER\_v1.patch&nbsp;patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce 2.1.0-2.1.18, 2.2.0-2.2.3
*   Magento Commerce Cloud 2.1.0-2.1.18, 2.2.0-2.2.3

The MDVA-23505\_EE\_2.2.5\_COMPOSER\_v1.patch&nbsp;patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce Cloud 2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files