---
title: Redirect back to the Admin login form with "Your account is temporarily disabled" error
labels: Magento Commerce,Magento Commerce Cloud,admin login,troubleshooting
---

This article provides the possible solutions for the Magento Admin login issue, where you are redirected back to the login form with the following error message: *"Your account is temporarily disabled"* . The suggested solution is checking and correcting the admin user database settings.

## Affected editions and versions:

All Magento versions and editions.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Go to your Magento Admin page.
1. Enter your credentials and click Sign in.

 <span class="wysiwyg-underline">Expected result:</span>

You get logged in to the Magento Admin.

 <span class="wysiwyg-underline">Actual result:</span>

You are redirected back to the login form, with the following error message displayed: *"Your account is temporarily disabled. Please try again later".*

## Solution

1. Create a database backup.
1. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin) , or access the DB manually from the command line. In the `admin_user` database table, for your admin user record, check if `is_active` is set to "1" and `lock_expires` is `NULL` . Reset these values if required.

## Related reading

<ul><li>
<p title="Redirect back to the login form with no error, when trying to login to Magento Admin"><a href="https://support.magento.com/hc/en-us/articles/360028606711">Login redirect when trying to login to Magento Admin</a></p>
</li></ul>
