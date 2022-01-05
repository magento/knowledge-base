---
title: Adobe Commerce deployment troubleshooter
labels: Troubleshooter,deploy,deployment,deployment error,deployment fails,stuck deployment,Adobe Commerce,cloud infrastructure
---

<div class="zd-accordion">
<div id="zd-accordion-1" class="zd-accordion-panel">
<p>Stuck deployments and failed deployments on Adobe Commerce can be solved using the Deployment troubleshooter tool. Click on each question to reveal the answer in each step of the troubleshooter.</p>
<h5>Step 1</h5>
<div class="zd-accordion-section">Stuck Deployment – Is Adobe Commerce on cloud infrastructure service up? Check <a href="https://status.adobe.com/products/3350/">Adobe Magento Magento Commerce Cloud</a>.</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br>
b. NO – Maintenance or global outages. Check for estimated duration and updates.</p>
</div>
<div id="zd-accordion-2" class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">SSH successful to all nodes?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.<br>
b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a>.</p>
</div>
<div id="zd-accordion-3" class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">All services running?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.<br>
b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a>.</p>
</div>
<div id="zd-accordion-4" class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">Using Bitbucket?</div>
<p class="zd-accordion-text">a. YES – Check <a href="https://bitbucket.status.atlassian.com/">status.bitbucket.com</a>.<br>
b. NO – Check deployment log errors in <a href="https://devdocs.magento.com/cloud/project/log-locations.html#build-and-deploy-logs">Log Locations: Build and Deploy Logs</a>. Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.</p>
</div>
<div id="zd-accordion-5" class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Error code reported?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.</p>
</div>
<div id="zd-accordion-6" class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">403 Forbidden?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-15">Step 15.</a><br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.</p>
</div>
<div id="zd-accordion-7" class="zd-accordion-panel">
<h5>Step 7</h5>
<div class="zd-accordion-section">Are cron jobs currently running?</div>
<p class="zd-accordion-text">a. YES – Log in by ssh on the integration branch (e.g., primary). Kill and unlock cron jobs. This will kill cron jobs and reset the status. Run <code>php vendor/bin/ece-tools cron:kill</code> and then <code>php vendor/bin/ece-tools cron:unlock</code>. If you were in the process of merging one environment into another, check both environments for running crons.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-16">Step 16.</a> </p>
</div>
<div id="zd-accordion-8" class="zd-accordion-panel">
<h5>Step 8</h5>
<div class="zd-accordion-section">Unable to upload application to the remote cluster error?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10.</a></p>
</div>
<div id="zd-accordion-9" class="zd-accordion-panel">
<h5>Step 9</h5>
<div class="zd-accordion-section">Available storage okay?</div>
<p class="zd-accordion-text">a. YES – Proceed with <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.<br>
b. NO – Review <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html">Manage disk space</a>.</p>
</div>
<div id="zd-accordion-10" class="zd-accordion-panel">
<h5>Step 10</h5>
<div class="zd-accordion-section">
<em><filename> file could not be written Warning</em>?</div>
<p class="zd-accordion-text">a. YES – Please <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html#application-disk-space">increase the disk value in .magento.app.yaml</a> and redeploy. If this does not work, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.<br>
b. NO – Proceed with <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.</p>
</div>
<div id="zd-accordion-11" class="zd-accordion-panel">
<h5>Step 11</h5>
<div class="zd-accordion-section">Environment redeployment failed error?</div>
<p class="zd-accordion-text">a. YES – Proceed with <a class="accordion-anchor" href="#zd-accordion-12">Step 12</a>.<br>
b. NO – Proceed with <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.</p>
</div>
<div id="zd-accordion-12" class="zd-accordion-panel">
<h5>Step 12</h5>
<div class="zd-accordion-section">Elasticsearch being upgraded or deployed?</div>
<p class="zd-accordion-text">a. YES – Elasticsearch failed upgrade steps. Refer to <a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/setup-upgrade.html">Elasticsearch software compatibility</a>. If the Elasticsearch upgrade still doesn't work, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>. <strong>Note</strong>: On Adobe Commerce on cloud infrastructure, please be aware that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within the desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> detailing your required service upgrade and stating the time when you want the upgrade process to start.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-13">Step 13</a>.</p>
</div>
<div id="zd-accordion-13" class="zd-accordion-panel">
<h5>Step 13</h5>
<div class="zd-accordion-section">File system out of inodes or space?</div>
<p class="zd-accordion-text">a. YES – See <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html">Manage disk space</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-14">Step 14</a>.</p>
</div>
<div id="zd-accordion-14" class="zd-accordion-panel">
<h5>Step 14</h5>
<div class="zd-accordion-section">Error about Elasticseach versions?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-15">Step 15</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-20">Step 20</a>.</p>
</div>
<div id="zd-accordion-15" class="zd-accordion-panel">
<h5>Step 15</h5>
<div class="zd-accordion-section">Composer config correct?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.<br>
b. NO –  Review <a href="https://getcomposer.org/doc/articles/troubleshooting.md">Composer Troubleshooter webpage</a>.</p>
</div>
<div id="zd-accordion-16" class="zd-accordion-panel">
<h5>Step 16</h5>
<div class="zd-accordion-section">Long running processes(es)?</div>
<p class="zd-accordion-text">a. YES – Identify long running processes, kill process, and monitor deployments for reoccurrence.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-17">Step 17</a>.</p>
</div>
<div id="zd-accordion-17" class="zd-accordion-panel">
<h5>Step 17</h5>
<div class="zd-accordion-section">Post hook failure/hang?</div>
<p class="zd-accordion-text">a. YES – Database: <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html#allocating-disk-space">Free disk space</a>, corruption, incomplete/corrupted tables.<br>
b.  NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-18">Step 18</a>.</p>
</div>
<div id="zd-accordion-18" class="zd-accordion-panel">
<h5>Step 18</h5>
<div class="zd-accordion-section">Using third-party extensions?</div>
<p class="zd-accordion-text">a. YES – Try <a href="https://devdocs.magento.com/cloud/howtos/install-components.html#manage-extensions">Disabling the third-party extensions</a> and running the deployment (to see if they are the cause of the problem), especially if there are extension names in any errors.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-19">Step 19</a>.</p>
</div>
<div id="zd-accordion-19" class="zd-accordion-panel">
<h5>Step 19</h5>
<div class="zd-accordion-section">
<a href="https://support.magento.com/hc/en-us/articles/360030903091">Check slow query log and MySQL show processlist</a>. Long running queries?</div>
<p class="zd-accordion-text">a. YES – Kill any long running queries. Review <a href="https://dev.mysql.com/doc/refman/8.0/en/kill.html">MySQL Kill Syntax.</a><br>
b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a>.</p>
</div>
<div id="zd-accordion-20" class="zd-accordion-panel">
<h5>Step 20</h5>
<div class="zd-accordion-section">Downgrading Elasticsearch versions?</div>
<p class="zd-accordion-text">a. YES – Can't be done through configuration. <a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a>.<br>
b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a>.</p>
</div>
<p><a href="#zd-accordion-1">Back to Step 1</a></p>
</div>
