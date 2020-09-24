This article lists some common PHP Fatal Error quick examples that you could find when looking through your Magento logs and the solutions for problems they indicate.

## Example

_'PHP Fatal error:&nbsp; Maximum execution time of 60 seconds exceeded in....'_

## Solution

You can update the maximum execution time by setting a custom <code class="language-bash">max\_execution\_time</code> value in your&nbsp;<code class="language-bash">php.ini</code>&nbsp;file and redeploying. For example:

<pre><code class="language-bash">max_execution_time = 120</code></pre>

Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings" target="_self"><span style="font-size: 15px;">Customize php.ini settings</span></a> article.

&nbsp;

## Example

_'PHP Fatal error: Allowed memory size of 792723456 bytes exhausted'_ (That's just an example byte size.)

## Solution

Customize your <code class="language-bash">php.ini</code> settings. Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings" target="_self"><span style="font-size: 15px;">Customize php.ini settings</span></a> article.

## &nbsp;

## Example

_'PHP Warning: Unknown: failed to open stream: No such file or directory' _

## Solution

Make sure you do not remove the windows-style endings in the <code class="language-bash">php.ini</code> file.&nbsp; Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings" target="_self"><span style="font-size: 15px;">Customize php.ini settings</span></a> article.

&nbsp;

## Example

_'PHP Fatal error: Uncaught PDOException: SQLSTATE\[HY000\] \[1040\] Too many connections in'_

## Solution

The MySQL environment has run out of disk space. Provide more disk space for the MySQL environment.

&nbsp;

## Example

_'PHP Fatal error: Uncaught TypeError: Return value of Magento' _

## Solution

Check the `` &lt;root&gt;/tmp `` directory, because it is probably full. If it is full, provide more space in the directory. This could involve simply moving files to another directory or deleting them.

&nbsp;

## Example

_'PHP Fatal error: Uncaught RedisException: read error on connection in'_

## Solution

This is a common issue with Redis following a website downsize. Redis must be reconfigured to reflect the downsize. Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/redis-troubleshooting.html#static-content" target="_self"><span style="font-size: 15px;">Redis and static-content deployment</span></a> article for more detail.

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/trouble/php/tshoot_php-set.html" target="_self"><span style="font-size: 15px;">PHP settings errors</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html" target="_self"><span style="font-size: 15px;">Required PHP settings</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/redis-troubleshooting.html" target="_self"><span style="font-size: 15px;">Redis troubleshooting</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-session.html#redis-verify" target="_self"><span style="font-size: 15px;">Redis verification</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html" target="_self"><span style="font-size: 15px;">Configure Redis</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/trouble/php/tshoot_php-set.html#trouble-php-memory" target="_self"><span style="font-size: 15px;">PHP memory limit error</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/test/unit/unit_test_execution_cli.html#solutions-to-common-problems" target="_self"><span style="font-size: 15px;">Solutions to common problems - Memory limit</span></a>