---
title: Wishlist error during upgrade to Magento versions 2.3.4-p1 or 2.3.5 
labels: 2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,Magento Commerce,Magento Commerce Cloud,Magento_Wishlist,error,known issues,upgrade,wishlist
---

This article provides a fix for the known issue when upgrading to Magento versions 2.3.4-p1 and 2.3.5 related to a wishlist error during the upgrade to these versions.

## Affected products and versions

* Magento Commerce Cloud versions 2.3.4-p1 and 2.3.5
* Magento Commerce versions 2.3.4-p1 and 2.3.5

## Issue

During an upgrade to Magento Commerce Cloud/Commerce/Open Source versions 2.3.5 or 2.3.4-p1, you could get a wishlist error (detailed below) from the <code class="language-php">Magento\_Wishlist</code> module.

Upgrading:  
From Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p1 to version 2.3.4-p2  
or from Magento Commerce Cloud/Commerce/Open Source version 2.3.5 to version 2.3.5-p1  
will fix the error.

Step to reproduce:

Upgrade your Magento Commerce Cloud/Commerce/Open Source to version 2.3.4-p1 or version 2.3.1. Expected result:

The upgrade process to Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p1 or version 2.3.5 completes normally.

Actual result:

During the upgrade you get this error:

<pre><code class="language-php">Module ‘Magento_Wishlist’:

Unable to apply data patch Magento\Wishlist\Setup\Patch\Data\CleanUpData for module Magento_Wishlist. Original exception message: Unable to unserialize value. Error: Syntax error  
</code></pre>

## Solutions

* If you were upgrading to Magento Commerce Cloud/Commerce/Open Source version 2.3.5, upgrade to version 2.3.5-p1. Magento Commerce Cloud/Commerce/Open Source version 2.3.5-p1 replaces version 2.3.1. * If you were upgrading to Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p1, upgrade to version 2.3.4-p1. Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p2 replaces version 2.3.4-p1. ## Related reading from Devdocs

* [Magento Commerce Cloud guide](https://devdocs.magento.com/cloud/bk-cloud.html) 
* [Magento Commerce Cloud - Upgrade Magento version](https://devdocs.magento.com/cloud/project/project-upgrade.html) 
* [Magento Commerce (On-Prem) And Magento Open Source - Upgrade the Magento application and modules](https://devdocs.magento.com/guides/v2.3/comp-mgr/bk-compman-upgrade-guide.html) 
* [Wishlist item configure page](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/product-layouts.html#wishlist-item-configure-page) 
* [Modules providing advanced reporting](https://devdocs.magento.com/guides/v2.3/advanced-reporting/modules.html) 