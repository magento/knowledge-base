This article provides a patch for the known issue of a purchase order (PO) discount not being applied in Magento 2.4.0 B2B. If the PO was placed with a discount code that expired while the PO was in the approval process, the approved order does not reflect the discount.&nbsp;

## Affected products and versions

*   Magento Commerce Cloud 2.4.0
*   Magento Commerce 2.4.0

## Issue

<span class="wysiwyg-underline">Prerequisites</span>: a discount coupon is created, and approval rules preventing POs from being processed automatically exist.&nbsp;

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   Place a PO with a discount applied.
2.   Deactivate the discount coupon.&nbsp;
3.   Approve PO as a manager.&nbsp;
4.   Check the order created as a result.

<span class="wysiwyg-underline">Expected result:</span>

Order is created with a discounted total.&nbsp;

<span class="wysiwyg-underline">Actual result:</span>

Order is created for the full amount.

## Solution&nbsp;

Apply the patch&nbsp;provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360063988371/B2B-709-composer.patch" target="_self">B2B-709-composer.patch</a>

The patch is also available for download in both, `` .git `` and `` .composer ``, formats on <a href="https://magento.com/tech-resources/download" target="_self">Magento Commerce Downloads</a> page, under __Patches__ in the left column navigation. Search for XXX patch.&nbsp;

## How to apply the patch

See&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360028367731" rel="noopener" target="_blank">How to apply a composer patch provided by Magento</a>&nbsp;for instructions.

&nbsp;
&nbsp;