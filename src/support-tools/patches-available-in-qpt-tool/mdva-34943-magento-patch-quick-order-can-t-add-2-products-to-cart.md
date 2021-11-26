---
title: "MDVA-34943: Quick order can't add 2+ products to cart"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.17,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,SKU,cart,products,quick order,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-34943 patch solves the issue where a quick order can't add two or more products to the cart. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed. Please note that the issue was fixed in Adobe Commerce version 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.0-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.4.1-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users are unable to add two or more products to the cart in quick order.

<ins>Prerequisites</ins>:

Adobe Commerce with simple products.

<ins>Steps to reproduce</ins>:

1. Go to **Quick Order** on the Storefront (while not logged in).
1. Enter a valid SKU, click the product that shows up in the autocomplete field, and set **Quantity** = *1*.
1. Enter the same valid SKU, but change the case (change uppercase to lowercase, or change lowercase to uppercase) of the first character, and click the product that shows up in the autocomplete field, and set **Quantity** = *1*.
1. Enter a `random_sting_value` for **SKU**, and set **Quantity** = *1*.
1. Set **SKU** = *123123123*, and set **Quantity** = *1*.
1. Delete everything except the first entry you added to the **Quick Order** page.
1. Enter the 1st SKU (similar to Step 2 above) in the **Enter Multiple SKUs** field, and click **Add to List**.
1. This results in a quantity of 2 for the first SKU and a line for a `random_sting_value`.
1. To test more, refresh the page.
1. This results in no SKUs for quick order, as expected.
1. Enter a `random_sting_value2` into the **Enter Multiple SKUs** field, and click **Add to List**.
1. This results in two valid SKUs from before and a `random_sting_value2`.

<ins>Expected results</ins>:

Two or more products are able to be added to the cart, as expected.

<ins>Actual results</ins>:

When taken to the **Cart** page, the first added product appears normally, but for the second product and any subsequent products added to the cart, a "*1 product requires attention*" error message appears. The second or any additional products will be listed on the **Product Requires Attention** section of the **Cart** page.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
