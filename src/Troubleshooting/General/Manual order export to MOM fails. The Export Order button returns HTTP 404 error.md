---
title: Manual order export to MOM fails. The Export Order button returns HTTP 404 error
link: https://support.magento.com/hc/en-us/articles/360041354911-Manual-order-export-to-MOM-fails-The-Export-Order-button-returns-HTTP-404-error
labels: Magento Commerce,MOM,404 error,connector,export order,2.3.x,2.2.x,button,how to
---

This article discusses how to fix an issue, where trying to export an order to Magento Order Management (MOM) by clicking the **Export Order** button on the order view in the Magento Admin returns a "*404 Page Not Found*" error.

### Affected products and versions

* Magento Commerce 2.2.x, 2.3.x

* MOM Connector 2.3.0, 2.4.0, 3.2.0, 3.3.0

## Issue

Steps to reproduce:  
 1. In the Magento Commerce Admin click **Sales** > **Orders**.  
 2. Click the **Create New Order** button.  
 3. Select a user, add an item(s), select payment and shipping methods, and then click the **Submit Order** button.  
 4. Click the **Export Order** button and then **OK**.

Expected result:

The order is sent to MOM.

Actual result:

A  "*404 Error: Page Not Found*" page is displayed.

## Solution

* Upgrade the MOM Connector to 3.4.0 for Magento Commerce 2.3.x or MOM Connector 2.5 for Magento Commerce 2.2.x.

* If upgrading the MOM Connector is not an option, you can export the order to Magento Order Management using the CLI command:  
 $bin/magento oms:orders:sync

## Related reading

[Magento Order Management technical documentation](https://omsdocs.magento.com/en/)

