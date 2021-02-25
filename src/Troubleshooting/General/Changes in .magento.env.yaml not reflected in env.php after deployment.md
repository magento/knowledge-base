---
title: Changes in .magento.env.yaml not reflected in env.php after deployment
link: https://support.magento.com/hc/en-us/articles/360050422532-Changes-in-magento-env-yaml-not-reflected-in-env-php-after-deployment
labels: Magento Commerce Cloud,deploy,deployment,troubleshooting,php.ini,deployment error,environment variables,app/etc/env.php,.magento.env.yaml,env.php
---

This article provides a solution for the issue where changes in ``  .magento.env.yaml `` file are not reflected in `` app/etc/env.php `` after deployment.

### Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

Changes made in the`` .magento.env.yaml `` file do not affect the `` app/etc/env.php `` generated.

Steps to reproduce  
  
Change any value in `` .magento.env.yaml `` and push to the server, where it should define the configuration (and deployment settings) for the currently checked-out environment. For steps, refer to Magento DevDocs [Environment Variables > Deploy Variables](https://devdocs.magento.com/cloud/env/variables-deploy.html).

Expected result

Changes made in the `` .magento.env.yaml `` file affect the `` app/etc/env.php `` generated.

Actual result

The changes have no effect on the `` app/etc/env.php `` variables after deployment.

## Cause

The issue could be caused by the incorrect value of the `` opcache.enable_cli `` parameter in the `` php.ini `` file.

## Solution

1. Check that the system is configured according to [Magento Performance Best Practices > Software recommendations](https://devdocs.magento.com/guides/v2.4/performance-best-practices/software.html).
1. Check if <code style="font-size: 15px;">opcache.enable\_cli</code> directive in <code style="font-size: 15px;">php.ini</code> is set to <code style="font-size: 15px;">0</code> by executing:  
    `` php -i | grep opcache.enable_cli ``  
    
1. If the output looks like `` opcache.enable_cli=1 ``, edit the `` php.ini `` file in the project root directory and change `` opcache.enable_cli=1 `` to `` opcache.enable_cli=0 ``
1. Redeploy the project.

## Related reading

* DevDocs [Magento Commerce Cloud  > Build and deploy](https://devdocs.magento.com/cloud/project/magento-env-yaml.html).