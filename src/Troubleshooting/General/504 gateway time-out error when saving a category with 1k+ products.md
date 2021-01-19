---
title: 504 gateway time-out error when saving a category with 1k+ products
link: https://support.magento.com/hc/en-us/articles/360034731011-504-gateway-time-out-error-when-saving-a-category-with-1k-products
labels: Magento Commerce Cloud,Magento Commerce,timeout,time-out,products,2.3.3,how to,504 error,URL rewrites
---

This article suggests a solution for the timeout issue you might have, when performing operations with large categories (1k+ plus products).

### Affected products and versions:

* Magento Commerce Cloud 2.3.3

* Magento Commerce 2.3.3

* Magento Open Source 2.3.3

## Issue

Prerequisites: The **Stores** > **Configuration** > **CATALOG** > **Catalog** > **Use Categories Path for Product URLs** option is set to *Yes* for your store view.

Steps to reproduce

1. In Magento Admin, go to  **Catalog** > **Categories**.

1. Open a large category, like more than 1000 assigned products.

1. Add a product to the category.

1. Click **Save Category.**

Expected result

Category is saved successfully.

Actual result

After 5 minutes of saving process, the 504 gateway timeout error page appears.

## Cause

The process takes longer than the server's configured timeout.

## Solution

Disabling the **Generate "category/product" URL Rewrites** option will remove all category/product URL rewrites from the database, and significantly decrease the time required for the operations with big categories.

Turning this option off will result in permanent removal of category/product URL rewrites without an ability to restore them.

To disable the **Generate "category/product" URL Rewrites** option:

1. In the Magento Admin, navigate to **Stores** > **Configuration** > **CATALOG** > **Catalog**.

1. In the top left corner of the configuration page, in the **Scope** field, set your configuration scope to *Default Config*.

1. Set **Generate "category/product" URL Rewrites** to *No*.

1. Click **Save Config**.

10. Clean cache by running bin/magento cache:clean or in Magento Admin under **System** > **Tools** > **Cache Management**.

Now you can proceed to adding products to categories, or moving categories with a large number of products, and these operations will take much less time and should not cause timeout.

## Related reading

* 
[Automatic Product Redirects](https://docs.magedevteam.com/244/m2/ce/user_guide/marketing/url-redirect-product-automatic.html) in [Magento 2.3 User Guide](https://docs.magedevteam.com/244/m2/ce/user_guide/)

