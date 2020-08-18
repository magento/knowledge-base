## Issue

Sources can not be deleted regardless of product assignment.

### Affected products and versions

*   Magento Commerce Cloud all versions,&nbsp;with Magento Inventory installed&nbsp;
*   Magento Commerce 2.3.0 and later, with Magento Inventory installed&nbsp;
*   Magento Open Source 2.3.0 and later,&nbsp;with Magento Inventory installed&nbsp;

## Cause

By design, it is not possible to completely remove a source and/or change its code.

Removing a source entirely would cause order data issues, because sources are part of product inventories, orders, shipment data, and much more. &nbsp;

The code is vital for connecting the source to orders. This is a unique ID for the source and is disabled from editing.

## Solution

You can remove a source from a product by transferring the inventory or dropping the product from all shipments at a location.

If you need to remove a source from <a href="https://devdocs.magento.com/guides/v2.3/inventory/source-selection-algorithms.html" target="_self">SSA</a> calculations and Magento Inventory order processing, you can disable the source. Disabled sources retain all data, assigned products, and inventory quantities, and may be re-enabled any time to begin shipping again.

See the [Create Sources guide](https://github.com/magento/inventory/wiki/Create-Sources#disable-sources) on details how to disable a source.&nbsp;