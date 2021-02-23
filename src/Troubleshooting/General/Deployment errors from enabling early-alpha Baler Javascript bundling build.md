---
title: Deployment errors from enabling early-alpha Baler Javascript bundling build 
link: https://support.magento.com/hc/en-us/articles/360050887931-Deployment-errors-from-enabling-early-alpha-Baler-Javascript-bundling-build-
labels: Magento Commerce Cloud,Magento Commerce,deploy,deployment,troubleshooting,github,deployment error,deployment fails,2.3.x,Javascript,2.4.x,Baler
---

<p>The merchant experiences deployment errors when using the Baler module on a production environment, as the feature is currently in the early alpha development stage.</p>
<p class="warning">Early-alpha Baler Javascript bundling is not ready for production use and is used at your own risk.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, 2.3.x and 2.4.x.</li>
<li>Magento Commerce, 2.3.x and 2.4.x.</li>
</ul>
<h2>Issue</h2>
<p>We do not recommend that merchants use Baler module on a production environment, as it is currently in the early alpha development stage. Using it can result in deployment errors.</p>
<p>Steps to reproduce</p>
<ol>
<li>The merchant tries to insert the SCD_USE_BALER variable in the build stage of the <code>.magento.env.yaml</code> file, which enables the Baler Javascript bundling package. </li>
<li>The merchant also adds the Baler composer dependency:<br/><code>"magento/module-baler": "1.0.0-alpha"</code> to <code>require</code> section of <code>composer.json</code>.</li>
</ol>
<p>Actual result</p>
<p>The merchant sees the following error message in the deployment logs on the cloud, which is <code>&lt;project home&gt;/var/log/cloud.log</code>, upon the static content deploy stage:</p>
<pre class="line-numbers"><code class="language-clike">   [2020-08-19 12:06:12] WARNING: [1007] Baler JS bundling cannot be used because of the following issues:
        [2020-08-19 12:06:12] WARNING:  - Path to baler executable could not be found. The Node package may not be installed or may not be linked.</code></pre>
<p>Expected result</p>
<p>Successful deployment.</p>
<h2>Cause</h2>
<p>The Baler module is currently in the early alpha development stage, and the Baler extension installation process is complex.</p>
<h2>Solution</h2>
<p>You can review existing Baler Alpha documentation at <a href="https://github.com/magento/baler/blob/master/docs/ALPHA.md">Github/Magento/Baler/Getting started with the alpha</a>.<a href="https://github.com/magento/baler/blob/master/docs/ALPHA.md"> </a>However, it is not ready for production use, and it is used at your own risk.  <br/><br/>It is recommended instead that you merge or bundle Javascript (JS) files using Magento’s built-in bundling (basic bundling) for file optimization.</p>
<ul>
<li>You can turn on merging or bundling in Magento’s Admin UI (merging and bundling cannot be enabled at the same time): <br/>Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; Developer &gt; JavaScript Settings.</li>
<li>You can also enable Magento’s built-in bundling (basic bundling) from the command line:<br/><code>php -f bin/magento config:set dev/js/enable_js_bundling 1</code>
</li>
</ul>
<p>To learn more, refer to <a href="https://support.magento.com/hc/en-us/articles/360044482152">CSS and Javascript file optimization on Magento Commerce Cloud and Magento</a>.</p>