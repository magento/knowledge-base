This article provides a patch for the known Magento Commerce 2.2.3 issue where the customer's already populated shipping address form was blank again after refreshing the browser page on guest checkout. The issue was experienced when the persistent shopping cart was enabled.

## Issue

Customers go through guest checkout and complete all forms including the shipping address. They get to the Review and payments section and reload the page. The form is empty, and they need to re-enter the shipping address again. Persistent shopping cart functionality is enabled.

<span class="wysiwyg-underline">Steps to reproduce</span>:

Prerequisites: The persistent shopping cart functionality is enabled. Check if it is enabled in the Admin, under&nbsp;__Stores__&nbsp;&gt; __Configuration__&nbsp;&gt;__&nbsp;Customers __or__&nbsp;Stores&nbsp;__&gt;__ Configuration__ &gt;&nbsp;__Sales, __depending on your Magento version.

1.   Go to the store front.
2.   Add products to the shopping cart.
3.   Proceed to checkout as a guest.
4.   Fill in your shipping address, choose shipping options, and continue to secure payment.
5.   Get redirected to the Review and payments section of checkout.
6.   Double check that you see the shipping address in the&nbsp;Ship to section.
7.   Refresh the page.

<span class="wysiwyg-underline">Expected result</span>:  
 You are able to continue checkout and all data is saved.

<span class="wysiwyg-underline">Actual result</span>:  
 Shipping address is empty, you need to-renter it.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360025238631/MDVA-9718_EE_2.2.3_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-9718\_EE\_2.2.3\_COMPOSER\_v1.patch</a>

### Compatible Magento versions

The patch was created for:

*   Magento Commerce 2.2.3

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce Cloud from 2.1.13 to 2.1.18
*   Magento Commerce Cloud from 2.2.0 to 2.2.5
*   Magento Commerce 2.0.X
*   Magento Commerce 2.1.X
*   Magento Commerce from 2.2.0 to 2.2.2, and from 2.2.4 to 2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files