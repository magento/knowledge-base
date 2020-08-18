This article discusses the issue, where performance is negatively impacted by using <a href="https://docs.magento.com/m2/ee/user_guide/system/permissions-user-roles.html#step-2assign-resources" target="_self">Admin roles with role scope restricted by website</a>.

### Affected products and versions

*   Magento Commerce 2.2.x, 2.3.x
*   Magento Commerce Cloud&nbsp;2.2.x, 2.3.x

## Issue

When an Admin user, with the role scope restricted by website,&nbsp;performs operations in the Admin panel (including logging in, saving products and so on), Magento rebuilds the stored cache.&nbsp;Rebuilding the cache negatively impacts performance and can lead to a site outage, especially during business and/or high-traffic hours.

The issue is fixed in Magento Commerce 2.2.10 and 2.3.3.

## Solution&nbsp;

Following are the options to avoid the issue:

*   Upgrade the Magento application version to 2.2.10 or 2.3.3. (for instructions, see the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-upgrade.html" target="_self">Upgrade Magento version (Commerce Cloud</a>) Magento DevDocs article).
*   Avoid restricting Admin user role scope by website, if possible.
*   <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" target="_self">Submit a Magento Support ticket</a>, to request a patch, if it is available.

## Related reading

*   <a href="https://docs.magento.com/m2/ee/user_guide/system/permissions-user-roles.html" target="_self">User roles</a> in Magento User Guide.

&nbsp;