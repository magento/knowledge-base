---
title: Backup issues
link: https://support.magento.com/hc/en-us/articles/360032990672-Backup-issues
labels: Magento Commerce,permissions,backup,disk space,2.3.x,2.2.x,how to
---

<p>This article lists the possible solutions for the backup creation issues. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<h2>Backup disabled</h2>
<p>If the Magento backup functionality does not start or displays the following message, you need to enable the feature prior to backing up.</p>
<pre><code class="language-terminal">Backup functionality is disabled.
Backup functionality is currently disabled. Please use other means for backups.</code></pre>
<p>Enter the following CLI command:</p>
<pre><code class="language-bash">bin/magento config:set system/backup/functionality_enabled 1</code></pre>
<p>For additional information on backups, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-backup.html">Back up and roll back the file system, media, and database.</a></p>
<h2>Insufficient disk space</h2>
<p>If the backup failed because of insufficient disk space, you should typically free up disk space by moving some files to another storage device or drive. However, there might be other ways to resolve the issue. See one of the following resources for tips:</p>
<ul>
<li><a href="http://www.cyberciti.biz/datacenter/linux-unix-bsd-osx-cannot-write-to-hard-disk">8 Tips to Solve Linux &amp; Unix Systems Hard Disk Problems Like Disk Full Or Can’t Write to the Disk</a></li>
<li><a href="http://serverfault.com/questions/315181/df-says-disk-is-full-but-it-is-not">serverfault: df says disk is full, but it is not</a></li>
<li><a href="http://unix.stackexchange.com/questions/125429/tracking-down-where-disk-space-has-gone-on-linux">unix.stackexchange.com: Tracking down where disk space has gone on Linux?</a></li>
</ul>
<h2>Operating system error</h2>
<p>Unfortunately, we can not recommend anything specific because of the variety of errors you might encounter. We can suggest, however, you:</p>
<ul>
<li>Contact your system administrator.</li>
<li>Search public forums like <a href="http://unix.stackexchange.com">Stack Exchange</a> or <a href="http://stackoverflow.com">Stack Overflow.</a>
</li>
<li>Open a <a href="https://github.com/magento/magento2/issues">GitHub issue</a> and we'll try to help.</li>
</ul>
<h2>Backup fails</h2>
<p>If the backup fails or if all backup tests fail, it's possible the <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/file-sys-perms-over.html">Magento file system owner</a> doesn't have sufficient privileges and ownership of the Magento file system. For example, another user might own the files or the files might be read-only.</p>
<p>Pay particular attention to file system permissions and ownership of the <code>&lt;magento_root&gt;/var</code> directory and subdirectories. For more information, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-system-perms.html">Set file system permissions and ownership</a>.</p>