---
title: Product status incorrect when created programmatically
labels: 2.x.x,Magento,create product,product status,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for when product status is Disabled and products are not displayed on the store front, or are assigned to the wrong store views, when created/updated programmatically.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.X.X
* Adobe Commerce on-premises 2.X.X

## Issue

When the catalog products get created or updated programmatically from a script with Adobe Commerce application bootstrapped, products might have Disabled status and/or assigned to the wrong store views.

## Cause

The issue might appear because of ACL restrictions set for the Adobe Commerce instance admin roles. In case of bootstrapped application, there will be no initialized admin sessions with appropriate ACL settings. That would cause validations to fail in the `Magento_AdminGws` module, which is responsible for permissions check on such actions.

## Solution for incorrect product status

Set a dynamic DI preference for the `Magento\Framework\Authorization\PolicyInterface`, as described in the [ObjectManager>Programmatic product updates](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/object-manager.html#programmatic-product-updates) topic in our developer documentation.

## Related reading

* [Github: Can not change product status which product created with productRepository](https://github.com/magento/magento2/issues/5664)
