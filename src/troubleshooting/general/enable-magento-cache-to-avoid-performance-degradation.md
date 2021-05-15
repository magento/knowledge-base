---
title: Enable Magento cache to avoid performance degradation
labels: 2.2.x,2.3.x,Apdex,Magento Commerce,Magento Commerce Cloud,New Relic,cache,how to,slow performance
---

This article explains how to solve a slow site issue caused by certain Magento cache types being disabled.

AFFECTED PRODUCTS AND VERSIONS

* Magento Commerce Cloud v.2.2.x, 2.3.x
* Magento Commerce v.2.2.x, 2.3.x

## Issue

You notice performance degradation. For example, the Checkout page is loading slowly, or the Apdex value decrease in New Relic.

## Cause

One reason for performance degradation might be certain Magento cache types being disabled.

## Solution

1. First, check the status of your Magento cache, to see if this is the issue. For this, [SSH to your environment](https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh) and run the following command:    ```bash    php bin/magento cache:status    ```    . This would display the status of each cache type ("0" for disabled, "1" for enabled). Or you can get this information in the `app/etc/env.php` file.
1. Investigate the disabled cache types. All Magento cache types should be enabled, unless you received alternative guidance from Magento. Third party extensions must not require disabling Magento cache.
1. If the investigation confirms that some cache types are disabled by mistake, enable them by running the following command for each cache type: `php bin/magento cache:enable <your_disabled_cache_type>` 

If there are concerns and/or questions whether a certain Magento cache type can or should be disabled, [contact Magento Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) asking for recommendations.

## Related reading

Magento cache documentation:

* [Magento cache overview](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/cache_for_frontdevs.html)     
* [Manage the cache](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cache.html)     

Other possible reasons for performance issues and solutions for them:

<ul><li>
<p title="Disable Magento Banner output to improve site performance    "><a href="https://support.magento.com/hc/en-us/articles/360035285852">Disable Magento Banner output to improve site performance</a></p>
</li><li>
<p title="MySQL tables are too large"><a href="https://support.magento.com/hc/en-us/articles/360038862691">MySQL tables are too large</a></p>
</li><li>
<p title="Slow performance, slow and long running crons"><a href="https://support.magento.com/hc/en-us/articles/360034631192">Slow performance, slow and long running crons</a></p>
</li><li>
<p title="Restricted admin access causing performance issues"><a href="https://support.magento.com/hc/en-us/articles/360036323211">Restricted admin access causing performance issues</a></p>
</li></ul>
 