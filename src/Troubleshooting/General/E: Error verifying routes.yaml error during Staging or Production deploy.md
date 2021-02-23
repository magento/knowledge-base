---
title: E: Error verifying routes.yaml error during Staging or Production deploy
link: https://support.magento.com/hc/en-us/articles/360032207811-E-Error-verifying-routes-yaml-error-during-Staging-or-Production-deploy
labels: Magento Commerce Cloud,deployment,troubleshooting,routes.yaml
---

<p>This article provides a solution for the Magento Commerce Cloud issue, where you get the <em>"E: Error while verifying routes.yaml"</em> error message when trying to deploy the project to the Staging or Production environment. </p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Trigger a deploy by pushing the code to the Staging or Production environment.</p>
<p>Expected behavior</p>
<p>Deployment is successful. </p>
<p>Actual behavior</p>
<p>The deployment is blocked and the following error message is displayed in the log: </p>
<pre class="language-bash">Deploying applications<br/> Verifying configuration<br/> E: Error while verifying routes.yaml.
<br/>The following domains are configured for your cluster, but have no routes defined in your routes.yaml file:
- store1.example.com 
- store2.example.com 
- test-store.example.com
With your current routes.yaml configuration, 
  these domains would NOT be served!
  
In order to continue, please see here for instructions to troubleshoot:
 https://support.magento.com/hc/en-us/articles/360032207811</pre>
<h2>Cause</h2>
<p>This error occurs if the route configuration for any additional domains that have been added to your project are missing from the <code>routes.yaml</code> file.</p>
<p>As part of the Magento self-service enablement upgrade for self-service route configuration, we added a pre-deployment check to ensure that all domains in your project have routes configured in the <code>routes.yaml</code> file. If any domains are missing route configuration, the deployment gets blocked.</p>
<h2>Solution</h2>
<p>To resolve the blocked deployment, update the <code>routes.yaml</code> file to configure routes for the domains listed in the error message by using either of the following methods:</p>
<ul>
<li>Apply the patch supplied by Magento during the upgrade process.</li>
<li>Manually add the missing route configuration to the <code>routes.yaml</code> file.</li>
</ul>
<h3>Method 1: Apply the patch supplied by Magento</h3>
<ol>
<li>Look for a recent Magento Support ticket with the title "<em>Enable self service features for &lt;project_ID&gt;".</em>
</li>
<li>Follow the instructions in the ticket to apply the patch, which updates the route configuration for your Cloud environment.</li>
<li>Сommit and push the changes to redeploy your project.</li>
</ol>
<h3>Method 2: Manually add the missing route configuration</h3>
<ol>
<li>To serve all domains in your project using the same route configuration, update the <code>routes.yaml</code> file adding route templates for the default domain and all other domains on your project as shown in the following example:
<pre><code class="language-yaml">
"http://{default}/":
    type: upstream
    upstream: "mymagento:http"
"http://{all}/":
    type: upstream
    upstream: "mymagento:http"
      </code></pre>
</li>
<li>Сommit and push your changes to redeploy your project.</li>
</ol>
<p>For detailed instructions to update the route configuration, see <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_routes.html">Configure routes</a> in the Magento Cloud Guide.</p>
<p class="info">If your project configuration specifies domains that are no longer in use, complete the following steps to remove them from your project at your earliest convenience:<br/> 1. Submit a Magento support ticket with a list of domains to remove from your project environments.<br/> 2. After the Support team removes the domains, update the <code>routes.yaml</code> file to remove any references to the obsolete domains.</p>