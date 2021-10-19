---
title: Unable to validate VAT number - Adobe Commerce on cloud infrastructure
labels: 2.3.x,Magento Commerce Cloud,known issues,patch,troubleshooting,vat error,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the issue where there is an error during VAT number verification.

## Affected products and versions

All Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure versions up to 2.3.6 (including 2.3.5-p1) were affected, including already released p1 and p2 versions. This includes:

* 2.3.5-p1
* 2.3.5
* 2.3.4 - 2.3.4-p2
* 2.3.3 - 2.3.3-p1
* 2.3.2 -2.3.2-p2
* 2.0.0 - 2.3.1

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Go to **Stores** > **Configuration** > **Customers** > **Customer Configuration** > **Create New Account Options** and set **Enable Automatic Assignment** to **Customer Group** to *Yes*.
1. Go to **General** > **Store Information** > and set a valid Country and VAT Number.
1. Click on **Validate VAT Number**.

 <span class="wysiwyg-underline">Expected result:</span>

Validation is successful.

 <span class="wysiwyg-underline">Actual result:</span>

The following error is displayed: "*Error during VAT Number verification.*"

## Solution

Apply the [patch](assets/MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch.zip) provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [MDVA-27623\_EE\_2.3.2-p2\_COMPOSER\_v1.patch](assets/MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch.zip)

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files
