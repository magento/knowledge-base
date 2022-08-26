---
title: "ACSD-44591: Errors when order without CAPTCHA confirmation"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.17,order,CAPTCHA,confirmation,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3,2.4.4
---

The ACSD-44591 patch solves the issue where the user gets errors when trying to place an order without CAPTCHA confirmation.
This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.17 is installed. The patch ID is ACSD-44591. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.3 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The user gets errors when trying to place an order without CAPTCHA confirmation.

<ins>Steps to reproduce</ins>:

1. Configure the Google ReCaptcha v2 (I'm not a robot).
1. Enable ReCaptcha for checkout.
1. Try to place an order without clicking on the ReCaptcha.
1. Once you receive the error message for missing ReCaptcha (*ReCaptcha validation failed, please try again*), click on **ReCaptcha** and then try placing an order.

<ins>Expected results</ins>:

Order will not be placed with incorrect ReCaptcha.

<ins>Actual results</ins>:

You get the following errors:

* *ReCaptcha validation failed, please try again*
* *No such cart with id = 1*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
