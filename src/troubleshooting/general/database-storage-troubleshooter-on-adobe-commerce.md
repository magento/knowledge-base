---
title: Database storage troubleshooter on Adobe Commerce
labels: Adobe Commerce,cloud infrastructure,database,troubleshooting,MySQL,error,space,disk space,disk,database,storage,site down,connection,queries, troubleshooting,connection
---

This article is a troubleshooter tool for customers on Adobe Commerce having issues with databases. Click on each question to reveal the answer in each step of the troubleshooter. Depending on your symptoms and configuration, the troubleshooter will explain how to troubleshoot space and configuration issues with databases.

<div class="zd-accordion">
<div class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">Do you have a <code>/tmp</code> issue caused by a lack of space?<br><br>
This can be indicated by a range of symptoms including the <code>/tmp</code>mount being full, site down, or not being able to SSH into a node. You may also be experiencing errors like <em>No space left on device (28)</em>. (For a list of errors resulting from <cocde>/tmp</code> being full review <a href="https://support.magento.com/hc/en-us/articles/360059094711" target="_blank" rel="noopener"> /tmp mount full</a>). <br><br>
Or do you have a <code>/data/mysql</code> issue caused by a lack of space? This can also be indicated by variety of symptoms including site outage, customers unable to add products to cart, connection failure to database, and Galeria errors like <i>SQLSTATE<span class="error">[08S01]</span>: Communication link failure: 1047 WSREP</i>. (For a list of errors resulting from low MySQL disk space, refer to <a href="https://support.magento.com/hc/en-us/articles/360037591972" target="_blank" rel="noopener">MySQL disk space is low on Adobe Commerce for Cloud</a>).<br>
<br>If you are unsure if you have a disk space issue and you have a New Relic account go to the <a href="https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page/"  target="_blank" rel="nonopener">New Relic Infrastructure monitoring Hosts page</a>. From there click on the <strong>Storage</strong> tab, change the <strong>Chart Shows</strong> drop down from 5 to 20 results and look in the table for high disk use in the Disk Used % chart or table. For more detailed steps, refer to <a href="https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page/#storage-tab" target="_blank" rel="nonopener"> New Relic infrastructure Monitoring > Storage tab</a>.<br>
<br>
If you have any of the symptons described above check the state of your inodes to make sure this is not being caused by a file number issues. To do so run the following command in the CLI/Terminal:<br>

<code>df -ih</code><br>

Is IUse% &gt; 90%?<br>

</div>

<p class="zd-accordion-text">
 a. YES – This is caused by having too many files. Review the steps to remove files safely in <a href="https://support.magento.com/hc/en-us/articles/4406832353677-Safely-delete-files-when-out-of-disk-space-Adobe-Commerce-on-our-cloud-infrastructure" target="_blank" rel="noopener">Safely delete files when out of disk space, Adobe Commerce on our cloud infrastructure</a>. Proceed to
 <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a> after you have completed these steps. If you want to request more space, <a href="https://support.magento.com/hc/en-us/articles/360019088251" target="_blank" rel="noopener">submit a support ticket</a>.<br>
 b. NO – Check space. Run <code>df -h | grep mysql </code>
and then <code>df -h | grep tmp</code> in the CLI/Terminal to check disk space usage in the <code>/tmp</code> and <code>/data/mysql</code> directories. Proceed to   <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p></div>

<div class="zd-accordion-panel">
<h5>Step 2</h5>
 <div class="zd-accordion-section">After you reduce the number of files, run <code>df -h | grep mysql </code>
and then <code>df -h | grep tmp</code> in the CLI/Terminal to check disk space usage in <code>/tmp</code> and <code>/data/mysql</code>.

  &gt; 70% used for <code>/tmp</code> or <code>/data/mysql</code>?
 </div>
 <p class="zd-accordion-text">
  a. YES – Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.&nbsp;<br>
  b. NO – Queries may be exhausting the available storage. This may crash the node, killing the query and removing the <code>tmp</code> files. Examine the output of the <code>SHOW PROCESSLIST;</code> in the MySQL CLI for queries that may be the cause of the problem. <a href="https://support.magento.com/hc/en-us/articles/360019088251" target="_blank" rel="noopener">Submit a support ticket</a>, requesting more space.</p></div>

<div class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">
Which directory has   &gt; 70% used?<code>/tmp</code> or <code>/data/mysql</code>?
<br>Note: By default database tmpdir writes to <code>/tmp</code>. To check your database configuration is still on this default run the following command in MySQL CLI: <code>SHOW VARIABLES LIKE "TMPDIR";</code> If the database timpdir is still writing to <code>/tmp</code> you will see <code>/tmp</code> in the Value column.

 a. <code>/tmp</code> – Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.&nbsp;<br>
 b. <code>/data/mysql</code> – Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.&nbsp;<br>
</div>

<div class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section"> <a href="https://support.magento.com/hc/en-us/articles/4403572246285" target="blank" rel="noopener">Troubleshoot /tmp mount full for Adobe Commerce</a>, scroll down the article and try the solutions and best practices. Then run <code>df -h | grep mysql </code>
and then <code>df -h | grep tmp</code> in the CLI/Terminal to check disk space usage in <code>/tmp</code> and <code>/data/mysql</code>directories<br>
&nbsp; &lt; 70% used?<br>

<strong>Note:</strong> The solutions in  <a href="https://support.magento.com/hc/en-us/articles/4403572246285" target="blank" rel="noopener">Troubleshoot /tmp mount full for Adobe Commerce</a> are designed for merchants who have not changed the variables for database tmpdir, which by default writes to <code>/tmp</code>. If you have changed the tmpdir value, the instructions in <a href="https://support.magento.com/hc/en-us/articles/4403572246285" target="blank" rel="noopener">Troubleshoot /tmp mount full for Adobe Commerce</a> will not help.

 a. YES – You have solved the issue.&nbsp;<br>
 b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251" target="_blank" rel="noopener">Submit a support ticket</a>, requesting more space.</span>
</p>
</div>

<div class="zd-accordion-panel">
<h5>Step 5</h5>
 <div class="zd-accordion-section">Your database configuration may no longer be at the original default. Find the database tmpdir config by running in the MySQL CLI: <code>SELECT @@DATADIR;</code>. If <code>/data/mysql/</code> is outputed the database tmpdir is now writing to <code>/data/mysql/</code>. Try to increase space in this directory by following steps in <a href="https://support.magento.com/hc/en-us/articles/360037591972" target="_blank" rel="noopener">MySQL disk space is low on Adobe Commerce on our cloud infrastructure</a>. Then run <code>df -h | grep mysql </code>
and then <code>df -h | grep tmp</code> in the CLI/Terminal to check disk space usage in <code>/data/mysql</code> and <code>/tmp</code>.<br>&nbsp; &lt; 70% used?</div>
<p class="zd-accordion-text">
 a. YES – You have solved the issue.&nbsp;<br>
 b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251" target="_blank" rel="noopener">Submit a support ticket</a>, requesting more space.</span>
</p></div>
<p><a href="#zd-accordion-1">Back to Step 1</a></p>
