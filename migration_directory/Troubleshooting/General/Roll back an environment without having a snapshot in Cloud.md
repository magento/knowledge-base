This article shows two solutions to roll back an environment without having a snapshot of your environment on Magento Commerce Cloud.

### Affected products and versions

*   Magento Commerce Cloud, all versions

Choose the most appropriate for your case:

*   If you have a stable build, but no valid&nbsp;snapshot - <a href="scen2" target="_self">Scenario 1: No snapshot, build stable (SSH connection available)</a>.
*   If the build is broken and you have no valid snapshot -&nbsp;<a href="scen3" target="_self">Scenario 2: No snapshot; build broken (no SSH connection)</a>.

<h2 id="scen2"><span class="wysiwyg-color-orange110">Scenario 1: No snapshot, build stable (SSH connection available)</span></h2>

This section shows how to roll back an environment when you have not created a snapshot but can access the environment via SSH.

The steps are:

0. Disable Configuration Management.  
 1. Uninstall the Magento software.  
 2. Reset the git branch.

After performing these steps:

*   your Magento installation returns to its Vanilla state (database restored; deployment configuration removed; directories under \`var\` cleared)
*   your git branch is reset to the desired state in the past

Read the detailed steps below.

<h3 id="disable_config_management">Step 0 (Prerequisite): Remove config.php to disable Configuration Management</h3>

We need to disable Configuration Management so that it does not automatically apply the previous configuration settings during deployment.

To disable Configuration Management, make sure that your `` /app/etc/ `` directory does not contain the `` config.php `` (for Magento 2.2.x) or `` config.local.php `` (for Magento 2.1.x) files.

To remove the configuration file, follow these steps:

1.   [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).
2.   Remove the configuration file:
    
    *   For Magento 2.2:  
        
        
        <pre><code class="language-php">rm app/etc/config.php</code></pre>
        
        
    *   For Magento 2.1:  
        
        
        <pre><code class="language-php">rm app/etc/config.local.php</code></pre>
        
        
    
    
    

Read more about Configuration Management:

*   [Knowledge Base](https://support.magento.com/hc/en-us/articles/115003169574)
*   [DevDocs](http://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-over.html)

<h3 id="setup-uninstall">Step 1: Uninstall the Magento software with setup:uninstall command</h3>

>  
> Uninstalling the Magento software drops and restores the database, removes the deployment configuration, and clears directories under \`var\`.
> 
> Magento DevDocs, [Uninstall the Magento software](http://devdocs.magento.com/guides/v2.2/install-gde/install/cli/install-cli-uninstall.html#instgde-install-uninstall)
> 

To uninstall the Magento software, follow these steps:

1.   [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).
2.   Execute `` setup:uninstall ``:  
    
    
    <pre><code class="language-php">php bin/magento setup:uninstall</code></pre>
    
    
3.   Confirm uninstall.

The following message displays to confirm a successful uninstallation:

<pre><code class="language-php">[SUCCESS]: Magento uninstallation complete.</code></pre>

This means we have reverted our Magento installation (including DB) to its authentic (Vanilla) state.

<h3 id="reset-git-branch">Step 2: Reset the git branch</h3>

With git reset, we revert the code to the desired state in the past.

1.   Clone the environment to your local development environment. You may copy the command in your Project Web Interface:  
     ![copy_git_clone.png](https://support.magento.com/hc/article_attachments/360000963074/copy_git_clone.png)
2.   Access the commits history. Use `` --reverse `` to display history in reverse order for more convenience:  
    
    
    <pre><code class="language-git">git log --reverse</code></pre>
    
    
3.   Select the commit hash on which you've been good. To reset code to its authentic state (Vanilla), find the very first commit that created your branch (environment).  
     ![Selecting a commit hash in git console](https://support.magento.com/hc/article_attachments/360000945733/select_commit_hash.png)
4.   Apply hard git reset:  
    
    
    <pre><code class="language-git">git reset --h &lt;commit_hash&gt;</code></pre>
    
    
5.   Push changes to server:  
    
    
    <pre><code class="language-git">git push --force &lt;origin&gt; &lt;branch&gt;</code></pre>
    
    

After performing these steps, our git branch gets reset and the entire git changelog is clear. The last git push triggers the redeploy to apply all changes and re-install Magento.

<h2 id="scen3"><span class="wysiwyg-color-red110">Scenario 2: No snapshot; build broken (no SSH connection)</span></h2>

This section shows how to roll back an environment when it is in a critical state: the deployment procedure cannot succeed in building a working application, thus making the SSH connection unavailable.

In this scenario, you must first restore the working state of your Magento application using git reset, then uninstall the Magento software (to drop and restore the database, remove the deployment configuration, etc.). The scenario involves the same steps as in Scenario 1, but the order of steps is different and there is an additional step — force redeploy. The steps are:

[1. Reset the git branch.](https://support.magento.com/hc/en-us/articles/360000852534#reset-git-branch)  
 [2. Disable Configuration Management.](https://support.magento.com/hc/en-us/articles/360000852534#disable_config_management)  
 [3. Uninstall the Magento software.](https://support.magento.com/hc/en-us/articles/360000852534#setup-uninstall)  
 4. Force redeploy.

After performing these steps, you will have the same results as in Scenario 1.

### Step 4: Force redeploy

Make a commit (this might be an empty commit, although we do not recommend it) and push it to the server to trigger redeploy:

<pre><code class="language-git">git commit --allow-empty -m "&lt;message&gt;" &amp;&amp; git push &lt;origin&gt; &lt;branch&gt;</code></pre>

## If setup:uninstall fails, reset database manually

If executing the `` setup:uninstall `` command fails with an error and cannot be completed, we may clear the DB manually with these steps:

1.   [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).
2.   Connect to the MySQL DB:  
    
    
    <pre><code class="language-sql">mysql -h database.internal</code></pre>
    
    
3.   Drop the \`main\` DB :  
    
    
    <pre><code class="language-sql">drop database main;</code></pre>
    
    
4.   Create an empty \`main\` DB:  
    
    
    <pre><code class="language-sql">create database main;</code></pre>
    
    
5.   Delete the following configuration files: `` config.php ``, `` config.php ``.bak, `` env.php ``, `` env.php.bak ``.

After resetting the DB, <a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/cli-ref-topic.html#git-commands" target="_self">make a git push to the environment to trigger redeploy</a> and install Magento to a newly created DB. Or <a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/cli-ref-topic.html#environment-commands" target="_self">run the redeploy command</a>.

## Related reading

*   [Restore a snapshot on Cloud](https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#restore-snapshot)
*   [Create a snapshot](https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#create-snapshot)
*   [Snapshots and backup management](https://devdocs.magento.com/guides/v2.3/cloud/project/project-webint-snap.html)
*   [Configure your project - View environment history](https://devdocs.magento.com/guides/v2.3/cloud/project/project-webint-basic.html#project-conf-hist)
*   [Component deployment failure](https://devdocs.magento.com/guides/v2.3/cloud/trouble/trouble_comp-deploy-fail.html)
*   [Manage your project](https://devdocs.magento.com/guides/v2.3/cloud/project/projects.html)