---
title: .magento.env.yaml changes not shown in env.php after deploy
labels: .magento.env.yaml,Magento Commerce Cloud,app/etc/env.php,deploy,deployment,deployment error,env.php,environment variables,php.ini,troubleshooting,Adobe Commerce,cloud infrastructure
---

>![info]
>
>If you have this problem upgrade to ece-tools 2002.1.5 to fix it. 2002.1.5 has functionality to reset the opcache on each deployment so there is never a need to change the setting `opcache.enable_cli=1`. If you don't want to upgrade, then you would have to do the workaround steps as described below in the solution.

This article provides a solution for the issue where changes in `.magento.env.yaml` file are not reflected in `app/etc/env.php` after deployment.

## Affected products and versions

* Adobe Commerce on cloud infrastructure (all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)).

## Issue

Changes made in the `.magento.env.yaml` file do not affect the `app/etc/env.php` generated.

<ins>Steps to reproduce:</ins>

Change any value in `.magento.env.yaml` and push to the server, where it should define the configuration (and deployment settings) for the currently checked-out environment. For steps, see [Environment Variables > Deploy Variables](https://devdocs.magento.com/cloud/env/variables-deploy.html) in our developer documentation.

<ins>Expected result:</ins>

Changes made in the `.magento.env.yaml` file affect the `app/etc/env.php` generated.

<ins>Actual result:</ins>

The changes have no effect on the `app/etc/env.php` variables after deployment.

## Cause

The issue could be caused by the incorrect value of the `opcache.enable_cli` parameter in the `php.ini` file.

## Solution

1. Check that the system is configured according to [Adobe Commerce Performance Best Practices > Software recommendations](https://devdocs.magento.com/guides/v2.4/performance-best-practices/software.html).    
1. Check if `opcache.enable_cli` directive in `php.ini` is set to `0` by executing: `php -i | grep opcache.enable_cli`     
1. If the output looks like `opcache.enable_cli=1` , edit the `php.ini` file in the project root directory and change `opcache.enable_cli=1` to `opcache.enable_cli=0`     
1. Redeploy the project.    

## Related reading

* [Cloud for Adobe Commerce > Build and deploy](https://devdocs.magento.com/cloud/project/magento-env-yaml.html).
