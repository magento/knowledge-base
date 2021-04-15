---
title: Ticket submission form: merchant is not displayed in Organization drop-down
labels: form,shared access,organization,submit a ticket
---

This article provides a solution for a support ticket submission issue, where the merchant corresponding to the shared account is not displayed in the Organization options.

## Issue

Prerequisites: you have a shared access account granted by a merchant.

Steps to reproduce:

1. Log in to the Help Center using your shared account. 
1. Click the Submit a ticket link. The ticket submission form opens.
1. Expand the Organization drop-down field to select the merchant. 

Expected result:

The merchant corresponding to the shared account is listed in Organization options. 

Actual result:

The merchant corresponding to the used shared account is not available in the Organization options. 

## Solution

After having been granted shared access from the merchant, you need to take the following steps (only once):

1. Log in to your [Magento account on the magento.com website](https://account.magento.com/).
1. In the Switch Accounts drop-down field in top-right corner, select the shared access account.
1. Click on the Support tab in the left panel. Doing this will ensure that the Magento Help Center is configured properly via the SSO call from Magento.com to Magento Help Center.

 
 
 