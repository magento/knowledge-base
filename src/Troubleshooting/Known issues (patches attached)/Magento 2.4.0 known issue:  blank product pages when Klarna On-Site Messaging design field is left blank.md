This article describes a known Magento 2.4.0 issue with Klarna payment method, where enabling Klarna on-site messaging without specifying a design theme, results in not displaying product pages on the storefront correctly (product pages appear blank).

## Affected products and versions

*   Magento Commerce 2.4.0
*   Magento Commerce Cloud 2.4.0

## Issue

<span class="wysiwyg-underline">Prerequisites:</span>&nbsp;Klarna payment method is enabled.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   In the Magento Admin, go to __Stores__&nbsp;&gt; __Configuration__&nbsp;&gt; __Sales__ &gt;__ Payment Methods__ &gt; __Klarna__&nbsp;&gt; __Klarna On-Site Messaging__.
2.   Set __Enable__ to _Yes_.
3.   Leave the&nbsp;__Design theme__ field blank.
4.   Save configuration by clicking __Save Config__.
5.   Go to storefront and navigate to any product page.

<span class="wysiwyg-underline">Expected result:</span>

The page loads successfuly with default design theme applied for Klarna on-site messaging.

<span class="wysiwyg-underline">Actual result:</span>

A blank page is displayed.

## Solution

If enabling the Klarna on-site messaging, always ensure that the __Design theme__ field is not blank.&nbsp;