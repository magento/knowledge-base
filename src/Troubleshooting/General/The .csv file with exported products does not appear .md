This article talks about the issue where you select to export products to a .csv file in Magento Admin, but the file does not appear.

### Affected products and versions

*   Magento Commerce Cloud 2.3.2

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

Prerequisites: The__ Add Secret Key to URLs__ option is set to _Yes_. The option is configured in the Magento Admin under __Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __Admin__ &gt; __Security__.

1.   In the Magento Admin, navigate to __System__ &gt;__Data Transfer__ &gt;__Export__.&nbsp;
2.   Select
    
    *   __Entity Type__: _Products_
    *   __Export File Format__: _CSV_
    *   __Field Enclosure__: leave unchecked.&nbsp;
    
    
    
3.   Click __Continue__.
4.   The following message is displayed: _"Message is added to queue, wait to get your file soon"_.

<span class="wysiwyg-underline">Expected result</span>

The .csv file with the exported products is displayed in the grid in a couple of minutes.

<span class="wysiwyg-underline">Actual result</span>

The .csv file with the exported products is not displayed in the grid in 10 minutes or more.

## Cause

A known issue with the Export functionality in Magento application part version 2.3.2.

## Solution

There are two possible solutions for the issue:

*   Disable the Add Secret Key to URL option.&nbsp;
*   Run the&nbsp;the&nbsp;`` bin/magento queue:consumers:start exportProcessor `` command manually, and optionally configure it to be run by cron.

See details for both options in the following paragraphs.&nbsp;

### Disable the&nbsp;the Add Secret Key to URL option

1.   In the Magento Admin, navigate to&nbsp;<span style="font-size: 15px;">__Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __Admin__ &gt; __Security__.</span>
2.   Set the&nbsp;__Add Secret Key to URLs__ option to _No._
3.   Click __Save Config__.&nbsp;
4.   Clean cache under __System__ &gt; __Tools__ &gt; __Cache Management__ or by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin.

### Run the export command manually and optionally add it as cron job

To get the export file, run the&nbsp;`` bin/magento queue:consumers:start exportProcessor `` command.&nbsp;After running this, the file should be displayed in the grid.

&nbsp;

To add the process as a cron job optionally, you must add the `` CRON_CONSUMERS `` variable to the `` .magento.env.yaml `` file.

#### Add process as a cron job (optional)

1.   Make sure your cron is setup and configured. See <a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html" target="_self">Set up cron jobs</a> for details.
2.   Run the following command to return a list of message queue consumers:
    
        ./bin/magento queue:consumers:list
    
    
3.   Add the following to your `` .magento.env.yaml `` file in the Magento `` /app `` directory, and include the consumers you would like to add. For example, here is the consumer required for export processing:
    
    <pre><code class="language-yaml">stage:
  deploy:
    CRON_CONSUMERS_RUNNER:
      cron_run: true
      max_messages: 1000
      consumers:
        - exportProcessor
</code></pre>
    
    Then push this updated file and redeploy your environment. Also reference [Add custom cron jobs to your project](https://devdocs.magento.com/cloud/configure/setup-cron-jobs.html#add-cron).

<p class="info">On Magento Commerce Pro projects, the <a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html#verify-cron-configuration-on-pro-projects">auto-crons feature</a> must be enabled on your Magento Commerce Cloud project before you can add custom cron jobs to Staging and Production environments using <code>.magento.app.yaml</code>. If this feature is not enabled, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" target="_self">create a support ticket</a>, to have the job added for you.</p>

&nbsp;
&nbsp;