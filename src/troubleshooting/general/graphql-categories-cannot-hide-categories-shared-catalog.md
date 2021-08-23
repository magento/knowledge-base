---
title: GraphQl query to hide categories not work with B2B shared catalog
labels: troubleshooting,GraphQL,2.4.3,Adobe Commerce,Adobe Commerce on cloud infrastructure,category,catalog,B2B
---
B2B Shared catalog feature is not working with GraphQL.

## Affected products and versions

* Adobe Commerce 2.4.3.

## Issue

GraphQl Categories and `categoryList` queries ignore the Category permission to hide categories in a shared catalog. This happens to all customers on Adobe Commerce 2.4.3 with B2B Shared Catalog feature turned on.

<ins>Steps to reproduce</ins>:

Prerequisites: 

This happens to all customers on Adobe Commerce 2.4.3 with PWA storefront consuming GraphQl API with Adobe Commerce backend/admin having B2B > Shared Catalog feature turned on.

1. Create multiple categories (CAT1,CAT2).
1. Create a private shared catalog.
1. Create a company user and assign it to above shared catalog.
1. Assign a few products to each of these categories.
1. Assign CAT1 to the custom catalog, unassign CAT2 from the custom private catalog. This unassigns all products from CAT2 from the shared catalog.
1. Save the custom catalog.
1. Set the category permission for CAT2 to *Deny* Browsing category and set the customer group to the above private catalog. `categoryList query` or the categories query as the company user from step three.

<ins>Expected result</ins>:

Only the CAT1 shows up in the results.

<ins>Actual result</ins>:

All the categories show up regardless of whether they are assigned/unassigned in the shared catalog or what the category permissions are.


## Cause

Functionality was not implemented.

## Solution

Run the composer patch to resolve the issue. This patch is attached to the ticket. For instructions on how to apply the patch, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731-How-to-apply-a-composer-patch-provided-by-Adobe).

## Related reading

* [Best practice Adobe Commerce number of categories limits](https://support.magento.com/hc/en-us/articles/360025796972)
