---
title: Removing staging update deletes related entity
labels: 2.2.3,Magento Commerce,known issues,patch,staging update,troubleshooting,Adobe Commerce
---

This article provides a patch for the known Adobe Commerce 2.2.3 issue related to the entity (category, CMS page, etc.) itself being removed when the related schedule update is deleted.

>![info]
>
>The issue was fixed in Adobe Commerce 2.2.6.

## Issue

When you delete an active schedule update between it's starting and ending dates, the related entity (category, subcategory, CMS page) is also deleted.

 <ins>Steps to reproduce (with categories)</ins>:

1. Log in to the Commerce Admin.
1. Create a new subcategory under **Catalog** > **Categories**.
1. Create a new Staging Update with the start and end time.
1. Wait until the update is applied; that is the start time comes.
1. Delete the update using the **View/Edit** link.

 <ins>Expected results</ins>:

 The update is deleted, and the subcategory still exists in the Admin.

 <ins>Actual results</ins>:

 The update and the subcategory are deleted.

## Solution

Please apply the patch provided in this article, and clean the cache running

```bash
bin/magento
  cache:clean
```

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the file name or click the corresponding link:

* [Download MDVA-11059\_EE\_2.2.3\_COMPOSER\_v1.patch](assets/MDVA-11059_EE_2.2.3_COMPOSER_v1.patch.zip)
* [Download MDVA-23505\_EE\_2.2.4\_COMPOSER\_v1.patch](assets/MDVA-23505_EE_2.2.4_COMPOSER_v1.patch.zip)
* [Download MDVA-12158\_EE\_2.2.5\_COMPOSER\_v2.patch](assets/MDVA-12158_EE_2.2.5_COMPOSER_v2.patch.zip)

### Compatible Adobe Commerce versions:

The patches were created for:

* MDVA-11059\_EE\_2.2.3\_COMPOSER\_v1.patch was created for Adobe Commerce (all deployment methods) 2.2.3
* MDVA-23505\_EE\_2.2.4\_COMPOSER\_v1.patch was created for Adobe Commerce (all deployment methods) 2.2.4
* MDVA-12158\_EE\_2.2.5\_COMPOSER\_v2.patch was created for Adobe Commerce (all deployment methods) 2.2.5

The MDVA-11059\_EE\_2.2.3\_COMPOSER\_v1.patch patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on-premises 2.2.0-2.2.2
* Adobe Commerce on cloud infrastructure 2.2.0-2.2.3

The MDVA-23505\_EE\_2.2.4\_COMPOSER\_v1.patch patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on-premises 2.1.0-2.1.18, 2.2.0-2.2.3
* Adobe Commerce on cloud infrastructure 2.1.0-2.1.18, 2.2.0-2.2.3

The MDVA-23505\_EE\_2.2.5\_COMPOSER\_v1.patch patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure 2.2.5

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files
