---
title: Cannot access the latest Beta version
labels: Beta,Magento Commerce,composer,download,early access,how to,Adobe Commerce,cloud infrastructure
---

This article provides solutions for issues when trying to utilize the latest Beta versions of code for Adobe Commerce. Beta code is only available for official Adobe partners that have followed the process described in [Adobe Commerce Beta Program](https://github.com/magento/magento2/wiki/Magento-Beta-Program).

## Issue

This article covers the following issues with accessing the early access code:

* Adobe Commerce Beta version is not available for download under **My Account** > **Downloads** on [magento.com](https://account.magento.com/customer/account/login).
* Failure to download the early access Adobe Commerce version from [magento.com](https://account.magento.com/customer/account/login) using Composer.

## Cause

These are the most common causes of issues:

* You are looking for the early access code in the wrong location.
* You are using the wrong MageID.
* Developer needs access keys from the correct MageID.
* Your account is not a part of the Beta program.

## Solution

### Early access code location

During beta access periods, release packages are only available via Composer on [repo.magento.com](https://repo.magento.com/). Release packages are not available on GitHub and Adobe Commerce portals during this period, and we will publish them to these locations on the GA date. For more details on how to use Composer, please click [here](https://devdocs.magento.com/guides/v2.3/install-gde/composer.html).

### MageID you need to use

You must use the primary MageID associated with your Partner account. The Beta program is not linked to any contact having shared access. Early access can only be accessed via Composer or [repo.magento.com](https://repo.magento.com/) by the MageID associated with your Partner license.

#### How do I find out if my MageID is the primary one

To find out if your MageID is primary, try the following:

1. Log into [magento.com](https://account.magento.com/customer/account/login) and go to the **My Product and Services** tab. In the Partners sub-section, check if you see the active Partner license information:
    * If you see the active Partner license information, then your MageID is primary. The Partner license is active if the END DATE value is a date in the future.
    * If you do not see the active Partner license information, then your MageID only has shared access. To find out who is the primary ID holder, go to the **Shared with me** Notice the SHARENAME specified there. Click **Switch Accounts** and select the value you've noted in SHARENAME. On the welcome page, you will see the email of the primary ID holder.
1. If for any reason you cannot find this information on [magento.com](https://account.magento.com/customer/account/login), please contact your Partner Manager.
1. If none of the above works, please [contact Support](https://support.magento.com/hc/en-us/articles/360000913794#merchant-not-displayed).

#### Developer doesn’t have correct access to keys

If you are the primary MageID owner and need to give access to a developer on your team, follow the below steps:

1. Have the primary MageID owner login into [account.magento.com](https://account.magento.com/customer/account/login).
1. Select the **Marketplace** tab and then click **Access Keys**.
1. Select **Create A New Access key** and name it.
1. Send the keys to your developer.

### Not a part of the early access program

Our Beta Access program is only available to our Solution and Technical Partners so that they can evaluate our pre-production code. To be included in the Beta Access program, your organization must have an active Adobe Partner account that is in good standing and have signed the Beta NDA [here](https://github.com/magento/magento2/wiki/Magento-Beta-Program). If you believe you meet these criteria and cannot access the beta code, please contact [commercebeta@adobe.com](mailto:commercebeta@adobe.com).
