---
title: Cannot delete the source or change its code
labels: 2.3.x,Inventory,Magento Commerce,Magento Commerce Cloud,inventory source,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for when you can not completely remove a source and/or change its code.

## Issue

Sources can not be deleted regardless of product assignment.

## Affected products and versions

* Adobe Commerce on cloud infrastructure (all versions), with Magento Inventory installed
* Adobe Commerce on-premises 2.3.0 and later, with Magento Inventory installed
* Magento Open Source 2.3.0 and later, with Magento Inventory installed

## Cause

By design, it is not possible to completely remove a source and/or change its code.

Removing a source entirely would cause order data issues because sources are part of product inventories, orders, shipment data, and much more.

The code is vital for connecting the source to orders. This is a unique ID for the source and is disabled from editing.

## Solution

You can remove a source from a product by transferring the inventory or dropping the product from all shipments at a location.

If you need to remove a source from [SSA](https://devdocs.magento.com/guides/v2.3/inventory/source-selection-algorithms.html) calculations and Adobe Commerce Inventory order processing, you can disable the source. Disabled sources retain all data, assigned products, and inventory quantities, and may be re-enabled any time to begin shipping again.

See the [Create Sources guide](https://github.com/magento/inventory/wiki/Create-Sources#disable-sources) for details on how to disable a source.
