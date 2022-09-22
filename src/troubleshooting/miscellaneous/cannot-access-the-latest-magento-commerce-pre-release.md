---
title: Cannot access the latest Adobe Commerce pre-release
labels: MageID,Magento Commerce,early access,how to,pre-release,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides solutions for issues when trying to utilize the latest pre-release code of Adobe Commerce.

>![info]
>
>Note: if you are having problems with Beta access refer to the [Cannot access the latest Beta version](https://support.magento.com/hc/en-us/articles/360048169471) article.

## Issue

This article covers the following issues with accessing the pre-release code:

* You cannot locate the pre-release code.
* Failure to download the early access Adobe Commerce version from [magento.com](https://account.magento.com/customer/account/login) using Composer.

## Cause

These are the most common causes of issues:

* You are looking for the early access code in the wrong location.
* You are using the wrong MageID when accessing the code via Composer.
* Your account is not a part of the Pre-release program.

## Solution

### Early access code location

During the pre-release, release packages are available in two locations:

1. Via Composer on [magento.com](https://repo.magento.com/) using the primary MageID for the account. For more details on how to use Composer, please refer to [Install Adobe Commerce using Composer](https://devdocs.magento.com/guides/v2.3/install-gde/composer.html) in our developer documentation.
1. **My Account** > **Downloads** on [account.magento.com](https://account.magento.com/customer/account/login).

>![info]
>
>Note: Release packages are not available on GitHub until the GA date.

### MageID you need to use

You must use the primary MageID associated with your Adobe Commerce or Partner account. The Pre-release program is not linked to any contact having shared access. Early access can only be accessed via Composer or [repo.magento.com](https://repo.magento.com/) by the MageID associated with your Adobe Commerce license or Partner license.

#### How do I find out if my MageID is the primary one?

 **For merchants**

To find out if your MageID is primary, try the following:

1. Log into [magento.com](https://account.magento.com/customer/account/login) and go to the **My Product and Services** tab. Check if you see the Adobe Commerce license information there:
    * If you see the Adobe Commerce license information, then your MageID is primary.
    * If you do not see the Adobe Commerce license information, then your MageID only has shared access. To find out who is the primary ID holder, go to the **Shared with me** Notice the SHARENAME specified there. Click **Switch Accounts** and select the value you've noted in SHARENAME. On the welcome page you will see the email of the primary ID holder.
1. If for any reason you cannot find this information on [magento.com](https://account.magento.com/customer/account/login), please contact your Customer Success Manager (CSM).
1. If none of the above works, please [contact Support](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

 **For partners**

To find out if your MageID is primary, try the following:

1. Log into [magento.com](https://account.magento.com/customer/account/login) and go to the **My Product and Services** tab. In the Partners sub-section, check if you see the active Partner license information:
    * If you see the active Partner license information, then your MageID is primary. The Partner license is active if the END DATE value is a date in the future.
    * If you do not see the active Partner license information, then your MageID only has shared access. To find out who is the primary ID holder, go to the **Shared with me** Notice the SHARENAME specified there. Click **Switch Accounts** and select the value you've noted in SHARENAME. On the welcome page you will see the email of the primary ID holder.
1. If for any reason you cannot find this information on [magento.com](https://account.magento.com/customer/account/login), please contact your Partner Manager.
1. If none of the above works, please [сontact Support](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

### Not a part of pre-release program

To be included in the Pre-release Access program, your organization must have an active Adobe Commerce or Partner account that is in good standing. If you believe you meet this criteria and cannot access the pre-release code, please [contact Support](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) with your MageID.
