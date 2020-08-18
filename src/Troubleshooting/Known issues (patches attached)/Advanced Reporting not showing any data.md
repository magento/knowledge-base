This article provides a patch for the known issue for&nbsp;Magento Commerce Cloud 2.3.0 where Advanced Reporting is not showing any data.

## Issue

No data is loaded into the Advanced Reporting module.

## Patch

The patch is attached to this article. The patch&nbsp;moves the `` analytics `` cron job tasks from default group into&nbsp;`` analytics ``.

To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360046452172/MDVA-19640_EE_2.3.0_COMPOSER_v1.patch" target="_self">MDVA-19640\_EE\_2.3.0\_COMPOSER\_v1.patch</a>

After applying the patch run the following SQL query. The query has to be run&nbsp;to change records in `` cron_schedule `` table.<span class="wysiwyg-color-red90">&nbsp;</span>

<pre class="line-numbers"><code class="language-clike">UPDATE core_config_data
SET `path` = REPLACE(path, <span class="code-quote">"crontab/default</span>/jobs/analytics", "crontab/analytics/jobs/analytics")
WHERE `path` LIKE "crontab/default/jobs/analytics%";</code></pre>

### Compatible Magento versions:

The patch was created for&nbsp;

*   Magento Commerce Cloud 2.3.0

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:  
   
 2.2.2-2.2.10, 2.3.0-2.3.2 and 2.3.2-p2 and 2.3.3, for Magento Commerce and Magento Commerce Cloud

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached files

&nbsp;