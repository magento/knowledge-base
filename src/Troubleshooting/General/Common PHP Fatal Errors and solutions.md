---
title: Common PHP Fatal Errors and solutions
link: https://support.magento.com/hc/en-us/articles/360030568432-Common-PHP-Fatal-Errors-and-solutions
labels: Magento Commerce,troubleshooting,PHP Fatal Error
---

This article lists some common PHP Fatal Error quick examples that you could find when looking through your Magento logs and the solutions for problems they indicate.

## Example

_'PHP Fatal error:  Maximum execution time of 60 seconds exceeded in....'_

## Solution

You can update the maximum execution time by setting a custom <code class="language-bash">max\_execution\_time</code> value in your <code class="language-bash">php.ini</code> file and redeploying. For example:

<pre><code class="language-bash">max_execution_time = 120</code></pre>

Consult the [Customize php.ini settings](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings) article.

 

## Example

_'PHP Fatal error: Allowed memory size of 792723456 bytes exhausted'_ (That's just an example byte size.)

## Solution

Customize your <code class="language-bash">php.ini</code> settings. Consult this [Customize php.ini settings](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings) article.

##  

## Example

_'PHP Warning: Unknown: failed to open stream: No such file or directory' _

## Solution

Make sure you do not remove the windows-style endings in the <code class="language-bash">php.ini</code> file.  Consult this [Customize php.ini settings](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings) article.

 

## Example

_'PHP Fatal error: Uncaught PDOException: SQLSTATE\[HY000\] \[1040\] Too many connections in'_

## Solution

The MySQL environment has run out of disk space. Provide more disk space for the MySQL environment.

 

## Example

_'PHP Fatal error: Uncaught TypeError: Return value of Magento' _

## Solution

Check the `` &lt;root>/tmp `` directory, because it is probably full. If it is full, provide more space in the directory. This could involve simply moving files to another directory or deleting them.

 

## Example

_'PHP Fatal error: Uncaught RedisException: read error on connection in'_

## Solution

This is a common issue with Redis following a website downsize. Redis must be reconfigured to reflect the downsize. Consult this [Redis and static-content deployment](https://devdocs.magento.com/guides/v2.3/cloud/trouble/redis-troubleshooting.html#static-content) article for more detail.

## Related reading

* [PHP settings errors](https://devdocs.magento.com/guides/v2.3/install-gde/trouble/php/tshoot_php-set.html)
* [Required PHP settings](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html)
* [Redis troubleshooting](https://devdocs.magento.com/guides/v2.3/cloud/trouble/redis-troubleshooting.html)
* [Redis verification](https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-session.html#redis-verify)
* [Configure Redis](https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html)
* [PHP memory limit error](https://devdocs.magento.com/guides/v2.3/install-gde/trouble/php/tshoot_php-set.html#trouble-php-memory)
* [Solutions to common problems - Memory limit](https://devdocs.magento.com/guides/v2.3/test/unit/unit_test_execution_cli.html#solutions-to-common-problems)