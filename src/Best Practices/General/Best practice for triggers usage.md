---
title: Best practice for triggers usage 
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,MySQL,database,triggers,best practices,2.3.x,2.4,2.4.x
---

This article explains how to avoid performance issues when using MySQL triggers. Triggers are used to log changes into audit tables. 

### Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

<p class="warning">Always test in the Staging environment prior to making any changes to the Production environment.</p>

Triggers are interpreted as code meaning that MySQL does not precompile them.

Hooking into the query’s transaction space, triggers add overhead to a parser and interpreter for each query performed with the table. The triggers share the same transaction space as the original queries, and while those queries compete for locks on the table, the triggers independently compete for locks on another table.

This additional overhead can have a negative performance on the site if many triggers are used. 

<p class="warning">Magento does not support any custom triggers in the Magento database because custom triggers can introduce incompatibilities with future Magento versions. Follow best practice in <a href="https://devdocs.magento.com/guides/v2.4/install-gde/prereq/mysql.html#instgde-prereq-mysql-intro">Magento Installation Guide > MySQL > General Guidelines</a>.</p>

To avoid an issue with triggers negatively impacting performance follow these best practices:

* If you have custom triggers that write some data when the trigger is executed, move this logic to write directly to the audit tables instead. For example, by adding an additional query in the application code, after the query you aimed to create the trigger for.
* Review existing custom triggers and consider removing them and writing directly to the tables from the application side. You can check for existing triggers in your database by following steps in [MySQL 8.0 Reference Manual >  SHOW TRIGGERS Statement](https://dev.mysql.com/doc/refman/8.0/en/show-triggers.html)[.](https://dev.mysql.com/doc/refman/8.0/en/show-triggers.html)
* If assistance is required or if there are questions or concerns, [submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related reading

* To learn more about MySQL triggers, refer to DevDocs [Installation Guide > MySQL](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/mysql.html#instgde-prereq-mysql-intro).
* To learn about database best practices, refer to KB [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud).