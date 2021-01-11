---
title: "Area already set" error when saving theme configuration in Admin
link: https://support.magento.com/hc/en-us/articles/360024918291--Area-already-set-error-when-saving-theme-configuration-in-Admin
labels: Magento Commerce Cloud,patch,theme,troubleshooting,2.2.4,area already set,known issues
---

This article provides a patch for the known Magento Commerce Cloud 2.2.4 issue related to getting the *"Area is already set"* error message when trying to set a theme for the Default Store View in the Magento Admin.

 Issue
-----

 You get the "*Something went wrong while saving this configuration: Area is already set*" error message when trying to set a theme for the Default Store View.

 Steps to reproduce:

 
 2. Log in to Magento Admin.
 4. Navigate to **Content**>**Design**>**Configuration**.
 6. Set the configuration scope to *Default Store View*.
 8. Change the theme in the **Applied Theme** drop-down. For example, from *Magento Luma* to *Magento Blank.* 
 10. Click **Save Configuration**.
 
 Expected result:  
 The selected theme is applied for the default store view.

 Actual result:  
 Theme is not applied, the *"Something went wrong while saving this configuration: Area is already set"* error message is displayed.

 Patch
-----

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
 
 How to apply the patch
----------------------

 See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

 Attached Files
--------------

