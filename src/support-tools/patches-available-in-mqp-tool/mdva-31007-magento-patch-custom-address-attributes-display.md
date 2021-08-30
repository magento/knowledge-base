---
title: "MDVA-31007 Magento patch: custom address attributes display"
labels: 2.4.0,2.4.0-p1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool
---

The MDVA-31007 patch solves the issue where custom address attributes are not correctly displayed in the order details page in the My Account area and in the backend (in the **Sales > Orders** location). This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.7 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.4.0.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.4.0 - 2.4.0-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Login to Admin backend.
1. Navigate to **Stores > Attributes > Customer Addresses** .
1. Create 2 attributes:
1. Set input type: *Drop-down* .
1. Set input type: *Text* .

1. Navigate to **Stores > Configurations > Customer > Customer Configurations** .
1. Select *Scope* as **Default Store** view.
1. Expand the **Address Template** section. Update *Text* , *Text One Line* , and *HTML* , to include the two custom attributes above:    ```php    {{depend testdropdown}}Dropdown: {{var testdropdown}}{{/depend}}    {{depend testtext}}Text: {{var testtext}}{{/depend}}    ```    
1. Open Storefront.
1. Create and Log in with a user.
1. Go to **My Account > Address book** , and add a new address (fill in the two custom attributes).
1. Add a product to the cart, and place an order.
1. In the order success page, click on the **Order number** link.
1. On the order details page, observe the **Order Information** section.
1. Go to **Backend > Sales > Orders** , click on the above order, and observe the **Address information** section.

 <span class="wysiwyg-underline">Expected results:</span> 

On both frontend and backend, the billing and shipping address are displayed as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

On both frontend and backend, the billing address is not correctly displayed. The selected option of the dropdown attribute is missing, and the value of the input attribute contains the attribute code.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.