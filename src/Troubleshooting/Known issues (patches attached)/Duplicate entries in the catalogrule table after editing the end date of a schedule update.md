---
title: Duplicate entries in the catalogrule table after editing the end date of a schedule update
link: https://support.magento.com/hc/en-us/articles/360025470392-Duplicate-entries-in-the-catalogrule-table-after-editing-the-end-date-of-a-schedule-update
labels: Magento Commerce,patch,troubleshooting,duplicate entry,known issues,2.2.3
---

<p>This article provides a patch for the known Magento Commerce 2.2.3 issue where editing the end date or time of a catalog price rule schedule update results in adding duplicate entries to the <code>catalogrule</code> table and errors in the <code>catalogrule_rule</code> (Catalog rule product) indexer reindex.</p>
<h2>Issue</h2>
<p>When you change the end date or time of an existing catalog price rule schedule update, duplicate entries are created in the <code>catalogrule</code> database table. As a result, the <code>catalogrule_rule</code> reindex fails with the following error in the exception log: <em>"Item with the same ID already exists"</em>.</p>
<p>Steps to reproduce:</p>
<p>Prerequisites: The <code>catalogrule_rule</code> indexer is set to "Update on Schedule" mode.</p>
<ol>
<li>In the Magento Admin, create a new Catalog Price Rule under Marketing &gt; Promotions &gt; Catalog Price Rule.</li>
<li>In the Catalog Price Rule grid, click Edit, schedule a new Update and set Status to <em>Active.</em>
</li>
<li>Click View/Edit next to the newly created Update and change the end date to an earlier time.</li>
<li>Save the Update.</li>
<li>Run the reindex command for the <code>catalogrule_rule</code> indexer.</li>
</ol>
<p>Expected result:<br/> The <code>catalogrule_rule</code> indexer is reindexed successfully. No duplicate entries in the <code>catalogrule</code> table.</p>
<p>Actual result:<br/> Reindex fails with the following error: "<em>Item with the same ID already exists"</em>, because there are duplicate entries in the <code>catalogrule</code> table.</p>
<h2>Solution</h2>
<p>To solve the issue you need to apply the attached patch and remove the existing duplicated entries. See the <a href="#remove">Remove duplicated entries</a> section for details about checking if the duplicates exist and removing them.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360024568111/MDVA-10974_EE_2.2.3_COMPOSER_v2.patch">Download MDVA-10974_EE_2.2.3_COMPOSER_v2.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.3</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) from 2.2.1 to 2.2.5</li>
<li>Magento Commerce from 2.2.1 to 2.2.2, and from 2.2.4 to 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Remove duplicated entries</h2>
<p class="info">Please make sure to have a recent backup before any manipulations.</p>
<p>Take these steps to locate the duplicated entries and delete them:</p>
<ol>
<li>Run the following query to check if the duplicated entries exist in the database:
<pre><code class="language-sql">SELECT entity_id, "catalog_product_entity" AS entity_table FROM catalog_product_entity GROUP BY entity_id, created_in HAVING COUNT(*) &gt; 1
UNION
SELECT entity_id, "catalog_product_entity" AS entity_table FROM catalog_product_entity group by entity_id, updated_in having count(*) &gt; 1
UNION
SELECT rule_id as entity_id, "catalogrule" AS entity_table FROM catalogrule GROUP BY entity_id, created_in HAVING COUNT(*) &gt; 1
UNION
SELECT rule_id as entity_id, "catalogrule" AS entity_table FROM catalogrule GROUP BY entity_id, updated_in HAVING COUNT(*) &gt; 1
UNION
SELECT rule_id as entity_id, "salesrule" AS entity_table FROM salesrule GROUP BY entity_id, created_in HAVING COUNT(*) &gt; 1
UNION
SELECT rule_id as entity_id, "salesrule" AS entity_table FROM salesrule GROUP BY entity_id, updated_in HAVING COUNT(*) &gt; 1
UNION
SELECT page_id as entity_id, "cms_page" AS entity_table FROM cms_page GROUP BY entity_id, created_in HAVING COUNT(*) &gt; 1
UNION
SELECT page_id as entity_id, "cms_page" AS entity_table FROM cms_page GROUP BY entity_id, updated_in HAVING COUNT(*) &gt; 1
UNION
SELECT block_id as entity_id, "cms_block" AS entity_table FROM cms_block GROUP BY entity_id, created_in HAVING COUNT(*) &gt; 1
UNION
SELECT block_id as entity_id, "cms_block" AS entity_table FROM cms_block GROUP BY entity_id, updated_in HAVING COUNT(*) &gt; 1;</code></pre>
If there are no duplicate entries, the response will be empty and you do not have to anything else. If the duplicated entries exist, you will get the table name and <code>entity_id</code> of the duplicated entity, like in the following example:<br/> <img alt="table_results1.png" src="https://support.magento.com/hc/article_attachments/360026034852/table_results1.png"/><br/> Please consider, that in certain tables the name of the field with entity id will be different from <code>entity_id</code>. For example, in the <code>cms_page</code> table, it would be <code>page_id</code> instead of <code>entity_id</code>.</li>
<li>Next you need to take a closer look on the duplicates and to understand which should be removed. Use a query similar to the following to see the duplicates. Replace the table name, entity id name and value according to the results received on the previous step.
<pre><code class="language-sql">SELECT * FROM catalog_product_entity WHERE entity_id = 483 ORDER BY created_in;</code></pre>
You will receive a list of records with multiple columns. You would need to look at the following four: <code>row_id</code>, <code>entity_id</code>, <code>created_in</code>, <code>updated_in</code>. Example:<br/> <img alt="table_results2.png" src="https://support.magento.com/hc/article_attachments/360026034332/table_results2.png"/><br/> The <code>created_in</code> and <code>updated_in</code> values should follow this pattern: the <code>created_in</code> value of the current row is equal to the <code>updated_in</code> value in the previous row.<br/> The row(s) for which this pattern is broken, should be deleted. In our example it would be the row with <code>row_id</code>=2052.</li>
<li>Delete the duplicate using a query similar to the following. Replace the table name, entity id name and value according to the results received on the previous steps:
<pre><code class="language-sql">DELETE FROM catalog_product_entity WHERE entity_id = 483 AND row_id = 2052;</code></pre>
</li>
<li>Clean cache by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin under System &gt; Tools &gt; Cache Management.</li>
</ol>
<h2>Useful links</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html">Apply custom patches to Magento Commerce (Cloud)</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360020127552">Log files location for Magento Commerce Cloud Starter plan</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360000318834">Log files location for Magento Commerce Cloud Pro plan</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html">Log files location for Magento Commerce</a></li>
</ul>
<h2>Attached Files</h2>