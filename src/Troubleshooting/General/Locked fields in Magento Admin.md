---
title: Locked fields in Magento Admin
labels: Magento Commerce Cloud,Magento Commerce,Magento,configuration,admin,ece-tools,troubleshooting,2.3.x,lock,admin login,2.4.x,fields
---

This article provides a solution for when you cannot modify fields in Magento Admin.  

## Affected products and versions

* Magento Commerce 2.3.x, 2.4.x 
* Magento Commerce Cloud 2.3.x, 2.4.x 

## Issue

Once you have saved a change to your configuration to `` app/etc/env.php `` or `` app/etc/config.php ``, you cannot modify the setting in the Admin. 

Steps to reproduce:  
  
Note: This is an example - the issue can affect all configurations that have been saved.

1. The merchant saves their delivery methods credentials using the following command in the terminal:  
    `` php vendor/bin/m2-ece-scd-dump ``  
      
    This saves the credentials in the ``  app/etc/env.php `` file.  
      
    
1. The merchant then attempts to change the credentials later.

Expected result:  
The merchant can set the values in the Admin field settings and save them.

Actual result:  
The fields in the Admin are locked, or the values can be changed but will not save in the Admin.

## Cause

When the configuration is saved to env.php or config.php, you will not be able to modify the setting in the admin. To allow editing of the setting, you will have to remove the configuration from `` env.php `` or `` config.php ``.

## Solution

Make sure that the configuration has not been saved to `` app/etc/env.php `` or `` app/etc/config.php ``. If it has been saved, try the following steps:

* `` config.php `` - Remove the setting and then redeploy.
* `` env.php `` - Modify this directly on the server and remove the setting, then run <code class="c-mrkdwn__code" data-stringify-type="code">bin/magento app:config:import</code>.

## Related Reading

* [Export the Configuration](https://devdocs.magento.com/guides/v2.4/config-guide/cli/config-cli-subcommands-config-mgmt-export.html#sensitive-or-system-specific-settings) in Magento Developer Documentation
* [Set Configuration values](https://devdocs.magento.com/guides/v2.4/config-guide/cli/config-cli-subcommands-config-mgmt-set.html#config-cli-config-set) in Magento Developer Documentation
* [Magento Cloud: reduce deployment downtime with Configuration Management](https://support.magento.com/hc/en-us/articles/115003169574)