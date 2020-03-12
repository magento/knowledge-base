This article provides a patch for the known&nbsp;Magento Commerce 2.2.2 issue related to the product special price "from" date being incorrect if its value is changed by the admin whose interface locale is different.

## Issue

When you set/change the special price for a product,&nbsp;the current date and time is saved in the database as a value for the `` special_from_date `` attribute (not visible when editing a product). If you edit the special price and&nbsp;your admin user account is set to different interface locale, a wrong value might be set to&nbsp;`` special_from_date ``, because of the issues in parsing date format for different locales.

<span class="wysiwyg-underline">Steps to reproduce</span>:

Prerequisites: the admin user locale is English (United States).

1.   Log in to Magento Admin.
2.   Go to the admin user account settings.
3.   Set Interface Locale to Ukrainian.
4.   Click __Save Account__.
5.   Go to __Catalog__ &gt; __Product__.
6.   Select any product.
7.   On the product page, click __Advanced Pricing__.
8.   Add a special price.
9.   Save the product.
10.   Repeat steps 7-9.
11.   Go to __System__ &gt;__ Action Logs__.
12.   Check the log for product update.

<span class="wysiwyg-underline">Expected result</span>:  
 Start date for the special price should be the current date.

<span class="wysiwyg-underline">Actual result</span>:  
 Start date for the special price is for a date a few years in the future, preventing the special price for being active.

## Solution

Applying the patch will prevent the issue from happening again. To correct the data for the products where date was set incorrectly, re-set the special price after applying the patch.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/article_attachments/360025650852/MDVA-11605_EE_2.2.2_COMPOSER_v1.patch" target="_self">Download&nbsp;MDVA-11605\_EE\_2.2.2\_COMPOSER\_v1.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce 2.2.2

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce 2.1.0-2.1.18, 2.2.0-2.2.5
*   Magento Commerce Cloud 2.1.11-2.1.18,&nbsp;2.2.0-2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files