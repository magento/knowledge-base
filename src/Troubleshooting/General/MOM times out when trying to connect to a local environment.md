---
title: MOM times out when trying to connect to a local environment
link: https://support.magento.com/hc/en-us/articles/360032279432-MOM-times-out-when-trying-to-connect-to-a-local-environment
labels: troubleshooting,timeout,Magento Order Management
---

<p>This article provides a solution for the Magento Order Management (MOM) issue where you cannot register the locally installed micro-service with MOM using ngrok, because MOM times out when trying to callback.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.3.1</li>
<li>Magento Order Management</li>
<li>ngrok</li>
</ul>
<p class="warning">Disclaimer: Magento does not recommend or endorse any particular tool for establishing tunnels. The preceding are suggestions only. For more information, consult the <a href="https://ngrok.com/docs">ngrok documentation</a>.</p>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Install Magento Commerce on your local environment. </li>
<li>Setup ngrok to create a tunnel to expose your local server.</li>
<li>Try <a href="https://omsdocs.magento.com/en/integration/connector/setup-tutorial/">connecting to MOM</a>.</li>
</ol>
<p>Expected result</p>
<p>Connection established successfully.</p>
<p>Actual result</p>
<p>MCOM seems to timeout when trying to callback to the ngrok URL.</p>
<h2>Cause</h2>
<p>One of the possible reasons for the timeout is that servers are located geographically too far away, and connection takes too much time. </p>
<h2>Solution</h2>
<p>Add a parameter specifying your region when starting ngrok. Like the following:</p>
<p><code class="language-bash">
./ngrok http 80 -region eu</code></p>
<p>The default region is US. See <a href="https://ngrok.com/docs#config_region">all possible values</a>.</p>