---
title: Error running the `setup:di:compile` command manually
link: https://support.magento.com/hc/en-us/articles/115002663433-Error-running-the-setup-di-compile-command-manually
labels: Magento Commerce Cloud,generated_code_symlink,setup:di:compile,troubleshooting
---

<p>This article provides a fix for when running the <code>setup:di:compile</code> command manually on Magento Commerce Cloud fails with an error (see the Issue section below) because the command tries to access the <code>var/di</code> and <code>var/generation</code> directories, which are read-only.</p>
<p>This is an expected behavior: the <code>setup:di:compile</code> command should not be run manually on Magento Commerce (Cloud) since it is executed automatically during the deployment process.</p>
<p>We strongly do not recommend running <code>setup:di:compile</code> manually, but if you have a reason to do so, you need to set the following environment variable to make <code>var/di</code> and <code>var/generation</code> folders writable:</p>
<pre><code class="language-clike">GENERATED_CODE_SYMLINK = disabled</code></pre>
<p>Note that with code symlink generation disabled, the deployment downtime increases.</p>
<p class="info">The build variable <code>GENERATED_CODE_SYMLINK</code> was removed for Magento Commerce (Cloud) 2.2 and later.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce (Cloud) 2.0.X, 2.1.X</li>
</ul>
<h2>Issue</h2>
<p>Running the <code>the setup:di:compile</code> command manually fails with the following error:</p>
<pre class="line-numbers"><code class="language-clike">web@&lt;path&gt;:~$ php bin/magento setup:di:compile
The file "/app/var/generation/&lt;path/to/resource&gt;" cannot be deleted Warning!unlink(/app/var/generation/Composer/Console/ApplicationFactory.php): Read-only file system#0 /app/vendor/magento/framework/Filesystem/Driver/File.php(405): Magento\Framework\Filesystem\Driver\File-&gt;deleteFile('/app/var/genera...')
#1 /app/vendor/magento/framework/Filesystem/Driver/File.php(403): Magento\Framework\Filesystem\Driver\File-&gt;deleteDirectory('/app/var/genera...')
#2 /app/vendor/magento/framework/Filesystem/Driver/File.php(403): Magento\Framework\Filesystem\Driver\File-&gt;deleteDirectory('/app/var/genera...')
#3 /app/setup/src/Magento/Setup/Console/CompilerPreparation.php(68): Magento\Framework\Filesystem\Driver\File-&gt;deleteDirectory('/app/var/genera...')
#4 /app/vendor/magento/framework/Console/Cli.php(65): Magento\Setup\Console\CompilerPreparation-&gt;handleCompilerEnvironment()
#5 /app/bin/magento(22): Magento\Framework\Console\Cli-&gt;__construct('Magento CLI')
#6 {main}
PHP Fatal error:  Uncaught Error: Class 'Cli' not found in /app/bin/magento:31
Stack trace:
#0 {main}
  thrown in /app/bin/magento on line 31
Fatal error: Uncaught Error: Class 'Cli' not found in /app/bin/magento:31
Stack trace:
#0 {main}
  thrown in /app/bin/magento on line 31</code></pre>
<h2>Cause</h2>
<p>The error occurs because the <code>setup:di:compile</code> command tries to access the <code>var/di</code> and <code>var/generation</code> directories, which are read-only.</p>
<p>It is not a defect but an expected behavior on cloud environments. You should not run <code>setup:di:compile</code> manually since this command is being executed during the deployment process. The Magento code cannot be changed on the fly (because it is located in the read-only directories), so there is no need to recompile <code>var/di</code> and <code>var/generation</code>: there is no difference with files generated during deployment.</p>
<h2>Solution</h2>
<p>Make the <code>var/di</code> and <code>var/generation</code> directories writable by setting the environment variable below:</p>
<pre><code class="language-clike">GENERATED_CODE_SYMLINK = disabled</code></pre>
<p>This allows you to run <code>setup:di:compile</code> manually, but the deployment process lasts longer.</p>
<h2>More information on DevDocs</h2>
<p>Environment variables are covered in the articles of the <a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_over.html">Manage variables</a> section.</p>
<p>Particular topics you might be interested in:</p>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_cloud.html">Magento Commerce (Cloud) variables</a></li>
<li>Add environment variables via <a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_over.html#addvariables">CLI</a> and the <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-var">Project Web Interface</a>
</li>
</ul>