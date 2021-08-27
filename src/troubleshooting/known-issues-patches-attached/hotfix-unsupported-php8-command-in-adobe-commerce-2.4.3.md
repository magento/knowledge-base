---
title: Adobe Commerce upgrade 2.4.3, 2.3.7-p1 PHP Fatal error Hotfix
labels: 2.4.3,Magento,known issues,patch,troubleshooting,error,php,8,Adobe Commerce, cloud infrastructure
---

This article provides a fix for when merchants try to upgrade to Adobe Commerce (all deployment methods) or Magento Open Source 2.4.3 or 2.3.7-p1 they see the following error:

*PHP Fatal error: Uncaught Error: Call to undefined function Magento\Framework\Filesystem\Directory\str_contains() in <...>/magento/vendor/magento/framework/Filesystem/Directory/DenyListPathValidator.php:74*

The issue will be fixed in the scope of 2.4.4, 2.4.3-p1 and 2.3.7-p2 releases.
## Affected versions and products

* Adobe Commerce (all deployment methods) when upgrading to 2.3.7-p1 or 2.4.3.
* Magento Open Source when upgrading to 2.3.7-p1 or 2.4.3.

## Issue

The issue is caused by the new Adobe Commerce 2.4.3 and 2.3.7-p1 versions using PHP 8 only function `str_contains`. Adobe Commerce 2.4.3 and 2.3.7-p1 are only compatible with PHP 7.4 so this function cannot be used.

 <ins>Steps to reproduce</ins> :

Attempt to upgrade to Adobe Commerce 2.4.3 or 2.3.7-p1.

<ins>Expected result:</ins>

Successful upgrade.

<ins>Actual result:</ins>

PHP fatal error.

## Solution

As a workaround you run the following command in the CLI/Terminal: `composer require symfony/polyfill-php80` from the Magento root folder or install a composer patch.  

In order to fix the issue for 2.4.3, Adobe Commerce (all deployment methods) and Magento Open Source merchants should apply patch:

 [AC-384_Fix_Incompatible_PHP_Method__2.4.3_ce.patch](assets/AC-384__Fix_Incompatible_PHP_Method__2.4.3_ce.patch.zip)

In order to fix the issue for 2.3.7-p1, Adobe Commerce (all deployment methods) and Magento Open Source merchants should apply patch:

 [AC-384__Fix_Incompatible_PHP_Method__2.3.7-p1_ce.patch](assets/AC-384__Fix_Incompatible_PHP_Method__2.3.7-p1_ce.patch.zip)

## How to Apply the Patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Related Reading
GitHub [Unsupported PHP 8 command in Magento 2.4.3 EE #33680](https://github.com/magento/magento2/issues/33680)
