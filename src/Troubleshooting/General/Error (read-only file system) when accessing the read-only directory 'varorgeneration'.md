---
title: Error (read-only file system) when accessing the read-only directory 'varorgeneration'
link: https://support.magento.com/hc/en-us/articles/115002541893-Error-read-only-file-system-when-accessing-the-read-only-directory-var-generation-
labels: Magento Commerce Cloud,deploy,generated_code_symlink,var,troubleshooting,var/generation
---

<p>This article provides a fix when on Magento Commerce (Cloud) you receive an error when the application accesses the <code>var/generation</code> directory. This might occur die to a missing constructor dependency injection. As an immediate workaround, you may turn off the symlink generation via this deployment variable:</p>
<pre><code class="language-clike">GENERATED_CODE_SYMLINK = disabled</code></pre>
<p class="warning">The build variable <code>GENERATED_CODE_SYMLINK</code> was removed for Magento Commerce (Cloud) 2.2 and later.</p>
<h2>Affected versions</h2>
<p>Magento Commerce Cloud 2.0.X, 2.1.X</p>
<h2>Issue</h2>
<p>When the Magento application tries to access resources, located in the <code>var/generation</code> directory, errors like the following ones might occur:</p>
<pre><code class="language-clike">"/app/var/generation/&lt;path/to/resource&gt;" file could not be written Warning!file_put_contents(/app/var/generation/&lt;path/to/resource&gt;): failed to open stream: Read-only file system in /app/vendor/magento/&lt;path/to/resource&gt;
The file "/app/var/generation/&lt;path/to/resource&gt;" cannot be deleted Warning!unlink(/app/var/generation/&lt;path/to/resource&gt;): Read-only file system
</code></pre>
<h2>Cause</h2>
<p>The problem occurs when the constructor dependency injection has not been implemented for an optional or required dependency of the affected object. In this case, Magento tries to generate the missing constructor dependencies on the fly, which causes an error because the var/generation directory is read-only during runtime.</p>
<h2>Possible solution</h2>
<p>As an immediate fix, you may change the flow of deployment process by disabling the symlink generation using the following environment variable:</p>
<pre><code class="language-clike">GENERATED_CODE_SYMLINK = disabled</code></pre>
<p>In this case, the generated objects are being copied directly to the destination directory instead of being symlinked. Thus, Magento can successfully generate objects on the fly.</p>
<p class="warning">Turning off symlink generation may increase the potential downtime of your environment during deployment.</p>
<h3>Permissions to change variables on Development, Staging, and Production</h3>
<p>You may set the environment variable yourself on the local and Integration (Development) environments.For Staging and Production environments, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> requesting to change the variable.</p>
<h2>More information on DevDocs</h2>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/extension-dev-guide/depend-inj.html">Dependency injection</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-compiler.html">Code compiler</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html">Magento application environment variables</a></li>
</ul>