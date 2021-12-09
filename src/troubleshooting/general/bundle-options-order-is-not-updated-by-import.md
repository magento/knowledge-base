---
title: Bundle options order is not updated by import
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,bundle options,how to,import,order,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

This article provides a solution for the issue when after importing products from a .csv file, the bundle product options appear in a different order than they are listed in the import file.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x
* Adobe Commerce on-premises 2.2.x, 2.3.x
* Magento Open Source

## Issue

<ins>Prerequisites</ins>:

You have a valid .csv file containing bundle products.

<ins>Steps to reproduce</ins>:

1. Import the file using the [Import functionality](https://docs.magento.com/m2/ee/user_guide/system/data-import.html).
1. Open the bundle product page.

<ins>Expected results</ins>:

The options order is the same as in the .csv file.

<ins>Actual results</ins>:

The options order is different from that in the .csv file.

## Cause

The options position was not declared explicitly.

## Solution

1. Declare a position explicitly for each option in the `position` parameter of the `bundle_values` column in the .csv file. For detailed instructions, see [Edit the Product Data](https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html#method-2-edit-the-product-data) in our user guide.
1. Repeat the import operation.

For general information on Import, see the [Importing Bundle Product](https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html) in our user guide.
