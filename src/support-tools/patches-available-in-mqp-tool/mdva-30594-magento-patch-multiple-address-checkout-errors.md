---
title: "MDVA-30594 Magento patch: multiple address checkout errors"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.2,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,checkout,multiple addresses,order success,support tools
---

The MDVA-30594 patch solves the issue when placing an order with multiple addresses, the customer is not seeing the order success page. Checking the orders on Magento Admin shows two orders with the same products instead of the correct products. This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.7 is installed. The issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.3.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

Multiple address orders do not complete with the order success page and also show two orders with the same products instead of the correct products.

 <span class="wysiwyg-underline">Prerequisite</span> :

Create 2 websites with stores and store views.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Set **Catalog Price Scope** for website catalog ( **Stores > Settings > Configuration > Catalog > Catalog > Price > Scope** ).
1. Configure **Fixed Product Taxes (FPT)** ( **Stores > Configuration > Sales > Tax > Fixed Product Taxes** ):

* **Enable FPT** = *Yes* 
* **Display Prices in Product List** = *Excluding FPT* 
* **Display Prices on Product View Page** = *Excluding FPT* 
* **Display Prices in Sales Modules** = *Excluding FPT* (Including **FPT** description and final price).
* **Display Prices in Emails** = *Excluding FPT* (Including **FPT** description and final price).
* **Apply Tax to FPT** = *Yes* 
* **Include FPT in Subtotal** = *No* 

1. Create an **FPT**   **attribute** , and assign it to the default attribute set ( [Configuring FPT: Create an FPT attribute](https://docs.magento.com/user-guide/tax/fixed-product-tax-configuration.html#step-2-create-an-fpt-attribute) in Magento User Guide).

1. Create 4 simple products, and set the **FPT**   **attribute value** (Example: set the **FPT**   **attribute value** = *Australia* ).

1. Create 2 bundled products with following configuration:

* Define **FPT** .
* Set **Dynamic Price** = *No* .
* Set **Price** = *100* .
* Bundle options shipped together, all marked as default with **Price Type** = *Fixed* .
* Add 2 of the simple products created in Step 4.

1. Create a user account in the front end. Update the address with Australian address (set country to Australia or whichever country was used in the **FPT** setup).

1. Add the 2 bundled products to the cart.

1. Go to cart page, and check that the **FPT** is displaying correctly.

1. Click **Checkout with Multiple Addresses** .

1. Add a second address.

1. Assign each product to a different address.

1. Continue with the checkout process up to **Place Order** .

1. Click the **Place Order** button.

 <span class="wysiwyg-underline">Expected result:</span> 

The order with multiple addresses is placed successfully.

 <span class="wysiwyg-underline">Actual result:</span> 

A message like, " *An error has occurred.* " will appear.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.