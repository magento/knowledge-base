---
title: 'MDVA-36021: Users get "Call to a member function getId()" error'
labels: MQP patches,Magento Quality Patches,MQP,Support Tools,MQP 1.1.1,Magento Commerce,Magento Commerce Cloud,Adobe Commerce,on-premise,cloud architecture,Magento,
---

The MDVA-36021 patch for Adobe Commerce solves the issue where users get the error message: *Call to a member function getId()* when trying to open orders. This patch is available when the [quality patches for Adobe Commerce tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.1 is installed. The patch ID is The MDVA-36021. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on our cloud infrastructure 2.4.1, 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.0 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Adobe Commerce version, run `./vendor/bin/magento-patches status`.

## Issue

When users try to open orders, the following error message is displayed on the order details page in the Admin: *report.CRITICAL: Error: Call to a member function getId() on array in /magento2ce/app/code/Magento/Sales/view/adminhtml/templates/order/totals/tax.phtml:62*.

<ins>Prerequisites</ins>:

The system should have tax settings and orders with specific tax rates.

<ins>Steps to reproduce</ins>:

1. Log in to Commerce Admin.
1. Go to **Sales** > **Orders** > **Open Order**

<ins>Expected results</ins>:

Order is opened without any error.

<ins>Actual results</ins>:

You get an error message similar to the following: *report.CRITICAL: Error: Call to a member function getId() on array in /magento2ce/app/code/Magento/Sales/view/adminhtml/templates/order/totals/tax.phtml:62*.

## Apply the patch

To apply individual patches use the following links depending on your deployment type:

* Adobe Commerce on-premise: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce for cloud: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about quality patches for Adobe Commerce, refer to:

* [Quality patches for Adobe Commerce released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using quality patches for Adobe Commerce](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
