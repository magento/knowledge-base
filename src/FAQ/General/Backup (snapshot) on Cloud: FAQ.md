---
title: Backup (snapshot) on Cloud: FAQ
link: https://support.magento.com/hc/en-us/articles/360003244074-Backup-snapshot-on-Cloud-FAQ
labels: staging,production,Magento Commerce Cloud,Pro,snapshot,backup,FAQ,2.3.x,2.2.x,Starter,Pro Legacy
---

<p>This article covers the essentials of backing up your environments with snapshots on Magento Commerce Cloud.</p>
<h2>Affected products and versions</h2>
<ul>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Plans:  Starter, Pro Legacy, Pro</li>
</ul>
</ul>
<h2>Environment snapshot, Pro plan</h2>
<h3>Staging and Production environments</h3>
<ul>
<ul>
<ul>
<li>Your Staging and Production environments are automatically backed up with snapshots every hour.</li>
<li>Automatic snapshots are created regardless of the live state of your site (snapshots also created for sites that have not been launched yet).</li>
<li>Environment snapshots include your full system (file system and the database).</li>
<li>Manual snapshots are not available for Staging and Production environments on Pro plan.</li>
<li>The backups are created using the encrypted Amazon Web Services Elastic Block Store (AWS EBS) snapshots.</li>
<li>Retention time for automatic snapshots is different and follows <a href="https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery">the schedule</a>.</li>
</ul>
</ul>
</ul>
<h3>Integration (Development) environment</h3>
<ul>
<ul>
<ul>
<li>Your Integration environment is not being backed up automatically, but you may create snapshots manually.</li>
<li>You can create manual snapshots for Integration environments on non-live stores.</li>
<li>You may have multiple snapshots that have been triggered manually.</li>
<li>A manually triggered snapshot is stored for 7 days.</li>
</ul>
</ul>
</ul>
<p>Related documentation on DevDocs: </p>
<ul>
<ul>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery">Backup and disaster recovery</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#create-snapshot">Create a snapshot</a></li>
</ul>
</ul>
</ul>
<h2>Environment snapshot, Starter plan</h2>
<ul>
<ul>
<ul>
<li>All types of environments (Integration, Staging, Production) are not being backed up automatically, but you may create snapshots manually.</li>
<li>You may create manual snapshots regardless of the live state of your site (snapshots also created for sites that have not been launched yet).</li>
<li>A manually triggered snapshot is stored for 7 days.</li>
</ul>
</ul>
</ul>
<h2>Restore an environment snapshot</h2>
<p>To restore an existing snapshot, follow the steps in DevDocs' <a href="https://devdocs.magento.com/cloud/project/project-webint-snap.html#restore-snapshot">Snapshots and backup management: Restore a snapshot</a>.</p>
<h2>Database (DB) backup</h2>
<p>DB backup is a part of a Cloud snapshot:</p>
<blockquote>
<p>A snapshot is a complete backup of an environment that includes all persistent data from all running services (for example, your MySQL database, Redis, and so on) and any files stored on the mounted volumes.</p>
<p><a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html">Snapshots and backup management</a> (DevDocs)</p>
</blockquote>
<p>If, for any reason, you need to backup your DB only (on any environment), see the Knowledge Base article: <a href="https://support.magento.com/hc/en-us/articles/360003254334">Generate database dumps on Cloud</a>.</p>