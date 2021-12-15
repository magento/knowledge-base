---
title: "Adobe Commerce 2.4.2-p1: invoice note with an incorrect value"
labels: 2.4.2-p1,Magento Commerce,Magento Commerce Cloud,error,known issues,invoice,tax,vertex,cloud infrastructure,Adobe Commerce,on-premises
---

This article describes a known Adobe Commerce 2.4.2-p1 issue where an invoice note with incorrect value is generated when the customer group is changed while creating the order. This issue is fixed in version 2.4.3.

## Affected products and versions

* Adobe Commerce on-premises 2.4.2-p1
* Adobe Commerce on cloud infrastructure 2.4.2-p1

## Issue

When the customer group is changed at the time of creating the order, the invoice is generated with an incorrect invoice note.

<ins>Steps to reproduce</ins>:

1. Create a **Test Customer Account** and add it to the **Retail Customer Group**.
1. Create a **New Order** for the test customer, add **Product** and **Address**.
1. Select **Shipping Method**.
1. In the **Account Information** section, change customer group from **Retailer** to **Government**.
1. Click **Place Order**.
1. Click **Invoice** > **Submit Invoice**.

<u>Expected results</u>:

The following note should appear under the **Notes for this order**  section: "Vertex Invoice sent successfully. Amount: $0.00."

<u>Actual results</u>:

The following note appears under the **Notes for this order** section: "Vertex Invoice sent successfully. Amount: $3.23."

## Solution

This issue is fixed in version 2.4.3.
