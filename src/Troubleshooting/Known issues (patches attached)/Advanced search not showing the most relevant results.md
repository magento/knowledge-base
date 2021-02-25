---
title: Advanced search not showing the most relevant results
link: https://support.magento.com/hc/en-us/articles/360027707452-Advanced-search-not-showing-the-most-relevant-results
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,2.x.x,Advanced search,not relevant results
---

This article provides a patch for the known Magento issue, where the Advanced search does not show most relevant results first.

### Affected versions

* Magento Commerce 2.X.X
* Magento Commerce Cloud 2.X.X
* Magento Open Source 2.X.X

## Issue

The advanced search function is not returning the most relevant results first, like the quick search is doing. The issue does not depend on the selected search engine type.

Steps to reproduce:

1. On the storefront, go to the quick search and search for "Fitted Jacket".
1. Notice "Orion Two-Tone Fitted Jacket" is the first result.
1. Go to advanced search and search for "Fitted Jacket" in the name field.

Expected result:

The "Orion Two-Tone Fitted Jacket" is the first result when using Advanced search, as the most relevant result.

Actual result:

The "Orion Two-Tone Fitted Jacket" is not the first result, though it is the most relevant.

## Solution

To solve the issue, apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-7256\_EE\_2.1.7\_v1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360027842872/MDVA-7256_EE_2.1.7_v1.composer.patch)

The patch adds the implementation for sorting by relevance for advanced search results as the default sorting field.

The patch is compatible with all affected versions and editions.

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached files