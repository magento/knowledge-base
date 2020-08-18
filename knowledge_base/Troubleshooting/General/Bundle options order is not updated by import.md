This article provides a solution for the issue when after importing products from a .csv file, the bundle product options appear in a different order than they are listed in the import file.

### Affected products and versions

*   Magento Commerce Cloud&nbsp;2.2.x, 2.3.x
*   Magento Commerce&nbsp;2.2.x, 2.3.x
*   Magento Open Source

## Issue

<span class="wysiwyg-underline">Steps to reproduce:</span>

Prerequisites: you have a valid .csv file containing bundle products.

1.   Import the file using the <a href="https://docs.magento.com/m2/ee/user_guide/system/data-import.html" target="_self">Import functionality</a>.
2.   Open the bundle product page.

<span class="wysiwyg-underline">Expected result:</span>

The options order is the same as in the .csv file.

<span class="wysiwyg-underline">Actual result:</span>

The options order is different from that in the .csv file.

## Cause

The options position was not declared explicitly.

## Solution

1.   Declare a position&nbsp;explicitly for each option in the `` position `` parameter of the `` bundle_values `` column in the .csv file.&nbsp;For detailed instructions see <a href="https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html#method-2-edit-the-product-data" target="_self">Edit the Product Data</a>.
2.   Repeat the import operation.

For general information on Import, see the <a href="https://docs.magento.com/m2/ee/user_guide/system/data-transfer-bundle-products.html" target="_self">Importing Bundle Product</a> article in Magento User Guide.