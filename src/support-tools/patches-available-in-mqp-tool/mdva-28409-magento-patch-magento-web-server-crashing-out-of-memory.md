---
title: "MDVA-28409 Magento patch: Magento web server crashing - Out of memory"
labels: 2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,QPT,QPT 1.0.5,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cron,memory,out of memory,quote,support tools
---

The MDVA-28409 patch solves the issue where the cron job for removing quotes stopped due to having to process a large number of items. This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.5 is installed.

## Affected products and versions

Magento Commerce and Magento Commerce Cloud 2.3.4 - 2.3.5, 2.4.0Note: the patch can be applicable to other versions. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The issue is that the cron job has run out of memory due to the amount of data that the job is trying to process. Symptoms of this issue include slow performance due to high disk usage by MySQL and low web server memory.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

To check if there is a cron job that is not able to remove outdated quotes run the following query:

```clike
select * from cron_schedule where job_code like '%sales_clean_quotes%'
```

 <span class="wysiwyg-underline">Expected result:</span>

The status of `sales_clean_quotes` cron job should be `success` . <span class="wysiwyg-underline">Actual result:</span>

The status of `sales_clean_quotes` cron job is `running` or `error` .

&nbsp;

Another way to confirm that there is a cron job that is not able to remove outdated quotes is to map the output from the query from **Step 1** ( `executed_at` ) against the timestamps of any memory errors in `/var/log/cron.log` . If there is a cron job that is not able to process the amount of data you may see a message similar to:

```clike
PHP Fatal error:  Allowed memory size of 1073741824 bytes exhausted (tried to allocate 4096 bytes) in /app/vendor/magento/framework/DB/Statement/Pdo/Mysql.php on line 91

Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 4096 bytes) in /app/vendor/magento/framework/DB/Statement/Pdo/Mysql.php on line 91
--
[2020-05-30 05:00:27.224718] Launching command 'php bin/magento cron:run'.
```

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* KB [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* KB [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
