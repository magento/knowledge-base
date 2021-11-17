---
title: Download fails because of changes in Composer
labels: 2.x.x,Magento Commerce,Magento Commerce Cloud,composer,download,how to,self-update,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for a failed Adobe Commerce download and exception error.

<h3 id="symptom">Issue</h3>

During download, the following error displays:

```php
[ErrorException]
  file_get_contents(app/etc/NonComposerComponentRegistration.php): failed to open stream: No such file or directory
```

<h3 id="symptom">Cause</h3>

This happens because of changes in certain versions of Composer. The workaround is to downgrade Composer to an earlier version and try your Adobe Commerce download again.

### Solution

Any version of Composer dated between November 21 and November 26, 2015 has this issue. To confirm this issue is related to the Composer version, enter the following command:

```php
composer -v
```

The version displays similar to the following:

```php
Composer version 1.0-dev (2b14f0a047dd4f3545ec82381f65c36ea93a4c81) 2015-11-25 17:13:09
```

Note the date is 2015-11-25, which indicates Composer has this issue.

To work around it:

1. Change your version of Composer to enable you to download the Adobe Commerce software by doing any of the following:    
    * Downgrade Composer using the following command: `composer self-update 1.0.0-alpha11`.    
    * Upgrade Composer to a version later than November 26, 2015: `composer self-update`.
1. Delete your Adobe Commerce directory and subdirectories.    
1. Try the download again using either `[composer create-project](https://devdocs.magento.com/guides/v2.3/install-gde/composer.html)` or `[git clone](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/dev_install.html)`.
1. After successfully downloading the Adobe Commerce software, update Composer: `composer self-update`.    
