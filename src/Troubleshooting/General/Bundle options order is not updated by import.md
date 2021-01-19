---
title: Bundle options order is not updated by import
link: https://support.magento.com/hc/en-us/articles/360036212671-Bundle-options-order-is-not-updated-by-import
labels: Magento Commerce Cloud,Magento Commerce,order,import,bundle options,2.3.x,2.2.x,how to
---

This article provides a solution for the issue when after importing products from a .csv file, the bundle product options appear in a different order than they are listed in the import file.

### Affected products and versions

* Magento Commerce Cloud 2.2.x, 2.3.x

* Magento Commerce 2.2.x, 2.3.x

* Magento Open Source

## Issue

Steps to reproduce:

Prerequisites: you have a valid .csv file containing bundle products.

1. Import the file using the [Import functionality](https://docs.magento.com/m2/ee/user_guide/system/data-import.html).

1. Open the bundle product page.

Expected result:

The options order is the same as in the .csv file.

Actual result:

The options order is different from that in the .csv file.

## Cause

The options position was not declared explicitly.

## Solution

1. Declare a position explicitly for each option in the position parameter of the bundle\_values column in the .csv file. For detailed instructions see [Edit the Product Data](https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html#method-2-edit-the-product-data).

1. Repeat the import operation.

For general information on Import, see the [Importing Bundle Product](https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html) article in Magento User Guide.

