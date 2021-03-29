---
title: "Area already set" error when saving theme configuration in Admin
labels: Magento Commerce Cloud,patch,theme,troubleshooting,2.2.4,area already set,known issues
---

This article provides a patch for the known Magento Commerce Cloud 2.2.4 issue related to getting the _"Area is already set"_ error message when trying to set a theme for the Default Store View in the Magento Admin.

## Issue

You get the "_Something went wrong while saving this configuration: Area is already set_" error message when trying to set a theme for the Default Store View.

Steps to reproduce:

1. Log in to Magento Admin.
1. Navigate to Content>Design>Configuration.
1. Set the configuration scope to _Default Store View_.
1. Change the theme in the Applied Theme drop-down. For example, from _Magento Luma_ to _Magento Blank._
1. Click Save Configuration.

Expected result:  
 The selected theme is applied for the default store view.

Actual result:  
 Theme is not applied, the _"Something went wrong while saving this configuration: Area is already set"_ error message is displayed.

## Patch

The patch is attached to this article. To download it, click the following link or scroll down to the end of the article and click the attached file:

[Download MDVA-11106\_EE\_2.2.4\_v1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360023313871/MDVA-11106_EE_2.2.4_v1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce (Cloud) 2.2.4

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce (Cloud) 2.0.X
* Magento Commerce (Cloud) 2.1.X
* Magento Commerce (Cloud) from 2.2.0 to 2.2.5
* Magento Commerce 2.0.X
* Magento Commerce 2.1.X
* Magento Commerce from 2.2.0 to 2.2.5

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files