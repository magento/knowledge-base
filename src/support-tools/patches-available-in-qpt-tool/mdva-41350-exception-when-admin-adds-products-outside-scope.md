---
title: "MDVA-41350: Exception when admin adds products outside their access"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.11,admin user,order,error,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-41350 patch fixes the issue where an exception error is thrown instead of a limited access notification when an admin user adds a product in the order by SKU which is outside their access. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.11 is installed. The patch ID is MDVA-41350. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.5-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When an admin user with restricted access adds a product by SKU outside their access in the order, an exception occurs instead of a message notifying the user of their limited access.

<ins>Steps to reproduce</ins>:

1. Log into the admin as a user with access to only a specific website.
1. Go to **Sales** > **Orders** and click **Create New Order**.
1. Select a customer and a store view.
1. Click on **Add Products by SKU**.
1. Search for an SKU that is not assigned to any website or not assigned to the website for which you have access.
1. Click **Add to Order**.

<ins>Expected results</ins>:

An appropriate error message is displayed.

<ins>Actual results</ins>:

An exception occurs.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
