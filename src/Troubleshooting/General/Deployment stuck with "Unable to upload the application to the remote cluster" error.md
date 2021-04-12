---
title: Deployment stuck with "Unable to upload the application to the remote cluster" error
labels: Magento Commerce Cloud,error,deployment,troubleshooting
---

This article provides a solution for the Magento Commerce issue, where deployment gets stuck, and the following error message can be found in the deploy log: _"Error: Unable to upload the application to the remote cluster"_.

### Affected products and versions:

* Magento Commerce Cloud
* all versions

## Issue

Steps to reproduce

Trigger deployment manually or by performing a merge, push, or synchronization of your environment.

Actual result

Deployment gets stuck and in the deployment error log in Cloud UI, the following error message is displayed: _"Error: Unable to upload the application to the remote cluster" found in deploy log after failed deployment, site may display error "503 first byte timeout"_.

Expected result

Deployment is completed successfully.

## Cause

The problem is caused by the outage of available storage. 

<h2 id="solution">Solution</h2>

You can consider cleaning the log directories and/or increasing disk space.

Directories that be considered for clean up:

* `` var/log ``
* `` var/report ``
* `` var/debug/ ``
* `` var ``

For details on how increase disk space if you on the Starter plan, see [Increase disk space for Integration environment on Cloud](https://support.magento.com/hc/en-us/articles/360005189554-Increase-disk-space-for-Integration-environment-on-Cloud). The same instructions can be used for increasing space of Pro plan Integration environment.  
 For Pro Production/Staging, you need to [file a ticket to Magento Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) and request increase disk space. But typically, you will not have to deal with this on Staging/Production of the Pro plan, because Magento monitors these parameters for you, and alerts and/or takes actions, according to the contract.