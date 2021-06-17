---
title: "MDVA-36464: Send email settings not working at store-view level"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,Disable Email Communications,MQP 1.0.21,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,reset password email,send email settings,store,welcome email
---

The MDVA-36464 Magento patch fixes the issue where send email settings are not working at the store-view level.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-36464. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0-p1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.0-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisite:</span> 

Install clean Magento.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Create an additional website, store, and store view (In this Example, the 2nd website is *website2* .).
1. Disable **Email notification** on the global level in **Store > Config > Advanced > System > Mail Sending Settings** .
1. Enable **Email notification** on the *website2* level ( **Disable Email Communications** = *No* ).
1. In Admin, create a new user, and assign it to the *website2* .
1. In Admin, on the customer edit page, click **Reset Password** for the customer created above in Step 4.

 <span class="wysiwyg-underline">Expected results</span> :

Both the **welcome email** and the **reset password email** are sent, as expected, because **Disable Email Communications** = *No* for the 2nd website (Example: *website2* ).

 <span class="wysiwyg-underline">Actual results</span> :

* The **welcome email** after the creation of the new customer is not triggered.
* The **reset password email** is not triggered.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.