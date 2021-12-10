---
title: "MDVA-13203 patch: 503 error homepage post full reindex"
labels: 2.2.4,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,503,503 error,QPT 1.0.13,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,database,integrity constraint violation,maintenance,support tools,Adobe Commerce,on-premises,cloud infrastructure
---

The MDVA-13203 Adobe Commerce patch fixes the issue where your site is showing a maintenance page and there are *CRITICAL: SQLSTATE\[23000\]: Integrity constraint violation* errors in the `system.log`. The patch ID is MDVA-13203. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.2.4.

 **Compatible with Adobe Commerce versions:** Adobe Commerce (all deployment methods) 2.3.0-2.4.1.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Go to the affected URL.
1. You see the maintenance page.
1. Check that the site is not in maintenance status via SSH:
    <pre> bin/magento maintenance:status  
    Status: maintenance mode is not active
    List of exempt IP-addresses: none</pre>
1. Look at `system.log`:

<pre>grep critical -i var/log/system.log |tail

[2018-09-04 17:05:18] report.CRITICAL: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '4613' for key 'PRIMARY', query was: INSERT  INTO `search_tmp_5b8ebb4e994da5_88027289` (`entity_id`,`score`) VALUES (?, ?),... (?, ?), (?, ?) [] []
[2018-09-04 17:05:21] report.CRITICAL: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '4613' for key 'PRIMARY', query was: INSERT  INTO `search_tmp_5b8ebb51579943_52333638` (`entity_id`,`score`) VALUES (?, ?),...,(?, ?) [] []
[2018-09-04 17:05:47] report.CRITICAL: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '1350' for key 'PRIMARY', query was: INSERT  INTO `search_tmp_5b8ebb6b7028f4_68065024` (`entity_id`,`score`) VALUES (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?) [] []
[2018-09-04 17:05:47] report.CRITICAL: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '1350' for key 'PRIMARY', query was: INSERT  INTO `search_tmp_5b8ebb6b7885a9_23360993` (`entity_id`,`score`) VALUES (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?), (?, ?) [] []

date

Tue Sep  4 17:06:11 UTC 2018</pre>

 <span class="wysiwyg-underline">Expected results:</span> You should see the site.

 <span class="wysiwyg-underline">Actual results:</span> The maintenance page shows because of database consistency issues.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
