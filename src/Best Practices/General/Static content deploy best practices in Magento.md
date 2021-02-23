---
title: Static content deploy best practices in Magento
link: https://support.magento.com/hc/en-us/articles/360031624091-Static-content-deploy-best-practices-in-Magento
labels: Magento Commerce Cloud,Magento Commerce,configuration,content,deploy,deployment,static,ece-tools,best practices
---

<p>This article talks about static content deploy (SCD) best practices in Magento to help avoid issues where the static content would not be available on your website.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, all versions</li>
<li>Magento Open Source, all versions</li>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Best practices</h2>
<p>To avoid an issue with static content not being available on your website, follow these best practices to make sure your static content is both configured and deployed correctly:</p>
<ol>
<li>Make sure to follow deployment guidelines:
<ul>
<li>For Magento Commerce and Magento Open Source, all versions: <a href="https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/">Deployment Overview</a>
</li>
<li>For Magento Commerce Cloud, all versions: <a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/cloud-deployment-process.html">Cloud deployment process</a> and also <a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/static-content-deployment.html">Static content deployment strategies</a>
</li>
</ul>
</li>
<li>For Magento Commerce Cloud, all versions, ensure that ece-tools is on the newest release: <a href="https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html">Update ece-tools version</a>
</li>
<li>For Magento Commerce Cloud, all versions, make sure that static content is deployed during the build phase rather than the deployment phase: <a href="https://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-over.html#cloud-confman-scd-over">Configuration management for store settings - Static content deployment performance</a>
</li>
<li>Make sure that you do not have long-running cron jobs, and kill any long-running cron processes. Long-running cron jobs can take up CPU resources and potentially greatly increase deployment time.</li>
<li>For Magento Commerce and Magento Open Source, all versions, check that the <code>php</code> process in CLI has access to the <code>pub/static</code> directory, otherwise you could face an issue where a static content deploy will be unable to write files to that directory. For more information: <a href="https://devdocs.magento.com/guides/v2.3/config-guide/prod/prod_file-sys-perms.html">File systems access permissions</a>
</li>
<li>Ensure the <code>generated</code> directory is not a shared directory across builds, otherwise builds could fail randomly. For more information:
<ul>
<li>Magento Commerce and Magento Open Source, all versions: <a href="https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/technical-details.html">Technical Details</a>
</li>
<li>Magento Commerce Cloud, all versions: <a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-build">Deployment process - Phase 2: build</a>
</li>
</ul>
</li>
<li>Check your SCD strategy. The <em>quick</em> strategy is the default. For more information:
<ul>
<li>Magento Commerce and Magento Open Source, all versions: <a href="https://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-static-deploy-strategies.html">Static files deployment strategies</a>
</li>
<li>Magento Commerce Cloud, all versions: <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#scd_strategy">Deploy variables - SCD_STRATEGY</a>
</li>
</ul>
</li>
</ol>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/pattern-library/containers/staticContentContainer/contentContainer.html">Static Content Container</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cache/static-content-signing.html">Static Content Signing</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/env/variables-deploy.html#static_content_symlink">Deploy variables - STATIC_CONTENT_SYMLINK</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/performance-best-practices/deployment-flow.html">Deployment flow</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html">Zero downtime deployment</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/optimize-cloud-deployment.html">Optimize cloud deployment</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360000338413">Error running `setup:static-content:deploy` manually (deployed_version.txt is not writable)</a></li>
</ul>
