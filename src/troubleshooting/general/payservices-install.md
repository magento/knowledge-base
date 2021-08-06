---
title: Troubleshoot Payment Services installation
labels: troubleshooting,Adobe Commerce,Magento Commerce,Composer,Payment Services,memory,PHP,install,extension,2.4.2-p1
---

This article explains errors you may experience while installing Payment Services, and provides solutions to fix those errors so that you can complete installation.

## Affected products and versions

* Adobe Commerce (on-premise) 2.4.2-p1
* Adobe Commerce on our cloud architecture 2.4.2-p1
* Magento Open Source 2.4.2-p1
* Payment Services for Adobe Commerce and Magento Open Source, Early Access Program (EAP)

## Issue - Incorrect Composer keys

When installing the Payment Services extension, you may see an error message stating that you used incorrect Composer keys during installation.

<ins>Steps to reproduce</ins>:

1. Attempt to [install Payment Services](https://devdocs-beta.magento.com/payment-services/install-payments.html).
1. See the following error:

   *Could not find a matching version of package magento/payment-services. Check the package spelling, your version constraint and that the package is available in a stability which matches your minimum-stability (stable).*

<ins>Expected result</ins>:

You can follow these [installation instructions](https://devdocs-beta.magento.com/payment-services/install-payments.html) in our developer documentation to successfully install Payment Services.

<ins>Actual result</ins>:

During installation, you see an error message stating that you did not use the correct Composer keys during installation.

### Cause

You used incorrect Composer keys during installation.

### Solution

Verify that [your Composer keys are linked to the Magento ID](https://devdocs-beta.magento.com/payment-services/install-payments.html#incorrect-composer-keys) used during Payment Services registration.

## Issue - Not enough memory for PHP

When installing the Payment Services extension, you may see an error message stating that you do not have enough memory for PHP.

<ins>Steps to reproduce</ins>:

1. Attempt to [install Payment Services](https://devdocs-beta.magento.com/payment-services/install-payments.html).
1. See the following error, or similar:

   *Fatal error: Allowed memory size of 2146435072 bytes exhausted (tried to allocate 4096 bytes) in phar:///usr/local/bin/composer/src/Composer/DependencyResolver/RuleWatchGraph.php on line 52*

<ins>Expected result</ins>:

You can follow these [installation instructions](https://devdocs-beta.magento.com/payment-services/install-payments.html) in our developer documentation to successfully install Payment Services.

<ins>Actual result</ins:

During installation, you see an error message stating that you do not have enough memory for PHP.

### Cause

The limit for PHP on your environment is not set to a high enough threshold.

### Solution

[Increase the memory limit for PHP](https://devdocs-beta.magento.com/payment-services/install-payments.html#not-enough-memory-for-php) on your environment in `php.ini`.
