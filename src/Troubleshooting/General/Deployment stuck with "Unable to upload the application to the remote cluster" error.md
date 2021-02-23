---
title: Deployment stuck with "Unable to upload the application to the remote cluster" error
link: https://support.magento.com/hc/en-us/articles/360030662992-Deployment-stuck-with-Unable-to-upload-the-application-to-the-remote-cluster-error
labels: Magento Commerce Cloud,error,deployment,troubleshooting
---

<p>This article provides a solution for the Magento Commerce issue, where deployment gets stuck, and the following error message can be found in the deploy log: <em>"Error: Unable to upload the application to the remote cluster"</em>.</p>
<h3>Affected products and versions:</h3>
<ul>
<li>Magento Commerce Cloud</li>
<li>all versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Trigger deployment manually or by performing a merge, push, or synchronization of your environment.</p>
<p>Actual result</p>
<p>Deployment gets stuck and in the deployment error log in Cloud UI, the following error message is displayed: <em>"Error: Unable to upload the application to the remote cluster" found in deploy log after failed deployment, site may display error "503 first byte timeout"</em>.</p>
<p>Expected result</p>
<p>Deployment is completed successfully.</p>
<h2>Cause</h2>
<p>The problem is caused by the outage of available storage. </p>
<h2>Solution</h2>
<p>You can consider cleaning the log directories and/or increasing disk space.</p>
<p>Directories that be considered for clean up:</p>
<ul>
<li><code>var/log</code></li>
<li><code>var/report</code></li>
<li><code>var/debug/</code></li>
<li><code>var</code></li>
</ul>
<p>For details on how increase disk space if you on the Starter plan, see <a href="https://support.magento.com/hc/en-us/articles/360005189554-Increase-disk-space-for-Integration-environment-on-Cloud">Increase disk space for Integration environment on Cloud</a>. The same instructions can be used for increasing space of Pro plan Integration environment.<br/> For Pro Production/Staging, you need to <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">file a ticket to Magento Support</a> and request increase disk space. But typically, you will not have to deal with this on Staging/Production of the Pro plan, because Magento monitors these parameters for you, and alerts and/or takes actions, according to the contract.</p>