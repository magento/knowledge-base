---
title: Missing or altered configuration file
link: https://support.magento.com/hc/en-us/articles/360033182871-Missing-or-altered-configuration-file
labels: Cloud,configuration
---

This article talks about how to solve the issue where your configuration files got altered or are missing. 

 ### Affected products and versions

 
 * Magento Commerce Cloud, all versions
 
 Issue
-----

 Configuration files config.php and/or env.php were changed wrongly or are missing.

 Solution
--------

 The deployment process creates a backup file for each configuration file:

 
 *  app/etc/config.php.bak—contains system-specific settings and is auto-generated during build if it does not exist
 *  app/etc/env.php.bak—contains sensitive configuration data
 
 You can restore them using the ECE tools backup:restore command.

 The BAK files are a product of the deployment process. If you manually change a configuration file after the deployment, your changes are not reflected in the existing BAK files.

 To restore the configuration files:

 
 2. Log in to your remote repository using [SSH](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh).
 4.  List the available backup files.

 ./vendor/bin/ece-tools backup:list The list of backup files: app/etc/env.php app/etc/config.php 
 6.  Restore the configuration files.

 ./vendor/bin/ece-tools backup:restore You receive a list of the existing configuration files affected by the restore.

 app/etc/env.php file exists! If you want to rewrite existed files use --force app/etc/config.php file exists! If you want to rewrite existed files use --force 
 8.  Use the --force option to overwrite all files.

 ./vendor/bin/ece-tools backup:restore --force Command backup:restore with option --force will rewrite your existed files. Do you want to continue [y/N]?y Backup file app/etc/env.php was restored. Backup file app/etc/config.php was restored. 
 10.  Optionally, you can restore a specific configuration file.

 ./vendor/bin/ece-tools backup:restore --force --file=app/etc/config.php Command backup:restore with option --force will rewrite your existed files. Do you want to continue [y/N]?y Backup file app/etc/config.php was restored. 
 
