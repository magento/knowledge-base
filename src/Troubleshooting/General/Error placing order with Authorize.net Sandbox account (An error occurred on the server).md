---
title: Error placing order with Authorize.net Sandbox account (An error occurred on the server)
link: https://support.magento.com/hc/en-us/articles/360000570793-Error-placing-order-with-Authorize-net-Sandbox-account-An-error-occurred-on-the-server-
labels: Magento Commerce,payments,Authorize.net,troubleshooting,sandbox
---

<p>This article provides a fix for "<em>An error occurred on the server</em>" error message when placing an order using Authorize.Net Direct Post.</p>
<h2>Issue</h2>
<p>Placing an order using <a href="http://docs.magento.com/m2/ce/user_guide/payment/authorize-net-direct-post.html">Authorize.Net Direct Post</a> Sandbox account causes an error message:</p>
<blockquote>
<p>"An error occurred on the server. Please try to place order again"</p>
</blockquote>
<h2>Cause 1: Testing Mode is enabled</h2>
<p>It does not seem obvious, but the Authorize.net's Testing Mode setting must be set to No even when testing with the Sandbox account.</p>
<h2>Solution 1: disable Testing Mode</h2>
<ol>
<li>Go to Stores &gt; Configuration &gt; Sales &gt; Payment Methods &gt; Other Payment Methods &gt; Authorize.net Direct Post.</li>
<li>Set Test Mode to "No" (uncheck Use system value, then select "No" in the menu).</li>
<li>Click Save Config.</li>
</ol>
<p><img alt="authorize-net_test-mode_setting.png" src="https://support.magento.com/hc/article_attachments/360000616793/authorize-net_test-mode_setting.png"/></p>
<h2>Cause 2: Incorrect URL's</h2>
<p>The Authorize.net settings might contain incorrect URL addresses for the critical Authorize.Net resources.</p>
<h2>Solution 2: Provide correct URL's</h2>
<ul>
<li>
Gateway URL: <code>https://test.authorize.net/gateway/transact.dll</code>
</li>
<li>
Transaction Details URL: <code>https://apitest.authorize.net/xml/v1/request.api</code>
</li>
<li>
API Reference: <code>https://developer.authorize.net/api/reference/</code>
</li>
</ul>
<h2>If nothing helped: get debug info</h2>
<p>If placing an order with Authorize.net fails with a non-informative "Something went wrong" error, check the Magento <code>debug.log</code>.</p>
<h3>Transact.dll</h3>
<p>In case the <code>debug.log</code> is empty, check the transact.dll response in your web browser's console:</p>
<ol>
<li>Open the console.</li>
<li>Before placing an order, go to the Network tab and select Preserve log.<br/> <br/> <img alt="web-console_network_preserve-log.png" src="https://support.magento.com/hc/article_attachments/360000616873/web-console_network_preserve-log.png"/>
</li>
<li>Filter responses by transact.dll to see a response message with a possible error.<br/> <br/> <img alt="transact-dll_web-console_response.png" src="https://support.magento.com/hc/article_attachments/360000616933/transact-dll_web-console_response.png"/>
</li>
</ol>