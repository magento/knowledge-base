---
title: Exact match search for product not working in Adobe Commerce 2.4.x
labels: issue,troubleshooting,clarification,exact match,product,search result,behavior change,values,attributes,2.4.4
---

This article clarifies the issue where the exact match search (100% match) for a product is not working in Adobe Commerce 2.4. For example, the search results for "Saga 1" include products with values of "saga" equals "Saga 16" (not 100% match). However, in Adobe Commerce 2.3, the search results for "Saga 1" only return results of products with values of "saga" equals "Saga 1" (100% match).

## Affected products and versions

Adobe Commerce 2.4.x

## Issue

Exact match search (100% match) for a product is not working in Adobe Commerce 2.4.x

## Clarification

This is a behavior change from version 2.3.x to 2.4.x and not a bug in the core Adobe Commerce software. This is the designed behavior in Adobe Commerce 2.4. It is related to the search tokenizer we're using. Searching for "Saga 1" is equivalent to searching for "Saga" since "1" is dropped. For removing whitespaces, it discards words that has 1 char or less since search ngram (in the code) tokenizer tokenize 2-20 chars.
