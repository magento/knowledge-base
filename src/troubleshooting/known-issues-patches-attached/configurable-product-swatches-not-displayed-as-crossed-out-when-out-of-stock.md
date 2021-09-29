---
title: Configurable product swatches not displayed crossed out when out of stock
labels: 2.2.2,Magento Commerce,Magento Commerce Cloud,configurable,known issues,patch,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a patch for the known Adobe Commerce 2.2.2 issue related to the configurable product swatches being out of stock not displayed as crossed out on the storefront.

## Issue

When you have a configurable product, and for a certain combination of options, the related simple product is out of stock, the swatch is still available and can be selected on the storefront.

 <ins>Steps to reproduce</ins>:

1. In the Commerce Admin, create a configurable product with options for two attributes: color (red, black) and size (S, M, L).
1. Set Quantity as "1" for each corresponding simple product.
1. On the storefront, add red, M product to cart and checkout.
1. In the Admin, process the order so that the item quantity is updated to "0".
1. Make sure backorders are not allowed.
1. On the storefront, navigate to the same product page and select the same options: red, M.

 <ins>Expected results</ins>:

The red, M swatch has a red slash and cannot be selected.

 <ins>Actual results</ins>:

 The red, M swatch can be selected.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [Download MDVA-8215\_EE\_2.2.2\_v1.composer.patch](assets/MDVA-8215_EE_2.2.2_v1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce (all deployment methods) 2.2.2

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.2.0-2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files
