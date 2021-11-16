---
title: "MDVA-37874: Fixed discount not applied to entire cart"
labels: 2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,2.4.2-p1,2.3.6,2.3.6-p1,2.3.7,QPT 1.0.24,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,fixed discount amount,bundle product,order,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce
---

The MDVA-37874 patch fixes the issue when the **fixed discount amount** for the whole cart is incorrectly applied to a bundle product containing more than one option. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.24 is installed. The patch ID is MDVA-37874. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

* The patch was designed for Adobe Commerce on cloud infrastructure 2.4.2
* The patch is also compatible with Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.6-2.3.7 and 2.4.1-2.4.2-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue


<ins>Steps to reproduce</ins>:

1. Create a cart rule with a **fixed discount amount** for the whole cart.
1. Add a bundle product to the cart (The bundle product should contain several selected options.).
1. Go to the cart page, and check the discount.


<ins>Expected results</ins>:

The fixed discount amount is applied to the entire cart, as expected.

<ins>Actual results</ins>:

The fixed discount amount is applied to only part of the cart.


## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
