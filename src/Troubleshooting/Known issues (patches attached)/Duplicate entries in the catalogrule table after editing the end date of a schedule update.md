This article provides a patch for the known Magento Commerce 2.2.3 issue where&nbsp;editing the end date or time of a catalog price rule schedule update results in adding duplicate entries to the `` catalogrule `` table and errors in the `` catalogrule_rule ``&nbsp;(Catalog rule product)&nbsp;indexer reindex.

## Issue

When you change the end date or time of an existing catalog price rule schedule update, duplicate entries are created in the `` catalogrule `` database table. As a result, the `` catalogrule_rule `` reindex fails with the following error in the exception log: _"Item with the same ID already exists"_.

<span class="wysiwyg-underline">Steps to reproduce</span>:

Prerequisites: The `` catalogrule_rule `` indexer is set to "Update on Schedule" mode.

1.   In the Magento Admin, create a new Catalog Price Rule under __Marketing__ &gt; __Promotions__ &gt; __Catalog Price Rule__.
2.   In the __Catalog Price Rule__ grid, click __Edit, __schedule a new Update&nbsp;and&nbsp;set&nbsp;__Status__ to _Active._
3.   Click __View/Edit__ next to the newly created Update and change the end date to an earlier time.
4.   Save the Update.
5.   Run the reindex command for the `` catalogrule_rule `` indexer.

<span class="wysiwyg-underline">Expected result</span>:  
 The&nbsp;`` catalogrule_rule `` indexer is reindexed successfully. No duplicate entries in the&nbsp;`` catalogrule `` table.

<span class="wysiwyg-underline">Actual result</span>:  
 Reindex fails with the following error: "_Item with the same ID already exists"_, because there are duplicate&nbsp;entries in the&nbsp;`` catalogrule `` table.

## Solution

To solve the issue you need to apply the attached patch and remove the existing duplicated entries. See the <a href="#remove" target="_self">Remove duplicated entries</a> section for details about checking if the duplicates exist and removing them.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360024568111/MDVA-10974_EE_2.2.3_COMPOSER_v2.patch" target="_self">Download MDVA-10974\_EE\_2.2.3\_COMPOSER\_v2.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce 2.2.3

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) from 2.2.1 to 2.2.5
*   Magento Commerce from 2.2.1 to 2.2.2, and from 2.2.4 to 2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

<h2 id="remove">Remove duplicated entries</h2>

<p class="info">Please make sure to have a recent backup before any manipulations.</p>

Take these steps to locate the duplicated entries and delete them:

<ol><li>Run the following query to check if the duplicated entries exist in the database:
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
If there are no duplicate entries, the response will be empty and you do not have to anything else. If the duplicated entries exist, you will get the table name and <code>entity_id</code> of the duplicated entity, like in the following example:<br/> <img alt="table_results1.png" height="96" src="https://support.magento.com/hc/article_attachments/360026034852/table_results1.png" width="208"/><br/> Please consider, that in certain tables the name of the field with entity id will be different from <code>entity_id</code>. For example, in the <code>cms_page</code> table, it would be&nbsp;<code>page_id</code> instead of <code>entity_id</code>.</li><li>Next you need to take a closer look on the duplicates and to understand which should be removed. Use a query similar to the following to see the duplicates. Replace the table name, entity id name and value according to the results received on the previous step.
<pre><code class="language-sql">SELECT * FROM catalog_product_entity WHERE entity_id = 483 ORDER BY created_in;</code></pre>
You will receive a list of records with multiple columns. You would need to look at the following four: <code>row_id</code>, <code>entity_id</code>, <code>created_in</code>, <code>updated_in</code>. Example:<br/> <img alt="table_results2.png" height="153" src="https://support.magento.com/hc/article_attachments/360026034332/table_results2.png" width="392"/><br/> The <code>created_in</code> and <code>updated_in</code> values should follow this pattern: the <code>created_in</code> value of the current row is equal to the <code>updated_in</code> value in the previous row.<br/> The row(s) for which this pattern is broken, should be deleted. In our example it would be the row with <code>row_id</code>=2052.</li><li>Delete the duplicate using a query similar to the following. Replace the table name, entity id name and value according to the results received on the previous steps:
<pre><code class="language-sql">DELETE FROM catalog_product_entity WHERE entity_id = 483 AND row_id = 2052;</code></pre>
</li><li>Clean cache by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin under <strong>System</strong> &gt; <strong>Tools</strong> &gt; <strong>Cache Management</strong>.</li></ol>

## Useful links

*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html" rel="noopener" target="_blank">Apply custom patches to Magento Commerce (Cloud)</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360020127552" target="_self">Log files location for Magento Commerce Cloud Starter plan</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360000318834" target="_self">Log files location for Magento Commerce Cloud Pro plan</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html" target="_self">Log files location for Magento Commerce</a>

## Attached Files