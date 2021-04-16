---
title: Error (read-only file system) when accessing the read-only directory var generation
labels: Magento Commerce Cloud,deploy,generated_code_symlink,troubleshooting,var,var/generation
---

This article provides a fix when on Magento Commerce (Cloud) you receive an error when the application accesses the `` var/generation `` directory. This might occur die to a missing constructor dependency injection. As an immediate workaround, you may turn off the symlink generation via this deployment variable:

<pre><code class="language-clike">GENERATED_CODE_SYMLINK = disabled</code></pre>

<p class="warning">The build variable <code>GENERATED_CODE_SYMLINK</code> was removed for Magento Commerce (Cloud) 2.2 and later.</p>

## Affected versions

Magento Commerce Cloud 2.0.X, 2.1.X

## Issue

When the Magento application tries to access resources, located in the `` var/generation `` directory, errors like the following ones might occur:

<pre><code class="language-clike">"/app/var/generation/&lt;path/to/resource>" file could not be written Warning!file_put_contents(/app/var/generation/&lt;path/to/resource>): failed to open stream: Read-only file system in /app/vendor/magento/&lt;path/to/resource>
The file "/app/var/generation/&lt;path/to/resource>" cannot be deleted Warning!unlink(/app/var/generation/&lt;path/to/resource>): Read-only file system
</code></pre>

## Cause

The problem occurs when the constructor dependency injection has not been implemented for an optional or required dependency of the affected object. In this case, Magento tries to generate the missing constructor dependencies on the fly, which causes an error because the var/generation directory is read-only during runtime.

## Possible solution

As an immediate fix, you may change the flow of deployment process by disabling the symlink generation using the following environment variable:

<pre><code class="language-clike">GENERATED_CODE_SYMLINK = disabled</code></pre>

In this case, the generated objects are being copied directly to the destination directory instead of being symlinked. Thus, Magento can successfully generate objects on the fly.

<p class="warning">Turning off symlink generation may increase the potential downtime of your environment during deployment.</p>

### Permissions to change variables on Development, Staging, and Production

You may set the environment variable yourself on the local and Integration (Development) environments.For Staging and Production environments, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to change the variable.

## More information on DevDocs

* [Dependency injection](http://devdocs.magento.com/guides/v2.2/extension-dev-guide/depend-inj.html)
* [Code compiler](http://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-compiler.html)
* [Magento application environment variables](http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html)