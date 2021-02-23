---
title: Component dependency readiness check issues
link: https://support.magento.com/hc/en-us/articles/360033469652-Component-dependency-readiness-check-issues
labels: Magento Commerce Cloud,Magento Commerce,readiness,check,dependency,conflict,how to
---

<p>This article provides solutions for component dependency conflicts.</p>
<h2>Resolve component dependency conflicts</h2>
<p>We suggest you try the following solutions in the order shown:</p>
<ol>
<li><a href="#trouble-depend-conflict">Conflicting dependencies</a></li>
<li><a href="#trouble-depend-permission">File system permissions issues</a></li>
<li><a href="#trouble-depend-state">The Component Dependency Check status never changes</a></li>
</ol>
<h3>Conflicting dependencies</h3>
<p>The message <code>We found conflicting component dependencies</code> displays if Composer cannot determine which components to install or update. To resolve component dependency issues, you should be a technical person who thoroughly understands how Composer works.</p>
<p>Following is a sample failure message:</p>
<pre><code class="language-terminal"> We found conflicting component dependencies.
 You are trying to update package(s) magento/module-sample-data to 1.0.0-beta
 We've detected conflicts with the following packages:
 - magento/sample-data version 0.74.0-beta15. Please try to update it to one of the following package versions: 0.74.0-beta16, 0.74.0-beta14, 0.74.0-beta13, 0.74.0-beta12, 0.74.0-beta11, 0.74.0-beta10, 0.74.0-beta9, 0.74.0-beta8, 0.74.0-beta7</code></pre>
<p class="info">The message you see will likely be different.</p>
<p>Refer to <a href="https://support.magento.com/hc/en-us/articles/360033204651">Conflicting component dependencies for a solution</a>.</p>
<h2>File system permissions issues</h2>
<p>If the Magento file system owner doesn't have permissions to write to directories on the Magento file system, a message similar to the following displays:</p>
<pre><code class="language-terminal">file_put_contents(/var/www/html/magento2/var/composer_home/cache/repo/https---
packagist.org/provider-doctrine$instantiator.json): failed to open stream: Permission denied</code></pre>
<p>Make sure you set file system permissions as discussed in DevDocs' <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html">Overview of ownership and permissions</a>.</p>
<h2>The Component Dependency Check status never changes</h2>
<p>In some cases, the status of the Component Dependency Check doesn't change, even after you try to correct issues. In that case, you can either delete or rename files named <code>&lt;magento_root&gt;/var/.update_cronjob_status</code> and <code>&lt;magento_root&gt;/var/.setup_cronjob_status</code> and try running the Component Manager again.</p>
<p>Renaming or removing these files forces the Component Manager to run the checks again.</p>