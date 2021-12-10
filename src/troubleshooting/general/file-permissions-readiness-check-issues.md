---
title: File permissions readiness check issues
labels: File,Magento Commerce,Magento Commerce Cloud,check,how to,permissions,readiness,web setup wizard,Adobe Commerce,cloud infrastructure
---

This article provides a fix for file permissions readiness check issues. Directories in the Adobe Commerce file system must be writable by the web server user and the Adobe Commerce file system owner, if applicable. An error similar to the following displays in the Web Setup Wizard if your permissions are not set properly:

![install_rc_file-perms.png](assets/install_rc_file-perms.png)

The way you resolve the issue depends on whether you have a one-user or two-user setup:

* *One user* means you log in to the Adobe Commerce server as the same user that also runs the web server. This type of setup is common in shared hosting environments.
* *Two users* means you typically *cannot* log in as, or switch to, the web server user. You typically log in as one user and run the web server as a different user. This is typical in private hosting or if you have your own server.

### One-user resolution

If you have command-line access, enter the following command assuming Adobe Commerce is installed in `/var/www/html/magento2`:

```bash
$ cd /var/www/html/magento2 && find var vendor pub/static pub/media app/etc -type f -exec chmod g+w {} + && find var vendor pub/static pub/media app/etc -type d -exec chmod g+w {} + && chmod u+x bin/magento
```

If you do not have command-line access, use an FTP client or a file manager application provided by your hosting provider to set permissions.

### Two-user resolution

To optionally enter all commands on one line, enter the following assuming Adobe Commerce is installed in `/var/www/html/magento2` and the web server group name is `apache`:

```bash
$ cd /var/www/html/magento2 && find var vendor pub/static pub/media app/etc -type f -exec chmod g+w {} + && find var vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} + && chown -R :apache . && chmod u+x bin/magento
```

In the event file system permissions are set improperly and can't be changed by the Adobe Commerce file system owner, you can enter the command as a user with `root` privileges:

```bash
$ cd /var/www/html/magento2 && sudo find var vendor
  pub/static pub/media app/etc -type f -exec chmod g+w {} + && sudo find
  var vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} + &&
  sudo chown -R :apache . && sudo chmod u+x bin/magento
```
