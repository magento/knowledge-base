---
title: Cannot upgrade using Web Setup Wizard to Magento 2.3.5 from 2.3.3 and earlier
labels: 2.3.0,2.3.1,2.3.2,2.3.3,2.3.5,Magento Commerce,Magento Commerce Cloud,PHP 7.3,known issues,troubleshooting,upgrade,web setup wizard
---

This article provides the steps you need to take to upgrade from Magento version 2.3.5 to versions 2.3.3 and earlier using Web Setup Wizard. Not being able to upgrade without those steps is a known Magento 2.3.5 issue.

## Affected products and version

* Magento Commerce 2.3.0-2.3.3
* Magento Commerce Cloud 2.3.0-2.3.3

## Issue

When upgrading to Magento 2.3.5 from Magento 2.3.0, 2.3.2 or 2.3.3 using the Web Setup Wizard, you might run into the following issue, where the Process extensions status never gets through "Update pending". The following image provides an illustration of how it looks like:
![wsw_issue.png](assets/wsw_issue.png)

Refreshing the page does not solve the issue.

Logs contain information similar to the following:

 *"Warning: require(/magento2ee/vendor/composer/../temando/module-shipping-m2/registration.php): failed to open stream: No such file or directory in /magento2ee/vendor/composer/autoload\_real.php on line 73Fatal error: require(): Failed opening required '/magento2ee/vendor/composer/../temando/module-shipping-m2/registration.php' (include\_path='/magento2ee/vendor/magento/zendframework1/library:.:/usr/local/Cellar/php@7.3/7.3.18\_1/share/php@7.3/pear') in /magento2ee/vendor/composer/autoload\_real.php on line 73"* 

## Solution

Follow the steps below to restore your Magento installation. All commands should be run in the Magento root directory, run the following commands:

1. Restore the `composer.json` file, by running the following command in the Magento root directory: `composer require magento/product-enterprise-edition={current_version}        --no-update` . where {current\_version} is the version before the upgrade.  If you are not sure what the current version is, run the following command to find out: `composer show magento/product-enterprise-edition | grep ^version` .
1. If you have the B2B extension, restore the B2B version by running `composer require magento/extension-b2b={current_version}        --no-update` If you are not sure what the current version is, run the following command to find out: `composer show magento/extension-b2b | grep ^version` .
1. If you tried to upgrade any custom extensions, restore their versions. You can do it by running the command from the previous step, having replaced `magento/extension-b2b` with the corresponding custom package name. If you are not sure what the current version is, run the following command to find out: `composer show {vendor/extension-package} | grep ^version` .
1. Restore packages by running the `composer install` command.
1. Disable maintenance mode by running `bin/magento maintenance:disable` .

## Avoiding the issue

If you want to upgrade to Magento 2.3.5 from versions 2.3.0-2.3.3, before proceeding to update, run one of the following sets of commands, depending on your PHP version:

* For PHP version earlier than 7.3: `cd update && composer update` 
* For PHP version 7.3: `cd update/ && composer update --ignore-platform-reqs` 

>![info]
>
>Magento strongly recommends using [CLI upgrade](https://devdocs.magento.com/guides/v2.3/comp-mgr/cli/cli-upgrade.html) for all versions of Magento. The Web Setup Wizard is being deprecated in Magento 2.3.6 and will be removed in Magento 2.4.0. After it is removed, you must use the command line to [install](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html) or [upgrade](https://devdocs.magento.com/guides/v2.3/comp-mgr/cli/cli-upgrade.html) Magento.