---
title: "MDVA-39986: Unable to place orders in admin in Safari browser on macOS"
labels: QPT patches,Quality Patches Tool,QPT,QPT 1.1.2,Magento Commerce 2.4.3,Adobe Commerce 2.4.3,JS error,on-premises,cloud infrastructure,2.4.2-p1,2.4.2-p2
---

The MDVA-39986 patch fixes the issue where users are unable to place orders in the admin using the Safari browser on macOS. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.2 is installed. The patch ID is MDVA-39986. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.2-p1 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users are not able to place orders in the admin using the Safari browser on macOS.

<ins>Steps to reproduce</ins>:

1. Place an order.
1. Go to the admin using Safari browser on macOS and open the order you created earlier.
1. Click on **Reorder**.
1. Try to update **Product Quantity**.

<ins>Expected results</ins>:

Users should be able to re-order using the Safari browser on macOS.

<ins>Actual results</ins>:

Users get a JS error where the spinning wheel appears and runs endlessly.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
