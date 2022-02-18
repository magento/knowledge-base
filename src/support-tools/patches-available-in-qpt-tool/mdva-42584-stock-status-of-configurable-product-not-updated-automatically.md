---
title: "MDVA-42584: Stock status of configurable product not updated automatically"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.10,stock status,configurable product,simple product,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-42584 patch solves the issue where the stock status of the configurable product is not updated automatically when its simple product is updated. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.10 is installed. The patch ID is MDVA-42584. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Stock status of the configurable product in the backend is not updated automatically when its simple product is set to **In Stock** through API or import.

<ins>Prerequisites</ins>:

MSI installed.

<ins>Steps to reproduce</ins>:

1. Create a configurable product, **InvCheck001**, with two options: **InvCheck001-M** and **InvCheck001-L**.
1. Both the simple products should have Quantity and they should be **In Stock** so that the configurable product is also **In Stock** in the backend.
1. Now, update both simple products and set Quantity to **0** and Stock Status to **Out of Stock**.
1. Refresh the configurable product and verify the stock status is updated to **Out of Stock**.
1. Use the following API endpoint and set the simple product **InvCheck001-M** to **In Stock** with Quantity > 0.
    ```JSON
    /rest/V1/inventory/source-items

    {
      "sourceItems":
      [
        {
          "sku": "InvCheck001-M",
          "source_code": "default",
          "quantity": 10,
          "status": 1
        }
      ]
    }
    ```
1. Go to the backend and verify the quantity and stock status of the simple product **InvCheck001-M**. It is updated to **In stock**.
1. Refresh the configurable product and check the stock status.

<ins>Expected results</ins>:

The stock status of the configurable product **InvCheck001** in the backend is updated automatically to **In Stock**.

<ins>Actual results</ins>:

The stock status of the configurable product is still **Out of Stock**.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
