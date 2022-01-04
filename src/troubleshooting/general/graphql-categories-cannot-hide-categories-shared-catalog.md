---
title: GraphQL query to hide categories not work with B2B shared catalog
labels: troubleshooting,GraphQL,2.4.3,Adobe Commerce,cloud infrastructure,category,shared catalog,B2B
---
This article provides a solution for when B2B shared catalog feature is not working with GraphQL categories query to hide categories.

## Affected products and versions

* Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.4.3

## Issue

GraphQL categories and `categoryList` queries ignore the category permission to hide categories in a shared catalog. This happens to all merchants on Adobe Commerce 2.4.3 with B2B Shared Catalog feature turned on.

<ins>Steps to reproduce</ins>:

Prerequisites:

This happens to all merchants on Adobe Commerce 2.4.3 with PWA storefront consuming GraphQL API with Adobe Commerce backend/Admin having B2B Shared Catalog feature turned on.

1. Create multiple categories (CAT1,CAT2).
1. Create a private shared catalog.
1. Create a company user and assign it to the above shared catalog.
1. Assign a few products to each of these categories.
1. Assign CAT1 to the custom catalog, unassign CAT2 from the custom private catalog. This unassigns all products from CAT2 from the shared catalog.
1. Save the custom catalog.
1. Set the category permission for CAT2 to *Deny* Browsing category and set the customer group to the above private catalog.
1. Run the `categoryList query` or the categories query as the company user from step three.

<ins>Expected results</ins>:

Only the CAT1 shows up in the results.

<ins>Actual results</ins>:

All the categories show up regardless of whether they are assigned/unassigned in the shared catalog or what the category permissions are.

## Cause

Functionality was not implemented.

## Solution

The issue is going to be fixed in the scope of version 2.4.4, and merchants should [submit a ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to get a custom patch if they need a solution prior to the 2.4.4 release.

## Related reading

* [Best practice Adobe Commerce number of categories limits](https://support.magento.com/hc/en-us/articles/360048176832) in our support knowledge base.
