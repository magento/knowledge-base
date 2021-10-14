---
title: Deployment errors from enabling early-alpha Baler module
labels: 2.3.x,2.4.x,Baler,Javascript,Magento Commerce,Magento Commerce Cloud,deploy,deployment,deployment error,deployment fails,github,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

The merchant experiences deployment errors when using the Baler module on a production environment, as the feature is currently in the early alpha development stage.

>![warning]
>
>Early-alpha Baler Javascript bundling is not ready for production use and is used at your own risk.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.3.x and 2.4.x.
* Adobe Commerce on-premises 2.3.x and 2.4.x.

## Issue

We do not recommend that merchants use the Baler module in a production environment, as it is currently in the early alpha development stage. Using it can result in deployment errors.

<ins>Steps to reproduce</ins>:

1. The merchant tries to insert the **SCD\_USE\_BALER** variable in the build stage of the `.magento.env.yaml` file, which enables the Baler Javascript bundling package.
1. The merchant also adds the Baler composer dependency: `"magento/module-baler": "1.0.0-alpha"` to `require` section of `composer.json`.

<ins>Expected result</ins>:

Successful deployment.

<ins>Actual result</ins>:

The merchant sees the following error message in the deployment logs on the cloud, which is `<project home>/var/log/cloud.log`, upon the static content deploy stage:

```clike
[2020-08-19 12:06:12] WARNING: [1007] Baler JS bundling cannot be used because of the following issues:
        [2020-08-19 12:06:12] WARNING:  - Path to baler executable could not be found. The Node package may not be installed or may not be linked.
```

## Cause

The Baler module is currently in the early alpha development stage, and the Baler extension installation process is complex.

## Solution

You can review existing Baler Alpha documentation at [Github/Magento/Baler/Getting started with the alpha](https://github.com/magento/baler/blob/master/docs/ALPHA.md). However, it is not ready for production use, and it is used at your own risk. It is recommended instead that you merge or bundle Javascript (JS) files using Adobe Commerce's built-in bundling (basic bundling) for file optimization.

* You can turn on merging or bundling in the Admin (merging and bundling cannot be enabled at the same time): **Stores** > **Settings** > **Configuration** > **Advanced** > **Developer** > **JavaScript Settings**.
* You can also enable Adobe Commerce's built-in bundling (basic bundling) from the command line: `php -f bin/magento config:set dev/js/enable_js_bundling 1`

To learn more, refer to [CSS and Javascript file optimization on Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises](https://support.magento.com/hc/en-us/articles/360044482152).
