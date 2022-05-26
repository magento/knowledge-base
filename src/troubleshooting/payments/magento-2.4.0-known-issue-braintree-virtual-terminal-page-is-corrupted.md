---
title: Adobe Commerce 2.4.0 Braintree Virtual Terminal page corrupted
labels: 2.4.0,Braintree Virtual Terminal,Magento Commerce,Magento Commerce Cloud,known issues,patch,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a patch for the known Adobe Commerce 2.4.0 issue, where the Braintree Virtual Terminal page does not load the proper UI elements or a proper error message if Braintree is not configured.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

## Issue

### Scenario 1: Braintree payment method is configured

 <span class="wysiwyg-underline">Steps to reproduce:</span>

In Commerce Admin, go to **Sales** > **Braintree Virtual Terminal** . ** **

 <span class="wysiwyg-underline">Expected result:</span>

The **Braintree Virtual Terminal** page loads with proper UI.

 <span class="wysiwyg-underline">Actual result:</span>

The UI of the **Braintree Virtual Terminal** page is broken.

### Scenario 2: Braintree payment method is configured

 <span class="wysiwyg-underline">Steps to reproduce:</span>

In Commerce Admin, go to **Sales** > **Braintree Virtual Terminal** . ** **

 <span class="wysiwyg-underline">Expected result:</span>

The **Braintree Virtual Terminal** page loads with proper UI and a warning is displayed informing that Braintree is not yet configured.

 <span class="wysiwyg-underline">Actual result:</span>

The UI of the **Braintree Virtual Terminal** page is broken and no warning is displayed.

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [BUNDLE-2670-composer.patch](assets/BUNDLE-2670-composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure 2.4.0
* Adobe Commerce on-premises 2.4.0

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files
