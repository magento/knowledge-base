---
title: "MDVA-30963 Magento patch: admin product search filter not working as expected"
labels: "2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,MQP 1.0.8,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,disabled,enabled,product search filter"
---

The MDVA-30963 patch solves the issue where in Magento admin, the product search filter does not work as expected. Values that are overridden in a store view scope are also considered when filtering on **All store view** store view scope. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.8 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.4.0.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.2 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Set **Stores > Configuration > Catalog > Catalog  > Price > Catalog Price Scope** = *Website* .
1. Create 2 websites having 2 different currencies (For example, the default website is an India Store \[Rupee ₹\] and the second one is an US Store \[Dollar $\]).
1. Set the following **Base Currency** , **Default Display Currency** , and **Allowed Currencies** :
    * **Default Config** = *US Dollar (Default)* 
    * **Main Website** = *Indian Rupee* 
    * **WebsiteUS** = **Use Default** = *US Dollar* 
1. Set **Stores > Currency Rates** = *1:1* .
1. Create a test simple product assigned to both Websites and has following prices:
    * **Default Price** = **US Website price** = *123 USD* 
    * **Main Website price** = *321 Rupee* 
1. Create a subAdmin user that has access only to the US Store.
1. Go to the US storefront, and put a product in the cart (Example: *123 USD price* ).
1. Login to the Admin with subAdmin just created (Example: *US Only admin* ).
1. Go to **Reports > Products in cart** .

 <span class="wysiwyg-underline">Expected results:</span> 

When filtering within the **All store view** store view scope, products filtering should get the value set in that particular scope.

 <span class="wysiwyg-underline">Actual results:</span> 

Values overridden in a store view scope are also considered when filtering on "All store view" store view scope.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.