---
title: User not able to add product to cart if Allow Countries is not selected
labels: Adobe Commerce,Magento,known issues,patch,troubleshooting,on-premises,cloud-infrastructure,2.4.4
---

This article provides a patch for the known Adobe Commerce Adobe Commerce 2.4.4 with environment PHP 8.1 issue where users are not able to add product to cart if there is no Allow Countries get selected.

## Affected products and versions

Adobe Commerce 2.4.4 with environment PHP 8.1

## Issue

Users are not able to add product to cart if there is no Allow Countries get selected.

<ins>Steps to reproduce</ins>:

1. Go to the Admin site
1. Go to **Store** > **Configuration** > **General** > **Country Options** > **Allow Countries**.
1. Deselect all options in **Allow Countries** field.
1. Save Configuration.
1. Go to the Storefront and try adding product to the cart.

<ins>Expected Result</ins>

User is able to add product to cart.

<ins>Actual Result</ins>

User is not able to add product to cart.

## Cause

The Adobe Commerce configuration retrieves `null` in case when multiselect configuration have no any selected items. The continuing of processing this configuration works well in PHP <= 8.1, however in PHP 8.1 it works bad due to errors that have been provoked by the "Deprecate passing null to non-nullable arguments of internal functions in PHP 8.1".

## Solutions

To resolve the issue, apply the following patch:

[AC-2655_2.4.4.patch](AC-2655_2.4.4.patch.zip)

### Compatible Adobe Commerce versions:

**The patch was created for:** Adobe Commerce Adobe Commerce 2.4.4 with environment PHP 8.1

The patch is also compatible ..

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.

## Useful links

 [Apply custom patches to Adobe Commerce on cloud infrastructure](https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html)
