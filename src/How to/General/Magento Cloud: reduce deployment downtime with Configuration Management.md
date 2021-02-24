---
title: Magento Cloud: reduce deployment downtime with Configuration Management
link: https://support.magento.com/hc/en-us/articles/115003169574-Magento-Cloud-reduce-deployment-downtime-with-Configuration-Management
labels: Magento Commerce Cloud,configuration,cloud,pipeline,deployment,management,2.2,downtime,2.1.4,2.2.x,how to
---

<p>To dramatically reduce maintenance downtime and provide efficient configuration of your store across environments, Magento Commerce (Cloud) provides the Configuration Management feature. For Magento Commerce (Cloud) 2.2.x and later implementations, this feature supports Pipeline Deployment concepts and options with reduced steps.</p>
<h2>Overview</h2>
<p>The painful and time-consuming issues of deploying your web store include:</p>
<ul>
<li>
Applying the same configuration across all environments. Normally, you would enter configurations manually or through complicated database updates.<br/> With Configuration Management, you export configurations from the database into a single file to later push it with your code from your local development environment to Integration, Staging, and Production.<br/><br/>
</li>
<li>
Site downtime when deploying static content. Typically, static content is deployed during the <a href="http://devdocs.magento.com/guides/v2.2/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-hook">deploy phase</a>. This can take up to 30 minutes or more, which is not acceptable for business.<br/> Configuration Management moves static content deployment to the <a href="http://devdocs.magento.com/guides/v2.2/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-build">build phase</a>, which does not require downtime.
</li>
</ul>
<h2>Technology versions</h2>
<ul>
<li>Magento Commerce (Cloud) 2.1.4 and later for Configuration Management</li>
<li>Magento Commerce (Cloud) 2.2 and later for Configuration Management/Pipeline Deployment</li>
</ul>
<h2>What is Configuration Management</h2>
<p>To make a long story short, the Configuration Management (also known as Pipeline Deployment) process extracts all configuration settings from your Magento implementation (database) into a single PHP file. Then, you add the file to your Git commit and push it across all of your environments.</p>
<p>This provides the following benefits:</p>
<ul>
<li>
Consistent settings in all environments: any settings being exported to the configuration file become locked (the corresponding fields in the Magento Admin become read-only), which ensures consistent configurations as you push the file across all your environments.<br/> </li>
<li>
Reduced downtime: the static file deployment shifts from the <a href="http://devdocs.magento.com/guides/v2.2/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-hook">deploy phase</a> (which requires the site to be in the Maintenance mode) to the <a href="http://devdocs.magento.com/guides/v2.2/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-build">build phase</a> (when the site is not in Maintenance mode and will not be brought down if errors or issues occur).<br/> </li>
<li>
Protected sensitive data: with Magento Commerce (Cloud) 2.2 and later, the process also exports any sensitive data (for example, payment gateway credentials) to the <code>env.php</code> file. This file should only be saved to the environment it is created in and not pushed with your Git branches.</li>
</ul>
<p>We strongly recommend applying the Configuration Management approach in your deployment.</p>
<h2>Configuration Management on DevDocs</h2>
<ul>
<li>
<a href="http://devdocs.magento.com/guides/v2.1/cloud/live/sens-data-over.html">Configuration management for 2.1.X</a> and the <a href="http://devdocs.magento.com/guides/v2.1/cloud/live/sens-data-initial.html">example</a> in the <em>Magento Commerce (Cloud) Guide</em>
</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-over.html">Configuration management for 2.2.X</a> and the <a href="http://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-initial.html">example</a> in the <em>Magento Commerce (Cloud) Guide</em>
</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-upgrade.html#old-version">Upgrade from 2.0.X or 2.1.X</a> section of the <em>Upgrade Magento Commerce (Cloud)</em> topic</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/config-guide/deployment/">Pipeline Deployment</a> in the <em>Magento Configuration Guide</em> — For Magento Commerce (Cloud), you do not need to follow the instructions in this guide. The content is strictly for reference. We already provide the build server, integration environments, and more with Cloud.<em><br/></em>
</li>
</ul>