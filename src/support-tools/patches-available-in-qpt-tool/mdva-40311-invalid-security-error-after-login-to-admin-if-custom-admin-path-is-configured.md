---
title: 'MDVA-40311: "Invalid security or form key" error after login into Admin if custom admin path is configured'
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.7,Magento,MQP,Patches for Adobe Commerce,cloud infrastructure,on-premises,Adobe Commerce,invalid security,admin path,secret key,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-40311 patch fixes the issue where the Admin user gets an error message: *Invalid security or form key. Please refresh the page*, after login into the Admin if the custom admin path is configured and the secret key is enabled. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.7 is installed. The patch ID is MDVA-40311. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2-p2 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin user gets an error message: *Invalid security or form key. Please refresh the page*, after login into the Admin if the custom admin path is configured and the secret key is enabled.

<ins>Steps to reproduce</ins>:

* Log in as the Admin user using a valid username and password.

<ins>Expected results</ins>:

User is able to log in without any error message.

<ins>Actual results</ins>:

*Invalid security or form key. Please refresh the page* error message is displayed.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
