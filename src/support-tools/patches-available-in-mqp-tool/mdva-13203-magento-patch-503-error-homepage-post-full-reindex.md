---
title: "MDVA-13203: Magento patch: 503 error homepage post full reindex"
labels: "2.2.4,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,503,503 error,MQP 1.0.13,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,database,integrity constraint violation,maintenance,support tools"
---

The MDVA-13203 Magento patch fixes the issue where your site is showing a maintenance page and there are *CRITICAL: SQLSTATE\[23000\]: Integrity constraint violation* errors in the `system.log` . This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.2.4.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.0-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Go to the affected URL.
1. You see the maintenance page.
1. Check that the site is not in maintenance status via ssh:

    `php bin/magento maintenance:status`    
    `Status: maintenance mode is not active`\
    `List of exempt IP-addresses: none`

1. Look at `system.log` :

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

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
