---
title: I've configured API keys for Sensei but only seeing one SaaS data space
labels: support,troubleshooting,best practice,configuration,API keys,Sensei,SaaS,data space,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.4
---

This article provides a solution for the issues where you only see one SaaS data space after you have configured the API keys for Sensei.

## Affected products and versions

* Adobe Commerce (all deployment methods): all versions
* Magento Open Source: all versions
* Extension or technology (Fastly, New Relic, etc.), Adobe Sensei (Product Recommendations/Live Search)

## Issue

I have configured the API keys for Sensei, but I am only seeing one SaaS data space.

## Cause

The number of SaaS data spaces that appears depends on your Commerce license:

* Adobe Commerce - One production data space; two testing data spaces
* Magento Open Source - One production data space; no testing data spaces

## Solution

* Make sure that the API keys were created on the Account Owner's account. Even if you have been given shared access to their account and created the keys on your own account, this will not grant you more than one data space.
* If the keys were generated on the Account Owner's account, make sure that the license is active, i.e., there are no pending invoices.
