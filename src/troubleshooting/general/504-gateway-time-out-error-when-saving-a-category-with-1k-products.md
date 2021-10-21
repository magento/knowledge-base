---
title: 504 gateway time-out error when saving a category with 1k+ products
labels: 2.3.3,504 error,Magento Commerce,Magento Commerce Cloud,URL rewrites,how to,products,time-out,timeout,Adobe Commerce,Magento,cloud infrastructure,on-premises,Magento Open Source
---

This article suggests a solution for the timeout issue you might have, when performing operations with large categories (1k+ plus products).

## Affected products and versions:

* Adobe Commerce on cloud infrastructure 2.3.3
* Adobe Commerce on-premises 2.3.3
* Magento Open Source 2.3.3

## Issue

Prerequisites: The **Stores** > **Configuration** > **CATALOG** > **Catalog** > **Use Categories Path for Product URLs** option is set to *Yes* for your store view.

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. In the Commerce Admin, go to **Catalog** > **Categories**.
1. Open a large category, like more than 1000 assigned products.
1. Add a product to the category.
1. Click **Save Category**.

 <span class="wysiwyg-underline">Expected result:</span>

Category is saved successfully.

 <span class="wysiwyg-underline">Actual result:</span>

After five minutes of saving process, the 504 gateway timeout error page appears.

## Cause

The process takes longer than the server's configured timeout.

## Solution

Disabling the **Generate "category/product" URL Rewrites** option will remove all category/product URL rewrites from the database, and significantly decrease the time required for the operations with big categories.

>![warning]
>
>Turning this option off will result in permanent removal of category/product URL rewrites without an ability to restore them.

To disable the **Generate "category/product" URL Rewrites** option:

1. In the Commerce Admin, navigate to **Stores** > **Configuration** > **CATALOG** > **Catalog**.
1. In the top left corner of the configuration page, in the **Scope** field, set your configuration scope to *Default Config*.
1. Set **Generate "category/product" URL Rewrites** to *No*.
1. Click **Save Config**.
1. Clean cache by running    ```bash    bin/magento cache:clean    ```    or in the Commerce Admin under **System** > **Tools** > **Cache Management**.

Now you can proceed to adding products to categories, or moving categories with a large number of products, and these operations will take much less time and should not cause timeout.

## Related reading

[Automatic Product Redirects](https://docs.magento.com/user-guide/v2.3/marketing/url-redirect-product-automatic.html) in our user guide.
