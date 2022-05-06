---
title: Composer plugins issues when upgrading to Adobe Commerce 2.4.4
labels: 2.4.4,Adobe Commerce,cloud infrastructure,Magento Open Source,on-premises,composer,plugin,update
---

This articles provides a solution to avoid the issue with composer plugins when upgrading to Adobe Commerce 2.4.4.

## Affected products and versions

* Adobe Commerce on premises, any version when updating to 2.4.4
* Adobe Commerce on cloud infrastructure, any version when updating to 2.4.4
* Magento Open Source, any version when updating to 2.4.4

## Issue

When updating to Adobe Commerce 2.4.4 after July 2022, you might get warning from composer about plugins.

<ins>Steps to reproduce</ins>:

1.
1.

<u>Expected results</u>:
..

<u>Actual results</u>:

## Cause

After July 2022 Composer [changes the default value of the [`allow-plugins` option](https://getcomposer.org/doc/06-config.md#allow-plugins) to `{}` and plugins will not load anymore unless allowed.  

## Solution

Add the following to your `composer.json` file, depenging on how you installed Adobe Commerce:

* If the project has been created using the `composer create-project` command:
    ```json
    "config": {
        "allow-plugins": {
            "dealerdirect/phpcodesniffer-composer-installer": true,
            "laminas/laminas-dependency-plugin": true,
            "magento/*": true
        }
    }
    ```
* If the project has been created by other way and doesn't have `"dealerdirect/phpcodesniffer-installer"` in `"require-dev"` section:
    ```json
    "config": {
        "allow-plugins": {
        "laminas/laminas-dependency-plugin": true,
        "magento/*": true
        }
    }
    ```    
After updating the `composer.json` file, run the `composer update` command and re-start the upgrade process.

## Related reading
