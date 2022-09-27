---
title: "The 'Current version of RDBMS not supported' error on deployment"
labels: troubleshooting,Adobe Commerce,cloud infrastructure,MariaDB,RDBMS,Magento Commerce,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

This article provides a solution for when a deployment fails and you have the following error in the deploy log: *current version of RDBMS is not supported*.

## Affected products and versions

Adobe Commerce on cloud infrastructure, 2.3.0-2.3.7-p1, 2.4.0-2.4.3.

## Issue

This error message means that the current MariaDB version is no longer supported in the Adobe Commerce version you are trying to upgrade to, and MariaDB must be upgraded to a compatible version.


<ins>Steps to reproduce</ins>:

Attempt to deploy.

<ins>Expected result</ins>:

Successful deployment.

<ins>Actual result</ins>:

Deployment fails with error message: *current version of RDBMS is not supported*.

## Cause

Your version of MariaDB is not compatible with the version of Adobe Commerce you are trying to upgrade to.

## Solution

You must upgrade the MariaDB service to a compatible version before upgrading the application.


For the integration branch on Adobe Commerce on cloud infrastructure Pro plan architecture (and all branches in Starter architecture) please follow [Configure Service](https://devdocs.magento.com/cloud/project/services.html) in our developer  documentation.

For the Staging and Production on Adobe Commerce on cloud infrastructure Pro plan architecture, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to request that the services be upgraded before you deploy the Adobe Commerce version upgrade.


## Related reading

* [Best practices for builds and deployment](https://devdocs.magento.com/cloud/reference/discover-deploy.html#best-practices) in our developer documentation.
* [Adobe Commerce 2.3.5 upgrade: compact to dynamic tables](https://support.magento.com/hc/en-us/articles/360048389631) in our support knowlegde base.
