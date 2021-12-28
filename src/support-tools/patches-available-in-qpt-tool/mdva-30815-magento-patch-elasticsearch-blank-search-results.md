---
title: "MDVA-30815: Elasticsearch blank search results"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,category,elasticsearch,products,products per page,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30815 patch fixes the issue where Elasticsearch displays a blank page when the search results' limiter options are changed. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. Please note that the issue was fixed in Adobe Commerce 2.3.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.3

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.2 - 2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When using Elasticsearch, if you change the search results' limiter options, Adobe Commerce displays a blank page.

<ins>Prerequisites</ins>:

Elasticsearch is **enabled**. Go to **STORES** > **Settings** > **Configuration** > **Catalog** > **Catalog Search**.

<ins>Steps to reproduce</ins>:

1. Go to your site.
1. Search for a product on the main search field.
1. After the search result pages are displayed, click on the last page in the search result pages.
1. Select **Show xx per page** from the limiter option. Make sure that this is a different search result number limit than currently configured.

<ins>Expected results</ins>:

The page displays the configured number of product results.

<ins>Actual results</ins>:

Blank page displays. This error can also be seen in the `var/report` : *\`"0":"SQLSTATE\[42000\]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near'\`*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
