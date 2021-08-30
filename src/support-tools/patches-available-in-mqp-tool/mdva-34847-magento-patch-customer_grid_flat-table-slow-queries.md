---
title: "MDVA-34847 Magento patch: customer_grid_flat table slow queries"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,SQL queries,customer_grid_flat table,query,slow
---

The MDVA-34847 Magento patch solves the issue where slow queries occur on the

```sql
customer_grid_flat
```

table.

This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Create an Admin user with a Custom scope (Example: Set **GWS** = *0,* and choose the existing default website with **ID** = *1* ).
1. Create any product and category items.
1. Place an order from the frontend.
1. Login to the Admin with a new user.
1. Go to the Sales grid ( **Sales > Orders** ).
1. Check that the SQL query has been sent to DB (database).

 <span class="wysiwyg-underline">Expected results</span> :

The Admin GWS extension should use

```sql
int
```

values of

```sql
website_id
```

in SQL conditions, as expected, like:

```sql
main_table.website_id IN (1)
```

 <span class="wysiwyg-underline">Actual results</span> :

The Admin GWS extension added a condition with

```sql
website_id
```

value as

```sql
string
```

, like:

```sql
main_table.website_id IN ('1')
```

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.