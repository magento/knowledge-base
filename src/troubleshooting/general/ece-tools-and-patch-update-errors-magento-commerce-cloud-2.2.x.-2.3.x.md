---
title: ECE-Tools and patch update errors Magento Commerce Cloud 2.2.x., 2.3.x
labels: 2.2.x,2.3.x,Magento Commerce Cloud,No such file or directory,composer.json,error message,failed to open stream:,how to,patches,updates to ECE-Tools
---

This article provides a solution for the issue where you see error messages including "_failed to open stream:_" or "_No such file or directory", _when trying to deploy updates to ECE-Tools, patches or other changes.

### AFFECTED PRODUCTS AND VERSIONS

Magento Commerce Cloud 2.2.x., 2.3.x

## Issue

Errors when trying to deploy updates to ECE-Tools, patches or other changes include:  
   
 PHP errors in the project web UI and in the `` var/log/cloud.log ``

<pre class="line-numbers"><code class="language-clike">W: PHP Warning: require(&lt;path to file>): failed to open stream: No such file or directory in &lt;path to file> on line 70
W: PHP Fatal error: require(): Failed opening required '&lt;path to file>;'
(include_path='&lt;path to file>') in &lt;path to file> on line 70

Warning: require(/app/vendor/composer/../../app/etc/NonComposerComponentRegistration.php):
failed to open stream: No such file or directory in /app/vendor/composer/autoload_real.php
on line 70

Fatal error: require(): Failed opening required '/app/vendor/composer/../../app/etc/NonComposerComponentRegistration.php'
(include_path='/app/vendor/magento/zendframework1/library:.:/usr/share/php')
in /app/vendor/composer/autoload_real.php on line 70

E: Error building project: Step failed with status code 255.</code></pre>

Exception log errors: 

<pre class="line-numbers"><code class="language-clike">CRITICAL:
error: &lt;path to missing file>: No such file or directory
</code></pre>

<pre class="line-numbers"><code class="language-clike">W: Generating optimized autoload files<br/>
W: PHP Warning:  Uncaught ErrorException: require(&lt;path to file>):
failed to open stream: No such file or directory in &lt;path to file></code></pre>

<pre class="line-numbers"><code class="language-clike">PHP Warning: Uncaught Exception: Warning: require(/app/setup/config/application.config.php):
failed to open stream: No such file or directory in /app/vendor/magento/framework/Console/Cli.php
on line 63 in /app/vendor/magento/framework/App/ErrorHandler.php:61
</code></pre>

<pre class="line-numbers"><code class="language-clike">[Symfony\Component\Console\Exception\CommandNotFoundException] 
 W: There are no commands defined in the "module" namespace.</code></pre>

## Cause

Misconfiguration of your composer.json file.

## Solution

If a setting is missing from your composer.json file, some directories will not copy from the Magento 2 Code Base. The package and the update/patch can't apply because files will not be found.

Please change your extra section to match that provided below and re-attempt deployment.

<pre class="line-numbers"><code class="language-clike">"extra":{
  "magento-force": true,
  "magento-deploystrategy": "copy"
}</code></pre>

## Related reading

* DevDocs [Upgrades and patches](https://devdocs.magento.com/guides/v2.3/cloud/project/project-upgrade-parent.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=update%20ece%20tools)