---
title: "MDVA-36832: Images duplicate on pages with 768px view width"
labels: 2.4.2,QPT 1.0.24,Magento Commerce Cloud,Quality Patches Tool,support tools,Magento Commerce,QPT patches,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0, 2.3.6,2.4.0-p1,2.4.1,2.3.6-p1,2.4.1-p1,2.4.2,2.3.7,2.4.2-p1,2.3.7-p1,2.4.3,2.4.3-p1,2.3.7-p2,2.3.7-p3,product image, duplicate,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-36832 patch fixes the issue where images duplicate on pages with view width of 768px. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.24 is installed. The patch ID is MDVA-36832. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4 - 2.4.3-p1
  >![info]
  >
   >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

  Images duplicate on pages with view width of 768px.

<ins>Steps to reproduce:</ins>

1. Go to backend > CONTENT > Pages and edit any page.
1. Add any image to page.
1. Go to frontend and open edited page.
1. Open developer tools in Chrome.
1. Enable "device view" and select iPad view or set page width to 768px.

<ins>Actual result:</ins>

The image gets duplicated.

<ins>Expected result:</ins>

Only one added image should be visible on the page.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
