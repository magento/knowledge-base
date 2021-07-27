---
title: "Command di:compile doesn't work in 2.3.7 on Adobe Commerce"
labels: troubleshooting,2.3.5-p1,2.3.5-p2,2.4.0,2.3.6,2.4.0-p1,2.4.1,2.3.6-p1,2.4.1-p1,2.4.2,2.3.7,2.4.2-p1,symfony, Magento,Adobe Commerce,Adobe Commerce on our cloud architecture,Adobe Commerce on our cloud architecture,composer,
---

This article provides a solution for when deployment is stuck because there is an issue with code compilation. This issue is caused by a new version of symfony/console dependency (4.4.27, 4.4.28).

## Affected products and versions

* Adobe Commerce (all deployment methods): 2.3.5-p1 - 2.4.2-p1
* symfony/console dependency (4.4.27, 4.4.28).

## Issue

A new version of symfony/console dependency (4.4.27, 4.4.28).

<u>Steps to reproduce</u>:

You run the following command in the CLI/Terminal:
``setup:di:compile``

<u>Expected result</u>:

Composer install, upgrade or update commands are successful.

<u>Actual result</u>:

Composer install, upgrade or update commands are unsuccessful.

## Cause

A 3rd party dependency component symphony/console released a new version 4.2.27 yesterday which is not compatible with Adobe Commerce core code.

## Solution

**How to fix on Adobe Commerce on our cloud architecture:**

Update ece-tools. For steps, refer to Adobe Commerce on our cloud architecture: [DevDocs Update ece-tools version](https://devdocs.magento.com/cloud/project/ece-tools-update.html)

**How to fix on Adobe Commerce on-premise:**

Adobe Commerce on-premise 2.4.0 - 2.4.3:

Run the following command in the CLI/Terminal:

``composer require symfony/console:">=4.4.0 <4.4.27 || ~4.4.29"``

Adobe Commerce on-premise 2.3.5 - 2.3.7:

Run the following command in the CLI/Terminal:

``composer require symfony/console:"~4.1.0||~4.2.0||~4.3.0||>=4.4.0 <4.4.27 || ~4.4.29"``

The complete fix will be released in Adobe Commerce (all deployment methods) 2.4.4.

## Related reading

* Adobe Commerce Developer Guide [DevDocs Introduction to Composer](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/intro/intro-composer.html?itm_source=devdocs&itm_medium=quick_search&itm_campaign=federated_search&itm_term=compose)
