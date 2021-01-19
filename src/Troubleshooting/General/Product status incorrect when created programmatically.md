---
title: Product status incorrect when created programmatically
link: https://support.magento.com/hc/en-us/articles/360028995932-Product-status-incorrect-when-created-programmatically
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,create product,2.x.x,product status
---

This article provides a fix for when product status is Disabled and products are not displayed on the store front, or are assigned to the wrong store views, when created/updated programmatically.

### Affected products and versions

* Magento Commerce Cloud, Magento Commerce

* 2.X.X

## Issue

When the catalog products get created or updated programmatically from a script with Magento application bootstrapped, products might have Disabled status and/or assigned to the wrong store views.

## Cause

The issue might appear because of ACL restrictions set for the Magento instance admin roles. In case of bootstrapped application, there will be no initialized admin sessions with appropriate ACL settings. That would cause validations to fail in the Magento\_AdminGws module, which is responsible for permissions check on such actions.

## Solution for incorrect product status

Set a dynamic DI preference for the Magento\Framework\Authorization\PolicyInterface, as described in the [ObjectManager>Programmatic product updates](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/object-manager.html#programmatic-product-updates) topic.

## Related reading

* [Github: Can not change product status which product created with productRepository](https://github.com/magento/magento2/issues/5664)

