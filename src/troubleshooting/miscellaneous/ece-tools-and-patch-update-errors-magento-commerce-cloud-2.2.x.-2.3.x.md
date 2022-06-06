---
title: ECE-Tools and patch update errors Adobe Commerce cloud infrastructure 2.2.x., 2.3.x
labels: 2.2.x,2.3.x,Magento Commerce Cloud,No such file or directory,composer.json,error message,failed to open stream:,how to,patches,updates to ECE-Tools,Troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a solution for the issue where you see error messages including "*failed to open stream:*" or "*No such file or directory*" when trying to deploy updates to ECE-Tools, patches or other changes.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.2.x., 2.3.x

## Issue

Errors when trying to deploy updates to ECE-Tools, patches or other changes include: PHP errors in the project web UI and in the `var/log/cloud.log`

```clike
W: PHP Warning: require(<path to file>): failed to open stream: No such file or directory in <path to file> on line 70
W: PHP Fatal error: require(): Failed opening required '<path to file>;'
(include_path='<path to file>') in <path to file> on line 70

Warning: require(/app/vendor/composer/../../app/etc/NonComposerComponentRegistration.php):
failed to open stream: No such file or directory in /app/vendor/composer/autoload_real.php
on line 70

Fatal error: require(): Failed opening required '/app/vendor/composer/../../app/etc/NonComposerComponentRegistration.php'
(include_path='/app/vendor/magento/zendframework1/library:.:/usr/share/php')
in /app/vendor/composer/autoload_real.php on line 70

E: Error building project: Step failed with status code 255.
```

Exception log errors:

```clike
CRITICAL:
error: <path to missing file>: No such file or directory
```

```clike
W: Generating optimized autoload files
W: PHP Warning: Uncaught ErrorException: require(<path to file>):
failed to open stream: No such file or directory in <path to file>
```

```clike
PHP Warning: Uncaught Exception: Warning: require(/app/setup/config/application.config.php):
failed to open stream: No such file or directory in /app/vendor/magento/framework/Console/Cli.php
on line 63 in /app/vendor/magento/framework/App/ErrorHandler.php:61
```

```clike
[Symfony\Component\Console\Exception\CommandNotFoundException]
 W: There are no commands defined in the "module" namespace.
```

## Cause

Misconfiguration of your `composer.json` file.

## Solution

If a setting is missing from your `composer.json` file, some directories will not copy from the Adobe Commerce Code Base. The package and the update/patch can't apply because files will not be found.

Please change your extra section to match that provided below and re-attempt deployment.

```clike
"extra":{
  "magento-force": true,
  "magento-deploystrategy": "copy"
}
```

## Related reading

* [Upgrades and patches](https://devdocs.magento.com/guides/v2.3/cloud/project/project-upgrade-parent.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=update%20ece%20tools) in our developer documentation.
