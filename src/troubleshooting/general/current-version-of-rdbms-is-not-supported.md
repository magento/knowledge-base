---
title: Current version of RDBMS is not supported error on deployment
labels: troubleshooting,Adobe Commerce,cloud infrastructure,MariaDB,RDBMS,Magento Commerce
---

This article provides a solution for when a deployment fails and you have the following error in the deploy log: *current version of RDBMS is not supported*.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, 2.3.0-2.3.7-p1, 2.4.0-2.4.3

## Issue

This error message means that the current MariaDB version is no longer supported in the Adobe Commerce version you are trying to upgrade to, and MariaDB must be upgraded to a compatible version.


<ins>Steps to reproduce</ins>:

Attempt to deploy.

<ins>Expected result</ins>:

Successful deployment.

<ins>Actual result</ins>:

Deployment fails with error message: *current version of RDBMS is not supported*.

## Cause

You version of MariaDB is not compatible with the version of Adobe Commerce you are trying to upgrade to.

## Solution

You must upgrade the MariaDB service to a compatible version before upgrading the application.


For the integration branch on Adobe Commerce on cloud infrastructure Pro plan architecture (and all branches in Starter architecture) please follow [Configure Service](https://devdocs.magento.com/cloud/project/services.html) in our developer  documentation.

If you are on Adobe Commerce on cloud infrastructure Pro plan architecture, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) to request that the services in Staging and/or Production  be upgraded before you deploy the Adobe Commerce version upgrade.


## Related reading
See [Best practices for builds and deployment](https://devdocs.magento.com/cloud/reference/discover-deploy.html#best-practices) in our developer documentation.
