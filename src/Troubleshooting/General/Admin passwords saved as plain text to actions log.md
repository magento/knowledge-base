---
title: Admin passwords saved as plain text to actions log 
link: https://support.magento.com/hc/en-us/articles/115002406394-Admin-passwords-saved-as-plain-text-to-actions-log-
labels: Magento Commerce Cloud,Magento Commerce,security,troubleshooting,admin password
---

This article provides a fix for when a Magento Administrator creates a new user with the Administrator privileges and the password is saved as plain text in the magento\_logging\_event\_changes database table.

To fix this security issue, install the Magento 2.0.16 and 2.1.9 Security Update. After applying the Security Update, the passwords are encrypted and do not appear as plain text.

## Affected versions

* Magento Commerce 2.X.X

* Magento Commerce (Cloud) 2.X.X

## Issue

When an existing Magento Administrator creates a new user with the Administrator privileges via **System** > **Permissions** > **All Users** > **Add new user**, the password (entered as a confirmation) is saved as plain text in the magento\_logging\_event\_changes database table.

### Steps to reproduce:

1. Log in as Administrator and create a new user by navigating to this path: **System** > **Permissions** > **All Users** > **Add new user** page.  
1. Provide your current Administrator's password when prompted.  
1. Go to the **System** > **Action Log** > **Report** page and find the last log entry.  
1. You can see the current password, neither encrypted nor hashed.

## Solution

Install the [Magento 2.0.16 and 2.1.9 Security Update](https://magento.com/security/patches/magento-2016-and-219-security-update) which fixes the issue.

After installing the Security Update, the password gets encrypted and does not show up in plain text in the magento\_logging\_event\_changes table.

## More information

[Magento 2.0.16 and 2.1.9 Security Update page](https://magento.com/security/patches/magento-2016-and-219-security-update)

[Upgrade the Magento application and components](http://devdocs.magento.com/guides/v2.1/comp-mgr/bk-compman-upgrade-guide.html) (DevDocs article)

