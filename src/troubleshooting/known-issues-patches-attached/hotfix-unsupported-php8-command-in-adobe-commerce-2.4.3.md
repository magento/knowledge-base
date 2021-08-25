---
title: Upgrade on Adobe Commerce 2.4.3 PHP Fatal error Hotfix
labels: 2.4.3,Magento,known issues,patch,troubleshooting,error,php,8,Adobe Commerce, cloud infrastructure
---

This article provides a fix for when an upgrade to Adobe Commerce 2.4.3 fails with the following error
*PHP Fatal error: Uncaught Error: Call to undefined function Magento\Framework\Filesystem\Directory\str_contains() in <...>/magento/vendor/magento/framework/Filesystem/Directory/DenyListPathValidator.php:74*

The issue will be fixed in the scope of 2.4.4 and 2.4.3-p1 releases.
## Affected versions and products

* Adobe Commerce for Cloud and Adobe Commerce 2.4.3.

## Issue

The issue is caused by the new Adobe Commerce 2.4.3 version using PHP 8 only function `str_contains`. Adobe Commerce 2.4.3 is only compatible with PHP 7.4 so we cannot  use this function.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

Attempt to upgrade to Adobe Commerce 2.4.3

 <span class="wysiwyg-underline">Expected Result:</span> Successful upgrade.
 <span class="wysiwyg-underline">Actual Result:</span> PHP fatal error.

## Solution

As a workaround you can add the `symfony/polyfill-php80` package via composer to the project or install a composer patch.

Or install a compser patch. 
## How to Apply the Patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Related Reading
GitHub [Unsupported PHP 8 command in Magento 2.4.3 EE #33680](https://github.com/magento/magento2/issues/33680)
