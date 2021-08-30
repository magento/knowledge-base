---
title: "MDVA-30977 Magento patch: missing products from categories, indexing related"
labels: 2.3.4,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,category,products,support tools
---

The MDVA-30977 patch fixes the issues with products displayed on storefront category pages during reindex or mass actions with a big number of products. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.6 is installed. The issues are scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

The patch was created for Magento Commerce Cloud 2.3.4. It is also compatible with Magento Commerce 2.3.4.

>![info]
>
>Note: the patch can be applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issues

### Issue 1

The number of products displayed on the category page on the storefront is different after each page reload during mass product update.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create at least 30000 products in two categories - at least 15000 products in each category.2. Go to **Catalog** > **Products** in Magento Admin.3. Select all products from the grid and perform a mass attribute update. For example, set **New** = *Yes* attribute.4. Run Magento cron job using the

```cli
bin/magento cron:run
```

command twice.5. Refresh category pages on Storefront while Magento performs 30000 products update.

 <span class="wysiwyg-underline">Expected result:</span> 

The number of products in categories is always 15000 on each category page refresh.

 <span class="wysiwyg-underline">Actual result:</span> 

The number of products in categories is different on each category page refresh.

### Issue 2

When the full reindex of the inventory is executed, category pages become empty and the *We can't find products matching the selection* message is displayed.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 1. Configure Magento with Elasticsearch.2. Add a new website.3. Create a new source and assign it to the new website using Manage stock.4. Create 30000 configurable products.5. Assign all the products to the new website and also add inventory to the new inventory source.6. Execute a full reindex.7. Execute the inventory reindex by running

```cli
bin/magento indexer:reindex inventory
```

.8. Browse a category with big number of products.

 <span class="wysiwyg-underline">Expected result:</span> 

Category pages display products as usual during reindex.

 <span class="wysiwyg-underline">Actual result:</span> Category pages become empty during reindex.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Additional steps required after the patch installation

After the patch is applied, execute a full reindex from console using the following commands:

```cli
php bin/magento indexer:reset
php bin/magento indexer:reindex
```

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

