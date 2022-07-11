---
title: "MDVA-43167: Admin order grid mass action doesn't apply for multi-page"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.16,admin user,Sales Order Grid,order,multi-page,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.4
---

The MDVA-43167 patch fixes the issue where the admin order grid mass action doesn't apply for multi-page when the admin user selects all orders. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.16 is installed. The patch ID is MDVA-43167. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin order grid mass action doesn't apply for multi-page when the admin user selects all orders.

<ins>Steps to reproduce</ins>:

1. Purchase any product three times to create three orders.
1. Navigate to **Sales Order Grid**.
1. Change the pagination to a custom value of 2.
1. Select all.
1. Select **Hold Mass Action**.

<ins>Expected results</ins>:

All three orders are placed on hold.

<ins>Actual results</ins>:

Only the two visible orders are placed on hold.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
