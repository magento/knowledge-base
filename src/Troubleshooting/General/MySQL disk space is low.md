---
title: MySQL disk space is low
link: https://support.magento.com/hc/en-us/articles/360037591972-MySQL-disk-space-is-low
labels: Magento Commerce Cloud,MySQL,mysql disk space,large tables,2.3.x,2.2.x,how to
---

<p>This article provides solutions to avoid running out of space for MySQL on Magento Commerce Cloud.</p>
<h3>Affected products and versions</h3>
<p>Magento Commerce Cloud 2.2.x, 2.3.x</p>
<h2>Issue</h2>
<p>The database gets too big. Symptoms might include losing database connection and/or database upload error. </p>
<p>To check the amount of space used by the database, run the <code class="language-bash">df -h
</code> command, as described in <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html">Manage disk space</a>.</p>
<p>Less than 10% of free memory on MySQL disk is a primary indicator of an outage.</p>
<h2>Solution</h2>
<p>Solution options:</p>
<ul>
<li>Check if there are large tables and consider if any of them can be flushed. For example, the table with reports can usually be flushed. For details on how to find large tables, see the <a href="https://support.magento.com/hc/en-us/articles/360038957591">Find Large MySQL tables</a> article.</li>
<li>Set up a cron job to track and flush these tables.</li>
<li>Allocate more disk space for MySQL, if you have some unused. See the <a href="https://support.magento.com/hc/en-us/articles/360038374052">Check disk space limit</a> article.
<ul>
<li>For Starter plan, all environments, and Pro plan Integration environments, you can allocate the disk space if you have some unused, for details see the <a href="https://support.magento.com/hc/en-us/articles/360038761511">Allocate more space for MySQL</a> article.</li>
<li>For Pro plan Staging and Production environments, contact support to allocate more disk space if you have some unused. </li>
</ul>
</li>
<li>If you have reached your space limit and still experience low space issues, consider buying more disk space, contact your Customer Success Manager (CSM) for details.</li>
</ul>
<p> </p>
<p> </p>