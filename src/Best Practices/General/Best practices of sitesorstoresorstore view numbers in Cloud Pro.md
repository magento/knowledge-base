---
title: Best practices of sitesorstoresorstore view numbers in Cloud Pro
link: https://support.magento.com/hc/en-us/articles/360044674792-Best-practices-of-sites-stores-store-view-numbers-in-Cloud-Pro
labels: Magento Commerce Cloud,performance,Pro,best practices,stores,views
---

<p>This article provides best practices for store numbers for Magento Commerce Cloud Pro accounts to optimize Magento performance. Having a large number of stores, websites or store views can slow your site down. The maximum recommended sites, stores and store views counts is:</p>
<ul>
<li>sites = 50</li>
<li>stores = 50</li>
<li>store view count = 50</li>
</ul>
<h2>Best practices</h2>
<p>Websites and stores are multipliers for catalog data, so having a large number of websites and stores results in:</p>
<ul>
<li>an increase in the size of index tables</li>
<li>longer indexation process</li>
<li>longer retrieval of configuration</li>
<li>slower save operations in admin as data is saved for each website separately.</li>
</ul>
<p>Recommendations include:</p>
<ul>
<li>Restructure catalog through shifting logic to categories.</li>
<li>Separate price lists from catalog data, leveraging of external price and Price Management System (PMS).</li>
<li>Use alternative noSQL data storage like Elasticsearch.</li>
<li>Custom flat indexes for catalog data.</li>
</ul>