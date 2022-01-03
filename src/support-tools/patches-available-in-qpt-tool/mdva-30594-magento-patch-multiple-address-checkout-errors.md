---
title: "MDVA-30594: multiple address checkout errors"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.2,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,checkout,multiple addresses,order success,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30594 patch solves the issue where the customer does not see the order success page after placing an order with multiple addresses. Checking the orders on the Commerce Admin shows two orders with the same products instead of the correct products. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. The issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.3

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Multiple address orders do not complete with the order success page and show two orders with the same products instead of the correct ones.

<ins>Prerequisites</ins>:

Create two websites with stores and store views.

<ins>Steps to reproduce</ins>:

1. Set **Catalog Price Scope** for website catalog (**Stores** > **Settings** > **Configuration** > **Catalog** > **Catalog** > **Price** > **Scope**).
1. Configure **Fixed Product Taxes (FPT)** (**Stores** > **Configuration** > **Sales** > **Tax** > **Fixed Product Taxes**):

    * **Enable FPT** = *Yes*
    * **Display Prices in Product List** = *Excluding FPT*
    * **Display Prices on Product View Page** = *Excluding FPT*
    * **Display Prices in Sales Modules** = *Excluding FPT* (Including **FPT** description and final price).
    * **Display Prices in Emails** = *Excluding FPT* (Including **FPT** description and final price).
    * **Apply Tax to FPT** = *Yes*
    * **Include FPT in Subtotal** = *No*

1. Create an **FPT attribute**, and assign it to the default attribute set. (See [Configuring FPT: Create an FPT attribute](https://docs.magento.com/user-guide/tax/fixed-product-tax-configuration.html#step-2-create-an-fpt-attribute) in our user guide).

1. Create four simple products, and set the **FPT** **attribute value** (Example: set the **FPT**   **attribute value** = *Australia*).

1. Create two bundled products with the following configuration:

    * Define **FPT**.
    * Set **Dynamic Price** = *No*.
    * Set **Price** = *100*.
    * Bundle options shipped together, all marked as default with **Price Type** = *Fixed*.
    * Add two of the simple products created in Step four.

1. Create a user account in the frontend. Update the address with Australian address (set country to Australia or whichever country was used in the **FPT** setup).

1. Add the two bundled products to the cart.

1. Go to the cart page, and check that the **FPT** is displaying correctly.

1. Click **Checkout with Multiple Addresses**.

1. Add a second address.

1. Assign each product to a different address.

1. Continue with the checkout process up to **Place Order**.

1. Click the **Place Order** button.

<ins>Expected results</ins>:

The order with multiple addresses is placed successfully.

<ins>Actual results</ins>:

A message like, "*An error has occurred.*" will appear.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
