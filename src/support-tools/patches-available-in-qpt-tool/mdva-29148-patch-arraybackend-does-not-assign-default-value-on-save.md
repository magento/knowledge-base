---
title: 'MDVA-29148: ArrayBackend does not assign default value on save'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,attribute,products,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-29148 patch solves the issue where `\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend` does not assign the default value on save. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.3-p1.

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) >=2.3.0 <2.4.2.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a product is created via an import script or the REST API, attributes that use the `\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend` backend model and have a default value are not assigned the default value.

<ins>Steps to reproduce</ins>:

1. Create a new global attribute that uses the `\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend` backend model and a non-empty default value.
1. Use the REST API to create a new product.
1. Fetch that new product from the REST API and confirm that the attribute is not present in the product's custom attributes.

<ins>Expected results</ins>:

The custom attribute default value was saved to the product attribute.

<ins>Actual results</ins>:

The custom attribute default value was not saved to the product attribute.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
