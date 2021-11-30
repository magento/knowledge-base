---
title: "MCP-87 Adobe Commerce patch: storefront broken"
labels: 2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.13,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,catalog,index,performance,products,reindex,slow response,store,support tools,Adobe Commerce,on-premises,cloud infrastructure
---

The MCP-87 Adobe Commerce patch fixed the issue where stock reindexing of catalogs is slow. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed.

## Affected products and versions

 **The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.4.0.

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.1 - 2.4.1.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The stock reindex of catalogs with large profiles is very slow.

<ins>Steps to reproduce:</ins>

1. Log in to the Admin Panel.
1. Navigate to: **Products** > **Catalog**.
1. Select all items in the Products grid.
1. Select **Update Attributes** in the Select Product Actions dropdown list. Click **Submit**.
1. Click on **Advanced Inventory** from the Advanced Settings tab. Change **Stock Availability** to *In Stock*. Click **Save**.
1. Perform full reindex manually, execute the following command from the root: `bin/magento indexer:reindex`

 <ins>Expected result:</ins>

Stock indexer reindexes quickly.

 <ins>Actual result:</ins>

Stock indexer is very slow and/or does not complete.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
