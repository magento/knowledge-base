---
title: Data Migration Tool troubleshooting
link: https://support.magento.com/hc/en-us/articles/360033020451-Data-Migration-Tool-troubleshooting
labels: troubleshooting,Data Migration Tool
---

<p>This article provides solutions for errors that might occur when you run the Data Migration Tool.</p>
<h2>Source documents/fields not mapped</h2>
<h3>Error messages</h3>
<ul>
<li>
<pre><code class="language-bash">Source documents are not mapped: &lt;EXTENSION_TABLE&gt;</code></pre>
</li>
<li>
<pre><code class="language-bash">Source fields are not mapped. Document: &lt;EXTENSION_TABLE&gt;. Fields: &lt;EXTENSION_FIELD&gt;</code></pre>
</li>
</ul>
<p>In rare cases, the message might mention <code class="language-bash">Destination documents</code> or <code class="language-bash">Destination fields</code> instead of source ones.</p>
<h3>Cause</h3>
<p>Some Magento 1 entities (in most cases, coming from extensions) do not exist in the Magento 2 database.</p>
<p>This message appears because the Data Migration Tool runs internal tests to verify that tables and fields are consistent between <em>source</em> (Magento 1) and <em>destination</em> (Magento 2) databases.</p>
<h3>Possible solutions</h3>
<ul>
<li>
<p>Install the corresponding Magento 2 extensions from <a href="https://marketplace.magento.com/">Magento Marketplace</a></p>
<p>If the conflicting data originates from an extension which adds own database structure elements, then the Magento 2 version of the same extension may add such elements to the destination (Magento 2) database, thus fixing the issue.</p>
</li>
<li>
<p>Use the <code>-a</code> argument when executing the tool to auto resolve errors and prevent migration from stopping.</p>
</li>
<li>
<p>Configure the Tool to ignore the problematic data</p>
</li>
</ul>
<p>To ignore database entities, add the <code>&lt;ignore&gt;</code> tag to an entity in the <code>map.xml</code> file, like this:</p>
<pre><code class="language-xml">    ...
    &lt;source&gt;
        &lt;document_rules&gt;
            ...
            &lt;!-- Ignore `sales_flat_invoice_grid` table --&gt;
            &lt;ignore&gt;
                &lt;document&gt;sales_flat_invoice_grid&lt;/document&gt;
            &lt;/ignore&gt;
            &lt;!-- Ignore `address_id` field of `sales_flat_order_address` table --&gt;
            &lt;ignore&gt;
                &lt;field&gt;sales_flat_order_address.address_id&lt;/field&gt;
            &lt;/ignore&gt;
            ...
        &lt;/document_rules&gt;
    &lt;/source&gt;
    ...</code></pre>
