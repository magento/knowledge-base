---
title: Reset stuck Magento cron jobs manually on Cloud
link: https://support.magento.com/hc/en-us/articles/360000097713-Reset-stuck-Magento-cron-jobs-manually-on-Cloud
labels: Magento Commerce Cloud,Cloud,cron,reset,ece-tools,stuck cron,how to
---

<p>Magento cron jobs may don't finish executing, get stuck, and prevent other cron jobs from running. This article shows how to reset the stuck cron jobs manually.</p>
<p>Use this command with caution! We recommend reading the <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html">Reset cron jobs</a> article on DevDocs for more details.</p>
<h2>Steps</h2>
<ol>
<li>Make sure the Magento <a href="http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html">ECE-Tools</a> are <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-patch.html#patch-magentoece-tools">patched</a> to <a href="http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html#v200204">v2002.0.4</a>.</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-start.html#env-start-tunn">SSH to your environment</a>.</li>
<li>Execute this command:<br/> ./vendor/bin/ece-tools cron:unlock</li>
</ol>
<h2>Warnings</h2>
<ul>
<li>The command resets all cron jobs, including those currently running; use it in exceptional cases only.</li>
<li>Avoid using this solution when indexers are running.</li>
</ul>
<h2>Read it on DevDocs</h2>
<p><a href="https://devdocs.magento.com/guides/v2.2/cloud/trouble/reset-cron-jobs.html">Reset cron jobs</a></p>