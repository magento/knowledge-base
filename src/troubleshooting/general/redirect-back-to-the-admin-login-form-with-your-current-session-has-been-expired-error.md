---
title: Redirect back to the Commerce Admin login form with "Your current session has been expired" error
labels: Magento Commerce,Magento Commerce Cloud,admin,login,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article gives the possible solutions for the Commerce Admin login issue, where you are redirected back to the login form with the following error message: *"Your current session has been expired"*. Solutions include checking for server time setting issues and changing session storage settings.

## Affected editions and versions:

All Adobe Commerce versions and editions

## Issue

<ins>Steps to reproduce</ins>:

1. Go to the Commerce Admin page.
1. Enter your credentials and click Sign in.

<ins>Expected result</ins>:

You get logged in to the Commerce Admin.

<ins>Actual result</ins>:

You are redirected back to the login form, with the following error message displayed: *"Your current session has been expired"*.

## Cause

There could be two possible reasons for the issue:

* an issue with server time settings
* an issue with session storage

Check the following section for solutions.

## Solution

### Check for server time settings issues

Check the session record created in the `admin_user_session` table. If the values of `created_at` and/or `updated_at` are incorrect, it might be caused by the issue with server time settings. Ask your server system administrator to check that. Note, that time in DB is set to UTC by default.

### Change the session storage

Try changing the session storage. Use the info from the [How to locate your session files](https://devdocs.magento.com/guides/v2.3/config-guide/sessions.html) article in our developer documentation to find out where your session is stored, and change it by editing the `app/etc/env.php` file.

For example, to start storing session in the file system, change the `'session'` section as following:

```php
....
'session' =>
    array (
      'save' => 'files',
),
....
```

Run the `bin/magento app:config:import` command to import configuration data.


## Related reading

* [Import data from configuration files](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-config-mgmt-import.html) in our developer documentation
* [Configure Redis](https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html) in our developer documentation
* [Redirect back to the Commerce Admin login form with "Your account is temporarily disabled" error](https://support.magento.com/hc/en-us/articles/360028606831) in our support knowledge base
* [Redirect back to the login form with no error, when trying to login to the Commerce Admin](https://support.magento.com/hc/en-us/articles/360028606711) in our support knowledge base
