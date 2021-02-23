---
title: PWA Studio: Venia GraphQL queries to Magento produce validation errors
link: https://support.magento.com/hc/en-us/articles/360044083991-PWA-Studio-Venia-GraphQL-queries-to-Magento-produce-validation-errors
labels: Magento Commerce Cloud,Magento Commerce,PWA,validation,errors,PWA Studio,Venia,2.3.x,GraphQL queries,2.2.x,how to,compatibility report
---

<p>This article provides recommendations on how to solve the issue where Venia storefront GraphQL queries to Magento instance produce validation errors. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento PWA Studio project</li>
</ul>
<h2>Issue</h2>
<p>Venia GraphQL queries to Magento Commerce or Magento Commerce Cloud produce validation errors.</p>
<h2>Cause</h2>
<p>One of the reasons causing the problem, might be Venia and its GraphQL queries being out of sync with the schema of the connected Magento instance. </p>
<h2>Solution</h2>
<p>To test whether your queries are up to date, run the following command in the project root:</p>
<pre><code class="language-bash">yarn run validate-queries</code></pre>
<p>This will show a compatibility report. If you have incompatibilities, you need to upgrade your PWA Studio or Magento instance. Check the <a href="https://pwastudio.io/technologies/magento-compatibility/">Magento compatibility matrix</a> to see what exactly versions you need. </p>
<p>Reference the following documentation for instructions on how to upgrade:</p>
<ul>
<li>For PWA Studio upgrades, search for the "Upgrading from a previous version" section of the <a href="https://github.com/magento/pwa-studio/releases/">PWA release notes</a> for the version that you need to upgrade to.</li>
<li><a href="https://devdocs.magento.com/cloud/project/project-upgrade.html">Upgrade Magento Commerce Cloud version</a></li>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/cli/cli-upgrade.html">Upgrade Magento Commerce (installed using "composer create-project" or archive</a>) </li>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/dev_update-magento.html">Upgrade Magento Commerce (installed by cloning Magento repo)</a> </li>
</ul>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360039475011">PWA Studio: Webpack hangs before beginning compilation</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360036928811">PWA Studio: Validation errors when running developer mode</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360036581232">PWA Studio: Browser displays “Cannot proxy to“ error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360022507012">Configure NPM to be able to use PWA Studio</a></li>
<li><a href="https://magento.github.io/pwa-studio/">Magento PWA Documentation</a></li>
</ul>