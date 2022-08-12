---
title: "MDVA-39305: Login issue with enabled Google reCAPTCHA"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.1,Magento Commerce Cloud,Adobe Commerce,on-premises,cloud infrastructure,QPT,Quality Patches Tool,QPT 1.1.18,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3
---

The MDVA-39305 patch fixes the issue where registered customers are not able to log in with enabled Google reCAPTCHA. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.1 is installed. The patch ID is MDVA-39305. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.4.2-p1, 2.4.3-p3

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.0 - 2.4.2-p1, 2.4.3 - 2.4.3-p3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Registered customers are not able to log in using the enabled Google reCAPTCHA.

<ins>Steps to reproduce</ins>:

1. Go to **Store** > **Configuration** > **Security** > **Google reCAPTCHA Storefront** and enable **Google reCAPTCHA**.
1. Go to **Frontend**.
1. Open **Developer Tool Console** in the browser.

<ins>Expected results</ins>:

No CSP warnings in the console.

<ins>Actual results</ins>:

CSP warnings in the console.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
