---
title: "MDVA-36286: Page Builder preview breaks if SKU positions in different categories"
labels: 2.3.6,2.3.6-p1,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2-p1,2.4.2,2.3.7,QPT 1.0.23,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,products,Page Builder,SKU,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-36286 patch solves the issue where the Page Builder products widget preview breaks if the same SKU has a different position in subcategories. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.23 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.6

**Compatible with Adobe Commerce versions:**

 Adobe Commerce (all deployment methods) 2.3.6 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce:</ins>

1. Create a category with a few products.
        ![products_magento_ordered.png](assets/products_magento_ordered.png)  
1. Create a subcategory with the same products but with different positions.
        ![products_magento_different_position.png](assets/products_magento_different_position.png)
1. Edit a CMS page content to add a Product widget via Page Builder. (Select the parent category above).
        ![cms_page_magento.png](assets/cms_page_magento.png)
1. Save and wait for the content preview.

<ins>Expected results:</ins>

Content preview displays the product widget.

<ins>Actual results:</ins>

Error displays:

*We're sorry, an error has occurred while generating this content.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
