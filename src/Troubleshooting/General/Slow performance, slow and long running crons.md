---
title: Slow performance, slow and long running crons
link: https://support.magento.com/hc/en-us/articles/360034631192-Slow-performance-slow-and-long-running-crons
labels: Magento Commerce Cloud,Magento Commerce,performance,flat tables,slow performance,long running crons,flat catalog indexers,how to
---

<p class="warning">On any Magento version, because some extensions only work with flat tables there is a risk if you disable flat tables. If you know that you have some extensions that use Flat Catalog indexers, you may need to take that into consideration when setting those values to "<em>No</em>".</p>
<p>This article describes how to solve site performance issues and slow running and stuck crons caused by <a href="https://docs.magento.com/m2/ce/user_guide/catalog/catalog-flat.html">flat tables and indexers</a> having been enabled. </p>
<p>AFFECTED PRODUCTS AND VERSIONS</p>
<ul>
<li>Magento Commerce Cloud 2.1.x and above</li>
<li>Magento Commerce (On-Premise) 2.1.x and above</li>
<li>Magento Open Source 2.1.x and above</li>
</ul>
<h2>Issue</h2>
<p>Flat indexers can cause:</p>
<ul>
<li>Heavy SQL load and site performance issues.</li>
<li>Long running and stuck crons.</li>
</ul>
<h2>Cause</h2>
<p>Flat tables and indexers enabled.</p>
<h2>Solution</h2>
<p>Starting with Magento 2.1.x and above, the use of a flat catalog is no longer a best practice and is not recommended. Continued use of this feature is known to cause performance degradation and other indexing issues. To disable the flat catalog:</p>
<ol>
<li>In the Magento Admin, navigate to Stores &gt; Settings &gt; Configuration.</li>
<li>In the panel on the left under Catalog, choose Catalog.</li>
<li>Expand the Storefront section, and do the following:
<ul>
<li>Set Use Flat Catalog Category to <em>No</em>.</li>
<li>Set Use Flat Catalog Product to <em>No</em>.</li>
</ul>
</li>
<li>When complete, click Save Config. Then when prompted, refresh the cache.</li>
<li>Flush cache by running <code>php bin/magento cache:flush</code>
</li>
</ol>
<p>If you can't change the Use Flat Catalog Category and Use Flat Catalog Product to <em>No</em> because the options are greyed out disable flat indexers in <code>app/etc/config.php</code>:</p>
<ol>
<li>Run this command to make sure all indexers are set to Update by schedule: <code>php bin/magento indexer:set-mode schedule</code>
</li>
<li>Edit <code>app/etc/config.php</code> and locate the lines with <code>flat_catalog_product</code> and <code>flat_catalog_category</code> - change them from 1 to 0 to disable them.</li>
<li>Run the command <code>php bin/magento app:config:import</code>
</li>
<li>Run this command to confirm that the flat indexers are disabled: <code>php
    bin/magento indexer:status</code>
</li>
<li>Flush cache by running <code>php bin/magento cache:flush</code> </li>
</ol>
<h2>Related Information</h2>
<p>DevDocs: <a href="https://support.magento.com/hc/en-us/articles/360000097713-Reset-stuck-Magento-cron-jobs-manually-on-Cloud">Reset stuck Magento cron jobs manually on Cloud</a></p>