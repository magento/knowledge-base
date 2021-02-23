---
title: Upgrade MariaDB 10.0 to 10.2 for Magento Commerce Cloud 
link: https://support.magento.com/hc/en-us/articles/360052191791-Upgrade-MariaDB-10-0-to-10-2-for-Magento-Commerce-Cloud-
labels: upgrade,Magento Commerce Cloud,ece-tools,database,update,End of Life,2.3.x,how to,tables,2.4.x,MariaDB,MariaDB 10.2,MariaDB 10.3,MariaDB 10.4,MariaDB 10.0,MariaDB 10.1
---

<p>MariaDB 10.0 and 10.1 are end-of-life (EOL). <a href="https://endoflife.date/mariadb">Support ended 31 Mar 2019 and 17 Oct 2020 respectively</a>. This article explains how to upgrade MariaDB from 10.0 to 10.2 or 10.2 to 10.3 or to 10.4, in order to use Magento Commerce Cloud.</p>
<p class="info">MariaDB 10.0 is end-of-life (EOL) and is not supported in current Magento versions. It is best practice to move off any EOL version within 30 days of its EOL.</p>
<h2>Affected product and versions</h2>
<ul>
<li>MariaDB 10.2 is recommended for Magento Commerce Cloud 2.3.x.</li>
<li>MariaDB 10.4 is recommended for 2.4.x. MariaDB 10.3 is also compatible with Magento Commerce Cloud 2.4.x.</li>
</ul>
<h2>Upgrade steps</h2>
<p>To upgrade from MariaDB 10.0 to 10.2 or 10.2 to 10.3 or to 10.4, complete the following steps:</p>
<ol>
<li>Create a <a href="https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump">DB backup using ECE-Tools DB backup commands</a>. This must be done before steps 2 and 3 in case something goes wrong while updating tables/rows.</li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360048389631">Check and convert all compact tables to dynamic tables</a>. This is required to avoid potential data loss during the database upgrade.
</li>
<li>Check for MYISAM tables. You need to <a href="https://support.magento.com/hc/en-us/articles/360041997312#convert">convert all MyISAM tables to InnoD</a>. <br/>
</li>
<li>
After you have prepared the database tables and rows (the previous two steps), create a <a href="https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump">DB backup using ECE-Tools DB backup commands</a>. </li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">Open a support ticket</a> to schedule the upgrade from MariaDB 10.0 to 10.2 or 10.2 to 10.3 or 10.4. In the ticket detail the date and time when you want the DB upgraded. The support team needs 48 hours' notice and the merchants dev team needs to be available. Once the time and date are agreed for the upgrade do the following:
<ol>
<li>Put your site into maintenance mode, and stop any DB activities, e.g., crons.</li>
<li>Create a <a href="https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump">DB backup using ECE-Tools DB backup commands</a>.</li>
<li>Let support know you have completed the backup. Do this via your support ticket. To get steps for viewing and tracking your tickets, refer to <a href="https://support.magento.com/hc/en-us/articles/360000913794#track-tickets">Magento Help Center User Guide: Track your Tickets</a>.</li>
<li>The Magento support team will begin the MariaDB upgrade process.</li>
</ol>
</li>
<li>
If all the above steps have been taken, and the database is average size, this can be done in about an hour. Larger DBs will take longer. You will be informed via your ticket once the upgrade is complete.
</li>
<li>Disable maintenance mode. Refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html#instgde-cli-maint">Enable or disable maintenance mode</a>.</li>
</ol>
<h2>Related Reading</h2>
<p>To learn more about requirements for Magento 2.4.x, refer to Magento DevDocs <a href="https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html#database">Magento 2.4 system requirements &gt; Database</a>. <br/><br/></p>
<p> </p>