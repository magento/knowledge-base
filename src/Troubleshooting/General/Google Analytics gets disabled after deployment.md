This topic discusses solution to a typical issue you might experience with Google Analytics during deployment.

### Affected products and versions

*   Magento Commerce Cloud, all versions

<h2 id="google-analytics-disables-when-deployed">Issue</h2>

When deploying your code across environments, the build and deploy scripts verify the `` master/production/staging&nbsp; ``branch is deployed to keep Google Analytics enabled. When deploying develop (or child) branches of master to developer environments (Integration), the deploy script disables Google Analytics.

## Cause

This is a working as an intended feature to ensure developer data and interactions are not sent to or tracked by Google Analytics.

## Solution

If you want to have Google Analytics always enabled, set the deploy variable `` ENABLE_GOOGLE_ANALYTICS = true ``, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/variables-deploy.html#enable_google_analytics" target="_self">Deploy variables</a>.&nbsp;

&nbsp;
&nbsp;