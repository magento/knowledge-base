---
title: Backup issues
link: https://support.magento.com/hc/en-us/articles/360032990672-Backup-issues
labels: Magento Commerce,permissions,backup,disk space,2.3.x,2.2.x,how to
---

This article lists the possible solutions for the backup creation issues. 

 ### Affected products and versions

 
 * Magento Commerce 2.2.x, 2.3.x
 * Magento Open Source 2.2.x, 2.3.x
 
 Backup disabled
---------------

 If the Magento backup functionality does not start or displays the following message, you need to enable the feature prior to backing up.

 Backup functionality is disabled. Backup functionality is currently disabled. Please use other means for backups. Enter the following CLI command:

 bin/magento config:set system/backup/functionality\_enabled 1 For additional information on backups, see [Back up and roll back the file system, media, and database.](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-backup.html)

 Insufficient disk space
-----------------------

 If the backup failed because of insufficient disk space, you should typically free up disk space by moving some files to another storage device or drive. However, there might be other ways to resolve the issue. See one of the following resources for tips:

 
 * [8 Tips to Solve Linux & Unix Systems Hard Disk Problems Like Disk Full Or Can’t Write to the Disk](http://www.cyberciti.biz/datacenter/linux-unix-bsd-osx-cannot-write-to-hard-disk)
 * [serverfault: df says disk is full, but it is not](http://serverfault.com/questions/315181/df-says-disk-is-full-but-it-is-not)
 * [unix.stackexchange.com: Tracking down where disk space has gone on Linux?](http://unix.stackexchange.com/questions/125429/tracking-down-where-disk-space-has-gone-on-linux)
 
 Operating system error
----------------------

 Unfortunately, we can not recommend anything specific because of the variety of errors you might encounter. We can suggest, however, you:

 
 * Contact your system administrator.
 * Search public forums like [Stack Exchange](http://unix.stackexchange.com) or [Stack Overflow.](http://stackoverflow.com) 
 * Open a [GitHub issue](https://github.com/magento/magento2/issues) and we'll try to help.
 
 Backup fails
------------

 If the backup fails or if all backup tests fail, it's possible the [Magento file system owner](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/file-sys-perms-over.html) doesn't have sufficient privileges and ownership of the Magento file system. For example, another user might own the files or the files might be read-only.

 Pay particular attention to file system permissions and ownership of the <magento\_root>/var directory and subdirectories. For more information, see [Set file system permissions and ownership](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-system-perms.html).

