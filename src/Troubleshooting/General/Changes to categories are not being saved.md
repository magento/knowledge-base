---
title: Changes to categories are not being saved
link: https://support.magento.com/hc/en-us/articles/115004383453-Changes-to-categories-are-not-being-saved
labels: Magento Commerce Cloud,Magento Commerce,category,catalog,troubleshooting
---

<p>This article provides a fix for when updating product categories via Magento Admin, the changes are not displayed on Magento Admin and storefront. The problem is caused by the corrupted data in the <code>catalog_category_entity</code> table. To solve the issue, fix or remove the problematic category update records in the table. After that, you should be able to update product categories using Magento Admin.</p>
<h2>Issue</h2>
<p>After making changes to a product category in Magento Admin and saving, the new updates are neither saved nor displayed in Magento Admin and storefront.</p>
<h3>Steps to reproduce</h3>
<ol>
<li>Go to Catalog &gt; Categories.</li>
<li>Select a category.</li>
<li>Make changes, then click Save.</li>
<li>The message is displayed: <em>You saved the category</em>.</li>
<li>Notice that the change you've made has not been saved.</li>
</ol>
<h2>Possible cause: corrupted data in the <code>catalog_category_entity</code> table</h2>
<p>The issue is caused by the same values in the <code>created_in</code> column of the affected category records in the database (DB).</p>
<p><img alt="Corrupted data in the catalog_category_entity table" src="https://support.magento.com/hc/article_attachments/115005488234/catalog_category_entity.png"/></p>
<p>Details:</p>
<ul>
<li>the <code>catalog_category_entity</code> DB table has two or more records for the affected category (these records have the same <code>entity_id</code> value)</li>
<li>these category records have the same values in the <code>created_in</code> column
</li>
</ul>
<h3>How does the second DB entry (and all the next ones) appear in DB for one and the same category?</h3>
<p>The second DB record (and, possibly, the next ones) for the affected category means there have been category updates scheduled using the Magento_Staging module. The module makes an additional record for a category in the <code>catalog_category_entity</code> and that is the expected application behavior; the problem is that the records have the same values for the <code>created_in</code> column.</p>
<h3>How do the same values appear?</h3>
<p>We cannot state the reasons for data corruption with certainty. The possible reasons may include:</p>
<ul>
<li>customizations (code, themes, etc.)</li>
<li>incorrect data migration</li>
<li>incorrect data restore from backup</li>
</ul>
<p>To the best of our knowledge, such data corruption is not typical for the "clean" (out-of-the-box) Magento instance and cannot be reproduced on a Magento installation with no customizations.</p>
<h3>How to verify this is your issue</h3>
<p>The <code>catalog_category_entity</code> table should have multiple records for the affected category (records should have the same <code>entity_id</code> value) and at least two of those records should have the same <code>created_in</code> values. With this, the Staging-scheduled updates would not be displayed in Magento Admin; you would only see the empty Scheduled Changes block.</p>
<h4>Steps to verify</h4>
<ol>
<li>Access the catalog_category_entity table in your database.</li>
<li>Filter entities by entity_id, with entity_id identifying the affected category.</li>
<li>If the values in the created_in column are the same for different entries with the same entity_id, that's our case. Normally, the <code>created_in</code> values are different for every record.</li>
</ol>
<p><img alt="Corrupted data in the catalog_category_entity table" src="https://support.magento.com/hc/article_attachments/115005488234/catalog_category_entity.png"/></p>
<h2>Solution</h2>
<p>You may choose one of the following solutions:</p>
<ol>
<li>
Delete the problematic category update records</li>
<li>
Repair the problematic category update records</li>
</ol>
<h3>Delete the problematic category update records</h3>
<p>In this solution, you will need to set the correct <code>updated_in</code> value for the initial category record and delete all other records for this category. This removes all scheduled category updates.</p>
<p>Follow these steps:</p>
<ol>
<li>Find the DB records with the <code>entity_id</code> of the affected category.</li>
<li>Select the record with the biggest integer in the <code>updated_in</code> column.</li>
<li>Copy the <code>updated_in</code> value from the selected record.</li>
<li>Select the record with <code>row_id</code> = <code>entity_id</code> (initial category record) and paste the copied value to the <code>updated_in</code> column of this record.</li>
<li>Delete row(s) with <code>row_id</code> not equal to <code>entity_id</code>.</li>
</ol>
<h3>Repair the problematic category update records</h3>
<ol>
<li>Find the category records with the same <code>entity_id</code> and the same <code>created_in</code> value.</li>
<li>Select the record where <code>row_id</code> = <code>entity_id</code> and copy the <code>updated_in</code> value.</li>
<li>Select the record where <code>row_id</code> is not equal to <code>entity_id</code> and paste the copied <code>updated_in</code> value as the <code>created_in</code> value. See the screenshot below as an illustration.<br/><br/><img alt="Copying the created_in value.png" src="https://support.magento.com/hc/article_attachments/115005444433/copy_created-in_value.png"/><br/><br/>
</li>
<li>Verify that the category update record, the <code>created_in</code> value of which you have updated (in step 3), exists in the <code>staging_update</code> table.<br/><em>For example:</em> IF the copied <code>created_in</code> value is 1509281953, THEN the entity with <code>row_id</code> = 1509281953 must exist in the <code>staging_update</code> table</li>
</ol>
<p> </p>