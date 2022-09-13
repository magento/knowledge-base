---
title: Locked fields in Commerce Admin
labels: 2.3.x,2.4.x,Magento,Magento Commerce,Magento Commerce Cloud,admin,admin login,configuration,ece-tools,fields,lock,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a solution for when you cannot modify fields in the Commerce Admin.

## Affected products and versions

* Adobe Commerce on-premises 2.3.x, 2.4.x
* Adobe Commerce on cloud infrastructure 2.3.x, 2.4.x

## Issue

Once you have saved a change to your configuration to `app/etc/env.php` or `app/etc/config.php`, you cannot modify the setting in the Admin.

<ins>Steps to reproduce</ins>:

 Note: This is an example - the issue can affect all configurations that have been saved.

1. The merchant saves their delivery methods credentials using the following command in the terminal: `./vendor/bin/ece-tools config:dump`. This saves the credentials in the `app/etc/env.php` file.
1. The merchant then attempts to change the credentials later.

<ins>Expected results</ins>:

 The merchant can set the values in the Admin field settings and save them.

 <ins>Actual results</ins>:

 The fields in the Admin are locked, or the values can be changed but will not save in the Admin.

## Cause

When the configuration is saved to `env.php` or `config.php`, you will not be able to modify the setting in the Admin. To allow editing of the setting, you will have to remove the configuration from `env.php` or `config.php`.

## Solution

Make sure that the configuration has not been saved to `app/etc/env.php` or `app/etc/config.php`. If it has been saved, try the following steps:

* `config.php` - Remove the setting and then redeploy.
* `env.php` - Modify this directly on the server and remove the setting, then run `bin/magento app:config:import`.

## Related Reading

* [Export the Configuration](https://devdocs.magento.com/guides/v2.4/config-guide/cli/config-cli-subcommands-config-mgmt-export.html#sensitive-or-system-specific-settings) in our developer documentation.
* [Set Configuration values](https://devdocs.magento.com/guides/v2.4/config-guide/cli/config-cli-subcommands-config-mgmt-set.html#config-cli-config-set) in our developer documentation.
* [Adobe Commerce on cloud infrastructure: reduce deployment downtime with Configuration Management](https://support.magento.com/hc/en-us/articles/115003169574) in our support knowledge base.
