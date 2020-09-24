This article suggests a solution for the timeout issue you might have, when performing operations with large categories (1k+ plus products).

### Affected products and versions:

*   Magento Commerce Cloud&nbsp;2.3.3
*   Magento Commerce&nbsp;2.3.3
*   Magento Open Source 2.3.3

## Issue

Prerequisites: The __Stores__ &gt; __Configuration__ &gt; __CATALOG__ &gt; __Catalog__ &gt;&nbsp;__Use Categories Path for Product URLs__ option is set to _Yes_ for your store view.

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   In Magento Admin, go to &nbsp;__Catalog__ &gt; __Categories__.
2.   Open a large category, like more than 1000 assigned products.
3.   Add a product to the category.
4.   Click __Save Category.__

<span class="wysiwyg-underline">Expected result</span>

Category is saved successfully.

<span class="wysiwyg-underline">Actual result</span>

After 5 minutes of saving process, the 504 gateway timeout error page appears.

## Cause

The process takes longer than the server's configured timeout.

## Solution

Disabling the __Generate "category/product" URL Rewrites__ option will remove all&nbsp;category/product URL rewrites from the database, and significantly decrease the time required for the operations with big categories.&nbsp;

<p class="warning">Turning this option off will result in permanent removal of category/product URL rewrites without an ability to restore them.</p>

To disable the&nbsp;__Generate "category/product" URL Rewrites__ option:

1.   In the Magento Admin, navigate to&nbsp;__Stores__ &gt; __Configuration__ &gt; __CATALOG__ &gt; __Catalog__.
2.   In the top left corner of the configuration page, in the __Scope__ field, set your configuration scope to _Default Config_.
3.   Set&nbsp;__Generate "category/product" URL Rewrites__ to_ No_.
4.   Click __Save Config__.&nbsp;
5.   Clean cache by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin under __System__ &gt; __Tools__ &gt; __Cache Management__.

Now you can proceed to adding products to categories, or moving categories with a large number of products, and these operations will take much less time and should not cause timeout.

## Related reading

*   <a href="https://docs.magedevteam.com/244/m2/ce/user_guide/marketing/url-redirect-product-automatic.html" target="_self">Automatic Product Redirects</a>&nbsp;in <a href="https://docs.magedevteam.com/244/m2/ce/user_guide/" target="_self">Magento 2.3 User Guide</a>