This article suggests solutions for the situation when you run out of space on a certain environment of Magento Commerce Cloud.

### Affected products and versions

*   Magento Commerce Cloud 2.2.x., 2.3.x

## Issue

You are running out of disk space on the disk with writable directories. One symptom can be&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360030662992" target="_self">stuck deployment</a>.&nbsp;

To check the disk usage, run the following command:

<pre><code class="language-bash">df -h var/
</code></pre>

## Cause

The&nbsp;`` var `` directory is usually the one that could take a lot of space and can be cleaned easily.&nbsp;

Magento stores all log files in the `` var `` directory. New log files are created and old ones are archived daily. But if the number of generated errors keeps growing, log files take more and more space. &nbsp;

Custom import/export files are also stored in the `` var `` directory, and take space if their numbers increase.&nbsp;

## Solution&nbsp;

Solution options:

*   Check if you have large log files and investigate why they are big, fix the issue generating a big amount of log output.
*   
    
    Clean the `` var `` directory.
    
    
*   Set up a cron job to track the size of the `` var `` directory and clean it.
*   Allocate more disk space, if you have some unused. (See the section below for information on how to check what is your space limit.)
    
    *   For Starter plan, all environments, and Pro plan Integration environments, you can allocate the disk space if you have some unused, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html#application-disk-space" target="_self">Manage disk space: Allocating disk space</a>.&nbsp;
    *   For Pro plan Staging and Production environments, contact support to allocate more disk space if you have some unused.&nbsp;
    
    
    
*   If you have reached your space limit and still experience low space issues, consider buying more disk space, contact your Customer Success Manager (CSM) for details.

### Check disk space limit

To check how much space you have for each environment:

1.   
    
    As the Magento Commerce Cloud Account Owner, log in to your project.
    
    
2.   
    
    In the upper right corner, click __&lt;your name&gt;__ &gt; __Account Settings__.
    
    
3.   On the project tab, see the amount specified, for example:  
    ![project_space.png](https://support.magento.com/hc/article_attachments/360045010711/project_space.png)

&nbsp;