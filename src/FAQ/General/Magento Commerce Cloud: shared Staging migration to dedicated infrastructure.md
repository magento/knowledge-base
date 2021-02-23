---
title:  Magento Commerce Cloud: shared Staging migration to dedicated infrastructure
link: https://support.magento.com/hc/en-us/articles/360043184711--Magento-Commerce-Cloud-shared-Staging-migration-to-dedicated-infrastructure
labels: upgrade,staging,production,Magento Commerce Cloud,commerce,cloud,migration,shared,Pro,infrastructure,FAQ,maintenance mode,Staging,dedicated
---

<p>This Frequently Asked Questions (FAQ) article answers common questions about the process of migrating shared Staging environments to dedicated infrastructure for Magento Commerce Cloud.</p>
<h2>Why is Magento upgrading my Staging environment to use Dedicated Staging?</h2>
<p>Magento is provisioning all Magento Commerce Cloud Pro plan accounts that have a shared Staging environment with a separate, dedicated Staging environment. We will migrate your existing shared Staging environment to the dedicated Staging environment as part of the upgrade process. Previously, Production and Staging environments for Pro plan projects were hosted on shared Cloud infrastructure, and customers had the option to add a dedicated Staging environment for an additional charge. </p>
<p>Having a dedicated Staging environment allows you to perform activities such as testing service upgrades and running performance tests in a separate environment without impacting your Production environment. You can also upsize your Staging environment independently as needed.</p>
<h2>Is there any cost to me?</h2>
<p>No; there is no cost to you. Magento is upgrading your project with a new dedicated Staging environment at no additional cost.</p>
<h2>How will the upgrade affect my Magento Commerce Pro project?</h2>
<p>You will have separate IaaS infrastructure for Staging and Production environments. The infrastructure for each environment includes a three-node, high-availability architecture for your data, services, caching, and store. Magento will migrate your existing Staging environment from the shared infrastructure to the new dedicated Staging environment with all environment variables, configurations, and most third-party services. We will migrate the database and all files on the shared mounts to the new dedicated infrastructure.</p>
<h2>How does the migration affect the way that I access and use the Staging environment?</h2>
<p>After we move your Staging environment to the dedicated infrastructure, the URLs to access your Staging environment will change. Additionally, you will have three different URLs for SSH access to the environment, one for each node in the cluster. You can find the URLs for web access and SSH access in the Project Web UI similar to the sample image below:</p>
<p><img alt="cloud_project-ssh-three-node-access.jpg" src="https://support.magento.com/hc/article_attachments/360056773872/cloud_project-ssh-three-node-access.jpg"/></p>
<p> </p>
<h2>Will there be any changes to my existing workflow?</h2>
<p>If you use a direct URL to connect to the shared Staging environment using SSH, you must replace the existing URL with the SSH access URL for the new dedicated Staging environment. See DevDocs' <a href="https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh">SSH to an environment</a>.</p>
<p>If you bypass the Fastly CDN to connect directly to the shared Staging origin, you might need to update the connection URL. For instructions, see DevDocs' <a href="https://devdocs.magento.com/cloud/cdn/trouble-fastly.html#cloud-test-stage">Bypass Fastly to check Staging and Production Sites</a> in the Magento Commerce Cloud Guide.</p>
<h2>What is the timeline?</h2>
<p>Magento plans to migrate Magento Commerce Cloud projects with shared Staging environments to dedicated environments on a rolling basis between May 11th and May 31st, 2020. Your team will receive a Support ticket seven days ahead of your upgrade so that you can plan accordingly.</p>
<h2>What action do I need to take?</h2>
<p>None. The Magento infrastructure team will initiate and complete the migration project using our automated process. When we move your environment, we will make sure that the code is in sync and that the database and media are migrated, including all files on the shared mounts.</p>
<p>The upgrade to the Dedicated Staging environment does create a new AWS instance that has new IP addresses and access points. This will potentially require you to update any dependencies updating dependencies for external systems or integrations. We recommend that you check these items following the upgrade.</p>
<p>If you run into any issues after the upgrade, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.</p>
<h2>What should I expect during the migration?</h2>
<p>The Support ticket will specify the migration date for the upgrade to Dedicated Staging. On the scheduled date, we will switch your current Staging environment to Maintenance Mode while we complete the migration. Your Staging environment will be offline for about an hour.</p>
<h2>What if I am actively using my staging environment during the migration?</h2>
<p>If there is an active deployment to the Staging environment, the migration process will begin after the deployment completes.</p>
<h2>What if my new Dedicated Staging environment is not large enough to support what I had been doing in Shared Staging at the time of upgrade?</h2>
<p>If you have issues with the size of your new Dedicated Staging environment after the upgrade is complete, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">please submit a Support ticket</a> with the subject line: Dedicated Staging Upgrade Upsize.</p>
<h2>What will happen to my Shared Staging environment?</h2>
<p>Your Shared Staging environment will be placed in Maintenance Mode. At some point (at least 7 days after upgrade), the old Shared Staging environment will be removed.</p>