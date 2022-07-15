---
title: Apply a patch to continue offering DHL as shipping carrier
labels: patch,troubleshooting,Magento,Adobe Commerce,cloud infrastructure,on-premises,DHL,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.4-p1,2.3.7
 
---
This article provides a patch, allowing merchants using Adobe Commerce 2.4.4 and earlier to continue offering DHL shipping, after the DHL schema 6.0 gets deprecated in the end of July - September 2022.

## Affected products and versions

* Adobe Commerce 2.4.4 and earlier, all deployment methods.

## Issue

DHL is introducing a 6.2 schema version and is deprecating version 6.0 by the end of July - September 2022. Adobe Commerce 2.4.4 and earlier DHL integration only supports version 6.0.

## Solution

Adobe Commerce 2.4.5, scheduled for release in August 2022, will contain the upgraded integration with DHL using the version 6.2 schema. Until the new version is released (or in case you choose not to upgrade), we encourage you to apply the AC-3022 patch, implementing the version 6.2 DHL schema support, to continue offering DHL shipments in your store after the deprecation.

## Patch

The patch ID is AC-3022 available in the Quality Patches Tool version 1.1.16.
Refer to the [Quality Patches Tool (QPT) > Usage](https://devdocs.magento.com/quality-patches/usage.html) article in our developer documentation for information on how to use QPT and install patches.

The patch is applicable for the following Adobe Commerce versions:

* 2.4.0 - 2.4.4-p1
* 2.3.7

## Related reading

* [Shipping Carriers > DHL](https://docs.magento.com/user-guide/shipping/dhl.html) in our user guide
* [Delivery Methods](https://docs.magento.com/user-guide/configuration/sales/delivery-methods.html) in our user guide
