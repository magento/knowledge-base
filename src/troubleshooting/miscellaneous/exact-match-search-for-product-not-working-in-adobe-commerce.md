---
title: Exact match search for product not working in Adobe Commerce 2.4.4
labels: issue,troubleshooting,clarification,exact match,product,search result,behavior change,values,attributes,2.4.x
---

This article provides a solution for the issue where exact match search (100% match) for a product is not working in Adobe Commerce 2.4.x. For example, the search results for "Saga 1" include products with values of "saga" equals "Saga 16" (not 100% match). However, in Adobe Commerce 2.3.x, the search results for "Saga 1" only return results of products with values of "saga" equals "Saga 1" (100% match).

## Affected products and versions

Adobe Commerce 2.4.x

## Issue

Exact match search (100% match) for a product is not working in Adobe Commerce 2.4.x

## Cause

This is the expected behavior of Live Search (an optional module available for installation) which was released with Adobe Commerce 2.4.x support. It replaces the Adobe Commerce built in search functionality with search as a service. Note that Live Search is not compatible with Magento 2.3.x.

Live Search is an optional module available for install to EE customers.

## Solutions

Uninstall Live Search and use the Adobe Commerce build in native search for exact match search result.
