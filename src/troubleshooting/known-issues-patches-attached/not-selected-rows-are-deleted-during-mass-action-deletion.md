---
title: More products were deleted than initiated during mass deletion in Admin
labels: 2.2.3,Magento Commerce Cloud,deleted customers,deleted products,known issues,mass update,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the known Adobe Сommerce on cloud infrastructure 2.2.3 issue related to having not selected records being deleted when a bulk deletion is performed in a grid in the Commerce Admin.

## Issue

In the Admin, if you select customer or client records to be deleted, filter the grid, and then select the **Delete** action, all records are deleted.

<ins>Steps to reproduce</ins>:

1. Navigate to **Catalog** > **Products** in the Admin.
1. Select a product or multiple products.
1. Select Delete from the Actions drop-down menu.

<ins>Expected results</ins>:

Only selected products are deleted.

<ins>Actual results</ins>:

Some other products are deleted as well.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [Download MDVA-10600\_EE\_2.2.3\_v1.composer.patch](assets/MDVA-10600_EE_2.2.3_v1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure 2.2.3

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on-premises 2.1.8-2.1.14, 2.2.0-2.2.2, and 2.2.4-2.2.5
* Adobe Commerce on cloud infrastructure 2.2.4-2.2.5

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

