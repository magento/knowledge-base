This article provides a patch for a known Magento Commerce 2.2.2 issue related to having multiple cron jobs scheduled to run at the same time after the time variables for certain tasks were edited in the Magento Admin.

## Issue

When cron is configured to run every minute, if you edit time variables for three scheduled tasks in Admin, the `` cron_schedule `` database table shows groups of multiple tasks scheduled to run at the same time.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   In Magento Admin, navigate to __Stores__ &gt; Settings &gt; __Configuration__ &gt; __ADVANCED__ &gt; __System__ &gt; __Cron (Scheduled Tasks)__ &gt; __Cron configuration options for group: default.__
2.   Configure the following options:

<ul class="alternate" type="square">
<li>
<strong>History Cleanup Every</strong>: clear the <strong>Use system </strong>checkbox, and set to <em>1440</em>
</li>
<li>
<strong>Success History Lifetime</strong>: clear the <strong>Use system </strong>checkbox, and set to <em>1440</em>
</li>
<li>
<strong>Failure History Lifetime</strong>: clear the <strong>Use system </strong>checkbox, and set to <em>1440</em>
</li>
</ul>

<li>Click <strong>Save Config</strong>.</li>
<li>In SSH, run the&nbsp;<code>crontab -e</code> command.</li>
<li>Set cron to run every minute.</li>
<li>Open three terminal tabs/windows.</li>
<li>Go to the Magento <code>root/base/project</code> directory in each terminal window.</li>
<li>Run the following command in each tab/window:<pre><code class="language-bash">bin/magento cache:flush &amp;&amp; bin/magento cron:run &amp;&amp; bin/magento cache:flush &amp;&amp; bin/magento cron:run</code></pre></li>
<li>Go to MySQL and run the following query:<pre><code class="language-sql">SELECT job_code, scheduled_at, count as count FROM cron_schedule GROUP BY job_code, scheduled_at HAVING count &gt; 1 ORDER BY scheduled_at;</code></pre></li>
<li>See groups of tasks scheduled to run at the same time.</li>

<span class="wysiwyg-underline">Expected result</span>:  
 One cron&nbsp;`` job_code `` should be scheduled for the certain time period.

<span class="wysiwyg-underline">Actual result</span>:  
 There are multiple cron jobs scheduled for the same time period.

## Solution

For Magento Commerce Cloud customers, <a href="https://devdocs.magento.com/guides/v2.2/cloud/project/ece-tools-update.html" target="_self">updating the ECE-tools</a> will solve the issue.

Magento Commerce customers should apply one of the attached patches to solve the issue.

## Patches

The patches are attached to this article. To download, scroll down to the end of the article and click the file name, or click one the following link:

*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025797991/MDVA-11304_EE_2.1.4_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.4\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025798031/MDVA-11304_EE_2.1.5_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.5\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025786332/MDVA-11304_EE_2.1.13_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.13\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025798071/MDVA-11304_EE_2.1.14_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.14\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025786392/MDVA-11304_EE_2.2.0_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.2.0\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025786432/MDVA-11304_EE_2.2.2_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.2.2\_COMPOSER\_v1.patch</a>
*   <a href="https://support.magento.com/hc/en-us/article_attachments/360025786472/MDVA-11304_EE_2.2.4_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.2.4\_COMPOSER\_v1.patch</a>

### Compatible Magento versions

The patches were created for particular version noted in the patch file name. For example,&nbsp;MDVA-11304\_EE\_2.2.4\_COMPOSER\_v1.patch was created for Magento Commerce 2.2.4 and is the best patch to be used for this version.

The patches are also compatible with the following versions:

*   For Magento Commerce 2.1.0-2.1.4:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025797991/MDVA-11304_EE_2.1.4_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.4\_COMPOSER\_v1.patch</a>
    
    The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:
    
    
    
    *   Magento Commerce (Cloud) 2.1.0-2.1.4
    
    
    
*   For Magento Commerce 2.1.5-2.1.12:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025798031/MDVA-11304_EE_2.1.5_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.5\_COMPOSER\_v1.patch</a>
    
    The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:
    
    
    
    *   Magento Commerce (Cloud) 2.1.5-2.1.12
    
    
    
*   For Magento Commerce (Cloud) 2.1.13:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025786332/MDVA-11304_EE_2.1.13_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.13\_COMPOSER\_v1.patch</a>
*   For Magento Commerce 2.1.14-2.1.17:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025798071/MDVA-11304_EE_2.1.14_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.1.14\_COMPOSER\_v1.patch</a>
    
    The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:
    
    
    
    *   Magento Commerce 2.1.18
    *   Magento Commerce (Cloud) 2.1.14-2.1.18
    
    
    
*   For Magento Commerce 2.2.0-2.2.1:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025786392/MDVA-11304_EE_2.2.0_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.2.0\_COMPOSER\_v1.patch</a>
    
    The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:
    
    
    
    *   Magento Commerce (Cloud) 2.2.0-2.2.1
    
    
    
*   For Magento Commerce 2.2.0-2.2.3:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025786432/MDVA-11304_EE_2.2.2_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.2.2\_COMPOSER\_v1.patch</a>
    
    The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:
    
    
    
    *   Magento Commerce (Cloud) 2.2.0-2.2.3
    
    
    
*   For Magento Commerce 2.2.4:  
     <a href="https://support.magento.com/hc/en-us/article_attachments/360025786472/MDVA-11304_EE_2.2.4_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-11304\_EE\_2.2.4\_COMPOSER\_v1.patch</a>
    
    The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:
    
    
    
    *   Magento Commerce (Cloud) 2.2.4
    
    
    

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files