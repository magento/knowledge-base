---
title: "MDVA-32634 patch: move category in hierarchy url_path wrong"
labels: QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,URL,catalog,category,data discrepancies,support tools,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1
---

The MDVA-32634 patch solves the issue where the url\_path of the catalog category does not change after moving the category in the hierarchy. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.4-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.1 - 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Moving a catalog category in the hierarchy results in an incorrect url\_path. The url\_path of the category assigned to the default store scope \[ **id:0** \] remains unchanged after moving the category in the hierarchy.

<ins>Steps to reproduce</ins>:

1. Log in to the Commerce Admin. Create the following category structure under the root category: move-cat sub-move-cat sub-move-cat2 new-cat-move
1. Verify category \[ url\_path \] attribute \[ id: 120 \] for value assignment in \[ catalog\_category\_entity\_varchar \] table using the following query:
    ```sql    
    SELECT * FROM catalog_category_entity_varchar WHERE attribute_id = 120 ORDER BY value_id DESC LIMIT 4;    
    ```    

    It should give you the following result:    
    ```sql    
    MariaDB [m24dev]> SELECT * FROM catalog_category_entity_varchar WHERE attribute_id = 120 ORDER BY value_id DESC LIMIT 4;    
    ```

    \[ url\_path \] values were generated and assigned to All Store scope \[ 0 \]. This is correct comparing to an instance without B2B.
1. Go to backend category list, drag \[ move-cat \], and drop it in to \[ new-cat-move \]. Now the category should look like: new-cat-move move-cat sub-move-cat sub-move-cat2
1. Check the \[ catalog\_category\_entity\_varchar \] table using the following query:    
    ```sql    
    SELECT * FROM catalog_category_entity_varchar WHERE attribute_id = 120 ORDER BY value_id DESC LIMIT 16;    
    ```    

<ins>Expected results</ins>:

The url\_path assigned to all store scope \[ 0 \] should also update with the new path.

<ins>Actual results</ins>:

The url\_path assigned to all store scope \[ 0 \] remains unchanged, even though there is no such path available after the move. Also, it has new url\_path values created for each store.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
