---
title: Check logs to troubleshoot 500 and 503 errors on Magento
labels: 500 error,503 error,Magento Commerce Cloud,error,how to,log,site down,site not loading
---

This article explains how to check the `` access.log `` and related logs to troubleshoot 503 and 500 errors, which can be caused by traffic or insufficient server resources. Viewing the `` access.log `` and related logs can provide information on what may be causing problems related to Magento Commerce Cloud.

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

# How to check the access.log

To view logs for these server errors, check the `` access.log `` on the web server, e.g., &lt;ip address> &lt;timestamp> &lt;request uri> &lt;response code> &lt;referer url>

To check related logs:

1. Run the following command in the CLI if it is on the current day (for Pro). Or up to a certain point in the past (for Starter), since the duration of the logs' coverage is limited, and log rotation is not available:  
    <code class="c-mrkdwn__code" data-stringify-type="code">grep -r "\\" \[50\[0-9\]" /path/to/access.log</code>  
    If the error has occurred in the past run the following command in the CLI (Pro only):  
    <code class="c-mrkdwn__code" data-stringify-type="code"> zgrep "\\" 50\[0-9\]" /path/to/access.log.&lt;rotation ID>.gz</code>
1. Then check the `` exception.log `` and `` error.log `` or the equivalent [rotated log](https://devdocs.magento.com/guides/v2.4/install-gde/install/post-install-config.html#log-rotation) (logs that are automatically rotated and compressed when they reach a certain file size) for the same timestamp to locate the potential error and see what might have been occurring to have caused it.  
    Note: To check the `` exception.log `` and `` error.log `` run the above commands in the CLI but replace `` access.log `` with `` exception.log `` or `` error.log ``.

# Related reading

* Magento DevDocs > [Magento Commerce Cloud > View Logs](https://devdocs.magento.com/cloud/project/log-locations.html)
* [Troubleshooting 503 errors](https://support.magento.com/hc/en-us/articles/360034631211)
* [Magento Site Down Troubleshooter](https://support.magento.com/hc/en-us/articles/360029351531)