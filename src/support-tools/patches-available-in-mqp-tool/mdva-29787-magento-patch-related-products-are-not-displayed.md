---
title: "MDVA-29787 Magento patch: related products are not displayed"
labels: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,MQP 1.0.6,MQP patches,Magento Commerce,Magento Commerce Cloud,related products,support tools,target rule"
---

The MDVA-29787 patch solves the issue where **Related Products** are not displayed on a Magento store frontend. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.6 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.3.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.0.

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

The target rule for **Related Products** does not work when " *is one of* " condition is used for **Products to Display** in Magento Admin.

>![info]
>
>Note: This patch does not fix existing target rules. You must re-create existing target rules.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create **New Attribute** (Example: Test\_Attr).
    * Set **Catalog Input Type for Store Owner** = *Text.* 
    * In **Storefront Properties** , set **Use for Promo Rule Conditions** = *Yes* .
1. Create **New Attribute Set** (Example: Test\_Set).
1. Add the **New Attribute** to the **New Attribute Set** (Example: Add "Test\_Attr" attribute to the "Test\_Set" attribute set).
1. Create 3 products. For the Example, they are set like this:
    * Product1, Test\_Attr = MAGT2NA\_Test3
    * Product2, Test\_Attr = 24-MB02
    * Product3, Test\_Attr = 701644329389M
1. Create target **Rule** ( **Marketing**   **> Related Product Rules** and click the **Add Rule** button.) with settings:
    * **Apply To** = *Related Products* 
    * **Products to Match** 
    * Set the New Attribute you created **in**   **Step 1 above** to be the Product1's attribute (Example: Test\_Attr = MAGT2NA\_Test3).
    * **Products to Display** = The attributes of the other 2 products (Example: 24-MB02 and 701644329389M attributes).
1. Save the **Rule** .
1. Run a reindex, if needed.
1. Clear cache.
1. Open Product1 on the frontend.

 <span class="wysiwyg-underline">Expected result:</span> 

The related products are present as expected.

 <span class="wysiwyg-underline">Actual result:</span> 

The related products are missing.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.