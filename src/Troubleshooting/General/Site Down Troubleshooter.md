---
title: Site Down troubleshooter
link: https://support.magento.com/hc/en-us/articles/360029351531-Site-Down-troubleshooter
labels: Magento Commerce Cloud,Magento Commerce,Troubleshooter,site,down,decision,tree,how to
---

Click on each question to reveal the answer details in each step of the troubleshooter.

-------This opens the main level that holds everything.-------------

-------This is one whole accordion panel.-------------

##### Step 1

Does https://status.magento.com show any issues?
a. YES – If you checked [Magento Status](https://status.magento.com) and it showed an issue, Open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) for further investigation.  
 b. NO – If you checked [Magento Status](https://status.magento.com) and it did not show an issue, Proceed to [Step 2](#zd-accordion-2).

-------This is one whole accordion panel.-------------

##### Step 2

Does http://status.fastly.com show any issues?
a. YES – If you checked [Fastly Status](https://status.fastly.com/) and it showed an issue, Open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) for further investigation.  
 b. NO – If you checked [Fastly Status](https://status.fastly.com/) and it did not show an issue, Proceed to [Step 3](#zd-accordion-3).

-------This is one whole accordion panel.-------------

##### Step 3

Check your website in a web browser. Do you get a 200 (OK) code?  (To check error codes in **Firefox**: Click the **Open Menu** icon>>**Web Developer**>>**Toggle Tools**>>**Network** tab>>**All** filter>>**Status** column. To check error codes in **Chrome**: Click the **Open Menu** icon>>**More Tools**>>**Developer Tools**>>**Network** tab>>**All** filter>>**Status** column.)
a. YES – Open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) for further investigation.  
 b. NO – Proceed to [Step 4](#zd-accordion-4).

-------This is one whole accordion panel.-------------

##### Step 4

Which website error code did you receive?
a. Error Code 500 – Check log of /var/log/platform/<project\_id>. If this data does not present the issue to you, you can open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) and include the troubleshooting information you have so far for further investigation.

b. Error Code 503 – Check log of var/reports. If this data does not present the issue to you, you can open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) and include the troubleshooting information you have so far for further investigation.

c. Error Code 404 - Run the following query: SELECT f.flag\_data->>'$.current\_version' as flag\_version, (su.id IS NOT NULL) as update\_exists FROM flag f LEFT JOIN staging\_update su ON su.id = f.flag\_data->>'$.current\_version' WHERE flag\_code = 'staging'; If the query returns a table, where update\_exists value is "0", refer to the [Error 404 on all pages, storefront and Admin, due to Content Staging issue](https://support.magento.com/hc/en-us/articles/360000262174) article. In all other cases proceed to [Step 5](#zd-accordion-5).

d. Other Error Codes – Proceed to [Step 5](#zd-accordion-5).

-------This is one whole accordion panel.-------------

##### Step 5

Is your site slow, or having high server load, high CPU load, slow request processing, or outages in MySQL or Redis?
a. YES – Proceed with steps for [Checking for DDOS attacks from CLI](https://support.magento.com/hc/en-us/articles/360030941932).  
 b. NO – Check logs of /var/log/exception.log and /var/log/deploy.log, and if this data does not present the issue to you, Proceed to [Step 6](#zd-accordion-6).

-------This is one whole accordion panel.-------------

##### Step 6

Do you have deployment errors or deployment failure?
a. YES – Proceed to [Step 13](#zd-accordion-13).  
 b. NO – Proceed to [Step 7](#zd-accordion-7).

-------This is one whole accordion panel.-------------

##### Step 7

Do you have Elasticsearch errors?
a. YES – Proceed with steps for [checking Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/configure-magento.html).  
 b. NO – Proceed to [Step 8](#zd-accordion-8).

-------This is one whole accordion panel.-------------

##### Step 8

Was your MySQL database having slow queries or incorrect queries?
a. YES – Proceed with [Checking slow queries and Processes taking too long in MySQL](https://support.magento.com/hc/en-us/articles/360030903091) and checking your query structure in this [MySQL query tutorial](https://dev.mysql.com/doc/refman/5.5/en/entering-queries.html).  
 b. NO – Proceed to [Step 9](#zd-accordion-9).

-------This is one whole accordion panel.-------------

##### Step 9

Is your static content not available?
a. YES – Proceed with consulting the [Checking static content](https://support.magento.com/hc/en-us/articles/360031624091) article.  
 b. NO – Proceed to [Step 10](#zd-accordion-10).

-------This is one whole accordion panel.-------------

##### Step 10

Do you see PHP Fatal Errors in your logs?
a. YES – Proceed with consulting [Common PHP Fatal Errors and solutions](https://support.magento.com/hc/en-us/articles/360030568432).  
 b. NO – Proceed to [Step 11](#zd-accordion-11).

-------This is one whole accordion panel.-------------

##### Step 11

Are you seeing Redis errors?
a. YES – Proceed with steps to [verify Redis is running](https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-session.html#redis-verify) and for [Redis troubleshooting](https://redis.io/topics/problems).  
 b. NO – Proceed to [Step 12](#zd-accordion-12).

-------This is one whole accordion panel.-------------

##### Step 12

Are you seeing Indexer errors?
a. YES – If your Index is locked by another process, consult [Index is locked by another process](https://support.magento.com/hc/en-us/articles/360030683752). If you have other Indexer errors, please open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) for further investigation.  
 b. NO – Open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) for further investigation.

-------This is one whole accordion panel.-------------

##### Step 13

Do you have issues with your custom module(s)?
a. YES – Proceed to consult [General custom module troubleshooting help](https://support.magento.com/hc/en-us/articles/360031030751).  
 b. NO – Proceed to [Step 14](#zd-accordion-14).

-------This is one whole accordion panel.-------------

##### Step 14

Do you have post-hook failures?
a. YES – Proceed with checking your MySQL error in this [MySQL server error message reference](https://dev.mysql.com/doc/refman/5.5/en/server-error-reference.html).  
 b. NO – Proceed to [Step 15](#zd-accordion-15).

-------This is one whole accordion panel.-------------

##### Step 15

Do you have issues with composer patches?
a. YES – Proceed to consulting [Applying a patch takes your site down](https://support.magento.com/hc/en-us/articles/360030867871).  
 b. NO – Proceed to [Step 16](#zd-accordion-16).

-------This is one whole accordion panel.-------------

##### Step 16

Do you have SQL database errors?
a. YES – Proceed with checking your MySQL error in this [MySQL server error message reference](https://dev.mysql.com/doc/refman/5.5/en/server-error-reference.html).  
 b. NO – Proceed to [Step 17](#zd-accordion-17).

-------This is one whole accordion panel.-------------

##### Step 17

Do you have MySQL database dead locks or an unresponsive MySQL database?
a. YES – Proceed with checking for MySQL dead locks in this [Deadlocks in MySQL](https://support.magento.com/hc/en-us/articles/360031622211) article.  
 b. NO – Open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) for further investigation.

-------This closes the main level that holds everything.-------------



[Back to Step 1](#zd-accordion-1)



Click [HERE](https://support.magento.com/hc/en-us/articles/360031107111) to see the Site Down Troubleshooting Flowchart.

