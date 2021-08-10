---
title: Web API unable to process message with more than 20 items in array
labels: 2.4.3,API,rate limit,Adobe Commerce,Magento,troubleshooting
---

This article provides a solution for the issue where Web API is unable to process a message that contains more than 20 items in array.

## Affected products and versions:

* Adobe Commerce 2.4.3

## Issue

Web API is unable to process message (for example, Stock Update) that contains more than 20 items in array.

## Cause

In Adobe Commerce 2.4.3, the built-in Rate limiting was added to Magento APIs to prevent denial-of-service (DoS) attacks.

By default, the following built-in API rate limiting is available:

* REST requests containing inputs representing a list of entities are limited to a default maximum of 20 entities
* REST and GraphQL queries that allow paginated results are limited to a default maximum of 300 items per page

## Solution

If the default limits impact your store business flow, you can customize the default limits programmatically using [class constructor arguments](https://devdocs-beta.magento.com/guides/v2.4/extension-dev-guide/build/di-xml-file.html) as described in developer documentation: [API security > Rate limiting > Maximum parameter inputs](https://devdocs-beta.magento.com/guides/v2.4/get-started/api-security.html#rate-limiting).
