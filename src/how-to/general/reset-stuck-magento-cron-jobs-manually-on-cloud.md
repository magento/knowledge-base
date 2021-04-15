---
title: Reset stuck Magento cron jobs manually on Cloud
labels: Magento Commerce Cloud,Cloud,cron,reset,ece-tools,stuck cron,how to
---

Magento cron jobs may don't finish executing, get stuck, and prevent other cron jobs from running. This article shows how to reset the stuck cron jobs manually.

Use this command with caution! We recommend reading the [Reset cron jobs](https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html) article on DevDocs for more details.

## Steps

1. Make sure the Magento [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) are [patched](http://devdocs.magento.com/guides/v2.2/cloud/project/project-patch.html#patch-magentoece-tools) to [v2002.0.4](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html#v200204).
1. [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-start.html#env-start-tunn).
1. Execute this command:  
     ./vendor/bin/ece-tools cron:unlock

## Warnings

* The command resets all cron jobs, including those currently running; use it in exceptional cases only.
* Avoid using this solution when indexers are running.

## Read it on DevDocs

[Reset cron jobs](https://devdocs.magento.com/guides/v2.2/cloud/trouble/reset-cron-jobs.html)