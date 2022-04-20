---
title: "MDVA-43731: Search Synonyms don't work when value is added in 'Minimum Terms to Match'"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.12,Search Synonyms,elasticsearch,Minimum Terms to Match,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.3,2.4.3-p1
---

The MDVA-43731 patch fixes the issue where Search Synonyms stop working when a value is added in "Minimum Terms to Match". This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.12 is installed. The patch ID is MDVA-43731. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.3 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Search Synonyms stop working when a value is added in "Minimum Terms to Match".

<ins>Steps to reproduce</ins>:

1. Install Adobe Commerce with sample data.
1. Configure ElasticSearch7 as the search engine.
1. Search for the word "Jacket". A list of products will show.
1. Add the parameter [4<60%] in **Configuration** > **Catalog** > **Catalog Search** > **Minimum Terms to Match**.
1. Clear Config Cache and do a reindex.
1. Again search for the word "Jacket" and notice that a list of products is displayed.
1. Go to **Marketing** > **SEO & Search** > **Search Synonyms**.
1. Create Search Synonyms by adding the following synonyms: jacket, bagtecs, express plus.
1. Do a reindex.
1. Do a product search using any of the synonyms. E.g., jacket.

<ins>Expected results</ins>:

You get the same product list as before in the search results.

<ins>Actual results</ins>:

No product is shown in the search results.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
