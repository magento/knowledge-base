---
title: "Composer update fail on Adobe Commerce: Incompatible argument type"
labels: troubleshooting,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,symfony,Magento,Adobe Commerce,composer,Magento Open Source,on-premises,cloud infrastructure
---

>![info]
>
>This issue is now fixed in the latest symfony version 4.4.29 release.

This article provides a solution for when deployment is stuck because there is an issue with code compilation. This issue is caused by a new version of symfony/console dependency (4.4.27, 4.4.28).

## Affected products and versions

* Adobe Commerce (all deployment methods) and Magento Open Source:
    * 2.4.0, 2.4.0-p1, 2.4.1, 2.4.1-p1, 2.4.2, 2.4.2-p1, 2.4.2-p2, 2.4.3
    * 2.3.5, 2.3.5-p1, 2.3.5-p2, 2.3.6, 2.3.6-p1, 2.3.7, 2.3.7-p1
* symfony/console dependency (4.4.27, 4.4.28).

## Issue

A new version of symfony/console dependency (4.4.27, 4.4.28) is causing dependency compilation process to fail.

<ins>Steps to reproduce</ins>:

When you install or upgrade Adobe Commerce or run composer update, the execution fails with the following error message:
*Incompatible argument type: Required type: int. Actual type: string*

## Cause

The issue is caused by incompatibility of Adobe Commerce core code with the latest "symfony/console" dependency released in versions 4.4.27 and 4.4.28.

## Solution

The issue will be resolved automatically once a new symfony/console version 4.2.29 is released (expected in August 2021).

**How to fix on Adobe Commerce on-premise:**

Adobe Commerce on-premises 2.4.x

Run the following command in the CLI/Terminal:

``composer require symfony/console:">=4.4.0 <4.4.27 || ~4.4.29"``

All 2.3.5+ Adobe Commerce on-premises merchants should run the following CLI command:

``composer require symfony/console:"~4.1.0||~4.2.0||~4.3.0||>=4.4.0 <4.4.27 || ~4.4.29"``

**How to fix on Adobe Commerce on cloud infrastructure:**

Run the above commands or upgrade to the latest ECE tools version (ece-tools: 2002.1.7), which will be available on Thursday, July 29. For steps, refer to [Cloud for Adobe Commerce > Update ece-tools version](https://devdocs.magento.com/cloud/project/ece-tools-update.html) in our developer documentation.

The complete fix will be released in Adobe Commerce (all deployment methods) 2.4.4.

## Related reading

* Github: [2021-07-27 Composer update Incompatible argument type: Required type: int. Actual type: string](https://github.com/magento/magento2/issues/33595)
