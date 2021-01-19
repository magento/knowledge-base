---
title: Troubleshooting Best Practices for Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360034340372-Troubleshooting-Best-Practices-for-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,configuration,deploy,deployment,search,query,index,database,extension,storage,Elasticsearch,deployment error,best practices,site down
---

Follow these best practices for effective troubleshooting of Magento Commerce Cloud issues.

Issue Type
Best Practices
Resource

Deployment Issues

**Follow deployment best practices.** 13% of support tickets involve deployment issues. The best practices have been updated to include ways to prevent many of these causes.
[Best practices for builds and deployment](https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#best-practices)

Site Down Issues

**Use the Site Down Troubleshooter.** Crons can be long running and can overrun each other. They are the source of many outages and performance issues.

[Site Down Troubleshooter](https://support.magento.com/hc/en-us/articles/360029351531-Site-Down-Troubleshooter)[How to reset cron jobs](https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html)

Performance Issues

**If you're not using Magento banner disable it.**When the banner is enabled but not used, resources are used to do lookups to the database when they are not required, and it will cause performance issues. 
[Welcome to the New Relic University Learning Portal](https://learn.newrelic.com)

Search Issues

[MySQL catalog search engine will be removed in Magento 2.4.0](https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0). You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html).

[Set up Elasticsearch service](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html)

Custom Errors

**Don't deploy during peak times.**Adding and removing users will trigger a deployment.
[Zero downtime deployment](https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html)

Database Errors and Issues

**Database issues cause deployment** (post hook issues), **performance and site down situations**. Many involve errors or insufficient database space allocation.

[MariaDB Error Codes](https://mariadb.com/kb/en/library/mariadb-error-codes/#mariadb-specific-error-codes)[Manage Storage Space, including database](https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=database%20space)

Configuration Issues

**Index by Schedule instead of Index at Save.**This is the most efficient indexing configuration. Index on Save will cause full reindexing. 
[Configure indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html?itm_source=devdocs&itm_medium=quick_search&itm_campaign=federated_search&itm_term=index%20by%20schedul#configure-indexers)

Custom Code Issues

**Check your slow query logs for opportunities** to identify and possibly kill processes taking too much time to complete. Slow queries can cause database deadlocks resulting in site downs and performance issues. 
[Checking Slow queries and Processes taking too long in MySQL](https://support.magento.com/hc/en-us/articles/360030903091)

Extension Issues
**Only use verified extensions currently on the Magento Marketplace.**
[Extensions for Magento](https://marketplace.magento.com/extensions.html)

Resource Issues

**Monitor available memory and space, and optimize storage.**You may have available space prior to an action that consumes significant resources (deployment for example). Poor optimization of file storage, (too many large rich images, for example) can also contribute to insufficient space. Low resources cause performance issues, site down, stuck deployments, and deployment failures.

[Manage disk space](https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html)[File storage low/exhausted, specific page loads are slow](https://support.magento.com/hc/en-us/articles/360034626052)

