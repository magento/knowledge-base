---
title: B2B: Companies cannot access profile pages on store front
labels: Magento Commerce,patch,B2B,troubleshooting,known issues,2.2.2,profile
---

This article provides a patch for the known Magento Commerce 2.2.4 B2B issue related to registered companies getting errors on their Account pages on the storefront.

## Issue

Customers (companies) can successfully create a company account on the site, but get the _"No such entity with customerId = "_ and_ "You don't have a company account yet"_ error messages. They may also get the _"500 Internal Server Error"_ when trying to access the Company Profile page.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-9013\_EE\_2.2.2\_composer.patch](https://support.magento.com/hc/en-us/article_attachments/360025147472/MDVA-9013_EE_2.2.2_composer.patch)

### Compatible Magento versions

The patch was created for:

* Magento Commerce 2.2.2

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce (Cloud) from 2.2.0 to 2.2.4
* Magento Commerce from 2.2.0 to 2.2.1, and from 2.2.3 to 2.2.4

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files