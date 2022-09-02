---
title: Exact match search not working in Adobe Commerce 2.4.x
labels: issue,troubleshooting,Adobe Commerce,on-premises,cloud-infrastructure,clarification,exact match,product search,Live Search,native search,100% match,attribute,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3,2.4.4,2.4.4-p1,2.4.5
---

This article provides a clarification for the issue where exact match search (100% match) for a product works in Adobe Commerce 2.3.x but does not work in Adobe Commerce 2.4.x.

## Affected products and versions

Adobe Commerce (all deployment methods) 2.4.x

## Issue

Exact match search (100% match) for a product works in Commerce 2.3.x but does not work in Adobe Commerce 2.4.x. For example, the search results by attribute in Adobe Commerce 2.3.x are strict for the search Saga="Saga 1", but in Adobe Commerce 2.4.x, it includes broader results with values such as "Saga 10" and "Saga 16".

## Clarification

This is the expected behavior of Live Search, an optional module available for installation, which was released with Adobe Commerce 2.4.x support. It replaces the Adobe Commerce built in search functionality with search as a service. However, Live Search is not compatible with  Adobe Commerce 2.3.x. The Adobe Commerce native search functionality is used in 2.3.x which provides exact match search results.

## Related Reading

[Install Live Search](https://devdocs.magento.com/live-search/install.html) in our developer documentation.

[Live Search](https://devdocs.magento.com/live-search/overview.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=Live%20Search) in our developer documentation.
