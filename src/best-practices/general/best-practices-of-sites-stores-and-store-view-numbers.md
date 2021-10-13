---
title: Best practices of sites, stores, and store view numbers
labels: Magento Commerce Cloud,Pro,best practices,performance,stores,views,Adobe Commerce,cloud infrastructure
---

This article provides best practices for store numbers for Adobe Commerce on cloud infrastructure Pro plan accounts to optimize Adobe Commerce performance. Having a large number of stores, websites or store views can slow your site down. The maximum recommended sites, stores and store views counts is:

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
