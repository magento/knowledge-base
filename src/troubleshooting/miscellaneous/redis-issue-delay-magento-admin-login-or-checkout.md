---
title: Redis issue delay Commerce Admin login or checkout
labels: 2.1.11,2.2.1,Magento Commerce,Magento Commerce Cloud,Redis,timeout,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for the issue when logging in to the Commerce Admin or opening the checkout page causes lag or timeout (over 30 seconds). The issue occurs when Redis is used for session storage.

 **Cause:**   [Github issue \#12385](https://github.com/magento/magento2/issues/12385).

 **Solution:** update to the latest Adobe Commerce patch to fix these issues for all versions of Redis and specific versions of Adobe Commerce.

## Affected versions and technologies

* Adobe Commerce on cloud infrastructure versions 2.1.11 - 2.1.13 and 2.2.1
* Adobe Commerce on-premises versions 2.1.11 - 2.1.13 and 2.2.1
* Redis, all versions

If you use Adobe Commerce on cloud infrastructure version [2.2.0](#h_64593789291526919876198), a workaround is available.

## Issue

Logging in to the Commerce Admin or proceeding to the checkout page takes over 30 seconds.

This only occurs when user sessions are stored in Redis.

## Cause

Adobe Commerce had an issue with the session locking mechanism that added a 30-seconds timeout to some operations when Redis was used for session storage. For details, see the [Github issue \#12385](https://github.com/magento/magento2/issues/12385).

This issue has been fixed in Adobe Commerce 2.1.14 and 2.2.2 (see [Release Notes](http://devdocs.magento.com/guides/v2.2/release-notes/ReleaseNotes2.2.2CE.html#session-framework)) in our developer documentation.

## Solutions: patch or upgrade

### Solution 1: Apply the patch with a fix

To receive a patch, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) requesting the patch. In your ticket, specify your Adobe Commerce version and the corresponding reference number for the patch:

* **2.1.11 and later:** MDVA-7835
* **2.2.1:** MDVA-8128

The general (version-agnostic) reference number is MAGETWO-84289.

### Solution 2: Upgrade to 2.1.14/2.2.2 or later

If you have previously considered upgrading to Adobe Commerce 2.2.2 or later, you may use this update opportunity to fix the issue.

## Workaround: disable session locking

To disable session locking, set `disable_locking` to `1` in the Redis configuration section of the `env.php` file:

```php
'session' =>
  array (
    'save' => 'redis',
    'redis' =>
    array (
      'host' => 'redis.internal',
      'port' => 6379,
      'database' => '0',
      'disable_locking' => '1'
    ),
  ),
```

This solution does not affect any other Adobe Commerce functionality.

### Revert workaround after applying the patch

After applying the patch with the fix, the workaround is not required anymore, so you may revert it (set `disable_locking` to `0`).

<h2 id="h_64593789291526919876198">Adobe Commerce on cloud infrastructure 2.2.0: use ECE-Tools v2002.0.8 or later</h2>

The [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) deployment script package with versions 2002.0.3 - 2002.0.7 [applies](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html#v200203) the workaround automatically, setting `disable_locking` to `1`. This disables the session locking mechanism for Adobe Commerce 2.2.0, on which the original issue does not occur.

If you are running Adobe Commerce on cloud infrastructure 2.2.0, upgrade ECE-Tools to v2002.0.8 of later. You may also consider upgrading your Adobe Commerce on cloud infrastructure to 2.2.2 or later.
