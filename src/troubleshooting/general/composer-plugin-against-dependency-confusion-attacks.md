---
title: Composer plugin against Dependency Confusion attacks
labels: Magento Commerce,error,Dependency Confusion Attacks,troubleshooting,Adobe Commerce 2.4.3,Composer plugin,cloud infrastructure,on-premises,Magento Commerce Cloud
---

This article provides information on the composer plugin released for the Dependency Confusion attacks and recommendations on avoiding the error. Composer plugin was introduced alongside Adobe Commerce 2.4.3 release to protect Adobe Commerce merchants from Dependency Confusion attacks.

## Affected products and versions

* Adobe Commerce 2.4.3 and future versions (all deployment methods)

## Issue

A potential case of an active Dependency Confusion attack is detected through at least one of the direct or indirect dependencies defined in `composer.json` by the composer plugin `magento/composer-dependency-version-audit-plugin` during composer installation/update.

<ins>Steps to reproduce</ins>:

When you install/update composer, the composer plugin will stop the process if it detects a potential Dependency Confusion attack. In that case, composer install/update will fail with an error message similar to:

*```Higher matching version x.x.x of package/name was found in public repository packagist.org than x.x.x in private.repo. Public package might've been taken over by a malicious entity; please investigate and update package requirement to match the version from the private repository.```*

## Cause

Dependency Confusion attack allows to remotely execute arbitrary code on a server by tricking a dependency manager (for instance, PHP's Composer) into downloading a malicious package from a public source instead of the original package from a private repository.

Such an attack may even go undetected if an attacker is able to maintain the original package's functionality.

Attackers can exploit this vulnerability if a package is only available through private repositories, but is not registered in the public one. The attacker then uploads a package with the same name to the public repository and gives it a higher version than the one available privately. The dependency manager will then compare versions of both privately and publicly available packages and will choose the highest one from the public repository. The malicious code downloaded by the dependency manager will then be executed with the same privileges as the application's code.

## Solution

### Recommendations to merchants

* Take the error message shown when the plugin stops the composer install/update seriously, and contact the extension developer if you recognize the potentially compromised package.
* You can still install Adobe Commerce with the safe version of the package from the Marketplace or another trusted private repository.
* Change the required package version in your composer.json to the exact version found in the Marketplace in order to proceed with the composer install/update.

### Expectations from extension developers

* There is no way to know for certain if the package for a plugin, if from a public repo, has been compromised or not. The plugin will detect when a public version of a package at packagist.org has a higher version than the one available from a private repo like [repo.magento.com](https://repo.magento.com). We strongly recommend that extension developers avoid such situations and do not publish newer versions publicly than those available through [repo.magento.com](https://repo.magento.com).
* Adobe Commerce understands that the Marketplace review process may delay extensions release availability, but the process is there to keep merchants safe and to help extensions developers find accidental mistakes they might have missed.
