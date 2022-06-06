---
title: Redirect back to the Commerce Admin login form with "Your account is temporarily disabled" error
labels: Magento Commerce,Magento Commerce Cloud,admin login,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides the possible solutions for the Commerce Admin login issue, where you are redirected back to the login form with the following error message: *"Your account is temporarily disabled"*. The suggested solution is checking and correcting the admin user database settings.

## Affected editions and versions:

All Adobe Commerce versions and editions

## Issue

<ins>Steps to reproduce</ins>:

1. Go to the Commerce Admin page.
1. Enter your credentials and click Sign in.

<ins>Expected result</ins>:

You get logged in to the Commerce Admin.

<ins>Actual result</ins>:

You are redirected back to the login form, with the following error message displayed: *"Your account is temporarily disabled. Please try again later"*.

## Solution

1. Create a database backup.
1. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin), or access the DB manually from the command line. In the `admin_user` database table, for your admin user record, check if `is_active` is set to "`1`" and `lock_expires` is `NULL`. Reset these values, if required.

## Related reading in our support knowledge base

* [Redirect back to the login form with no error, when trying to login to the Commerce Admin](https://support.magento.com/hc/en-us/articles/360028606711)
