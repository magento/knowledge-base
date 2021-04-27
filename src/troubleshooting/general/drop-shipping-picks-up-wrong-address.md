---
title: Drop shipping picks up wrong address 
labels: 2.3.x,Inventory,Magento Commerce,Magento Commerce Cloud,shipping
---

## Issue

The shippping solution does not pick up the address of the product's source.

### Affected products and versions

* Magento Commerce Cloud all versions, with Magento Inventory installed 
* Magento Commerce 2.3.0 and later, with Magento Inventory installed 
* Magento Open Source 2.3.0 and later, with Magento Inventory installed 

### Cause

Magento Inventory does not currently support using drop shipping rates calculation based on source address during checkout. Instead the default store address from the config is used in all cases.

## Related Reading

* [Magento Inventory FAQ](https://github.com/magento/inventory/wiki/MSI-FAQs)