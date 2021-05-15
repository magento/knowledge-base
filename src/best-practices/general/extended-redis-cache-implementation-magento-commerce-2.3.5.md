---
title: Extended Redis cache implementation Magento Commerce 2.3.5+
labels: .
---

As of Magento Commerce Cloud and Magento Commerce 2.3.5 or higher, it is recommended that you use the extended Redis cache implementation.

The enhancements minimize the number of queries to Redis that are performed on each Magento request.

These optimizations include:

* Diminish the size of network data transfers between Redis and Magento.
* Lower Redis consumption of CPU cycles by improving the adapter’s ability to automatically determine what needs to be loaded.
* Reduce race conditions on Redis write operations.

## [None](#affected-products-and-versions) Affected products and versions

* Magento Commerce Cloud and Magento Commerce 2.3.5+

## [None](#best-practices) Best practices

As of Magento 2.3.5 and higher, it is recommended to use the extended Redis cache implementation `\Magento\Framework\Cache\Backend\Redis` .

If you have eco-tools 2002.1.1 or higher, use the `REDIS_BACKEND` deployment variable to set this:

<pre>stage:
  deploy:
    REDIS_BACKEND: '\Magento\Framework\Cache\Backend\Redis'</pre>

For details about the variable, see [Deploy variables > REDIS\_BACKEND](https://devdocs.magento.com/cloud/env/variables-deploy.html#redis_backend) in Magento Developer Documentation.

If your eco-tools version is earlier than 2002.1.1, update it to the newer versions, since old versions are lacking new features and are not supported. For details, see [Update eco-tools version](https://devdocs.magento.com/cloud/project/ece-tools-update.html) on Magento Developer Documentation.

* Magento DevDocs [Magento Commerce Release v2.3.5](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#performance-boosts) 
* Magento DevDocs [Redis Page Cache](https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-pg-cache.html) 

If assistance is required or if there are questions or concerns, [submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) .