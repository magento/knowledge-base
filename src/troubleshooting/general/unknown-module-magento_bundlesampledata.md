---
title: Unknown module Magento_BundleSampleData
labels: LogicException,Magento Commerce,Magento Commerce Cloud,Magento_BundleSampleData,error,how to,module,unknown,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a fix for the Unknown module error during installation of Adobe Commerce.

<h2 id="details">Issue</h2>

During the installation, a message similar to the following displays:

```text
[ERROR] exception 'LogicException' with message 'Unknown module in the requested list: 'Magento_BundleSampleData''
```

<h2 id="solution">Solution</h2>

Try each of the following one at a time, then try your installation again.

1. Run the [Web Setup Wizard](https://devdocs.magento.com/guides/v2.3/install-gde/install/web/install-web.html).    On Step 4: Customize Your Store, expand **Advanced Modules Configurations** and clear the **Magento\_BundleSampleData** checkbox as the following figure shows.    ![tshoot_bundlesampledata.png](assets/tshoot_bundlesampledata.png)    
1. Clear all browser history and data from your web browser.
1. If you have Chrome, clear all browser data related to your site.  Go to **Settings** > **Advanced options** > **Privacy** > **Content Settings** > **All cookies and site data**. In the Site column, click the address of your Adobe Commerce server and click **Remove All**.    
