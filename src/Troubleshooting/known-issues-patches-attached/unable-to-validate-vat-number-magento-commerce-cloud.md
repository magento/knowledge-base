---
title: Unable to validate VAT number - Magento Commerce Cloud
labels: 2.3.x,Magento Commerce Cloud,known issues,patch,troubleshooting,vat error
---

This article provides a patch for the issue where there is an error during VAT number verification.

## Affected products and versions

All Magento Commerce and Magento Commerce Cloud versions up to 2.3.6 (including 2.3.5-p1) were affected, including already released p1 and p2 versions. This includes:

* 2.3.5-p1
* 2.3.5
* 2.3.4 - 2.3.4-p2
* 2.3.3-2.3.3-p1
* 2.3.2 -2.3.2-p2
* 2.0.0 - 2.3.1

## Issue

Steps to reproduce:

1. Go to Stores > Configuration > Customers > Customer Configuration > Create New Account Options and set Enable Automatic Assignment to Customer Group to _Yes_. 
1. Go to General > Store Information > and set a valid Country and VAT Number.
1. Click on Validate VAT Number.

Expected result:

Validation is successful.

Actual result:

The following error is displayed: "_Error during VAT Number verification._"

## Solution

Apply the [patch](assets/MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch) provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[MDVA-27623\_EE\_2.3.2-p2\_COMPOSER\_v1.patch](assets/MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch)

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files