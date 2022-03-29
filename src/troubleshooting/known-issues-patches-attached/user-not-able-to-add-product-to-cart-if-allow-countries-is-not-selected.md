---
title: User not able to add product to cart if Allow Countries is not selected
labels: Adobe Commerce,Magento,known issues,patch,troubleshooting,on-premises,cloud-infrastructure,2.4.4,PHP 8.1,Allow Countries,Configuration,add product to cart
---

This article provides a patch for the known Adobe Commerce 2.4.4 with PHP 8.1 issue where users are not able to add products to the cart if the Allow Countries is deselected.

## Affected products and versions

Adobe Commerce 2.4.4 with PHP 8.1

## Issue

Users are not able to add products to the cart if the Allow Countries is deselected.

<ins>Steps to reproduce</ins>:

1. Go to the Admin site.
1. Go to **Store** > **Configuration** > **General** > **Country Options** > **Allow Countries**.
1. Deselect all the options in **Allow Countries** field.
1. Save Configuration.
1. Go to the Storefront and try adding a product to the cart.

<ins>Expected Result</ins>

You are able to add the product to the cart.

<ins>Actual Result</ins>

You are not able to add the product the cart. You get the following console error:

```
Failed to load resource: the server responded with a status of 400 (Bad Request)
customer-data.js:87 Uncaught Error: [object Object]
    at Object.<anonymous> (customer-data.js:87:23)
    at fire (jquery.js:3500:50)
    at Object.fireWith [as rejectWith] (jquery.js:3630:29)
    at done (jquery.js:9798:30)
    at XMLHttpRequest.<anonymous> (jquery.js:10057:37)
  ```  
## Cause

The Adobe Commerce configuration retrieves `null` in case when a multiselect configuration does not have any selected items. The continuing of processing this configuration works well in PHP <= 8.1, however in PHP 8.1 it works bad due to errors that have been provoked by the "Deprecate passing null to non-nullable arguments of internal functions in PHP 8.1".

## Solutions

To resolve the issue, apply the following patch:

[AC-2655_2.4.4.patch](AC-2655_2.4.4.patch.zip)

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.

## Useful links

 [Apply custom patches to Adobe Commerce on cloud infrastructure](https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html)
