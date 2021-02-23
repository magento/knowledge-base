---
title: Best practice for triggers usage 
link: https://support.magento.com/hc/en-us/articles/360048050352-Best-practice-for-triggers-usage-
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,MySQL,database,triggers,best practices,2.3.x,2.4,2.4.x
---

<p>This article explains how to avoid performance issues when using MySQL triggers. Triggers are used to log changes into audit tables. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p class="warning">Always test in the Staging environment prior to making any changes to the Production environment.</p>
<p>Triggers are interpreted as code meaning that MySQL does not precompile them.</p>
<p>Hooking into the query’s transaction space, triggers add overhead to a parser and interpreter for each query performed with the table. The triggers share the same transaction space as the original queries, and while those queries compete for locks on the table, the triggers independently compete for locks on another table.</p>
<p>This additional overhead can have a negative performance on the site if many triggers are used. </p>
<p class="warning">Magento does not support any custom triggers in the Magento database because custom triggers can introduce incompatibilities with future Magento versions. Follow best practice in <a href="https://devdocs.magento.com/guides/v2.4/install-gde/prereq/mysql.html#instgde-prereq-mysql-intro">Magento Installation Guide &gt; MySQL &gt; General Guidelines</a>.</p>
<p>To avoid an issue with triggers negatively impacting performance follow these best practices:</p>
<ul>
<li>If you have custom triggers that write some data when the trigger is executed, move this logic to write directly to the audit tables instead. For example, by adding an additional query in the application code, after the query you aimed to create the trigger for.</li>
<li>Review existing custom triggers and consider removing them and writing directly to the tables from the application side. You can check for existing triggers in your database by following steps in <a href="https://dev.mysql.com/doc/refman/8.0/en/show-triggers.html">MySQL 8.0 Reference Manual &gt;  SHOW TRIGGERS Statement</a><a href="https://dev.mysql.com/doc/refman/8.0/en/show-triggers.html">.</a>
</li>
<li>If assistance is required or if there are questions or concerns, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.</li>
</ul>
<h2>Related reading</h2>
<ul>
<li>To learn more about MySQL triggers, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/mysql.html#instgde-prereq-mysql-intro">Installation Guide &gt; MySQL</a>.</li>
<li>To learn about database best practices, refer to KB <a href="https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud">Database best practices for Magento Commerce Cloud</a>.</li>
</ul>