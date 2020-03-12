This article talks about the issue, where products created/updated programmatically, appear to have the Disabled status and are not displayed on the store front, or are assigned to the wrong store views.

### Affected products and versions

*   Magento Commerce Cloud, Magento Commerce, Magento Open Source
*   2.X.X

## Issue

When the catalog products get created or updated programmatically from a script with Magento application bootstrapped, products might have Disabled status and/or assigned to the wrong store views.

## Cause

The issue might appear because of ACL restrictions set for the Magento instance admin roles. In case of bootstrapped application, there will be no initialized admin sessions with appropriate ACL settings. That would cause validations to fail in the Magento\_AdminGws module, which is responsible for permissions check on such actions.

## Solution

Set a dynamic DI preference for the `` Magento\Framework\Authorization\PolicyInterface ``, as described in the&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/object-manager.html#programmatic-product-updates" rel="noopener" target="_blank">ObjectManager&gt;Programmatic product updates</a> topic.

## Related reading

*   <a href="https://github.com/magento/magento2/issues/5664" target="_self">Issue discussed on GitHub</a>