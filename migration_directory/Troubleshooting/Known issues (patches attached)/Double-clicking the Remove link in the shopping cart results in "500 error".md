This article provides a patch for the known Magento&nbsp;Commerce (Cloud) 2.2.0 issue related to customers getting error when trying to remove twice a shopping cart item (by double-clicking the _Remove_ link or by clicking it in different tabs).

## Issue

When customers double-click the _Remove_ link in the shopping cart, trying to remove a product&nbsp;from the shopping cart, they get a blank page with the following error message:&nbsp;_"This page isn’t working. HTTP ERROR 500". _The same issue happens if a customer opens two browser tabs with&nbsp;the shopping cart page and removes the product first in one tab, then in the second one.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   Add a product to shopping cart on the storefront.
2.   Navigate to the shopping cart page.
3.   Double-click the Remove link.

OR&nbsp;

1.   Add a product to shopping cart on the storefront.
2.   Navigate to the shopping cart page.
3.   Open a new browser tab and navigate to the shopping cart page (same product).
4.   Remove the product from the cart.
5.   Open the second tab and remove the product again.&nbsp;

<span class="wysiwyg-underline">Expected result</span>:  
 The product is removed from the cart without errors.

<span class="wysiwyg-underline">Actual result</span>:  
 The product is removed with the error:&nbsp;_"This page isn’t working. HTTP ERROR 500"_ error message.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360023828792/MDVA-8623_EE_2.2.0_v1.composer.patch" target="_self">Download&nbsp;MDVA-8623\_EE\_2.2.0\_v1.composer.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce (Cloud) 2.2.0

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) versions from 2.2.1 to 2.2.5
*   Magento Commerce versions from 2.2.0 to 2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files