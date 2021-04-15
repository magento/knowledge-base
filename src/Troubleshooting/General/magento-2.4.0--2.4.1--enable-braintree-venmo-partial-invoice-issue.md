---
title: Magento 2.4.0, 2.4.1: Enable Braintree Venmo partial invoice issue
labels: Magento Commerce Cloud,Magento Commerce,orders,known issues,2.4.0,Braintree,Venmo,partial invoice,2.4.1
---

This article describes a known Magento Commerce 2.4.0 and 2.4.1 issue, where partial invoice is not available for orders placed using Braintree through Venmo. 

## Affected products and versions 

* Magento Commerce 2.4.0 and 2.4.1. * Magento Commerce Cloud 2.4.0 and 2.4.1. ## Issue

Preconditions:

In the Braintree payment method configuration, set Enable Venmo through Braintree = _Yes_ with Payment Action = _Authorization_; Enable Vault for Card Payments = _No_. 

Steps to reproduce:

1. Create an order for two or more products, using Venmo (Braintree) as a payment method.
1. Open the order in Magento Admin. 
1. Create an invoice for one of the ordered products.
1. Try to create invoice for the rest ordered products.

Expected result:

Invoice created.

Actual result:

The following error message is displayed: _The "vault\_capture" command doesn't exist. Verify the command and try again._

## Workaround  

Capture the whole amount when creating invoices for orders placed using Braintree through Venmo.