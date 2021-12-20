---
title: "MDVA-29954: wrong address sent new company user registration email"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.1,B2B features,Companies Admin,QPT 1.0.8,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,New Company Registration Request,email address,sender email,user,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-29954 patch solves the issue where the "New Company Registration Request" and "You've been linked to a company" emails are sent from the wrong email address. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.8 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.3

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.3.5-p2, 2.4.0, and 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Prerequisites</ins>:

Install Adobe Commerce with B2B, with **B2B Features** and **Company** enabled.

<ins>Steps to reproduce</ins>:

1. Click on the **Create Account** dropdown on the storefront, and select **Create New Company Account**.
1. Fill in the required fields, and register the account.
1. Enable the **Company** from the backend (**Customer** > **Companies**).
1. Check the email address that you used for registration.
1. Set the **Company Admin password** by following the emailed instructions.
1. Log in to the frontend with the **Company Admin password**.
1. Create a new **Company User** in **My Account** > **Company Users** > **Add New User**.
1. Go to **Stores** > **Configurations** > **General-Store Email Addresses** > **General Contact**, and check **Sender Email**.
1. Go to the email that you used to register the **New User** in Step 7.

<ins>Expected results</ins>:

The "You've been linked to a company" email is sent from an email address with the same value as for the **Sender Email** in Step 8.

<ins>Actual results</ins>:

The "You've been linked to a company" email is sent from the **Companies Admin** email.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
