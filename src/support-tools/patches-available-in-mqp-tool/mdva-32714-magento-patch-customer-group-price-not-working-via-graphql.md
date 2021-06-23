---
title: "MDVA-32714 Magento patch: customer group price not working via GraphQL"
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,GraphQL,MQP 1.0.13,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,price,support tools
---

>![warning]
>
>A new patch called MDVA-33975 fixes GraphQL price calculation issues. MDVA-32714 is depreciated and it is recommended that you apply the patch MDVA-33975. To access this patch, refer to [MDVA-33975 Magento patch: GraphQL price calculations](https://support.magento.com/hc/en-us/articles/360055782351) .

The MDVA-32714 Magento patch fixes the issue where сustomer group price is not added in GraphQL product query response. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.13 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.4 - 2.4.0-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Customer group price for the general customer is not added in GraphQL product query response.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Enable and set Special Price for any product for any customer group.
1. Use product query in GraphQL to pull prices for this product, as described in: [Products query > Sample query](https://devdocs.magento.com/guides/v2.4/graphql/queries/products.html#sample-queries) in Magento Developer Documentation.

 <span class="wysiwyg-underline">Expected result:</span> 

```api
price_range
```

displays the discounted price for general customers according to what has been defined in the Admin Panel.

 <span class="wysiwyg-underline">Actual result:</span> 

```api
price_range
```

does not display the discounted price for general customers.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.