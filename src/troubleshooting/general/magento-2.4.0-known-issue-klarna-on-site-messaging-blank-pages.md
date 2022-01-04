---
title: "Adobe Commerce 2.4.0 known issue: Klarna On-Site Messaging blank pages"
labels: 2.4.0,Klarna,Magento Commerce,Magento Commerce Cloud,design,known issues,on-site messaging,payment,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article describes a known Adobe Commerce 2.4.0 issue with Klarna payment method, where enabling Klarna on-site messaging without specifying a design theme, results in not displaying product pages on the storefront correctly (product pages appear blank).

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

<span class="wysiwyg-underline">Prerequisites:</span> Klarna payment method is enabled.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. In the Commerce Admin, go to **Stores** > **Configuration** > **Sales** > **Payment Methods** > **Klarna** > **Klarna On-Site Messaging**.
1. Set **Enable** to *Yes*.
1. Leave the **Design theme** field blank.
1. Save configuration by clicking **Save Config**.
1. Go to storefront and navigate to any product page.

<span class="wysiwyg-underline">Expected result:</span>

The page loads successfully with default design theme applied for Klarna on-site messaging.

<span class="wysiwyg-underline">Actual result:</span>

A blank page is displayed.

## Solution

If enabling the Klarna on-site messaging, always ensure that the **Design theme** field is not blank.
