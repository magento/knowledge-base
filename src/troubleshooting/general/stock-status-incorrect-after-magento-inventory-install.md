---
title: Stock status incorrect after Inventory Management install
labels: 2.3.x,Inventory,Magento Commerce,Magento Commerce Cloud,stock status,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

This article provides a fix for stock status being incorrect after Inventory Management installation/upgrade.

## Stock status incorrect on some sites

After first installing or upgrading to have Inventory Management in the multi-website Adobe Commerce environment, not all websites have the correct stock statuses for products.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all versions, with Inventory Management installed
* Adobe Commerce on-premises 2.3.0 and later, with Inventory Management installed
* Magento Open Source 2.3.0 and later, with Inventory Management installed

## Cause

When you first install/upgrade, all of your products are assigned to the default source, associating all quantities to that source. The Default Source is assigned to the Default Stock, with the Default website associated.

## Solution

If you have more than one website, you need to add these websites as Sales Channels to the Default Stock or other custom stocks.

See the [Stock section of the wiki/user guide](https://docs.magento.com/m2/ce/user_guide/catalog/inventory-stock.html) in our user guide for details on how to do this.
