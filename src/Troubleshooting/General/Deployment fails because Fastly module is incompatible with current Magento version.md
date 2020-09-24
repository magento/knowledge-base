UPDATED: February 29, 2019

__Problem:__ Deployment fails after a new commit and push, with the error message similar to the following:

>  \[Exception\]  
>  Warning: Missing argument 3 for Fastly\\Cdn\\Plugin\\..., called in /app/vendor/magento/framework/Interception/Interceptor.php ... and defined in /app/vendor/fastly/magento2/Plugin/ExcludeFilesFromMinification.php ...

__Cause:__&nbsp;backward incompatible changes in the Fastly module v1.2.79.

__Solution (temporary):__&nbsp;upgrade the Fastly module to version 1.2.82 or higher and upload a new VCL in the Magento Admin. Then, commit and push your changes to trigger a successful deployment.&nbsp;

## Affected versions

*   Magento Commerce 2.1.X
*   Magento Commerce Cloud 2.1.X&nbsp;
*   Fastly module 1.2.79

## Issue

When you commit and push your changes to the Integration, Production or Staging environment, usually the next step is triggering the deployment process. This is done automatically in Magento Commerce Cloud edition, and manually in Magento Commerce.&nbsp;

The deployment might fail with the following error messages:

<pre class="line-numbers"><code class="language-clike">
  [2019-01-23 00:00:00] INFO: php ./bin/magento setup:static-content:deploy --ansi --no-interaction --jobs 1 --exclude-theme Magento/luma en_GB en_US
[2019-01-23 00:00:00] CRITICAL:
  Requested languages: en_GB, en_US
  Requested areas: frontend, adminhtml
  Requested themes: Magento/blank, Magento/backend
  === frontend -&gt; Magento/blank -&gt; en_GB ===
 
    [Exception]
    Warning: Missing argument 3 for Fastly\Cdn\Plugin\ExcludeFilesFromMinification::afterGetExcludes(), called in /app/vendor/magento/framework/Interception/Interceptor.php on line 152 and defined in /app/vendor/fastly/magento2/Plugin/ExcludeFilesFromMinification.php on line 38
 
  setup:static-content:deploy [-d|--dry-run] [--no-javascript] [--no-css] [--no-less] [--no-images] [--no-fonts] [--no-html] [--no-misc] [--no-html-minify] [-t|--theme[="..."]] [--exclude-theme[="..."]] [-l|--language[="..."]] [--exclude-language[="..."]] [-a|--area[="..."]] [--exclude-area[="..."]] [-j|--jobs[="..."]] [--symlink-locale] [languages1] ... [languagesN]
 
[2019-01-23 000:00:00] INFO: Set flag: var/.deploy_is_failed
[2019-01-23 00:00:00] CRITICAL: Command php ./bin/magento setup:static-content:deploy --ansi --no-interaction --jobs 1 --exclude-theme Magento/luma en_GB en_US returned code 1
<br/></code></pre>

If you are using Magento Commerce Cloud solution, you will see this error message in the [deploy log](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html#log-deploy-log).&nbsp;For the Magento Commerce, you will see the error in the command line.

## Cause

The issue is caused by the backward incompatible changes in the Fastly module v1.2.79.

## Solution

Upgrade the Fastly module to version 1.2.82 or higher.

To do this, take the following steps:

1.   Execute one of &nbsp;the following commands:
    
    *   if the Fastly module is included to the magento-cloud-metapackage:
        
        <pre>composer update magento/magento-cloud-metapackage</pre>
        
        
    *   if the the Fastly module was installed separately (for example, in case you are using Magento Commerce, not the Cloud edition)
        
        <pre>composer update fastly/magento2</pre>
        
        
    
    
    
2.   Commit and push the changes, and trigger the deployment process if it is not done automatically.&nbsp;
3.   In the Magento Admin, <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#upload-vcl-snippets" target="_self">upload the new VCL to Fastly</a>.&nbsp;

## &nbsp;