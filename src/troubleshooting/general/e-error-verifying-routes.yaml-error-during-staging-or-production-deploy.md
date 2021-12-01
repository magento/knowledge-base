---
title: "E: Error verifying routes.yaml error during Staging or Production deploy"
labels: Magento Commerce Cloud,deployment,routes.yaml,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a solution for the Adobe Commerce on cloud infrastructure issue, where you get the *"E: Error while verifying routes.yaml"* error message when trying to deploy the project to the Staging or Production environment.

## Affected versions

* Adobe Commerce on cloud infrastructure, all versions

## Issue

<ins>Steps to reproduce</ins>:

Trigger a deploy by pushing the code to the Staging or Production environment.

<ins>Expected behavior</ins>:

Deployment is successful.

<ins>Actual behavior</ins>:

The deployment is blocked and the following error message is displayed in the log:

<pre>Deploying applications Verifying configuration E: Error while verifying routes.yaml.
The following domains are configured for your cluster, but have no routes defined in your routes.yaml file:

- store1.example.com
- store2.example.com
- test-store.example.com

With your current routes.yaml configuration,
  these domains would NOT be served!

In order to continue, please see here for instructions to troubleshoot:
 https://support.magento.com/hc/en-us/articles/360032207811</pre>

## Cause

This error occurs if the route configuration for any additional domains that have been added to your project are missing from the `routes.yaml` file.

As part of the Adobe Commerce self-service enablement upgrade for self-service route configuration, we added a pre-deployment check to ensure that all domains in your project have routes configured in the `routes.yaml` file. If any domains are missing route configuration, the deployment gets blocked.

## Solution

To resolve the blocked deployment, update the `routes.yaml` file to configure routes for the domains listed in the error message by using either of the following methods:

* Apply the patch supplied by Adobe Commerce during the upgrade process.
* Manually add the missing route configuration to the `routes.yaml` file.

### Method 1: Apply the patch supplied by Adobe Commerce

1. Look for a recent Adobe Commerce support ticket with the title "*Enable self service features for <project\_ID>".*
1. Follow the instructions in the ticket to apply the patch, which updates the route configuration for your cloud environment.
1. Сommit and push the changes to redeploy your project.

### Method 2: Manually add the missing route configuration

1. To serve all domains in your project using the same route configuration, update the `routes.yaml` file adding route templates for the default domain and all other domains on your project as shown in the following example:
   ```yaml
   "http://{default}/":
       type: upstream
       upstream: "mymagento:http"
   "http://{all}/":
       type: upstream
       upstream: "mymagento:http"
   ```    
1. Сommit and push your changes to redeploy your project.

For detailed instructions to update the route configuration, see [Cloud for Adobe Commerce > Configure routes](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_routes.html) in our developer documentation.

>![info]
>
>If your project configuration specifies domains that are no longer in use, complete the following steps to remove them from your project at your earliest convenience: 1. Submit a support ticket with a list of domains to remove from your project environments. 2. After the Support team removes the domains, update the `routes.yaml` file to remove any references to the obsolete domains.
