## Issue

The&nbsp;shippping solution does not pick up the address&nbsp;of the product's source.

### Affected products and versions

*   Magento Commerce Cloud all versions,&nbsp;with Magento Inventory installed&nbsp;
*   Magento Commerce 2.3.0 and later, with Magento Inventory installed&nbsp;
*   Magento Open Source 2.3.0 and later,&nbsp;with Magento Inventory installed&nbsp;

### Cause

Magento Inventory does not currently support using drop shipping rates calculation based on source address during checkout. Instead the&nbsp;default store address from the config is used in all cases.

## Related Reading

*   [Magento Inventory FAQ](https://github.com/magento/inventory/wiki/MSI-FAQs)