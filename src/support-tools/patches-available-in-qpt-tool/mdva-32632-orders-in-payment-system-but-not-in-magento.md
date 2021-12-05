---
title: "MDVA-32632: Orders in payment system but not in Adobe Commerce"
labels: 1.0.12,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,QPT 1.0.12,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,orders,payments,support tools,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

The MDVA-32632 solves the issue where orders are in a payment system but not in Adobe Commerce. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that the issue was fixed in Adobe Commerce 2.3.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.2-p2

**The patch is also compatible with Adobe Commerce version:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.2 - 2.3.4-p2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Payment is processed in a payment system, but the order is not created in Adobe Commerce.

<ins>Steps to reproduce</ins>:

1. Place order using an online payment method.
1. Check the order in the Commerce Admin.

<ins>Expected results</ins>:

Completed orders now appear in the payment system and Adobe Commerce.

<ins>Actual results</ins>:

The orders was processed successfully by the payment system but not in Adobe Commerce.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
