---
title: Data Migration Tool troubleshooting
link: https://support.magento.com/hc/en-us/articles/360033020451-Data-Migration-Tool-troubleshooting
labels: troubleshooting,Data Migration Tool
---

This article provides solutions for errors that might occur when you run the Data Migration Tool.

## Source documents/fields not mapped

### Error messages

* 
Source documents are not mapped: <EXTENSION\_TABLE>

* 
Source fields are not mapped. Document: <EXTENSION\_TABLE>. Fields: <EXTENSION\_FIELD>

In rare cases, the message might mention Destination documents or Destination fields instead of source ones.

### Cause

Some Magento 1 entities (in most cases, coming from extensions) do not exist in the Magento 2 database.

This message appears because the Data Migration Tool runs internal tests to verify that tables and fields are consistent between *source* (Magento 1) and *destination* (Magento 2) databases.

### Possible solutions

* 
Install the corresponding Magento 2 extensions from [Magento Marketplace](https://marketplace.magento.com/)

If the conflicting data originates from an extension which adds own database structure elements, then the Magento 2 version of the same extension may add such elements to the destination (Magento 2) database, thus fixing the issue.

* 
Use the -a argument when executing the tool to auto resolve errors and prevent migration from stopping.

* 
Configure the Tool to ignore the problematic data

To ignore database entities, add the <ignore> tag to an entity in the map.xml file, like this:

 ...
 <source>
 <document\_rules>
 ...
 <!-- Ignore `sales\_flat\_invoice\_grid` table -->
 <ignore>
 <document>sales\_flat\_invoice\_grid</document>
 </ignore>
 <!-- Ignore `address\_id` field of `sales\_flat\_order\_address` table -->
 <ignore>
 <field>sales\_flat\_order\_address.address\_id</field>
 </ignore>
 ...
 </document\_rules>
 </source>
 ...
Before ignoring entities by map file or using the -a option, make sure you do not need the affected data in your Magento 2 store.

## Class is not mapped in record

### Error message

Class <extension/class\_name> is not mapped in record <attribute\_id=196>

### Cause

A class from Magento 1 codebase could not be found in Magento 2 codebase during the [EAV migration step](https://devdocs.magento.com/guides/v2.3/migration/migration-tool-internal-spec.html#eav). In most cases, the missing class belongs to an [extension](https://glossary.magento.com/extension).

### Possible solutions

* 
Install the corresponding Magento 2 extension

* 
Ignore the attribute that causes the issue

For this, add the attribute to the ignore group in the eav-attribute-groups.xml.dist file.

* 
Add class mapping using the class-map.xml.dist file

## Foreign key constraint fails

### Error message text

Foreign key <KEY\_NAME> constraint fails on source database. Orphan records id: <id\_1>, <id\_2> from <child\_table>.  
<field\_id> has no referenced records in <parent\_table>
### Cause

There are missing database records in the parent\_table to which the field\_id of the child\_table is pointing to.

### Possible solution

Delete the records from the child\_table, if you do not need them.

To keep the records, disable the Data Integrity Step by modifying the Data Migration Tool's config.xml.

## Duplicates in URL rewrites

There are duplicates in URL rewrites:
Request path: towel.html Store ID: 2 Target path: catalog/product/view/id/10
Request path: towel.html Store ID: 2 Target path: catalog/product/view/id/12
### Cause

The Target path in a URL rewrite must be specified by a unique pair of Request path + Store ID. This error reports two entries that use the same Request path + Store ID pair with two different Target path values.

### Possible solution

Enable the auto\_resolve\_urlrewrite\_duplicates option in your config.xml file.

This configuration adds a hash-string to the conflicting records of [URL](https://glossary.magento.com/url) rewrites, and shows the resolution result in your command line interface.

## Mismatch of entities

### Error message

Mismatch of entities in the document: <DOCUMENT> Source: <COUNT\_ITEMS\_IN\_SOURCE\_TABLE> Destination: <COUNT\_ITEMS\_IN\_DESTINATION\_TABLE>
### Cause

The error occurs during the Volume Check step. It means the Magento 2 database record count of the document is not the same as in Magento 1.

Missing records happen when a customer places an order during migration.

### Possible solution

Run the Data Migration Tool in Delta mode to transfer incremental changes.

## Deltalog is not installed

### Error message

Deltalog for <TABLE\_NAME> is not installed
### Cause

This error occurs during [incremental migration](https://devdocs.magento.com/guides/v2.3/migration/migration-migrate-delta.html) of changes to data. It means deltalog tables (with prefix m2\_cl\_*) were not found in Magento 1 database. The tool installs these tables during [data migration](https://devdocs.magento.com/guides/v2.3/migration/migration-migrate-data.html) as well as database triggers which track changes and fill deltalog tables.

One reason for the error could be that you are trying to migrate from a *copy* of your live Magento 1 store, not from the live store itself. When you make a copy from a live Magento 1 store that has never been migrated, the copy does not contain the triggers and additional deltalog tables needed to complete a delta migration, so the migration fails. The Data Migration Tool does NOT make comparisons between the DB of M1 and M2 to migrate the differences. Instead, the tool uses the triggers and deltalog tables installed during the first migration in order to perform subsequent delta migrations. In such a case, your copy of the live Magento 1 DB will not contain the triggers and deltalog tables that the Data Migration Tool uses to perform a migration.

### Possible solution

We recommended testing the migration process from a copy of your Magento 1 database to fix your migration issues. After fixing the issues on the copy, start the migration process over again from your live Magento 1 database. This will help ensure a smooth migration process.

