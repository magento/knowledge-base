---
title: "MDVA-28409 patch: Adobe Commerce web server crashing - Out of memory"
labels: 2.3.4,2.3.4-p2,2.3.5,2.4.0,QPT,QPT 1.0.5,Magento Commerce,Magento Commerce Cloud,Quality Patches,Adobe Commerce,on-premises,cloud infrastructure, Tool,cron,memory,out of memory,quote,support tools
---

The MDVA-28409 patch solves the issue where the cron job for removing quotes stopped due to having to process a large number of items. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.5 is installed.

## Affected products and versions

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4 - 2.3.5, 2.4.0

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The issue is that the cron job has run out of memory due to the amount of data that the job is trying to process. Symptoms of this issue include slow performance due to high disk usage by MySQL and low web server memory.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

To check if there is a cron job that is not able to remove outdated quotes run the following query:

```clike
select * from cron_schedule where job_code like '%sales_clean_quotes%'
```

 <span class="wysiwyg-underline">Expected result:</span>

The status of `sales_clean_quotes` cron job should be `success`. 

<span class="wysiwyg-underline">Actual result:</span>

The status of `sales_clean_quotes` cron job is `running` or `error`.

Another way to confirm that there is a cron job that is not able to remove outdated quotes is to map the output from the query from **Step 1** (`executed_at`) against the timestamps of any memory errors in `/var/log/cron.log`. If there is a cron job that is not able to process the amount of data you may see a message similar to:

```clike
PHP Fatal error:  Allowed memory size of 1073741824 bytes exhausted (tried to allocate 4096 bytes) in /app/vendor/magento/framework/DB/Statement/Pdo/Mysql.php on line 91

Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 4096 bytes) in /app/vendor/magento/framework/DB/Statement/Pdo/Mysql.php on line 91
--
[2020-05-30 05:00:27.224718] Launching command 'php bin/magento cron:run'.
```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
