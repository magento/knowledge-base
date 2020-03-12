This article provides a solution for the Magento Commerce Cloud issue, where you get the _"E: Error while verifying routes.yaml"_ error message when trying to deploy the project to the Staging or Production environment.&nbsp;

## Affected versions

*   Magento Commerce Cloud, all versions

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

Trigger a deploy by pushing the code to the Staging or Production environment.

<span class="wysiwyg-underline">Expected behavior</span>

Deployment is successful.&nbsp;

<span class="wysiwyg-underline">Actual behavior</span>

The deployment is blocked and the following error message is displayed in the log:&nbsp;

<pre class="language-bash">Deploying applications<br/> Verifying configuration<br/> E: Error while verifying routes.yaml.
<br/>The following domains are configured for your cluster, but have no routes defined in your routes.yaml file:
- store1.example.com 
- store2.example.com 
- test-store.example.com
With your current routes.yaml configuration, 
  these domains would NOT be served!
  
In order to continue, please see here for instructions to troubleshoot:
 https://support.magento.com/hc/en-us/articles/360032207811</pre>

## Cause

This error occurs if the route configuration for any additional domains that have been added to your project are missing from the `` routes.yaml `` file.

As part of the Magento self-service enablement upgrade for self-service route configuration, we added a pre-deployment check to ensure that all domains in your project have routes configured in the `` routes.yaml `` file. If any domains are missing route configuration, the deployment gets blocked.

## Solution

To resolve the blocked deployment, update the `` routes.yaml `` file to configure routes for the domains listed in the error message by using either of the following methods:

*   Apply the patch supplied by Magento during the upgrade process.
*   Manually add the missing route configuration to the `` routes.yaml `` file.

### Method 1: Apply the patch supplied by Magento

1.   Look for a recent Magento Support ticket with the title "_Enable self service features for &lt;project\_ID&gt;"._
2.   Follow the instructions in the ticket to apply the patch, which updates the route configuration for your Cloud environment.
3.   Сommit and push the changes to redeploy your project.

### Method 2: Manually add the missing route configuration

1.   To serve all domains in your project using the same route configuration, update the `` routes.yaml `` file adding route templates for the default domain and all other domains on your project as shown in the following example:
    
    <pre><code class="language-yaml">
"http://{default}/":
    type: upstream
    upstream: "mymagento:http"
"http://{all}/":
    type: upstream
    upstream: "mymagento:http"
      </code></pre>
    
    
2.   Сommit and push your changes to redeploy your project.

For detailed instructions to update the route configuration, see <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_routes.html" target="_self">Configure routes</a> in the Magento Cloud Guide.

<p class="info">If your project configuration specifies domains that are no longer in use, complete the following steps to remove them from your project at your earliest convenience:<br/> 1. Submit a Magento support ticket with a list of domains to remove from your project environments.<br/> 2. After the Support team removes the domains, update the <code>routes.yaml</code> file to remove any references to the obsolete domains.</p>