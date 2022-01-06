---
title: "MDVA-38929: Invoice with FPT shows wrong total"
labels: QPT patches,Quality Patches Tool,Support Tools,MQP,QPT,quality patches,Magento,Adobe Commerce,on-premises,cloud infrastructure,QPT 1.1.2,invoice,grand total,store credit,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-38929 patch solves the issue where the invoice with FPT shows a wrong grand total when the order is paid with store credit. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-38929. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The invoice with FPT shows a wrong grand total when the order is paid with store credit.

<ins>Steps to reproduce</ins>:

1. Create a customer and make sure that the customer has store credit enough to cover the order.
1. Enable FPT and add FPT to a product.
1. From the front end, log in as the customer just created.
1. Add the product with FPT to the cart.
1. Checkout and pay with store credit. It should be a zero pay order.
1. Go to Orders and manually invoice the order.
1. Check the invoice grand total.

<ins>Expected results</ins>:

* The invoice grand total is zero.
* The order total paid amount is zero.

<ins>Actual results</ins>:

* The invoice grand total still shows the FPT amount.
* The total paid still shows the FPT amount.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
