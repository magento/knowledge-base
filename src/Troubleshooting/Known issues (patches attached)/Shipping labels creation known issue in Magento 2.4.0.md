---
title: Shipping labels creation known issue in Magento 2.4.0
link: https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0
labels: Magento Commerce Cloud,Magento Commerce,patch,known issues,2.4.0,shipping label
---

This article provides a patch for a known Magento 2.4.0 issue, where a shipping label cannot be created.

## Affected products and versions

* Magento Commerce 2.4.0

* Magento Commerce Cloud 2.4.0

## Issue

Prerequisites: create an order using FedEx, DHL, UPS, or USPS shipping method.

### Scenario 1: Create a label when adding a shipment

Steps to reproduce:

1. Open the placed order in Magento Admin, under **Sales** > **Orders**.

1. Click the **Ship** button. The **New Shipment** page opens.

Expected result:

The **Create Shipping Label** checkbox is displayed in the bottom of the page.

Actual result:

The **Create Shipping Label** checkbox is not displayed.

### Scenario 2: Create a label for existing shipment

Steps to reproduce:

1. Open the placed order in Magento Admin, under **Sales** > **Orders**.

1. Click the **Ship** button. The **New Shipment** page opens.

1. Click the Submit Shipment button. A shipment is created.

1. Open the newly created shipment.

10. Click the **Create Shipping Label** button. The C**reate Packages** dialog opens.

Expected result:

The **Add Products to Package** button on the **Create Packages** modal window displays fields with order items.

Actual result:

The **Create Packages** modal window is not displayed properly, it is not possible to add order items to the shipment.

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[MC-35514-2.4.0-CE-composer-2.patch](https://support.magento.com/hc/en-us/article_attachments/360063419631/MC-35514-2.4.0-CE-composer-2.patch)

The patch is also available for download in both, .git and .composer, formats on [Magento Commerce Downloads](https://magento.com/tech-resources/download) page, under **Patches** in the left column navigation. Search for MC-35514 patch.

### Compatible Magento versions:

The patch was created for:

* Magento Commerce Cloud version 2.4.0

* Magento Commerce version 2.4.0

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files

