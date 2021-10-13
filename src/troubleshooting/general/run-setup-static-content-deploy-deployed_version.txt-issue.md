---
title: run `setup:static-content:deploy` deployed_version.txt issue
labels: Magento Commerce Cloud,deploy,not writable,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a fix for `deployed_version.txt` is not writable error when running the `setup:static-content:deploy` command manually.

## Issue

If you follow the Adobe Commerce on cloud infrastructure recommendations to use [Configuration Management](https://support.magento.com/hc/en-us/articles/115003169574) (and move static assets generation to the build stage in order to decrease website downtime during deployment), you may face the following error when running the `setup:static-content:deploy` command manually:

```clike
{{cloud-project-id}}_stg@i:~$ php bin/magento setup:static-content:deploy
Requested languages: en_US
Requested areas: frontend, adminhtml
Requested themes: Magento/blank, Magento/luma, Aheadworks/marketplace, Magento/backend
[Magento\Framework\Exception\FileSystemException]
The path "deployed_version.txt:///app/{{cloud-project-id}}_stg/pub/static/app/{{cloud-project-id}}_stg/pub/static/" is not writable
```

## Cause

We have optimized the deployment process to decrease downtime and have created symlinks to static assets files instead of copying them. The location where the static assets are stored is read-only, that is why you get the error message above.

We strongly do not recommend to run static content deploy manually because all assets are already generated and there will be no difference between files if you do it manually (the theme files are read-only as well, you cannot change them), so there's no sense in such operation.

## Solution

If you still want to run static content deployment, remove symlinks in the `pub/static` directory and run the `setup:static-content:deploy` command again:

```clike
find pub/static/ -maxdepth 1 -type l -delete
```
