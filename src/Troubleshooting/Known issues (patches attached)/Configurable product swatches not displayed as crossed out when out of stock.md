---
title: Configurable product swatches not displayed as crossed out when out of stock 
link: https://support.magento.com/hc/en-us/articles/360026168492-Configurable-product-swatches-not-displayed-as-crossed-out-when-out-of-stock-
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,configurable,known issues,2.2.2
---

This article provides a patch for the known Magento Commerce 2.2.2 issue related to the configurable product swatches being out of stock not displayed as crossed out on the storefront.

## Issue

When you have a configurable product and for certain combination of options the related simple product is out of stock, the swatch is still available and can be selected on the storefront.

Steps to reproduce:

1. In the Magento Admin, create a configurable product with options for two attributes: color(red, black) and size (S,M,L).

1. Set Quantity as "1" for each corresponding simple product.

1. On the storefront, add red,M product to cart and checkout.

1. In the Admin, process the order so that the item quantity is updated to "0".

10. Make sure backorders are not allowed.

12. On the storefront, navigate to the same product page and select the same options: red, M.

Expected result:

The red, M swatch has a red slash and cannot be selected.

Actual result:  
The red, M swatch can be selected.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-8215\_EE\_2.2.2\_v1.composer.patch](https://support.magento.com/hc/article_attachments/360025640692/MDVA-8215_EE_2.2.2_v1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce 2.2.2

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce, Magento Commerce Cloud

* 2.2.0-2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files

