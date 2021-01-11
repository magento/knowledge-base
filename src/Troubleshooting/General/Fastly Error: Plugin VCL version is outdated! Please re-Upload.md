---
title: Fastly Error: Plugin VCL version is outdated! Please re-Upload
link: https://support.magento.com/hc/en-us/articles/360036318311-Fastly-Error-Plugin-VCL-version-is-outdated-Please-re-Upload
labels: Magento Commerce Cloud,VCL snippets,ece-tools,Troubleshooting,Fastly error,Plugin VCL,2.3.x,2.2.x,how to
---

This article provides a solution for when you see the message "*Plugin VCL version is outdated! Please re-Upload.*" in Fastly Configuration, in the Magento admin, due to not having installed the latest Fastly module. 

 AFFECTED PRODUCTS AND VERSIONS
------------------------------

 Magento Commerce Cloud 2.2.x., 2.3.x  
 Fastly: This error can affect all versions of the Fastly module except the latest one. For information on the latest release see [Fastly release notes](https://github.com/fastly/fastly-magento2/releases) on GitHub.

 Issue
-----

 
 2. Log in to the Magento admin panel.
 4. Navigate to **Stores** > **Configuration** > **Advanced** > **System** > **Full Page Cache** **Fastly Cache.** 
 6. In the **Automatic Upload & Service Activation** section, there will be a "*Plugin VCL version is outdated! Please re-Upload.*" notification.
 8. You attempt to upload the VCL snippets by clicking on the "Upload VCL to Fastly" button but you still see the warning "*Plugin VCL version is outdated! Please re-Upload.*"
 
 Cause
-----

 The Fastly extension was updated (along with a bundled VCL configuration and templates), but the updated VCL config has not been uploaded to the Fastly service. When you update the Magento module Fastly\_Cdn, you have to upload an updated VCL config to Fastly again.

 Solution
--------

 
 
 2. Check that you have the latest ECE-Tools installed and at the [current version](https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html). ECE-Tools has a version of the Fastly package in its dependencies. This may not be the latest version of the Fastly plugin, but it is likely to be a later version than the one you have currently installed, and it is best practice to have the latest ECE-Tools installed.

 
 4. If you are not on the current version of ECE-Tools, follow these steps to [upgrade](https://devdocs.magento.com/guides/v2.2/cloud/project/ece-tools-update.html).
 6. After you have upgraded ECE-Tools, check if you now have a current version of the [Fastly plugin](https://github.com/fastly/fastly-magento2/tree/master/etc/vcl_snippets) installed.
 8. If the Fastly plugin is not the current version, follow these steps to [upgrade the plugin to the most current version](https://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#upgrade "Follow link").
 
 
 Related reading
---------------

 
 * For information about setting up and configuring Fastly, see DevDocs [Configure Fastly services](https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-fastly.html).
 * For general information about Fastly, see [fastly.com](https://www.fastly.com/) 
 
