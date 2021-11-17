---
title: "B2B: Companies cannot access profile pages on store front"
labels: 2.2.2,B2B,Magento Commerce,known issues,patch,profile,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a patch for the known Adobe Commerce 2.2.4 B2B issue related to registered companies getting errors on their Account pages on the storefront.

## Issue

Customers (companies) can successfully create a company account on the site, but get the *"No such entity with customerId = "* and *"You don't have a company account yet"* error messages. They may also get the *"500 Internal Server Error"* when trying to access the Company Profile page.

## Patch

To download the archive with a patch, click the following link:

 [Download MDVA-9013\_EE\_2.2.2\_composer.patch](assets/MDVA-9013_EE_2.2.2_composer.patch.zip)

### Compatible Adobe Commerce versions

The patch was created for:

* Adobe Commerce on-premises 2.2.2

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure from 2.2.0 to 2.2.4
* Adobe Commerce on-premises from 2.2.0 to 2.2.1, and from 2.2.3 to 2.2.4

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.