<p class="warning">Before ignoring entities by map file or using the <code>-a</code> option, make sure you do not need the affected data in your Magento 2 store.</p>
<h2>Class is not mapped in record</h2>
<h3>Error message</h3>
<p><code class="language-bash">Class &lt;extension/class_name&gt; is not mapped in record &lt;attribute_id=196&gt;</code></p>
<h3>Cause</h3>
<p>A class from Magento 1 codebase could not be found in Magento 2 codebase during the <a href="https://devdocs.magento.com/guides/v2.3/migration/migration-tool-internal-spec.html#eav">EAV migration step</a>. In most cases, the missing class belongs to an <a href="https://glossary.magento.com/extension">extension</a>.</p>
<h3>Possible solutions</h3>
<ul>
<li>
<p>Install the corresponding Magento 2 extension</p>
</li>
<li>
<p>Ignore the attribute that causes the issue</p>
<p>For this, add the attribute to the <code>ignore</code> group in the <code>eav-attribute-groups.xml.dist</code> file.</p>
</li>
<li>
<p>Add class mapping using the <code>class-map.xml.dist</code> file</p>
</li>
</ul>
<h2>Foreign key constraint fails</h2>
<h3>Error message text</h3>
<pre><code class="language-bash">Foreign key &lt;KEY_NAME&gt; constraint fails on source database. Orphan records id: &lt;id_1&gt;, &lt;id_2&gt; from &lt;child_table&gt;.<br/>&lt;field_id&gt; has no referenced records in &lt;parent_table&gt;</code></pre>
<h3>Cause</h3>
<p>There are missing database records in the <code>parent_table</code> to which the <code>field_id</code> of the <code>child_table</code> is pointing to.</p>
<h3>Possible solution</h3>
<p>Delete the records from the <code>child_table</code>, if you do not need them.</p>
<p>To keep the records, disable the <code>Data Integrity Step</code> by modifying the Data Migration Tool's <code>config.xml</code>.</p>
<h2>Duplicates in URL rewrites</h2>
<pre><code class="language-xml">There are duplicates in URL rewrites:
Request path: towel.html Store ID: 2 Target path: catalog/product/view/id/10
Request path: towel.html Store ID: 2 Target path: catalog/product/view/id/12</code></pre>
<h3>Cause</h3>
<p>The <code>Target path</code> in a URL rewrite must be specified by a unique pair of <code>Request path</code> + <code>Store ID</code>. This error reports two entries that use the same <code>Request path</code> + <code>Store ID</code> pair with two different <code>Target path</code> values.</p>
<h3>Possible solution</h3>
<p>Enable the <code>auto_resolve_urlrewrite_duplicates</code> option in your <code>config.xml</code> file.</p>
<p>This configuration adds a hash-string to the conflicting records of <a href="https://glossary.magento.com/url">URL</a> rewrites, and shows the resolution result in your command line interface.</p>
<h2>Mismatch of entities</h2>
<h3>Error message</h3>
<pre><code class="language-bash">Mismatch of entities in the document: &lt;DOCUMENT&gt; Source: &lt;COUNT_ITEMS_IN_SOURCE_TABLE&gt; Destination: &lt;COUNT_ITEMS_IN_DESTINATION_TABLE&gt;</code></pre>
<h3>Cause</h3>
<p>The error occurs during the Volume Check step. It means the Magento 2 database record count of the document is not the same as in Magento 1.</p>
<p>Missing records happen when a customer places an order during migration.</p>
<h3>Possible solution</h3>
<p>Run the Data Migration Tool in <code>Delta</code> mode to transfer incremental changes.</p>
<h2>Deltalog is not installed</h2>
<h3>Error message</h3>
<pre><code class="language-bash">Deltalog for &lt;TABLE_NAME&gt; is not installed</code></pre>
<h3>Cause</h3>
<p>This error occurs during <a href="https://devdocs.magento.com/guides/v2.3/migration/migration-migrate-delta.html">incremental migration</a> of changes to data. It means deltalog tables (with prefix <code>m2_cl_*</code>) were not found in Magento 1 database. The tool installs these tables during <a href="https://devdocs.magento.com/guides/v2.3/migration/migration-migrate-data.html">data migration</a> as well as database triggers which track changes and fill deltalog tables.</p>
<p>One reason for the error could be that you are trying to migrate from a <em>copy</em> of your live Magento 1 store, not from the live store itself. When you make a copy from a live Magento 1 store that has never been migrated, the copy does not contain the triggers and additional deltalog tables needed to complete a delta migration, so the migration fails. The Data Migration Tool does NOT make comparisons between the DB of M1 and M2 to migrate the differences. Instead, the tool uses the triggers and deltalog tables installed during the first migration in order to perform subsequent delta migrations. In such a case, your copy of the live Magento 1 DB will not contain the triggers and deltalog tables that the Data Migration Tool uses to perform a migration.</p>
<h3>Possible solution</h3>
<p>We recommended testing the migration process from a copy of your Magento 1 database to fix your migration issues. After fixing the issues on the copy, start the migration process over again from your live Magento 1 database. This will help ensure a smooth migration process.</p>