This article lists the things you can check that could help solve the problem of products not being displayed on storefront.

### Affected products and versions

*   Magento Commerce X.X.X
*   Magento Commerce Cloud X.X.X
*   Magento Open Source X.X.X

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   Login to the Magento Admin.
2.   Go to __Catalog__ &gt; __Products__.
3.   Click __Add Product__ and go through the product creation process.

Or import products from a CSV file.

<span class="wysiwyg-underline">Expected result</span>

Product is displayed on the storefront.

<span class="wysiwyg-underline"> Actual result </span>

Product is not displayed.

## Cause

This can be caused by a number of reasons. Please follow the steps below to check the main points that could help to identify and solve the problem.

## Solution

Each of the following points might solve the issue.

*   Check product settings in Admin. Go to __Catalog__ &gt; __Products__, open the product page and make sure the following fields are correctly configured:
    
    *   __Enable Product__ = _Yes._
    *   __Stock Status__: _In Stock_. Or if _Out of Stock_ is the correct value, make sure that __Display Out of Stock Products__ is set to _Yes_ (configured on global level).
    *   __Categories__:__&nbsp;__If you try to find the product on a category page, verify that the product is assigned to the category. To simplify troubleshooting, create a new category from the current page and assign a product to it.
    *   __Visibility__&nbsp;= _Catalog, Search._
    *   In the __Product in Websites __section, make sure the product is assigned to the correct website.
    *   Switch the scope selector to the store view where you try to find your product on the storefront, and verify the same settings.
    
    
    
*   Perform the full reindex, by running `` bin/magento&nbsp;indexer:reindex ``&nbsp;from the console, and flush all cache in the Admin, under &nbsp;__System__ &gt; __Tools__ &gt; __Cache Management__,&nbsp;or from the console by running&nbsp;`` bin/magento cache:clean ``.
*   If the above does not help, you can start further investigation by checking logs in the `` var/log `` directory.

## Related reading

*   <a href="https://support.magento.com/hc/en-us/articles/360000318834" target="_self"><span style="font-size: 15px;">Log locations (directories) for Pro plan</span></a>
*   <a href="https://support.magento.com/hc/en-us/articles/360020127552-Log-locations-directories-for-Starter-plan" target="_self"><span style="font-size: 15px;">Log locations (directories) for Starter plan</span></a>