---
title: Slow performance, slow and long running crons
labels: Magento Commerce,Magento Commerce Cloud,flat catalog indexers,flat tables,how to,long running crons,performance,slow performance,Adobe Commerce,cloud infrastructure
---

>![warning]
>
>On any Adobe Commerce version, because some extensions only work with flat tables there is a risk if you disable flat tables. If you know that you have some extensions that use Flat Catalog indexers, you may need to take that into consideration when setting those values to " *No* ".

This article describes how to solve site performance issues and slow running and stuck crons caused by [flat tables and indexers](https://docs.magento.com/m2/ce/user_guide/catalog/catalog-flat.html) having been enabled.

AFFECTED PRODUCTS AND VERSIONS

* Adobe Commerce on cloud infrastructure 2.1.x and above
* Adobe Commerce on-premises 2.1.x and above
* Magento Open Source 2.1.x and above

## Issue

Flat indexers can cause:

* Heavy SQL load and site performance issues.
* Long running and stuck crons.

## Cause

Flat tables and indexers enabled.

<h2 id="solution">Solution</h2>

Starting with Adobe Commerce and Magento Open Source 2.1.x and above, the use of a flat catalog is no longer a best practice and is not recommended. Continued use of this feature is known to cause performance degradation and other indexing issues. To disable the flat catalog:

1. In the Admin, navigate to **Stores** > **Settings** > **Configuration**.
1. In the panel on the left under **Catalog** , choose **Catalog**.
1. Expand the **Storefront** section, and do the following:
    * Set **Use Flat Catalog Category** to *No*.
    * Set **Use Flat Catalog Product** to *No*.
1. When complete, click **Save Config**. Then when prompted, refresh the cache.
1. Flush cache by running `php bin/magento cache:flush`.

If you can't change the **Use Flat Catalog Category** and **Use Flat Catalog Product** to *No* because the options are greyed out, disable flat indexers in `app/etc/config.php`:

1. Run this command to make sure all indexers are set to Update by schedule: `php bin/magento indexer:set-mode schedule`.
1. Edit `app/etc/config.php` and locate the lines with `flat_catalog_product` and `flat_catalog_category` - change them from 1 to 0 to disable them.
1. Run the command `php bin/magento app:config:import`
1. Run this command to confirm that the flat indexers are disabled: `php        bin/magento indexer:status`.
1. Flush cache by running `php bin/magento cache:flush`.

## Related Information

[Reset stuck Adobe Commerce cron jobs manually on Cloud](https://support.magento.com/hc/en-us/articles/360000097713-Reset-stuck-Magento-cron-jobs-manually-on-Cloud) in our support knowledge base.
