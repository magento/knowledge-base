---
title: Unknown module Magento_BundleSampleData
link: https://support.magento.com/hc/en-us/articles/360034276152-Unknown-module-Magento-BundleSampleData
labels: Magento Commerce Cloud,Magento Commerce,error,module,Magento_BundleSampleData,unknown,LogicException,how to
---

This article provides a fix for the Unknown module error during installation.

## Issue

During the installation, a message similar to the following displays:

<pre><code class="language-text">[ERROR] exception 'LogicException' with message 'Unknown module in the requested list: 'Magento_BundleSampleData''</code></pre>

## Solution

Try each of the following one at a time, then try your installation again.

1. Run the [Web Setup Wizard](https://devdocs.magento.com/guides/v2.3/install-gde/install/web/install-web.html).
    
    
    
    On Step 4: Customize Your Store, expand Advanced Modules Configurations and clear the Magento\_BundleSampleData checkbox as the following figure shows.
    
    
    
    ![tshoot_bundlesampledata.png](https://support.magento.com/hc/article_attachments/360039762491/tshoot_bundlesampledata.png)
    
    
1. Clear all browser history and data from your web browser.
1. If you have Chrome, clear all browser data related to your site.
    
    
    
    Go to Settings > Advanced options > Privacy > Content Settings > All cookies and site data. In the Site column, click the address of your Magento server and click Remove All.
    
    