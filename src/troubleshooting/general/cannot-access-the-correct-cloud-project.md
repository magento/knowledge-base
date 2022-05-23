---
title: Cannot access the correct Cloud Project
labels: Magento,Adobe Commerce,troubleshooting,cloud infrastructure,cloud project,account switched,access,Single Sign-On,Magento.com
---

This article provides a fix for the issue when you are unable to access the correct cloud project.

## Issue

When a user logs in to their cloud account at https://accounts.magento.cloud/user, the account is switched to another user's account which prevent the user to access the correct project.

## Affected products and versions

* Adobe Commerce on cloud infrastructure

## Cause

This issue typically occurs because you are being signed on using the previous account's Single Sign-On integration with Magento.com after either of the following circumstances:

1. The Cloud Project ownership had been transferred to you (the user), and because of this you would still be seeing the original project owner's account.
1. You (the user) had moved to another company, accompanied by a change in their email address and the projects that they have access to), and because of this you would still be seeing the projects that you had been granted to in your previous role/company.

## Solution

Disconnect the Single Sign-On integration with Magento.com.

1. From https://accounts.magento.cloud/user, expand the Single Sign-On section.

1. Disconnect from Magento.com:
1. Log out
1. Click on Magento.com:
1. You should now be seeing the correct account.
