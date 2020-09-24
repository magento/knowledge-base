This section is about the errors that might occur when you run the Data Migration Tool, and how to deal with them.

<h2 id="source-documents-fields-not-mapped">Source documents/fields not mapped</h2>

### Error messages

*   
    
    <pre><code class="language-bash">Source documents are not mapped: &lt;EXTENSION_TABLE&gt;</code></pre>
    
    
*   
    
    <pre><code class="language-bash">Source fields are not mapped. Document: &lt;EXTENSION_TABLE&gt;. Fields: &lt;EXTENSION_FIELD&gt;</code></pre>
    
    

In rare cases, the message might mention <code class="language-bash">Destination documents</code> or <code class="language-bash">Destination fields</code> instead of source ones.

<h3 id="explanation">Cause</h3>

Some Magento 1 entities (in most cases, coming from extensions) do not exist in the Magento 2 database.

This message appears because the Data Migration Tool runs internal tests to verify that tables and fields are consistent between _source_ (Magento 1) and _destination_ (Magento 2) databases.

<h3 id="possible-solutions">Possible solutions</h3>

*   
    
    Install the corresponding Magento 2 extensions from [Magento Marketplace](https://marketplace.magento.com/)
    
    
    
    If the conflicting data originates from an extension which adds own database structure elements, then the Magento 2 version of the same extension may add such elements to the destination (Magento 2) database, thus fixing the issue.
    
    
*   
    
    Use the `` -a `` argument when executing the tool to auto resolve errors and prevent migration from stopping.
    
    
*   
    
    Configure the Tool to ignore the problematic data
    
    

To ignore database entities, add the `` &lt;ignore&gt; `` tag to an entity in the `` map.xml `` file, like this:

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

<h2 id="class-does-not-exist-but-mentioned">Class is not mapped in record</h2>

### Error message

<code class="language-bash">Class &lt;extension/class\_name&gt; is not mapped in record &lt;attribute\_id=196&gt;</code>

<h3 id="explanation">Cause</h3>

A class from Magento 1 codebase could not be found in Magento 2 codebase during the <a href="https://devdocs.magento.com/guides/v2.3/migration/migration-tool-internal-spec.html#eav" target="_self">EAV migration step</a>. In most cases, the missing class belongs to an [extension](https://glossary.magento.com/extension).

<h3 id="possible-solutions">Possible solutions</h3>

*   
    
    Install the corresponding Magento 2 extension
    
    
*   
    
    Ignore the attribute that causes the issue
    
    
    
    For this, add the attribute to the `` ignore `` group in the `` eav-attribute-groups.xml.dist `` file.
    
    
*   
    
    Add class mapping using the `` class-map.xml.dist `` file
    
    

<h2 id="foreign-key-constraint-fails">Foreign key constraint fails</h2>

<h3 id="error-message-text">Error message text</h3>

<pre><code class="language-bash">Foreign key &lt;KEY_NAME&gt; constraint fails on source database. Orphan records id: &lt;id_1&gt;, &lt;id_2&gt; from &lt;child_table&gt;.<br/>&lt;field_id&gt; has no referenced records in &lt;parent_table&gt;</code></pre>

<h3 id="explanation">Cause</h3>

There are missing database records in the `` parent_table `` to which the `` field_id `` of the `` child_table `` is pointing to.

<h3 id="possible-solution">Possible solution</h3>

Delete the records from the `` child_table ``, if you do not need them.

To keep the records, disable the `` Data Integrity Step `` by modifying the Data Migration Tool's `` config.xml ``.

<h2 id="duplicates-in-url-rewrites">Duplicates in URL rewrites</h2>

<pre><code class="language-xml">There are duplicates in URL rewrites:
Request path: towel.html Store ID: 2 Target path: catalog/product/view/id/10
Request path: towel.html Store ID: 2 Target path: catalog/product/view/id/12</code></pre>

<h3 id="explanation">Cause</h3>

The `` Target path `` in a URL rewrite must be specified by a unique pair of `` Request path `` + `` Store ID ``. This error reports two entries that use the same `` Request path `` + `` Store ID `` pair with two different `` Target path `` values.

<h3 id="possible-solution">Possible solution</h3>

Enable the `` auto_resolve_urlrewrite_duplicates `` option in your `` config.xml `` file.

This configuration adds a hash-string to the conflicting records of [URL](https://glossary.magento.com/url) rewrites, and shows the resolution result in your command line interface.

<h2 id="mismatch-of-entities">Mismatch of entities</h2>

### Error message

<pre><code class="language-bash">Mismatch of entities in the document: &lt;DOCUMENT&gt; Source: &lt;COUNT_ITEMS_IN_SOURCE_TABLE&gt; Destination: &lt;COUNT_ITEMS_IN_DESTINATION_TABLE&gt;</code></pre>

<h3 id="explanation">Cause</h3>

The error occurs during the Volume Check step. It means the Magento 2 database record count of the document is not the same as in Magento 1.

Missing records happen when a customer places an order during migration.

<h3 id="possible-solution">Possible solution</h3>

Run the Data Migration Tool in `` Delta `` mode to transfer incremental changes.

<h2 id="deltalog-is-not-installed">Deltalog is not installed</h2>

### Error message

<pre><code class="language-bash">Deltalog for &lt;TABLE_NAME&gt; is not installed</code></pre>

<h3 id="explanation">Cause</h3>

This error occurs during <a href="https://devdocs.magento.com/guides/v2.3/migration/migration-migrate-delta.html" target="_self">incremental migration</a> of changes to data. It means deltalog tables (with prefix `` m2_cl_* ``) were not found in Magento 1 database. The tool installs these tables during <a href="https://devdocs.magento.com/guides/v2.3/migration/migration-migrate-data.html" target="_self">data migration</a> as well as database triggers which track changes and fill deltalog tables.

One reason for the error could be that you are trying to migrate from a _copy_ of your live Magento 1 store, not from the live store itself. When you make a copy from a live Magento 1 store that has never been migrated, the copy does not contain the triggers and additional deltalog tables needed to complete a delta migration, so the migration fails. The Data Migration Tool does NOT make comparisons between the DB of M1 and M2 to migrate the differences. Instead, the tool uses the triggers and deltalog tables installed during the first migration in order to perform subsequent delta migrations. In such a case, your copy of the live Magento 1 DB will not contain the triggers and deltalog tables that the Data Migration Tool uses to perform a migration.

<h3 id="possible-solution">Possible solution</h3>

We recommended testing the migration process from a copy of your Magento 1 database to fix your migration issues. After fixing the issues on the copy, start the migration process over again from your live Magento 1 database. This will help ensure a smooth migration process.