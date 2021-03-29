---
title: Best practices of sitesorstoresorstore view numbers in Cloud Pro
labels: Magento Commerce Cloud,performance,Pro,best practices,stores,views
---

This article provides best practices for store numbers for Magento Commerce Cloud Pro accounts to optimize Magento performance. Having a large number of stores, websites or store views can slow your site down. The maximum recommended sites, stores and store views counts is:

* sites = 50
* stores = 50
* store view count = 50

## Best practices

Websites and stores are multipliers for catalog data, so having a large number of websites and stores results in:

* an increase in the size of index tables
* longer indexation process
* longer retrieval of configuration
* slower save operations in admin as data is saved for each website separately.

Recommendations include:

* Restructure catalog through shifting logic to categories.
* Separate price lists from catalog data, leveraging of external price and Price Management System (PMS).
* Use alternative noSQL data storage like Elasticsearch.
* Custom flat indexes for catalog data.