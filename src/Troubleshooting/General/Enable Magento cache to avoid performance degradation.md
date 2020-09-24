This article explains how to solve a slow site issue caused by certain Magento cache types being disabled.&nbsp;

AFFECTED PRODUCTS AND VERSIONS

*   Magento Commerce Cloud v.2.2.x, 2.3.x
*   Magento Commerce v.2.2.x, 2.3.x

## Issue

You notice performance degradation. For example, the Checkout page is loading slowly, or the Apdex value decrease in New Relic.

## Cause

One reason for performance degradation might be certain Magento cache types being disabled.&nbsp;

## Solution&nbsp;

1.   First, check the status of your Magento cache, to see if this is the issue. For this,&nbsp;  
     [SSH to your environment](https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh) and run the following command: <code class="language-bash">php bin/magento cache:status</code>. This would display the status of each cache type ("0" for disabled, "1" for enabled).  
     Or you can get this information in the `` app/etc/env.php `` file.
2.   Investigate the disabled cache types. All Magento cache types should be enabled, unless you received alternative guidance from Magento. Third party extensions must not require disabling Magento cache.&nbsp;
3.   If the investigation confirms that some cache types are disabled by mistake, enable them by running the following command for each cache type:  
     `` php bin/magento cache:enable &lt;your_disabled_cache_type&gt; ``

If there are concerns and/or questions whether a certain Magento cache type can or should be disabled, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" target="_self">contact Magento Support</a>&nbsp;asking for recommendations. &nbsp;&nbsp;

## Related reading

Magento cache documentation:

<ul><li>
<p class="page-heading"><a href="https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/cache_for_frontdevs.html" target="_self">Magento cache overview</a></p>
</li><li>
<p class="page-heading"><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cache.html" target="_self">Manage the cache</a></p>
</li></ul>

Other possible reasons for performance issues and solutions for them:

<ul><li>
<p class="article-title" title="Disable Magento Banner output to improve site performance    "><a href="https://support.magento.com/hc/en-us/articles/360035285852" target="_self">Disable Magento Banner output to improve site performance  </a></p>
</li><li>
<p class="article-title" title="MySQL tables are too large"><a href="https://support.magento.com/hc/en-us/articles/360038862691" target="_self">MySQL tables are too large</a></p>
</li><li>
<p class="article-title" title="Slow performance, slow and long running crons"><a href="https://support.magento.com/hc/en-us/articles/360034631192" target="_self">Slow performance, slow and long running crons</a></p>
</li><li>
<p class="article-title" title="Restricted admin access causing performance issues"><a href="https://support.magento.com/hc/en-us/articles/360036323211" target="_self">Restricted admin access causing performance issues</a></p>
</li></ul>
&nbsp;