---
title: "MDVA-35197: GraphQL add to cart error if added products out of stock"
labels: 2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,QPT 1.0.17,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools
---

The MDVA-35197 Magento patch fixes the issue where there's an error when adding to cart using GraphQL, if previously added products become out of stock. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.6

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.5-2.3.6-p1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Error when trying to add a product to cart via GraphQL, if the other product already in the cart (also added via GraphQL) becomes out of stock.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Using GraphQL, add any product to cart.
1. Log in to Magento Admin panel and set this product as out of stock.
1. Try adding another product to cart via GraphQL.

 <span class="wysiwyg-underline">Actual result:</span> GraphQL error message: *Some of the products are out of stock* . New "in stock" product cannot be added.

 <span class="wysiwyg-underline">Expected result:</span> In stock product can be added to the cart.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.