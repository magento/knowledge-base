---
title: Redirect back to the Admin login form with "Your current session has been expired" error
link: https://support.magento.com/hc/en-us/articles/360028441671-Redirect-back-to-the-Admin-login-form-with-Your-current-session-has-been-expired-error
labels: Magento Commerce Cloud,Magento Commerce,admin,troubleshooting,login
---

This article gives the possible solutions for the Magento Admin login issue, where you are redirected back to the login form with the following error message: *"Your current session has been expired"*. Solutions include checking for server time setting issues and changing session storage settings.

### Affected editions and versions:

All Magento versions and editions.

## Issue

Steps to reproduce:

1. Go to your Magento Admin page.

1. Enter your credentials and click Sign in.

Expected result:

You get logged in to the Magento Admin.

Actual result:

You are redirected back to the login form, with the following error message displayed: *"Your current session has been expired"*.

## Cause

There could be two possible reasons for the issue:

* an issue with server time settings

* an issue with session storage

Check the following section for solutions.

## Solution

### Check for server time settings issues

Check the session record created in the admin\_user\_session table. If the values of created\_at and/or updated\_at are incorrect, it might be caused by the issue with server time settings. Ask your server system administrator to check that. Note, that time in DB is set to UTC by default.

### Change the session storage

Try changing the session storage. Use the info from the [How to locate your session files](https://devdocs.magento.com/guides/v2.3/config-guide/sessions.html) doc to find out where your session is stored, and change it by editing the app/etc/env.php file.

For example, to start storing session in the file system, change the 'session' section as following:

....
'session' => 
 array (
 'save' => 'files',
),
....
Run the bin/magento app:config:import command to import configuration data.



## Related reading

* [Import data from configuration files](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-config-mgmt-import.html)

* [Configure Redis](https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html)

* [Redirect back to the Admin login form with "Your account is temporarily disabled" error](https://support.magento.com/hc/en-us/articles/360028606831)

* [Redirect back to the login form with no error, when trying to login to Magento Admin](https://support.magento.com/hc/en-us/articles/360028606711)

