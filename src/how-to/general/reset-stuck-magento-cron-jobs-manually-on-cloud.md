---
title: Reset stuck Adobe Commerce on cloud infrastructure cron jobs manually
labels: Cloud,Magento Commerce Cloud,cron,ece-tools,how to,reset,stuck cron,Adobe Commerce,cloud infrastructure
---

Adobe Commerce on cloud infrastructure cron jobs don't finish executing, get stuck, and prevent other cron jobs from running. This article shows how to reset the stuck cron jobs manually.

Use this command with caution! We recommend reading the [Reset cron jobs](https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html) article in our support knowledge base for more details.

## Steps

1. Make sure the Adobe Commerce [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) are [patched](http://devdocs.magento.com/guides/v2.2/cloud/project/project-patch.html#patch-magentoece-tools) to [v2002.0.4](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html#v200204).
1. [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-start.html#env-start-tunn).
1. Execute this command: `./vendor/bin/ece-tools cron:unlock`

## Warnings

* The command resets **all** cron jobs, including those currently running; **use it in exceptional cases only**.
* Avoid using this solution when indexers are running.

## Read it in our support knowledge base:

 [Reset cron jobs](https://devdocs.magento.com/guides/v2.2/cloud/trouble/reset-cron-jobs.html)
