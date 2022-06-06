---
title: Github token issue and Composer key procedures
labels: Magento Commerce,Magento Commerce Cloud,GitHub,token,Composer key,troubleshooting,failed deployment,fail,Git,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides solutions for the issue of failed deployments related to Github token failures caused by outdated Composer keys.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Composer versions 1.10.20 and lower

>![info]
>
>Note: Adobe Commerce on-premises merchants should check with their host provider to ensure they are using Composer version 1.10.21 or higher due to the token format changes introduced by Git.

## Issue

Deployments fail and deployment logs contain information similar to the following:

*Fatal error: Uncaught UnexpectedValueException: Your github oauth token for github.com contains invalid characters: "ghp_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" in /app/vendor/composer/composer/src/Composer/IO/BaseIO.php:129*

## Cause

Outdated Composer keys cause the Github token failures which result in failed deployments.

## Solution

To resolve the issue, please update your Composer version to 1.10.22:

1. On your local environment, `run composer require “composer/composer”:”>1.10.21`.
1. This adds the requirement for that Composer package version. Check the lock file - `composer/composer` version must be 1.0.22 or higher.
1. Commit `composer.json` and `composer.lock` and push a deployment.

If this method does not work, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

## Related reading

* [Github Blog: Behind GitHub’s new authentication token formats](https://github.blog/2021-04-05-behind-githubs-new-authentication-token-formats/)
* [InfoQ.com news article: GitHub Changes Token Format to Improve Identifiability, Secret Scanning, and Entropy](https://www.infoq.com/news/2021/04/github-new-token-format/)
