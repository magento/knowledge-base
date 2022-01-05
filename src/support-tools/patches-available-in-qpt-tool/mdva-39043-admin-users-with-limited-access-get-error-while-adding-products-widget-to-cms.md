---
title: "MDVA-39043: Admin users get error adding widget to CMS page"
labels: QPT patches,Quality Patches Tool,QPT 1.1.2,Magento Commerce 2.4.4,Adobe Commerce 2.4.4,error message,on-premises,cloud infrastructure,Products widget,CMS,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-39043 patch fixes the issue where admin users with limited access get an error while adding the "Products" widget to the CMS page. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.2 is installed. The patch ID is MDVA-39043. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.4 – 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin users with limited access get an error while adding the “Products” widget to the CMS page.

<ins>Steps to reproduce</ins>:

1. Log in to the backend using the admin with access only to edit content.
1. Go to **Content** > **Pages**.
1. Open any page to edit.
1. Edit the content with **Page Builder**.
1. Add **Product** widget from **Add content** section.
1. Click **Configure** on the **Product** widget.

<ins>Expected results</ins>:

No error is shown.

<ins>Actual results</ins>:

The following error message is received:

`*A technical problem with the server created an error. Try again to continue what you were doing. If the problem persists, try again later.*`

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
