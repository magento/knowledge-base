---
title: Indexers "Update On Schedule" optimizes Magento performance  
link: https://support.magento.com/hc/en-us/articles/360040227191-Indexers-Update-On-Schedule-optimizes-Magento-performance-
labels: Magento Commerce Cloud,Magento Commerce,performance,indexers,update on save,update on schedule,best practices,2.3.x,2.2.x
---

<p>This article provides a fix for poor performance due to indexers being set on <em>Update on Save</em> mode, and how it is a best practice to set indexers to <em>Update on Schedule</em> mode to optimize performance in Magento.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, versions 2.2.x and 2.3.x</li>
<li>Magento Commerce Cloud, versions 2.2.x and 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Magento has two types of indexer modes: <em>Update on Save</em> (default setting) and <em>Update on Schedule</em>.</p>
<p>In <em>Update on Save</em> mode, indexed data is updated as soon as a change is made in the Admin. An example of this is the category products index is re-indexed after products are added to a category in the Admin.</p>
<p>In <em>Update on Schedule</em> mode, the index is set to <em>Update on Schedule</em> according to a Cron job.</p>
<h2>Cause</h2>
<p>Having a large store with multiple admins working in the backend or having many imports/exports can cause the indexes to be triggered constantly. The <em>Update on Save</em> mode degrades MySQL performance, and for large stores, the process can take hours to complete.</p>
<p>To avoid this issue, set the indexers to <em>Update on Schedule</em>.</p>
<h2>Solution</h2>
<ol>
<li>To view the current indexer configuration, run the following commands from CLI:<br/>
<pre><code class="language-xml">bin/magento indexer:show-mode [indexer]</code></pre>
<br/> Where <code>[indexer]</code> is a space-separated list of indexers.
<p> </p>
<pre><code class="language-xml">bin/magento indexer:show-mode [indexer]</code></pre>
<p><br/> Omit <code>[indexer]</code> to show the mode of all indexers.</p>
</li>
 
<li>To specify the indexer mode, run following command from CLI:<br/>
<pre><code class="language-xml">bin/magento indexer:set-mode {realtime|schedule} [indexer]</code></pre>
<br/> Where:<br/>
<ul>
<li>
<code>realtime</code>:    Sets the selected indexers to <em>Update on Save</em>.</li>
<li>
<code>schedule</code>:    Sets the specified indexers to save according to the Cron schedule. Use this setting to set <em>Update on Schedule</em>.</li>
<li>
<code>indexer</code>:      Is a space-separated list of indexers. Omit <code>[indexer]</code> to configure all indexers the same way.</li>
</ul>
</li>
</ol>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/mrg/ce/Indexer.html">Magento_Indexer Overview</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers">Manage the indexers - Configure indexers</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html">Indexer optimization</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-indexing-modes">Indexing overview - Indexing modes</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers">Configuration best practices - Indexers</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360039207872">Slow performance due to full reindexing</a></li>
</ul>
