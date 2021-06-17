---
title: "Magento 2.3.6, 2.4.0-p1, 2.4.1 known issue: dotdigital login"
labels: 2.3.6,2.4.0-p1,2.4.1,Magento Commerce,Magento Commerce Cloud,dotdigital,known issues,troubleshooting
---

This article describes a Magento 2.3.6, 2.4.0-p1, and 2.4.1 known issue where it is impossible to log in to [dotdigital](https://dotdigital.com/) via the Admin Panel when the dotdigital account is enabled.

## Affected products and versions

* Magento Commerce Cloud and Magento Commerce 2.3.6 (Safari browser only)
* Magento Commerce Cloud and Magento Commerce 2.4.0-p1 (Safari browser only)
* Magento Commerce Cloud and Magento Commerce 2.4.1 (Safari browser only)

## Issue

 <span class="wysiwyg-underline">Prerequisites:</span> 

1. dotdigital account exists.
1. Valid dotdigital API credentials exist in Magento.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Go to **Stores** > **Configuration** > **DOTDIGITAL** > **Chat Settings** > **Enabled** is set to *Yes.* 
1. Click on **Configure** in **Configure Chat Widget** or **Configure Chat Teams** .

 <span class="wysiwyg-underline">Expected result:</span> 

Chat settings page should open successfully via Admin Panel.

 <span class="wysiwyg-underline">Actual result:</span> 

Unable to log in to dotdigital.

## Solution

Workaround: use an alternative browser to Safari for this particular situation.

## Related Reading

 [Magento 2.4.1 Known Issue - Vertex address not validating with different shipping/billing addresses](https://support.magento.com/hc/en-us/articles/360050139631) 