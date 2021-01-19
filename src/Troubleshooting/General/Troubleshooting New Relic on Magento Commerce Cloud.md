---
title: Troubleshooting New Relic on Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360041937912-Troubleshooting-New-Relic-on-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,PHP,New Relic,GraphQL,New Relic problem,New Relic troubleshooting,accessing New Relic,how to,troubleshoot,display
---

This article provides resources for troubleshooting New Relic on Magento Commerce Cloud.

**Issue**
**Cause**
**Resources**

Access Issues

Can't see projects in New Relic.

You log in to New Relic but can't see projects you should be entitled to view/access.

In those cases, an admin user needs to add you to the project.

Support Help Center [Accessing New Relic services](https://support.magento.com/hc/en-us/articles/360039127712) article.

Data Issues

Missing data after installation.

Use the [New Relic Diagnostics utility](https://docs.newrelic.com/docs/agents/manage-apm-agents/troubleshooting/new-relic-diagnostics) to try to identify the cause. If this does not help, look at agent specific solutions. Links to articles containing these solutions are in the right-hand column.

Missing data can have different causes. You may need to:

* Verify the agent is installed.

* Verify your app name and license key.

* Restart your web server.

* Make sure your system meets compatibility requirements.

* INI settings.

* [New Relic Documentation > APM Agents > Not Seeing Data](https://docs.newrelic.com/docs/agents/manage-apm-agents/troubleshooting/not-seeing-data#apm-agents)

* [New Relic Documentation > New Relic Browser > Not Seeing Data](https://docs.newrelic.com/docs/agents/manage-apm-agents/troubleshooting/not-seeing-data#browser-agent)

* [New Relic Documentation > New Relic Infrastructure > Not Seeing Data](https://docs.newrelic.com/docs/agents/manage-apm-agents/troubleshooting/not-seeing-data#infrastructure-agents)

* [New Relic Documentation > New Relic Mobile > Not Seeing Data](https://docs.newrelic.com/docs/agents/manage-apm-agents/troubleshooting/not-seeing-data#mobile-agents)

Transactions timestamp discrepancy.  
  
You may struggle to find long transactions (more than 5 mins) using the New Relic UI. You may also find transactions displayed outside of the expected time frame.

The New Relic UI displays the time of the transaction's end, not the time when the transaction began.

To calculate the beginning of the transaction using the New Relic UI, check the duration of the transaction. Subtract the duration amount from the timestamp (end of transaction) provided by the New Relic UI.

 NerdGraph GraphQL curl queries using special characters such as | and % do not work.

New Relic "copy to curl" feature within NerdGraph does not currently provide a way to handle special characters such as|and %.

Use a different API library to solve the issue with special characters. For example, GraphQLClient Library for Graphql API on Python, or Apache.commons by Java Language calls. Review client libraries on [GraphQL](https://graphql.org/code/).

Chart and dashboard display issues.

Resolve missing charts by adding New Relic domains to the allow list or uninstall the browser extension causing the issues.

[New Relic Documentation > Charts missing or do not render](https://docs.newrelic.com/docs/apm/new-relic-apm/troubleshooting/charts-missing-or-do-not-render)

PHP Agent Issues

PHP agent does not show the correct instance count.

The number of instances can increase depending on back end processes and throughput. Differences between server values can be due to processes running on one server, but not the other server.

[New Relic Documentation > Troubleshoot the PHP agent instance count](https://docs.newrelic.com/docs/agents/php-agent/troubleshooting/troubleshoot-php-agent-instance-count)  
 

