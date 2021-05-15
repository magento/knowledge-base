---
title: MDVA-32694 Magento patch: issue adding product to a quote
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.1,MQP 1.0.14,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,add product,quote
---

The MDVA-32694 Magento patch solves the issue of being unable to add a valid product in Admin to a negotiable quote created on the non-default website.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2 with B2B version 1.2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.3.5-p2, 2.4.0, 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisite</span> :

Install a fresh Magento instance with B2B.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Go to **STORES > Configuration > GENERAL > B2B Features** and enable **Company** and **B2B quote** .
1. Create 2 more websites with **stores** and **storeviews** (In total you should have 3 websites: *base* , *website2* , *website3* ).
1. Create a simple product and assign it only to *website3* .
1. Go to **STORES > All Stores** and set *website3* as **default** .
1. Go to the frontend and create a new company on *website3* .
1. Add the earlier created product to the cart and create a new negotiable quote.
1. Go to **STORES > All Stores** and set the " *base* " website back as **default** .
1. Go to **SALES > Quotes > Open created earlier quote** and try to add the same product to it.

 <span class="wysiwyg-underline">Expected results</span> :

The Admin user can add the same product to the quote, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The Admin user cannot add the same product to the quote, and this error message appears:

```php
This product is assigned to another website.
```

 
## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.