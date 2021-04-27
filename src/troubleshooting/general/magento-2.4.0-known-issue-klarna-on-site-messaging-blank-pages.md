---
title: Magento 2.4.0 known issue: Klarna On-Site Messaging blank pages
labels: 2.4.0,Klarna,Magento Commerce,Magento Commerce Cloud,design,known issues,on-site messaging,payment,troubleshooting
---

This article describes a known Magento 2.4.0 issue with Klarna payment method, where enabling Klarna on-site messaging without specifying a design theme, results in not displaying product pages on the storefront correctly (product pages appear blank).

## Affected products and versions

* Magento Commerce 2.4.0
* Magento Commerce Cloud 2.4.0

Prerequisites: Klarna payment method is enabled.

Steps to reproduce:

1. In the Magento Admin, go to Stores > Configuration > Sales > Payment Methods > Klarna > Klarna On-Site Messaging.
1. Set Enable to _Yes_.
1. Leave the Design theme field blank.
1. Save configuration by clicking Save Config.
1. Go to storefront and navigate to any product page.

Expected result:

The page loads successfully with default design theme applied for Klarna on-site messaging.

Actual result:

A blank page is displayed.

## Solution

If enabling the Klarna on-site messaging, always ensure that the Design theme field is not blank. 