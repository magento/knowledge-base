---
title: Web API unable to process requests with more than 20 items in array
labels: 2.4.3,API,rate limit,Adobe Commerce,Magento,troubleshooting,cloud infrastructure,on-premises
---

This article provides a solution for the issue where Web API is unable to process a message that contains more than 20 items in the array for Adobe Commerce 2.4.3.

## Affected products and versions:

* Adobe Commerce (all deployment methods) 2.4.3 and 2.3.7-p1
* Magento Open Source 2.4.3 and 2.3.7-p1

## Issue

Web API is unable to process the message (for example, Stock Update) that contains more than 20 items in array.

## Cause

In Adobe Commerce 2.4.3, the built-in Rate limiting was added to Magento APIs to prevent denial-of-service (DoS) attacks.

By default, the following built-in API rate limiting is available:

* REST requests containing inputs representing a list of entities are limited to a default maximum of 20 entities
* REST and GraphQL queries that allow paginated results are limited to a default maximum of 300 items per page

## Solution

To disable the input limits on the REST API request, apply one of the following patches (depending on your version):

* [MC-43048__set_rate_limits__2.3.7-p1.patch.zip](assets/MC-43048__set_rate_limits__2.3.7-p1.patch.zip)
* [MC-43048__set_rate_limits__2.4.3.patch.zip](assets/MC-43048__set_rate_limits__2.4.3.patch.zip)

### Compatible Adobe Commerce versions

The patches were created for:

* Adobe Commerce on cloud infrastructure 2.4.3 and 2.3.7-p1
* Adobe Commerce on-premises 2.4.3 and 2.3.7-p1

The patches are not compatible with any other Adobe Commerce versions.

### How to apply the patch

Unzip the downloaded `.zip` file and apply the patch as described in [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731).

>![warning]
>
>If you suspect that your store is experiencing a DoS attack, Adobe recommends lowering the default input limits to a lower value to impose restrictions on the number of resources that can be requested.  You can customize the default limits programmatically using [class constructor arguments](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/di-xml-file.html)
>as described in our developer documentation: [API security > Rate limiting > Maximum parameter inputs](https://devdocs.magento.com/guides/v2.4/get-started/api-security.html#rate-limiting).

## Related reading

[API security > Rate limiting](https://devdocs.magento.com/guides/v2.4/get-started/api-security.html#rate-limiting) in our developer documentation.
