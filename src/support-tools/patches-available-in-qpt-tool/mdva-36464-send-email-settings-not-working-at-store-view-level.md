---
title: "MDVA-36464: Send email settings not working at store-view level"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,Disable Email Communications,QPT 1.0.21,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,reset password email,send email settings,store,welcome email,Adobe Commerce,on-premises,cloud infrastructure,Magento Open Source
---

The MDVA-36464 patch fixes the issue where send email settings are not working at the store-view level. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-36464. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.0-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<span class="wysiwyg-underline">Prerequisite:</span>

Install clean Adobe Commerce.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1. Create an additional website, store, and store view (In this Example, the second website is *website2*).
1. Disable **Email notification** on the global level in **Store** > **Config** > **Advanced** > **System** > **Mail Sending Settings**.
1. Enable **Email notification** on the *website2* level (**Disable Email Communications** = *No*).
1. In Admin, create a new user, and assign it to the *website2*.
1. In Admin, on the customer edit page, click **Reset Password** for the customer created above in Step 4.

<span class="wysiwyg-underline">Expected results</span>:

Both the **welcome email** and the **reset password email** are sent, as expected, because **Disable Email Communications** = *No* for the second website (Example: *website2*).

<span class="wysiwyg-underline">Actual results</span>:

* The **welcome email** after the creation of the new customer is not triggered.
* The **reset password email** is not triggered.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
