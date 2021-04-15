---
title: Magento 2.4.0 known issue: Braintree Virtual Terminal page is corrupted 
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,2.4.0,Braintree Virtual Terminal
---

This article provides a patch for the known Magento 2.4.0 issue, where the Braintree Virtual Terminal page does not load the proper UI elements or a proper error message if Braintree is not configured.

## Affected products and versions

* Magento Commerce 2.4.0
* Magento Commerce Cloud 2.4.0

## Issue

### Scenario 1: Braintree payment method is configured

Steps to reproduce:

In Magento Admin, go to Sales > Braintree Virtual Terminal. 

Expected result:

The Braintree Virtual Terminal page loads with proper UI.

Actual result:

The UI of the Braintree Virtual Terminal page is broken.

### Scenario 2: Braintree payment method is configured

Steps to reproduce:

In Magento Admin, go to Sales >  Braintree Virtual Terminal. 

Expected result:

The Braintree Virtual Terminal page loads with proper UI and a warning is displayed informing that Braintree is not yet configured.

Actual result:

The UI of the Braintree Virtual Terminal page is broken and no warning is displayed.

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[BUNDLE-2670-composer.patch](https://support.magento.com/hc/en-us/article_attachments/360063914412/BUNDLE-2670-composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce Cloud 2.4.0
* Magento Commerce 2.4.0

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files