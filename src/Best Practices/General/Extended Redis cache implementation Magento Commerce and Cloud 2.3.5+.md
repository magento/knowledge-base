---
title: Extended Redis cache implementation Magento Commerce and Cloud 2.3.5+
link: https://support.magento.com/hc/en-us/articles/360049292532-Extended-Redis-cache-implementation-Magento-Commerce-and-Cloud-2-3-5-
labels: Magento Commerce Cloud,Magento Commerce,configuration,Redis,cache,2.3.5,best practices
---

As of Magento Commerce Cloud and Magento Commerce v2.3.5 or higher, it is recommended that you use the extended Redis cache implementation.

The enhancements minimize the number of queries to Redis that are performed on each Magento request.

These optimizations include: 

* Decrease in the size of network data transfers between Redis and Magento.
* Reduction in Redis consumption of CPU cycles by improving the adapter’s ability to automatically determine what needs to be loaded.
* Reduce race conditions on Redis write operations.

## Affected products and versions

* Magento Commerce Cloud and Magento Commerce 2.3.5+

## Best practices

As of Magento v2.3.5 and higher, it is recommended to use the extended Redis cache implementation.

    \Magento\Framework\Cache\Backend\Redis

    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => '\\Magento\\Framework\\Cache\\Backend\Redis',
                'backend_options' => [
                    'server' => '127.0.0.1',
                    'database' => '0',
                    'port' => '6379'
                ],
            ],
    ],

To implement, upgrade the ece-tools to the [latest release](https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html). The configuration will be done automatically with the new ece-tools version.

## Related reading

* Magento DevDocs [Magento Commerce Release v2.3.5](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#performance-boosts)
* Magento DevDocs [Redis Page Cache](https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-pg-cache.html)

If assistance is required or if there are questions or concerns, [submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).