---
title: I have configured API keys for Sensei but I am only seeing 1 SaaS data space
labels: configuration,API keys,Sensei,SaaS,data space
---

This article provides a solution for the issues where you only see 1 SaaS data space after you have configured the API keys for Sensei.

## Affected products and versions


## Issue

I have configured the API keys for Sensei but I am only seeing 1 SaaS data space.

## Cause

The number of SaaS data spaces that appears depends on your Commerce license:

* Adobe Commerce - One production data space; two testing data spaces
* Magento Open Source - One production data space; no testing data spaces

## Solution

* Make sure that the API keys were created on the Account Owner's account. Even if you have been given shared access to their account and created the keys on your own account, this will not grant you more than 1 data space.
* If the keys were generated on the Account Owner's account, make sure that the license is active, i.e., there are no Pending invoices.

## Related Reading
