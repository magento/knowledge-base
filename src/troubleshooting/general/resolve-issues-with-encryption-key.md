---
title: Resolve issues with encryption key
labels: 2.2.x,2.3.x,Magento Commerce Cloud,crypt_key,database,encryption,how to,Adobe Commerce,cloud infrastructure
---

This article talks about how to fix the issues caused by the encryption key not being moved together with DB dump to the other environment.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x

## Issue

After importing a [database dump](https://support.magento.com/hc/en-us/articles/360003254334-Create-database-dump-on-Cloud) from Production to Staging/Integration environments, saved credit card numbers appear wrong and/or payments fail for payment integrations requiring usage of merchant credentials.

## Cause

The encryption key used to encrypt sensitive data, like credit card numbers and merchant credentials, is not stored in the database, and therefore does not get transferred to other environment after database dump import/export.

## Solution

You need to copy the encryption key from the source environment and add it to the destination environment.

To copy the encryption key:

1. SSH to your project that was the source for the database dump, as described in [SSH to environment](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh) in our developer documentation.
1. Open `app/etc/env.php` in a text editor.
1. Copy the value of `key` for `crypt`.

```php    
return array ('crypt' =>      array ('key' => '<your encryption key>', ),);    
```    

To set the key value for the destination project:

1. Open your Project Web UI and locate your project.
1. Set the value of the [CRYPT\_KEY](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=CRYPT_KEY#crypt_key) (in our developer documentation) variable, as described in [Configure your project](https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-var) in our developer documentation. This will trigger the deployment process and `CRYPT_KEY` will be overridden in the `app/etc/env.php` file on every deployment.

Optionally, you can manually override the encryption key in the `app/etc/env.php` file:

1. SSH to the destination environment.
1. Open `app/etc/env.php` in a text editor.
1. Paste the copied data as the `key` value for `crypt`.
1. Save the edited `env.php`.
1. Clean cache on the destination environment by running `bin/magento cache:clean` or in the Commerce Admin under **System** > **Tools** > **Cache Management**.
