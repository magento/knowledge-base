---
title: "MDVA-31363 Magento patch: Cart price rule does not apply (GraphQL)"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.1,GraphQL,QPT 1.0.9,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart price rule,support tools
---

>![warning]
>
>A new patch called MDVA-33975 fixes GraphQL price calculation issues. MDVA-31363 is depreciated and it is recommended that you apply the patch MDVA-33975. To access this patch, refer to [MDVA-33975 Magento patch: GraphQL price calculations](https://support.magento.com/hc/en-us/articles/360055782351) .

The MDVA-31363 Magento patch fixes the issue where the cart price rule with coupon does not apply via GraphQL when the 'Fixed amount discount for whole cart' action is used. This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.9 is installed. The issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.2-2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Recalculating quote totals before giving a response about quote prices causes applied rules to be lost.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Create a simple product.
1. Create a cart price rule with a fixed amount discount for the whole cart.
1. Create a new shopping cart using GraphQL.
1. Save the card\_id from the response and add the product from step 1 to the cart using GraphQL.
1. Activate the cart price rule by adding the coupon code to cart using GraphQL.
1. Check price in response.

 <span class="wysiwyg-underline">Actual result:</span> 

Discount is not applied.

 <span class="wysiwyg-underline">Expected result:</span> Discount is applied.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.