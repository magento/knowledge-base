---
title: Troubleshoot performance using New Relic on Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360042149832-Troubleshoot-performance-using-New-Relic-on-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,performance,New Relic,New Relic Infrastructure,New Relic APM,New Relic performance,New Relic Magento,CPU,Apdex,how to
---

This article provides troubleshooting steps to solve Magento Commerce Cloud performance issues using New Relic. It also provides resources for further information. Here is a list of issues. Click to see troubleshooting steps:

 
 * [Low Apdex score](https://support.magento.com/hc/en-us/articles/360042149832#low_user_satisfaction)
 * [High CPU usage](https://support.magento.com/hc/en-us/articles/360042149832#high_cpu_usage)
 * [High I/O operations](https://support.magento.com/hc/en-us/articles/360042149832#i_o_operations)
 * [Outage](https://support.magento.com/hc/en-us/articles/360042149832#outage) 
 
    **Issue** **Troubleshooting** **Resources**    Low Apdex score:

 Your New Relic [Apdex score](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measuring-user-satisfaction) measures users' satisfaction with the response time of your web applications and services. 

   You log in to [New Relic](https://login.newrelic.com/login) > **APM** >**Overview**. On the right side of the **Overview** pageyou see the **Apdex score** graph. An Apdex score of 0.5 or less is a point of concern and warrants investigation:  
   
 Web-transaction times (server requests):

 
 
 2. Log in to [New Relic](https://login.newrelic.com/login) > **APM** > (Select an app) > **Overview**. Make sure the filter is set to **Web transactions time** on the main chart drop-down filter. Below in the **Transactions** table look for **App server time**. Verify if you have any long running or suspicious transactions.
 4. Investigate them individually by going to **Monitoring** > **Transactions** and make sure to set the filters for **Web** and **Most time consuming***.*  
 6. Then search for third-party modules that consume resources: payment providers, ERP, etc.
 8. In the **Monitoring** section of APM: 
	 2. Click **Transactions**.
	 4. Scroll down, click **Show all transactions** table.
	 6. You can sort transactions by [various parameters](https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems#table_view) and jump to those that cause suspicion.
	 8. Review those transactions with a low **Apdex** score, unusually high **Count** or high **Avg** time, or **Dissat** %.
	 10. Click on each individual transaction. If you cannot resolve the issue, [submit a support ticket.](https://support.magento.com/hc/en-us/articles/360019088251) 
	 12. If you need to investigate further consider checking non-web transactions. 
 
 
 Non web-transaction time (operations and background tasks):  


 
 
 2. Log in to [New Relic](https://login.newrelic.com/login) > **APM** > (Select an app) > **Overview.** Make sure you select **Non-web transactions time** on the main graph drop-down filter. Click individual transactions in the **Transactions** table. Look for long running or suspicious transactions. This includes backend jobs, cron jobs or import/export jobs, including third-party.
 
 
   To learn more about New Relic Apdex score refer to [New Relic Documentation > APM Apdex > Measure user satisfaction](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction). 

     High CPU usage:  


 High CPU usage can indicate there is a particularly busy service, like MySQL, Redis, etc.

   
 2. Log in to [**New Relic**](https://login.newrelic.com/login) > **Infrastructure** > **Processes**.
 4. Review CPU graphs to see if there is any stuck or high consuming process that is using more than 100% CPU time and compare against processor count on the instance. Pay attention to peaks in resource utilization. It is not recommended that you kill a process, unless it is a stuck cron. 
 
   To learn more about performance metrics, particularly CPU percentage, I/O bytes, and memory usage for individual or groups of processes, refer to [New Relic Documentation > Infrastructure UI page > Infrastructure Host page > Processes tab](https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page#processes-tab).

       High I/O operations:  
  
For each customer this number would be individual, but will be significantly different from average.

   Look for an unusual spike compared to previous average I/O operations:

 
 2. Log in to [New Relic](https://login.newrelic.com/login) > **Infrastructure** > **Processes**.
 4. Review **I/O Read Bytes Per Second** graph.
 6. Record the time of the spike.
 8. Click on **APM**. 
 10. Make sure you select **web transactions time** on the main graph drop-down filter.
 12. Set the time for the time of the spike you recorded. 
 14. Search for **transactions** that have caused high I/O operations.
 16. Drill down into each **Transaction trace** > **Trace details** to find what might be causing issues.
 
     Outage:  
   
 New Relic determines outages by Apdex. You will see a red line on the **Apdex score** graph which indicates Apdex < 0.4, which is considered an outage.

   Investigating an outage may take several steps, examining web and non-web transactions, databases and third-party transactions.  
   
 Web Transactions:

 
 2. Log in to [New Relic](https://login.newrelic.com/login) > **APM** > **Overview**. Make sure the filter is set to **Web transactions time** on the drop-down graph filter. 
 4. Manually narrow the time window.
 6. Click on **Transactions**. Make sure the filters are set to **Web** and **Most time consuming**. Investigate the longest running transaction.
 8. If you need to investigate further consider checking non-web transactions. 
 
 Non-web Transactions:

 
 2. Go back to the **Overview** page and switch to **Non-web transactions** on the drop-down filter.
 4. Review **transaction traces** at the very bottom of the page, one by one.
 6. Depending on the issue you may need to use a third-party tool like a PHP profiler to find a bottleneck. 
 8. If you need to investigate further consider examining database processes.
 
 Database processes:  


 
 2. On the APM page go to **Monitoring** > **Databases**.
 4. Sort by **Most time consuming**.
 6. Review TOP queries. Note: UDPATE or INSERT queries are the most CPU consuming queries.
 8. Switch to **Throughput** from **Sort By** selector and look for processes that have caused the database throughput to drop down.
 10. If you need to investigate further consider examining third-party services. 
 
 Third-party services:

 
 2. On the APM page go to **Monitoring** > **External services**.
 4. Select **Slowest average response time** from **Sort by** drop-down list.
 6. Look for processes that occurred just before the outage.
 
   To learn more about investigating specific performance problems, refer to [New Relic Documentation > APM UI pages > Transactions page > Use drill-down functions](https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems#tx_functions).

    