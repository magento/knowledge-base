---
title: MySQL high-load bottleneck in Adobe Commerce on cloud infrastructure
labels: 2.x.x,Cloud,Magento Commerce Cloud,MySQL,Redis,bottleneck,cluster,high,how to,load,performance,queries,slave,slave connection,Adobe Commerce,cloud infrastructure,Pro
---

>![warning]
>
>For scaled architecture (split architecture), Redis slave connections **SHOULD NOT** be enabled. You can check if you are on scaled architecture go to your project URL, e.g. https:&#8203;//us.magento.cloud/projects/&lt;project ID&gt;/environments/production. Click on the Access site. If there are more than three nodes shown under SSH access you are on scaled architecture. If you enable Redis Slave Reads on scaled architecture the customer will receive errors on Redis connections not being able to connect. This has to do with how the clusters are configured to process Redis connections. Redis Slaves are still active but will not be used for Redis Reads. We recommend for scaled architecture to use Adobe Commerce 2.3.5 or later and implement new Redis back end configuration and implement L2 caching for Redis.

This topic discusses a solution when high load from MySQL causes a performance bottleneck issue in Adobe Commerce on cloud infrastructure.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.x.x, Pro accounts.

### Prerequisites

* ECE Tools version 2002.0.16 and higher
* New Relic APM service (**Your Adobe Commerce on cloud infrastructure account includes the software for the New Relic APM service** along with a license key.)

For more information about the New Relic APM service and its setup with your Adobe Commerce on cloud infrastructure account, go to [New Relic Services](https://devdocs.magento.com/guides/v2.3/cloud/project/new-relic.html) and [Introduction to New Relic APM](https://docs.newrelic.com/docs/apm/new-relic-apm/getting-started/introduction-new-relic-apm).

## Issue

 <ins>Steps To See If The Issue Affects You</ins>

1. In your New Relic APM Overview Chart, check for the first indication that MySQL has become a bottleneck. See the sample picture below where MySQL has become a bottleneck and takes most of the web transactions time:

    ![KB-372_image002.png](assets/KB-372_image002.png)    

    Notice how the red dashed line in the image shows a discernible upward trend in the MySQL web transactions time and then peaks at even higher levels.
1. From here you can then go to your **Database** screen where you can see the second indication of high throughput or slow `SELECT` queries in MySQL, and in the below sample image you can see when sorting by **Most time consuming**, your store, in this example, is slow on `SELECT` MySQL queries.    

    ![KB-372_image003_BlurredExtension.png](assets/KB-372_image003_BlurredExtension.png)

Analyze the slow transactions in New Relic APM. If you see a high volume of queries or high pressure on a MySQL database, you can spread the load across different nodes by enabling `SLAVE` connections.

## Cause

Your Adobe Commerce on cloud infrastructure store has high throughput or is slow on `SELECT` MySQL queries.

## Solution

If experiencing these two indications, enabling `SLAVE` connections for the MySQL database and Redis can help to spread out the load across different nodes.

Adobe Commerce can read multiple databases or Redis asynchronously. Updating the `.magento.env.yaml` file by setting to `true` the values `MYSQL_USE_SLAVE_CONNECTION` and `REDIS_USE_SLAVE_CONNECTION` to use a **read-only** connection to the database to receive read-only traffic on a non-master node. This improves performance through load balancing because only one node needs to handle read-write traffic. Set to `false` to remove any existing read-only connection array from the `env.php` file.

>![info]
>
>It is a best practice recommendation to always have MySQL slave connection enabled.

### Steps

1. Edit your `.magento.env.yaml` file, and add the following content:    

    ![KB-372_image004.png](assets/KB-372_image004.png)

    You can find more details in [Deploy Variables in DevDocs](https://devdocs.magento.com/cloud/env/variables-deploy.html#mysql_use_slave_connection).

1. Commit your changes and push your changes.
1. Pushing changes will initiate a new deployment process. Once deployment is successfully completed, you should have your Adobe Commerce on cloud infrastructure instance now configured to use slave connections.

## Common Questions

Below are the common questions you may ask when you consider using the Slave Connections functionality for your Adobe Commerce on cloud infrastructure store.

* Is there any known issues or limitation to use Slave Connections? **We do not have any known issues from using Slave Connections. Just make sure you are using the most recently updated ece-tools package. Instructions are here on [how to update your ece-tools package](https://devdocs.magento.com/cloud/project/ece-tools-update.html).**
* Is there any extra latency by using Slave Connections? *Yes, cross-AZ (cross-Availability Zones) latency is higher and reduces performance of a Adobe Commerce on cloud infrastructure instance in the case if the instance is not overloaded and can carry the whole load. But clearly, if the instance is overloaded – master-slave will help with performance by spreading the load on the MySQL Database or Redis across different nodes.*

    **On not-overloaded clusters** – **Slave Connections will slow down performance by 10-15%**, which is one of the reasons it is not default.

    *But on overloaded clusters, there is a performance boost because these 10-15% are mitigated by reducing load by traffic.*
* Should I enable these settings for my store? *If you have high load or expect high load on the MySQL Database or Redis, you definitely need to enable Slave Connections. For a regular customer with average traffic, this is **not** an optimal setting to be enabled.*

## Related reading

In our developer documentation:

* [Deploy variables](https://devdocs.magento.com/cloud/env/variables-deploy.html).
* [Set up optional database replication](https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master_slavedb.html).
* [ece-tools package](https://devdocs.magento.com/cloud/reference/ece-tools-reference.html).

>![info]
>
>We are aware that this article may still contain industry-standard software terms that some may find racist, sexist, or oppressive, and which may make the reader feel hurt, traumatized, or unwelcome. Adobe is working to remove these terms from our code, documentation, and user experiences.
