---
title: Extended Redis cache implementation Adobe Commerce 2.3.5+
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,Redis,best practices,cache,configuration,Adobe Commerce,on-premises,cloud infrastructure
---

As of Adobe Commerce (all deployment methods) 2.3.5 or higher, it is recommended that you use the extended Redis cache implementation.

The enhancements minimize the number of queries to Redis that are performed on each Adobe Commerce request.

These optimizations include:

* Diminish the size of network data transfers between Redis and Adobe Commerce.
* Lower Redis consumption of CPU cycles by improving the adapter’s ability to automatically determine what needs to be loaded.
* Reduce race conditions on Redis write operations.

## Affected products and versions

* Adobe Commerce (all deployment methods) 2.3.5+

## Best practices

As of Adobe Commerce 2.3.5 and higher, it is recommended to use the extended Redis cache implementation `\Magento\Framework\Cache\Backend\Redis`.

If you have ece-tools 2002.1.1 or higher, use the `REDIS_BACKEND` deployment variable to set this in `.magento.env.yaml`:

```yaml
stage:
  deploy:
    REDIS_BACKEND: '\Magento\Framework\Cache\Backend\Redis'
```

For details about the variable, see [Deploy variables > REDIS_BACKEND](https://devdocs.magento.com/cloud/env/variables-deploy.html#redis_backend) in our developer documentation.

If your ece-tools version is earlier than 2002.1.1, update it to the newer versions, since old versions are lacking new features and are not supported. For details, see [Update ece-tools version](https://devdocs.magento.com/cloud/project/ece-tools-update.html) in our developer documentation.

## Related reading

* [Adobe Commerce Release v2.3.5](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#performance-boosts) in our developer documentation.
* [Redis Page Cache](https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-pg-cache.html) in our developer documentation.

If assistance is required or if there are questions or concerns, [submit an Adobe Commerce Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).
