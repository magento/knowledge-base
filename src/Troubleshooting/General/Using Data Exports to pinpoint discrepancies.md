---
title: Using Data Exports to pinpoint discrepancies
link: https://support.magento.com/hc/en-us/articles/360016730631-Using-Data-Exports-to-pinpoint-discrepancies
labels: troubleshooting,Magento Business Intelligence,data discrepancies
---

<p>This article provides solutions for troubleshooting discrepancies in your Magento BI data. Data Exports are a useful tool for comparing your Magento BI data to your source data in order to pinpoint data discrepancies in your reports, especially if the <a href="https://support.magento.com/hc/en-us/articles/360016731271-Diagnosing-a-data-discrepancy">data discrepancy diagnostic checklist</a> didn't help you pinpoint the problem. This article will walk you through a real-life example of how data discrepancies can be pinpointed using Data Exports. </p>
<p>Take this analysis, for example:</p>
<p><img alt="" src="https://support.magento.com/hc/article_attachments/360013876972/Exports_Discrepancies_1.png"/></p>
<p>There’s a suspicious dip in November 2014. $500,780.94 in revenue? That doesn't sound right. You've confirmed that there’s more revenue showing for the month of November 2014 in your source database, and you've double-checked that the Revenue metric used in this report is correctly defined. It seems that the data in the Magento BI data warehouse is incomplete which can be confirmed using a Data Export.</p>
<h2>Exporting the data</h2>
<p>To get started, click the gear in top right corner of the chart and then the Raw Export option in the dropdown menu. This will give you a raw export of the data behind the chart.</p>
<p><img alt="" src="https://support.magento.com/hc/article_attachments/360013892331/Export_Discrepancies_5.gif"/></p>
<p>In the Raw Data Export menu, you can select the table to export from along with the columns to include in the export. Filters can also be applied to the result set.</p>
<p>In our example, the Revenue metric used on this report uses the order_total field defined on the orders table, using the date as its timestamp. In our export, we want to include all order_id values for November 2014 and their order_total. The Revenue metric doesn’t use any filters, but we'll add a filter to the export to limit the result set to just November 2014.</p>
<p>Here’s what the Raw Data Export menu looks like for this example:</p>
<p><img alt="" src="https://support.magento.com/hc/article_attachments/360013892291/Exports_Discrepancies_2.png"/></p>
<p>Click Export Data to begin the export. A window with the details of the export, including the status, will display. Prepping the export takes a few minutes, which makes now a good time to perform an analogous extract of our source data for November 2014, including date, order_id, and the order_total. We'll open this file in Excel and leave it up, as we’ll come back to it shortly.</p>
<p>When the Download button appears on the Raw Data Exports window, click it to download the zip file containing the CSV file.</p>
<p><img alt="" src="https://support.magento.com/hc/article_attachments/360013892271/Export_Discrepancies_6.png"/></p>
<p>At this point, we need to get all the data into one sheet to find the problem. We'll import the CSV file (the export from Magento BI) into a different sheet of the Excel file containing our source data.</p>
<h2>Pinpointing the problem</h2>
<p>Now that all the data is in one place, we can look for the source of the discrepancy. Comparing the number of rows in each sheet will help us pinpoint the problem. Let's take a closer look at each situation.</p>
<h4>Both sheets contain the same number of rows</h4>
<p>If both systems have the same row count and the Revenue metric isn’t matching the source data, then the order_total must be off somewhere. It’s possible that the order_total field has been updated in your source database and Magento BI isn’t picking up these changes.</p>
<p>To confirm this, take a look at whether or not the order_total column is being rechecked. Head to the Data Warehouse Manager and click the orders table. You’ll see the <a href="https://support.magento.com/hc/en-us/articles/360016506452-Configuring-data-rechecks">recheck frequency</a> listed in the ‘Changes?’ column. The order_total field should be set to recheck as often as it is expected to change; if it’s not, go ahead and set it to your desired recheck frequency.</p>
<h4><img alt="" src="https://support.magento.com/hc/article_attachments/360013876912/Export_Discrepancies_4.gif"/></h4>
<p>If the recheck frequency is already set correctly, then something else is wrong. Refer to the <a href="#support">Contacting Support section</a> at the end of this article for next steps.</p>
<h2>The source database has MORE rows than Magento BI</h2>
<p>If the source database has more rows than Magento BI and the gap is greater than the number of orders that you can expect to come in during the length of an update cycle, there may be a connection issue. This means that Magento BI isn’t able to pull in new data from the source database, which can happen for several reasons.</p>
<p>Navigate to the Connections page and take a look at the status of the data source containing the order table:</p>
<ol>
<li>
If the status is Re-auth, the connection isn’t using the correct credentials. Click into the connection, enter the correct credentials, and retry.</li>
<li>
If the status is Failed, the connection may not be setup properly on the server side. Failed connections usually arise from an incorrect host name or the target server not accepting connections on the specified port.<br/> <br/> Click into the connection and double-check the spelling of the hostname and that the correct port is entered. On the server side, make sure that the port can accept connections and that your firewall has the Magento BI IP address (54.88.76.97/32) as allowed.<br/> <br/> If the connection continues to fail, refer to the <a href="#support">Contacting Support section</a> at the end of this article for next steps.</li>
<li>
If the status is Successful, then the connection isn’t the problem and RJ support needs to get involved. Refer to the <a href="#support">Contacting Support section</a> at the end of this article for next steps.</li>
</ol>
<h2>The source database has FEWER rows than Magento BI</h2>
<p>If the source database has fewer rows than Magento BI, then it’s possible that rows are being deleted from the source database and Magento BI isn’t picking up these deletions. <a href="https://support.magento.com/hc/en-us/articles/360016731631-Optimizing-your-database-for-analysis#delete">Deleting data</a> can lead to discrepancies, lengthier update times, and a slew of logistical headaches, so we strongly recommend you don’t ever delete data unless it’s really necessary.</p>
<p>If, however, rows are deleted from the table, take a look at the recheck frequency on the primary key. Rechecking the primary key means that the table will be checked for deleted rows.</p>
<p>In the Data Warehouse Manager, primary key columns are marked with a key symbol. In our example, the primary key is the order_id column:</p>
<p><img alt="" src="https://support.magento.com/hc/article_attachments/360013876892/Export_Discrepancies_3.png"/></p>
<p>If the primary key is already set to be rechecked or rows are never deleted from this table, then you’ll need RJ support to pinpoint the problem. Refer to the following section for next steps.</p>
<h2>Contacting Support</h2>
<p>If you aren't able to pinpoint the source of the problem, you'll need to loop in RJ Support. Before you submit a ticket, please do the following:</p>
<ul>
<li>
If your source database and Magento BI have the same number of rows and recheck frequencies are set correctly, perform a VLOOKUP in your spreadsheet to find which order_id values have a different order_total value between Magento BI and your source database. Include these values when you submit your ticket.</li>
<li>
If your source database has MORE rows than Magento BI and the connection shows as Successful or continues to fail, we'll need to know the name of the connection and the error message you're seeing, if there is one.</li>
<li>
If your source database has FEWER rows than Magento BI, rows aren't deleted from the table, and recheck frequencies are set correctly, perform a VLOOKUP in your spreadsheet to find which order_id values are in Magento BI but not in your source database. Include these values when you submit your ticket.</li>
</ul>
<h1>Related</h1>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360016731271-Diagnosing-a-data-discrepancy">Data discrepancy diagnostic checklist</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016506472-Submitting-a-data-discrepancy-ticket">Submitting a data discrepancy ticket</a></li>
</ul>