---
title: Order email sent from the server email address
labels: 2.2.4,Magento Commerce Cloud,known issues,order email,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This articles provides a patch for the known Adobe Commerce on cloud infrastructure 2.2.4 issue related to order emails being sent from the server email address.

## Issue

Order confirmation emails are sent from the Apache server email address. Other emails (Forgot password and so on) are sent from the configured email addresses.

<ins>Steps to reproduce</ins>:

1. Place an order with the **Send order confirmation** box checked.
1. Check email.

<ins>Expected result</ins>:

The email was sent from the Adobe Commerce configured sending address.

<ins>Actual result</ins>:

The email was sent from the email address configured in the Apache server being used.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-10993\_EE\_2.2.4\_v1.composer.patch](assets/MDVA-10993_EE_2.2.4_v1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure 2.2.4

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on Cloud infrastructure 2.2.5
* Adobe Commerce on Cloud infrastructure 2.2.6
* Adobe Commerce on Cloud infrastructure 2.2.7
* Adobe Commerce on Cloud infrastructure 2.2.8
* Adobe Commerce on-premises 2.2.4
* Adobe Commerce on-premises 2.2.5
* Adobe Commerce on-premises 2.2.6
* Adobe Commerce on-premises 2.2.7
* Adobe Commerce on-premises 2.2.8
* Adobe Commerce on-premises 2.3.0

## How to apply the patch

For instructions, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

## Attached Files
