---
title: MySQL high-load bottleneck in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360037391972-MySQL-high-load-bottleneck-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,Cloud,Redis,performance,queries,MySQL,high,load,bottleneck,slave,slave connection,cluster,2.x.x,how to
---

For scaled architecture (split architecture), Redis slave connections **SHOULD NOT** be enabled. If you enable Redis Slave Reads on scaled architecture the customer will receive errors on Redis connections not being able to connect. This has to do with how the clusters are configured to process Redis connections. Redis Slaves are still active but will not be used for Redis Reads. We recommend for scaled architecture to use Magento 2.3.5 or later and implement new Redis back end configuration and implement L2 caching for Redis.

 This topic discusses a solution when high load from MySQL causes a performance bottleneck issue in Magento Commerce Cloud.

 ### Affected products and versions

 
 * Magento Commerce Cloud 2.x.x, Pro accounts.
 
 ### Prerequisites

 
 * ECE Tools version 2002.0.16 and higher
 * New Relic APM service (**Your Magento Commerce Cloud account includes the software for the New Relic APM service** along with a license key.)
 
 For more information about the New Relic APM service and its setup with your Magento Commerce Cloud account, go to [New Relic Services](https://devdocs.magento.com/guides/v2.3/cloud/project/new-relic.html) and [Introduction to New Relic APM](https://docs.newrelic.com/docs/apm/new-relic-apm/getting-started/introduction-new-relic-apm).

 Issue
-----

 Steps To See If The Issue Affects You

 
 2. In your New Relic APM Overview Chart, check for the first indication that MySQL has become a bottleneck. See the sample picture below where MySQL has become a bottleneck and takes most of the web transactions time: ![KB-372_image002.png](https://support.magento.com/hc/article_attachments/360045530451/KB-372_image002.png)  
Notice how the red dashed line in the image shows a discernible upward trend in the MySQL web transactions time and then peaks at even higher levels.
 4. From here you can then go to your **Database** screen where you can see the second indication of high throughput or slow SELECT queries in MySQL, and in the below sample image you can see when sorting by **Most time consuming**, your store, in this example, is slow on SELECT MySQL queries.![KB-372_image003_BlurredExtension.png](https://support.magento.com/hc/article_attachments/360045824271/KB-372_image003_BlurredExtension.png)  
  
Analyze the slow transactions in New Relic APM.  
If you see a high volume of queries or high pressure on a MySQL database, you can spread out the load across different nodes by enabling SLAVE connections.
 
 Cause
-----

 Your Magento Commerce Cloud store has high throughput or is slow on SELECT MySQL queries.

 Solution
--------

 If experiencing these 2 indications, enabling SLAVE connections for the MySQL database and Redis can help to spread out the load across different nodes.

 Magento can read multiple databases or Redis asynchronously. Updating the .magento.env.yaml file by setting to true the values MYSQL\_USE\_SLAVE\_CONNECTION and REDIS\_USE\_SLAVE\_CONNECTION to use a **read-only** connection to the database to receive read-only traffic on a non-master node. This improves performance through load balancing, because only one node needs to handle read-write traffic. Set to false to remove any existing read-only connection array from the env.php file.

 ### Steps

 
 2. Edit your .magento.env.yaml file, and add the following content:![KB-372_image004.png](https://support.magento.com/hc/article_attachments/360045783571/KB-372_image004.png) You can find more details in [Deploy Variables in DevDocs](https://devdocs.magento.com/cloud/env/variables-deploy.html#mysql_use_slave_connection).
 4. Commit your changes, and push your changes.
 6. Pushing changes will initiate a new deployment process. Once deployment is successfully completed, you should have your Magento Commerce Cloud instance now configured to use slave connections.
 
 Common Questions
----------------

 Below are the common questions you may ask when you consider using the Slave Connections functionality for your Magento Commerce Cloud Store.

 
 * Is there any known issues or limitation to use Slave Connections?  
*We do not have any known issues from using Slave Connections.  
Just make sure you are using the most recently updated ece-tools package.  
Instructions are here on [how to update your ece-tools package](https://devdocs.magento.com/cloud/project/ece-tools-update.html).* 
 * Is there any extra latency by using Slave Connections?  
**Yes, cross-AZ (cross-Availability Zones) latency is higher and reduces performance of a Magento Commerce Cloud instance in the case if the instance is not overloaded and can carry the whole load.  
But clearly if the instance is overloaded – master-slave will help with performance by spreading out the load on the MySQL Database or Redis across different nodes.** ***On not-overloaded clusters** – Slave Connections **will slow down performance by 10-15%**, which is one of the reasons it’s not default.*

 *But on overloaded clusters, there is a performance boost because these 10-15% are mitigated by reducing load by traffic.* 
 * Should I enable these settings for my store?  
*If you have high load or expect high load on the MySQL Database or Redis, you definitely need to enable Slave Connections.  
For a regular customer with average traffic, this is **not** an optimal setting to be enabled.* 
 
 Related reading
---------------

 
 * [Deploy variables](https://devdocs.magento.com/cloud/env/variables-deploy.html)
 * [Set up optional database replication](https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master_slavedb.html)
 * [ece-tools package](https://devdocs.magento.com/cloud/reference/ece-tools-reference.html)
 
