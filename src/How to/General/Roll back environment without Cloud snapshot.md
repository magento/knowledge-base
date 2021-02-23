---
title: Roll back environment without Cloud snapshot
link: https://support.magento.com/hc/en-us/articles/360031627051-Roll-back-environment-without-Cloud-snapshot
labels: Magento Commerce Cloud,Cloud,2.2,2.1,snapshot,uninstall,roll back,commit,2.2.x,2.1.x,how to
---

<p>This article shows two solutions to roll back an environment without having a snapshot of your environment on Magento Commerce Cloud.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">all supported versions</a>
</li>
</ul>
<p>Choose the most appropriate for your case:</p>
<ul>
<li>If you have a stable build, but no valid snapshot - <a href="scen2">Scenario 1: No snapshot, build stable (SSH connection available)</a>.</li>
<li>If the build is broken and you have no valid snapshot - <a href="scen3">Scenario 2: No snapshot; build broken (no SSH connection)</a>.</li>
</ul>
<h2>Scenario 1: No snapshot, build stable (SSH connection available)</h2>
<p>This section shows how to roll back an environment when you have not created a snapshot but can access the environment via SSH.</p>
<p>The steps are:</p>
<p>0. Disable Configuration Management.<br/>1. Uninstall the Magento software.<br/>2. Reset the git branch.</p>
<p>After performing these steps:</p>
<ul>
<li>your Magento installation returns to its Vanilla state (database restored; deployment configuration removed; directories under `var` cleared)</li>
<li>your git branch is reset to the desired state in the past</li>
</ul>
<p>Read the detailed steps below.</p>
<h3>Step 0 (Prerequisite): Remove config.php to disable Configuration Management</h3>
<p>We need to disable Configuration Management so that it does not automatically apply the previous configuration settings during deployment.</p>
<p>To disable Configuration Management, make sure that your <code>/app/etc/</code> directory does not contain the <code>config.php</code> (for Magento 2.2.x) or <code>config.local.php</code> (for Magento 2.1.x) files.</p>
<p>To remove the configuration file, follow these steps:</p>
<ol>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment</a>.</li>
<li>Remove the configuration file:
<ul>
<li>For Magento 2.2:<br/>
<pre><code class="language-php">rm app/etc/config.php</code></pre>
</li>
<li>For Magento 2.1:<br/>
<pre><code class="language-php">rm app/etc/config.local.php</code></pre>
</li>
</ul>
</li>
</ol>
<p>Read more about Configuration Management:</p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/115003169574">Knowledge Base</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-over.html">DevDocs</a></li>
</ul>
<h3>Step 1: Uninstall the Magento software with setup:uninstall command</h3>
<blockquote>
<p>Uninstalling the Magento software drops and restores the database, removes the deployment configuration, and clears directories under `var`.</p>
<p>Magento DevDocs, <a href="http://devdocs.magento.com/guides/v2.2/install-gde/install/cli/install-cli-uninstall.html#instgde-install-uninstall">Uninstall the Magento software</a></p>
</blockquote>
<p>To uninstall the Magento software, follow these steps:</p>
<ol>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment</a>.</li>
<li>Execute <code>setup:uninstall</code>:<br/>
<pre><code class="language-php">php bin/magento setup:uninstall</code></pre>
</li>
<li>Confirm uninstall.</li>
</ol>
<p>The following message displays to confirm a successful uninstallation:</p>
<pre><code class="language-php">[SUCCESS]: Magento uninstallation complete.</code></pre>
<p>This means we have reverted our Magento installation (including DB) to its authentic (Vanilla) state.</p>
<h3>Step 2: Reset the git branch</h3>
<p>With git reset, we revert the code to the desired state in the past.</p>
<ol>
<li>Clone the environment to your local development environment. You may copy the command in your Project Web Interface:<br/><img alt="copy_git_clone.png" src="https://support.magento.com/hc/article_attachments/360000963074/copy_git_clone.png"/>
</li>
<li>Access the commits history. Use <code>--reverse</code> to display history in reverse order for more convenience:<br/>
<pre><code class="language-git">git log --reverse</code></pre>
</li>
<li>Select the commit hash on which you've been good. To reset code to its authentic state (Vanilla), find the very first commit that created your branch (environment).<br/><img alt="Selecting a commit hash in git console" src="https://support.magento.com/hc/article_attachments/360000945733/select_commit_hash.png"/>
</li>
<li>Apply hard git reset:<br/>
<pre><code class="language-git">git reset --h &lt;commit_hash&gt;</code></pre>
</li>
<li>Push changes to server:<br/>
<pre><code class="language-git">git push --force &lt;origin&gt; &lt;branch&gt;</code></pre>
</li>
</ol>
<p>After performing these steps, our git branch gets reset and the entire git changelog is clear. The last git push triggers the redeploy to apply all changes and re-install Magento.</p>
<h2>Scenario 2: No snapshot; build broken (no SSH connection)</h2>
<p>This section shows how to roll back an environment when it is in a critical state: the deployment procedure cannot succeed in building a working application, thus making the SSH connection unavailable.</p>
<p>In this scenario, you must first restore the working state of your Magento application using git reset, then uninstall the Magento software (to drop and restore the database, remove the deployment configuration, etc.). The scenario involves the same steps as in Scenario 1, but the order of steps is different and there is an additional step — force redeploy. The steps are:</p>
<p><a href="https://support.magento.com/hc/en-us/articles/360000852534#reset-git-branch">1. Reset the git branch.</a><br/><a href="https://support.magento.com/hc/en-us/articles/360000852534#disable_config_management">2. Disable Configuration Management.</a><br/><a href="https://support.magento.com/hc/en-us/articles/360000852534#setup-uninstall">3. Uninstall the Magento software.</a><br/>4. Force redeploy.</p>
<p>After performing these steps, you will have the same results as in Scenario 1.</p>
<h3>Step 4: Force redeploy</h3>
<p>Make a commit (this might be an empty commit, although we do not recommend it) and push it to the server to trigger redeploy:</p>
<pre><code class="language-git">git commit --allow-empty -m "&lt;message&gt;" &amp;&amp; git push &lt;origin&gt; &lt;branch&gt;</code></pre>
<h2>If setup:uninstall fails, reset database manually</h2>
<p>If executing the <code>setup:uninstall</code> command fails with an error and cannot be completed, we may clear the DB manually with these steps:</p>
<ol>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment</a>.</li>
<li>Connect to the MySQL DB:<br/>
<pre><code class="language-sql">mysql -h database.internal</code></pre>
</li>
<li>Drop the `main` DB :<br/>
<pre><code class="language-sql">drop database main;</code></pre>
</li>
<li>Create an empty `main` DB:<br/>
<pre><code class="language-sql">create database main;</code></pre>
</li>
<li>Delete the following configuration files: <code>config.php</code>, <code>config.php</code>.bak, <code>env.php</code>, <code>env.php.bak</code>.</li>
</ol>
<p>After resetting the DB, <a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/cli-ref-topic.html#git-commands">make a git push to the environment to trigger redeploy</a> and install Magento to a newly created DB. Or <a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/cli-ref-topic.html#environment-commands">run the redeploy command</a>.</p>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#restore-snapshot">Restore a snapshot on Cloud</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#create-snapshot">Create a snapshot</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-webint-snap.html">Snapshots and backup management</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-webint-basic.html#project-conf-hist">Configure your project - View environment history</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/trouble_comp-deploy-fail.html">Component deployment failure</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/projects.html">Manage your project</a></li>
</ul>
