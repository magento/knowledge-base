---
title: Manual order export to MOM fails. The Export Order button returns HTTP 404 error
labels: 2.2.x,2.3.x,404 error,MOM,Magento Commerce,button,connector,export order,how to,Adobe Commerce,on-premises,cloud infrastructure
---

This article discusses how to fix an issue, where trying to export an order to Magento Order Management (MOM) by clicking the **Export Order** button on the order view in the Commerce Admin returns a " *404 Page Not Found* " error.

## Affected products and versions

* Adobe Commerce 2.2.x, 2.3.x
* MOM Connector 2.3.0, 2.4.0, 3.2.0, 3.3.0

## Issue

<ins>Steps to reproduce:</ins>:

1. In the Commerce Admin, click **Sales > Orders**.
1. Click the **Create New Order** button.
1. Select a user, add an item(s), select payment and shipping methods, and then click the **Submit Order** button.
1. Click the **Export Order** button and then **OK**.

<ins>Expected result</ins>:

The order is sent to MOM.

<ins>Actual result</ins>:

A " *404 Error: Page Not Found* " page is displayed.

## Solution

* Upgrade the MOM Connector to 3.4.0 for Adobe Commerce 2.3.x, or MOM Connector 2.5 for Adobe Commerce 2.2.x.
* If upgrading the MOM Connector is not an option, you can export the order to Magento Order Management using the CLI command:

```bash
$bin/magento oms:orders:sync
```

## Related reading

 [Magento Order Management technical documentation](https://omsdocs.magento.com/en/)
