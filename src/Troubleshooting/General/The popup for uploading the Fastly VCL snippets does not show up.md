---
title: The popup for uploading the Fastly VCL snippets does not show up
link: https://support.magento.com/hc/en-us/articles/360029216091-The-popup-for-uploading-the-Fastly-VCL-snippets-does-not-show-up
labels: fastly,VCL
---

This article talks about the issue where the popup window for uploading Fastly VCL snippets does not show up. The issue might be caused by the Fastly\_Cdn module output being disabled.

 ### Affected products and versions

 
 * Magento Commerce Cloud
 * 2.1.X or earlier
 
 Issue
-----

 Steps to reproduce

 
 2. In the Magento Admin, navigate to **Stores** > **Settings**> **Configuration** > **Advanced** > **System** > **Fastly Configuration**.
 4. Click **Upload VCL to Fastly**.
 
 Expected result

 The popup window opens for uploading the file.

 Actual result

 Nothing happens, the window does not pop up.

 Cause
-----

 The issue might be caused by the Fastly\_Cdn module output being disabled.

 Solution
--------

 Take the following steps to enable the module output and clear cache:

 
 2. Log in to the Magento Admin.
 4. Navigate to **Stores** > **Settings** > **Configuration** > ADVANCED > **Advanced**.
 6. For the Fastly\_Cdn module, select *Disable*.
 8. Click **Save Config**.
 10. Navigate to **System** > Tools > **Cache Management**.
 12. Click **Flush Magento Cache**. 
 14. On the same page, under Additional Cache configuration, click **Flush Static Files Cache** and **Flush JavaScript/CSS Cache**.
 
