---
title: "MDVA-32012 Magento patch: S. Korean and Argentina zip codes validation"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,Argentina,Korea,QPT 1.0.9,QPT patches,Magento Commerce,Magento Commerce Cloud,address,support tools,zip/postal code seems to be invalid
---

The MDVA-32012 Magento patch solves the issue where Argentinean and South Korean zip codes are not validating, due to changes or variation in national postal code formats. South Korean zip codes are now required to be 5-digits, whereas previously they were 6-digits. Argentinean zip codes can be both numeric and alphanumeric. The MDVA-32012 Magento patch means that these formats for postal code values will validate for these countries. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.9 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.5.
* The patch is also compatible with the following Magento versions: Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Inputting a 5-digit South Korean or alphanumeric Argentinean zip codes produces a warning:

<pre>Provided Zip/Postal Code seems to be invalid. Example: [1234 (<em>if inputted</em> <em>an</em> <em>alphanumeric Argentinean address</em>)]<em>or</em>[123-456 (<em>if inputted a</em> <em>5-digit South Korean address)</em>]. If you believe it is the right one you can ignore this notice.</pre>

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. Open the storefront.
1. Add item to cart.
1. Process to checkout.
1. Add a new address with South Korea for the country and input a 5-digit zip code or add a new address with Argentina for the country and input an alphanumeric zip code.
1. Try to save.

 <span class="wysiwyg-underline">Actual result</span>

Saving address returns warning.

 <span class="wysiwyg-underline">Expected result</span>

Address should save without warning.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
