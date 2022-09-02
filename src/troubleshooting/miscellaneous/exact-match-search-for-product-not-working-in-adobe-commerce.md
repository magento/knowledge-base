---
title: Exact match search not working in Adobe Commerce 2.4.x
labels: issue,troubleshooting,Adobe Commerce,on-premises,cloud-infrastructure,clarification,exact match,product search,Live Search,native search,100% match,attribute,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2,3,4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.3.7-p4,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3,2.4.4,2.4.4-p1,2.4.5
---

This article provides a clarification for the issue where store front search results using the same search string differ in Adobe Commerce 2.4.x compared to Adobe Commerce 2.3.x.

## Affected products and versions

- Adobe Commerce (all deployment methods) 2.4.x, 2.3.x
- Live Search

## Issue

<ins>Prerequisites:</ins>

You have products with attribute values `Saga 1` and `Saga 16` in both Adobe Commerce 2.3 and Adobe Commerce 2.4 stores.

<ins>Steps to reproduce:</ins>

1. On the store front of an Adobe Commerce 2.3 powered store, enter *Saga 1* in the search field and click **Search**.
1. Notice that in search results, you only get the products with the attribute value `Saga 1`.
1. On the store front of an Adobe Commerce 2.4 powered store, enter *Saga 1* in the search field and click **Search**.

<ins>Actual result:</ins>

Search results in 2.4 include products with attribute values `Saga 1` and `Saga 16`.

<ins>Expected result:</ins>

Search results in 2.4 are similar to 2.3 and only include products with attribute value `Saga 1`.

## Cause

The Adobe Commerce native search functionality used in 2.3.x provides exact match search results. While Live Search, an optional module available for installation, which was released with Adobe Commerce 2.4.x, is implemented differently, and the actual result is the expected behavior when the module is used.

## Related Reading

[Install Live Search](https://experienceleague.adobe.com/docs/commerce-merchant-services/live-search/onboard/install.html) in our user guide.

[Live Search](https://devdocs.magento.com/live-search/overview.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=Live%20Search) in our developer documentation.
