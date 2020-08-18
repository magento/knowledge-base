Follow these best practices for effective troubleshooting of Magento Commerce Cloud issues.&nbsp;

<table style="width: 1028px;">
<tbody>
<tr>
<th style="width: 179px;">Issue Type</th>
<th style="width: 523px;">Best Practices</th>
<th style="width: 327px;">Resource</th>
</tr>
<tr>
<td style="width: 179px;">Deployment Issues</td>
<td style="width: 523px;">
<strong>Follow deployment best practices. </strong>13% of support tickets involve deployment issues. The best practices have been updated to include ways to prevent many of these causes.</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#best-practices" rel="noopener" target="_blank">Best practices for builds and deployment</a></td>
</tr>
<tr>
<td style="width: 179px;">Site Down Issues</td>
<td style="width: 523px;">
<strong>Use the Site Down Troubleshooter.</strong> Crons can be long running and can overrun each other. They are the source of many outages and performance issues.&nbsp;</td>
<td style="width: 327px;">
<a href="https://support.magento.com/hc/en-us/articles/360029351531-Site-Down-Troubleshooter" rel="noopener" target="_blank">Site Down Troubleshooter<br/></a><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html" rel="noopener" target="_blank">How to reset cron jobs</a>
</td>
</tr>
<tr>
<td style="width: 179px;">Performance Issues</td>
<td style="width: 523px;">
<strong>If you're not using Magento banner disable it.&nbsp;</strong>When the banner is enabled but not used, resources are used to do lookups to the database when they are not required, and it will cause performance issues.&nbsp;</td>
<td style="width: 327px;"><a href="https://learn.newrelic.com" rel="noopener" target="_blank">Welcome to the New Relic University Learning Portal</a></td>
</tr>
<tr>
<td style="width: 179px;">Search Issues</td>
<td style="width: 523px;">
<strong>Enable Elasticsearch even if using 3rd party search. </strong>If the third party search fails, Elasticsearch is not set up and it fails over to MySQL as the default search. Elasticsearch is the default search in newer software versions. MySQL search has been deprecated and will affect site performance.&nbsp;</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html" rel="noopener" target="_blank">Set up Elasticsearch service</a></td>
</tr>
<tr>
<td style="width: 179px;">Custom Errors</td>
<td style="width: 523px;">
<strong>Don't deploy during peak times.&nbsp;</strong>Adding and removing users will trigger a deployment.</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html" rel="noopener" target="_blank">Zero downtime deployment</a></td>
</tr>
<tr>
<td style="width: 179px;">Database Errors and Issues</td>
<td style="width: 523px;">
<strong>Database issues cause deployment</strong> (post hook issues), <strong>performance and site down situations</strong>. Many involve errors or insufficient database space allocation.</td>
<td style="width: 327px;">
<a href="https://mariadb.com/kb/en/library/mariadb-error-codes/#mariadb-specific-error-codes" rel="noopener" target="_blank">MariaDB Error Codes<br/></a><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=database%20space" rel="noopener" target="_blank">Manage Storage Space, including database</a>
</td>
</tr>
<tr>
<td style="width: 179px;">Configuration Issues</td>
<td style="width: 523px;">
<strong>Index by Schedule instead of Index at Save.&nbsp;</strong>This is the most efficient indexing configuration. Index on Save will cause full reindexing.&nbsp;</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html?itm_source=devdocs&amp;itm_medium=quick_search&amp;itm_campaign=federated_search&amp;itm_term=index%20by%20schedul#configure-indexers" rel="noopener" target="_blank">Configure indexers</a></td>
</tr>
<tr>
<td style="width: 179px;">Custom Code Issues</td>
<td style="width: 523px;">
<strong>Check your slow query logs for opportunities</strong> to identify and possibly kill processes taking too much time to complete. Slow queries can cause database deadlocks resulting in site downs and performance issues.&nbsp;</td>
<td style="width: 327px;"><a href="https://support.magento.com/hc/en-us/articles/360030903091" rel="noopener" target="_blank">Checking Slow queries and Processes taking too long in MySQL</a></td>
</tr>
<tr>
<td style="width: 179px;">Extension Issues</td>
<td style="width: 523px;"><strong>Only use verified extensions currently on the Magento Marketplace.</strong></td>
<td style="width: 327px;"><a href="https://marketplace.magento.com/extensions.html" rel="noopener" target="_blank">Extensions for Magento</a></td>
</tr>
<tr>
<td style="width: 179px;">Resource Issues</td>
<td style="width: 523px;">
<strong>Monitor available memory and space.&nbsp;</strong>You may have available space prior to an action that is consumed during the action (deployment for example). Low resources cause performance issues, site down, stuck deployments and deployment failures.&nbsp;</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html" rel="noopener" target="_blank">Manage disk space</a></td>
</tr>
</tbody>
</table>