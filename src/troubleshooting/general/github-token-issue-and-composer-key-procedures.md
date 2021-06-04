---
title:
labels: Magento Commerce,Magento Commerce Cloud,GitHub,token,Composer key,troubleshooting,failed deployment,fail,Git
---

This article provides solutions for the issue for failed deployments related to Github token failures, caused by outdated Composer keys.

## Affected products and versions

* Magento Commerce Cloud, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Composer versions 1.10.20 and lower

>![info]
>
>Note: Magento Commerce On-Premise merchants should check with their host provider to ensure they are using Composer version 1.10.21 or higher due to the token format changes introduced by Git.


## Issue

 Deployments fail and deployment logs contain information similar to the following:

 *Fatal error: Uncaught UnexpectedValueException: Your github oauth token for github.com contains invalid characters: "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" in /app/vendor/composer/composer/src/Composer/IO/BaseIO.php:129*


## Cause

Outdated Composer keys cause the Github token failures which result in the failed deployments.

## Solutions

<ins>Primary Method</ins>

To resolve the issue, please update your Composer version to at least 1.10.21, preferably 1.10.22:

1. Update the version of Composer specified in your `composer.lock` file to 1.10.21 or 1.10.22.
1. Run Composer update.
1. Push a deployment.

<ins>Secondary Method</ins>

If that primary method does not work, please try this:

1. On your local environment, `run composer require “composer/composer”:”>1.10.21` (or if you have installed Composer version 1.10.22, `run composer require “composer/composer”:”>1.10.22`).
1. This adds the requirement for that Composer package version, you may be required to add the ``–no-update`` flag as follows:
    ```php
    “composer/composer”:”>1.10.21” -–no-update
    ```

    or for version 1.10.22,

    ```php
    “composer/composer”:”>1.10.22” -–no-update
    ```
1. Check the lock file. If it is not updated, update it to 1.10.21 (or to 1.10.22).
1. Push a deployment.

<ins>Tertiary Method</ins>

If you still have issues:

1. Please try running a Composer update locally before pushing a deployment. This will update the `composer.lock` file, and then commit those locked requirements to the build server.
1. If none of these methods have worked, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).


## Related reading

* [Github Blog: Behind GitHub’s new authentication token formats](https://github.blog/2021-04-05-behind-githubs-new-authentication-token-formats/)
* [InfoQ.com news article: GitHub Changes Token Format to Improve Identifiability, Secret Scanning, and Entropy](https://www.infoq.com/news/2021/04/github-new-token-format/)
