---
title: Orders not displayed in the Orders grid in the Admin
labels: 2.2.1,known issue,orders,patch
---

This article provides a patch for the known Magento Commerce 2.2.1 issue related to the orders not being displayed in the Orders grid in Magento Admin.

## Issue

In the Magento Commerce 2.2.1 with B2B extension installed, orders created on the storefront by a registered customer, are not displayed in the list of orders in the customer's account in the Admin. In the debug log (`` ./var/log/debug.log ``) the following error is logged:

<div>
<div>
<pre class="code-java">report.CRITICAL: You cannot define a correlation name ‘company_order’ more than once</pre>
</div>
</div>

Steps to reproduce:

Prerequisites: Your store catalog contains products, not Magento sample data, and the B2B extension is installed.

1. Navigate to the store front and create a customer account. 
1. Add a product to the shopping cart, complete checkout and submit an order.
1. Log in to the Admin.
1. Navigate to Customers, then choose All Customers.
1. For the newly created customer click Edit.
1. Click Orders in the panel on the left.

Expected result:  
 The recently submitter order is listed in the grid.

Actual result:

The Orders grid does not display. A blank page displays instead.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-7868\_EE\_2.2.1\_v1\_composer.patch](assets/MDVA-7868_EE_2.2.1_v1_composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce 2.2.1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce (Cloud) from 2.2.0 to 2.2.3
* Magento Commerce 2.2.0, and from 2.2.2 to 2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files