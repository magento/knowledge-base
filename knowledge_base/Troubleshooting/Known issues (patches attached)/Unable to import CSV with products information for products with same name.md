This article provides a patch for the known Magento 2.2.3 issue related to getting errors when trying to import a `` .csv `` file with products information, if there are products with same name.

## Issue

When a `` .csv `` file with products information is imported, and there are products with same name, you get the the following error on the&nbsp;Check Data step: _"<tt>URL Key XYZ was already generated for an item with the SKU %sku%"</tt>_&nbsp;. The issued is cause by rewriting the products URL's during import, even there's no column for products' URLs in the imported `` .csv `` file.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   Create two configurable products with the same name in Magento Admin.
2.   Create a `` .csv `` file to import data for those products, which has for example these columns:  
     `` sku `` | `` product_type `` | `` name `` | `` product_websites `` | `` store_view_code ``
3.   Go to __System__ &gt; __Data Transfer__ &gt; __Import__ and select the `` .csv `` file.
4.   Click __Check Data__.

<span class="wysiwyg-underline">Expected result</span>:  
 No issues found, you&nbsp;can import the `` .csv `` file successfully.

<span class="wysiwyg-underline">Actual result</span>:  
 The following error message is displayed: _"URL Key XYZ was already generated for an item with the SKU %sku%"_, it is not possible to import the file.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360024448232/MDVA-12899_EE_2.2.3_COMPOSER_v2.patch" rel="noopener" target="_blank">Download MDVA-12899\_EE\_2.2.3\_COMPOSER\_v2.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce 2.2.3

The patch is also compatible (but might not solve the issue) with the following Magento editions and versions:

*   Magento Commerce (Cloud) from 2.2.0 to 2.2.7, and 2.3.0
*   Magento Commerce from 2.2.0 to 2.2.2, from 2.2.4 to 2.2.7, and 2.3.0

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Useful links

<a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html" rel="noopener" target="_blank">Apply custom patches to Magento Commerce (Cloud)</a>

## Attached Files