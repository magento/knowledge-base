---
title: Wishlist error during upgrade to Adobe Commerce versions 2.3.4-p1 or 2.3.5
labels: 2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,Magento Commerce,Magento Commerce Cloud,Magento_Wishlist,error,known issues,upgrade,wishlist,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for the known issue when upgrading to Adobe Commerce versions 2.3.4-p1 and 2.3.5 related to a wishlist error during the upgrade to these versions.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.3.4-p1 and 2.3.5
* Adobe Commerce on-premises 2.3.4-p1 and 2.3.5

## Issue

When upgrading your Adobe Commerce (all deployment methods) and Magento Open Source to version 2.3.5 or 2.3.4-p1, you could get a wishlist error (detailed below) from the module:

```php
Magento_Wishlist
```

Upgrading from Adobe Commerce (all deployment methods)/Magneto Open Source version 2.3.4-p1 **to version 2.3.4-p2** or from Adobe Commerce (all deployment methods)/Magneto Open Source version 2.3.5 **to version 2.3.5-p1** will fix the error.

<ins>Steps to reproduce</ins>:

Upgrade your Adobe Commerce (all deployment methods)/Magento Open Source to version 2.3.4-p1 or 2.3.5.

<ins>Expected result</ins>:

The upgrade process to Adobe Commerce (all deployment methods)/Magento Open Source version 2.3.4-p1 or 2.3.5 completes normally.

<ins>Actual result</ins>:

During the upgrade, you get this error:

```php
Module ‘Magento_Wishlist’:

Unable to apply data patch Magento\Wishlist\Setup\Patch\Data\CleanUpData for module Magento_Wishlist. Original exception message: Unable to unserialize value. Error: Syntax error
```

## Solutions

* If you were upgrading to Adobe Commerce (all deployment methods)/Magneto Open Source version 2.3.5, **upgrade to version 2.3.5-p1**. Adobe Commerce (all deployment methods)/Magento Open Source version 2.3.5-p1 replaces 2.3.5.
* If you were upgrading to Adobe Commerce (all deployment methods)/Magento Open Source version 2.3.4-p1, **upgrade to version 2.3.4-p2**. Adobe Commerce (all deployment methods)/Magneto Open Source version 2.3.4-p2 replaces version 2.3.4-p1.

## Related reading

In our developer documentation:

* [Adobe Commerce on cloud infrastructure guide](https://devdocs.magento.com/cloud/bk-cloud.html)
* [Adobe Commerce on cloud infrastructure - Upgrade Adobe Commerce version](https://devdocs.magento.com/cloud/project/project-upgrade.html)  
* [Adobe Commerce on-premises And Magento Open Source - Upgrade the Adobe Commerce application and modules](https://devdocs.magento.com/guides/v2.3/comp-mgr/bk-compman-upgrade-guide.html)  
* [Wishlist item configure page](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/product-layouts.html#wishlist-item-configure-page)  
* [Modules providing advanced reporting](https://devdocs.magento.com/guides/v2.3/advanced-reporting/modules.html)  
