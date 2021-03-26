---
title: MySQL high-load bottleneck in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360037391972-MySQL-high-load-bottleneck-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,Cloud,Redis,performance,queries,MySQL,high,load,bottleneck,slave,slave connection,cluster,2.x.x,how to
---

<p class="warning">For scaled architecture (split architecture), Redis slave connections SHOULD NOT be enabled. If you enable Redis Slave Reads on scaled architecture the customer will receive errors on Redis connections not being able to connect. This has to do with how the clusters are configured to process Redis connections. Redis Slaves are still active but will not be used for Redis Reads. We recommend for scaled architecture to use Magento 2.3.5 or later and implement new Redis back end configuration and implement L2 caching for Redis.</p>

This topic discusses a solution when high load from MySQL causes a performance bottleneck issue in Magento Commerce Cloud.

### Affected products and versions

* Magento Commerce Cloud 2.x.x, Pro accounts.

### Prerequisites

* ECE Tools version 2002.0.16 and higher
* New Relic APM service (Your Magento Commerce Cloud account includes the software for the New Relic APM service along with a license key.)

For more information about the New Relic APM service and its setup with your Magento Commerce Cloud account, go to [New Relic Services](https://devdocs.magento.com/guides/v2.3/cloud/project/new-relic.html) and [Introduction to New Relic APM](https://docs.newrelic.com/docs/apm/new-relic-apm/getting-started/introduction-new-relic-apm).

## Issue

Steps To See If The Issue Affects You

1. In your New Relic APM Overview Chart, check for the first indication that MySQL has become a bottleneck. See the sample picture below where MySQL has become a bottleneck and takes most of the web transactions time: ![KB-372_image002.png](https://support.magento.com/hc/article_attachments/360045530451/KB-372_image002.png)  
    Notice how the red dashed line in the image shows a discernible upward trend in the MySQL web transactions time and then peaks at even higher levels.
 1. From here you can then go to your Database screen where you can see the second indication of high throughput or slow <code class="sql">SELECT</code> queries in MySQL, and in the below sample image you can see when sorting by Most time consuming, your store, in this example, is slow on <code class="sql">SELECT</code> MySQL queries.![KB-372_image003_BlurredExtension.png](https://support.magento.com/hc/article_attachments/360045824271/KB-372_image003_BlurredExtension.png)  
      
    Analyze the slow transactions in New Relic APM.  
    If you see a high volume of queries or high pressure on a MySQL database, you can spread out the load across different nodes by enabling `` SLAVE `` connections.

## Cause

Your Magento Commerce Cloud store has high throughput or is slow on <code class="sql">SELECT</code> MySQL queries.

## Solution

If experiencing these 2 indications, enabling `` SLAVE `` connections for the MySQL database and Redis can help to spread out the load across different nodes.

Magento can read multiple databases or Redis asynchronously. Updating the <code class="php">.magento.env.yaml</code> file by setting to <code class="php">true</code> the values <code class="php">MYSQL\_USE\_SLAVE\_CONNECTION</code> and <code class="php">REDIS\_USE\_SLAVE\_CONNECTION</code> to use a read-only connection to the database to receive read-only traffic on a non-master node. This improves performance through load balancing, because only one node needs to handle read-write traffic. Set to <code class="php">false</code> to remove any existing read-only connection array from the <code class="php">env.php</code> file.

<p class="info">It is a best practice recommendation to always have MySQL slave connection enabled.</p>

 

### Steps

1. Edit your <code class="php">.magento.env.yaml</code> file, and add the following content:![KB-372_image004.png](https://support.magento.com/hc/article_attachments/360045783571/KB-372_image004.png) You can find more details in [Deploy Variables in DevDocs](https://devdocs.magento.com/cloud/env/variables-deploy.html#mysql_use_slave_connection).
 1. Commit your changes, and push your changes.
 1. Pushing changes will initiate a new deployment process. Once deployment is successfully completed, you should have your Magento Commerce Cloud instance now configured to use slave connections.

## Common Questions

Below are the common questions you may ask when you consider using the Slave Connections functionality for your Magento Commerce Cloud Store.

<ul><li>Is there any known issues or limitation to use Slave Connections?<br/><em>We do not have any known issues from using Slave Connections.<br/>Just make sure you are using the most recently updated ece-tools package.<br/>Instructions are here on <a href="https://devdocs.magento.com/cloud/project/ece-tools-update.html">how to update your ece-tools package</a>.</em>
</li> <li>Is there any extra latency by using Slave Connections?<br/><em><em>Yes, cross-AZ (cross-Availability Zones) latency is higher and reduces performance of a Magento Commerce Cloud instance in the case if the instance is not overloaded and can carry the whole load.<br/>But clearly if the instance is overloaded – master-slave will help with performance by spreading out the load on the MySQL Database or Redis across different nodes.<br/></em></em>
<p class="info"><em>On not-overloaded clusters – Slave Connections will slow down performance by 10-15%, which is one of the reasons it’s not default.</em></p>
<em>But on overloaded clusters, there is a performance boost because these 10-15% are mitigated by reducing load by traffic.</em>
</li> <li>Should I enable these settings for my store?<br/><em>If you have high load or expect high load on the MySQL Database or Redis, you definitely need to enable Slave Connections.<br/>For a regular customer with average traffic, this is not an optimal setting to be enabled.</em>
</li></ul>

## Related reading

* [Deploy variables](https://devdocs.magento.com/cloud/env/variables-deploy.html)
* [Set up optional database replication](https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master_slavedb.html)
* [ece-tools package](https://devdocs.magento.com/cloud/reference/ece-tools-reference.html)

<p class="info">We are aware that this article may still contain industry-standard software terms that some may find racist, sexist, or oppressive, and which may make the reader feel hurt, traumatized, or unwelcome. Adobe is working to remove these terms from our code, documentation, and user experiences.</p>