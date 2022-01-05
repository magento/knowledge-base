---
title: "Adobe Commerce 2.4.0, 2.4.1: Enable Braintree Venmo partial invoice"
labels: 2.4.0,2.4.1,Braintree,Magento Commerce,Magento Commerce Cloud,Venmo,known issues,orders,partial invoice,Adobe Commerce,on-premises,cloud infrastructure
---

This article describes a known Adobe Commerce 2.4.0 and 2.4.1 issue, where partial invoice is not available for orders placed using Braintree through Venmo.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0 and 2.4.1
* Adobe Commerce on cloud infrastructure 2.4.0 and 2.4.1

## Issue

<span class="wysiwyg-underline">Prerequisites:</span>

In the Braintree payment method configuration, set **Enable Venmo through Braintree** = *Yes* with **Payment Action** = *Authorization*; **Enable Vault for Card Payments** = *No*.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create an order for two or more products, using Venmo (Braintree) as a payment method.
1. Open the order in the Commerce Admin.
1. Create an invoice for one of the ordered products.
1. Try to create invoice for the rest ordered products.

<span class="wysiwyg-underline">Expected result:</span>

Invoice created.

<span class="wysiwyg-underline">Actual result:</span>

The following error message is displayed: *The "vault\_capture" command doesn't exist. Verify the command and try again.*

## Workaround

Capture the whole amount when creating invoices for orders placed using Braintree through Venmo.
