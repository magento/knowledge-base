---
title: "MDVA-42855: New customer address is not saved to address book during checkout "
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.12,shipping,address book,checkout,customer address,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.3,2.4.3-p1
---

The MDVA-42855 patch fixes the issue where the new customer address is not saved to the address book during checkout. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.12 is installed. The patch ID is MDVA-42855. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.3 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The new customer address is not saved to the address book during checkout.

<ins>Steps to reproduce</ins>:

1. Create a customer account and update the default shipping and billing address.
1. Add a product to the cart and navigate to the checkout page.
1. On Shipping, click **+ New Address**.
1. Enter your new address and keep the **Save in Address Book** checkbox ticked.
1. On Payment, tick the **My billing and shipping address are the same** checkbox.
1. Place the order.
1. Check the address book.

<ins>Expected results</ins>:

The new shipping address is saved in the address book.

<ins>Actual results</ins>:

The new shipping address is not saved in the address book.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
