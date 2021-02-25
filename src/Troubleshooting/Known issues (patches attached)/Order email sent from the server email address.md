---
title: Order email sent from the server email address
link: https://support.magento.com/hc/en-us/articles/360024855431-Order-email-sent-from-the-server-email-address
labels: Magento Commerce Cloud,patch,troubleshooting,2.2.4,order email,known issues
---

This articles provides a patch for the known Magento Commerce Cloud 2.2.4 issue related to order emails being sent from the server email address.

## Issue

Order confirmation emails are sent from the Apache server email address. Other emails (Forgot password and so on) sent from the configured email addresses.

Steps:

1. Place an order with the Send order confirmation box checked.
1. Check email.

Expected result:  
 The email was sent from the Magento configured sending address.

Actual result:  
 The email was sent from email address configured in the Apache server being used.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-10993\_EE\_2.2.4\_v1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360023209891/MDVA-10993_EE_2.2.4_v1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce (Cloud) 2.2.4

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce (Cloud) 2.2.5
* Magento Commerce (Cloud) 2.2.6
* Magento Commerce (Cloud) 2.2.7
* Magento Commerce (Cloud) 2.2.8
* Magento Commerce 2.2.4
* Magento Commerce 2.2.5
* Magento Commerce 2.2.6
* Magento Commerce 2.2.7
* Magento Commerce 2.2.8
* Magento Commerce 2.3.0

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files