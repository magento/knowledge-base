---
title: "MDVA-29446 Magento Patch: Non-relevant shipping method available for checkout"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,checkout,shipping,support tools
---

The MDVA-29446 patch solves the issue where a shipping method that is not applicable shows up on the checkout shipping method options, and if selected an error message " *Carrier with such method not found null, flat rate* ." displays. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.6 is installed. The issues are scheduled to be fixed in later Magento versions (see issues descriptions in [Issues](https://support.magento.com/hc/en-us/articles/360050056271#issues) ).

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.4.
* The patch is also compatible with the following Magento versions: Magento Commerce and Magento Commerce Cloud 2.3.3-2.4.0.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

<h2 id="issues">Issues</h2>

You have a shipping method that is not applicable but still shows up on the checkout shipping method options, and you can select this non-relevant shipping method.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

 <span class="wysiwyg-underline">Prerequisites:</span>

1. Install clean 2.3-develop.
1. Enable Flat rate and set:

    * Ship to Applicable Countries = *Specific Countries*
    * Ship to Specific Countries = *Antarctica*
    * Show Method if Not Applicable = *Yes*
1. Disable all other shipping methods.

1. Go to the frontend, create a customer with US address.
1. Select an item and click **Add to Cart.**
1. Click on the cart and click **Proceed to Checkout** .

#### <span class="wysiwyg-underline">Actual result:</span>

1. On the **Shipping** page you see the following:

    * Flat rate is visible
    * Flat rate is $0
1. After the user clicks **Next** , the user gets the following error:

 *"Carrier with such method not found: null, flatrate"*

 <span class="wysiwyg-underline">Expected result:</span>

* The price of the shipping method is not visible if the shipping method is not applicable.
* The **Next** button should not be active.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
