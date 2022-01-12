---
title: "MDVA-29787: related products are not displayed"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,related products,support tools,target rule,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-29787 patch solves the issue where **Related Products** are not displayed on an Adobe Commerce store frontend. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.6 is installed. The patch ID is MDVA-29787.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.3.

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.0.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The target rule for **Related Products** does not work when "*is one of*" condition is used for **Products to Display** in the Commerce Admin.

>![info]
>
>Note: This patch does not fix existing target rules. You must re-create existing target rules.

<ins>Steps to reproduce</ins>:

1. Create **New Attribute** (Example: Test\_Attr).
    * Set **Catalog Input Type for Store Owner** = *Text.*
    * In **Storefront Properties**, set **Use for Promo Rule Conditions** = *Yes*.
1. Create **New Attribute Set** (Example: Test\_Set).
1. Add the **New Attribute** to the **New Attribute Set** (Example: Add "Test\_Attr" attribute to the "Test\_Set" attribute set).
1. Create three products. For the Example, they are set like this:
    * Product1, Test\_Attr = MAGT2NA\_Test3
    * Product2, Test\_Attr = 24-MB02
    * Product3, Test\_Attr = 701644329389M
1. Create target **Rule** (**Marketing**   > **Related Product Rules** and click the **Add Rule** button.) with settings:
    * **Apply To** = *Related Products*
    * **Products to Match**
    * Set the New Attribute you created **in** **Step 1 above** to be the Product1's attribute (Example: Test\_Attr = MAGT2NA\_Test3).
    * **Products to Display** = The attributes of the other two products (Example: 24-MB02 and 701644329389M attributes).
1. Save the **Rule**.
1. Run a reindex, if needed.
1. Clear cache.
1. Open Product1 on the frontend.

<ins>Expected results</ins>:

The related products are present.

<ins>Actual results</ins>:

The related products are missing.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
