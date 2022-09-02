---
title: Exact match search for product not working in Adobe Commerce 2.4.4
labels: issue,troubleshooting,Adobe Commerce,clarification,exact match,product search,Live Search,native search,100% match,2.4.x
---

This article provides a solution for the issue where exact match search (100% match) for a product is not working in Adobe Commerce 2.4.x.

## Affected products and versions

Adobe Commerce 2.4.x

## Issue

Exact match search (100% match) for a product is not working in Adobe Commerce 2.4.x. The search results by attribute in Adobe Commerce 2.3.x are strict for the search saga="Saga 1" but for Adobe Commerce 2.4.x it includes broader results with values such as "Saga 10" and "Saga 16".

## Cause

This is the expected behavior of Live Search (an optional module available for installation) which was released with Adobe Commerce 2.4.x support. It replaces the Adobe Commerce built in search functionality with search as a service. Note that Live Search is not compatible with Magento 2.3.x.

## Solutions

Uninstall Live Search and use the Adobe Commerce build in search for exact match result.
