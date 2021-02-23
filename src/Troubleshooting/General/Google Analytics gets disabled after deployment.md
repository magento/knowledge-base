---
title: Google Analytics gets disabled after deployment
link: https://support.magento.com/hc/en-us/articles/360033743772-Google-Analytics-gets-disabled-after-deployment
labels: Magento Commerce Cloud,google analytics,how to
---

<p>This topic discusses solution to a typical issue you might experience with Google Analytics during deployment.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Issue</h2>
<p>When deploying your code across environments, the build and deploy scripts verify the <code>master/production/staging </code>branch is deployed to keep Google Analytics enabled. When deploying develop (or child) branches of master to developer environments (Integration), the deploy script disables Google Analytics.</p>
<h2>Cause</h2>
<p>This is a working as an intended feature to ensure developer data and interactions are not sent to or tracked by Google Analytics.</p>
<h2>Solution</h2>
<p>If you want to have Google Analytics always enabled, set the deploy variable <code>ENABLE_GOOGLE_ANALYTICS = true</code>, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/variables-deploy.html#enable_google_analytics">Deploy variables</a>. </p>
<p> </p>
<p> </p>