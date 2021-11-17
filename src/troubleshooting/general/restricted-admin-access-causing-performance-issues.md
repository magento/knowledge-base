---
title: Restricted admin access causing performance issues
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,admin,how to,permissions,restricted access,user,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides solutions for when performance is negatively impacted by using [Admin roles with role scope restricted by website](https://docs.magento.com/m2/ee/user_guide/system/permissions-user-roles.html#step-2assign-resources) in our user guide.

## Affected products and versions

* Adobe Commerce on-premises 2.2.x, 2.3.x
* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x

## Issue

When an Admin user, with the role scope restricted by website, performs operations in the Admin panel (including logging in, saving products and so on), Adobe Commerce rebuilds the stored cache. Rebuilding the cache negatively impacts performance and can lead to a site outage, especially during business and/or high-traffic hours.

The issue is fixed in Adobe Commerce 2.2.10 and 2.3.3.

## Solution

Following are the options to avoid the issue:

* Upgrade the Adobe Commerce application version to 2.2.10 or 2.3.3. (for instructions, see the [Upgrade Adobe Commerce on cloud infrastructure version](https://devdocs.magento.com/guides/v2.3/cloud/project/project-upgrade.html) in our developer documentation).
* Avoid restricting Admin user role scope by website, if possible.
* [Submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket), to request a patch, if it is available.

## Related reading

* [User roles](https://docs.magento.com/m2/ee/user_guide/system/permissions-user-roles.html) in our user guide.
