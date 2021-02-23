---
title: Fastly origin cloaking enablement FAQ
link: https://support.magento.com/hc/en-us/articles/360055181631-Fastly-origin-cloaking-enablement-FAQ
labels: staging,Magento Commerce Cloud,Fastly,Magento Commerce,security,FAQ,origin cloaking,REST API,DDoS
---

<p>This FAQ discusses common questions about Fastly origin cloaking enablement in Magento.</p>
<h2>What is Fastly origin cloaking?</h2>
<p>Origin cloaking is a security feature that allows Magento Commerce to block any non-Fastly traffic (to prevent DDoS attacks, going to the Cloud infrastructure (origin).</p>
<h2>What are origin cloaking’s benefits?</h2>
<p>Origin cloaking is designed to prevent traffic from bypassing the Fastly Web Application Firewall (WAF) and routing it through the strictly defined flow of Fastly &gt; Load Balancer &gt; Instances. With this implementation, all the traffic is guaranteed to go through the Fastly WAF as well as the internal WAF built into the load balancer.</p>
<h2>Why is this origin cloaking enablement happening now?</h2>
<p>This feature was newly created to benefit Magento Commerce. </p>
<h2>Does origin cloaking change the outgoing IP address?</h2>
<p>No, it does not.</p>
<h2>Does origin cloaking impact REST API?</h2>
<p>Fastly does not cache API calls, so the client should be fine with the change. Origin cloaking only blocks requests that go straight to the origin, such as:</p>
<pre><code class="language-php">mywebsite.com.c.abcdefghijkl.ent.magento.cloud</code></pre>
<p>In this example, the client will still be able to hit the API if they change the URL to <code class="language-php">mywebsite.com</code>:</p>
<pre><code class="language-php">mywebsite.com/rest/default/V1/integration/admin/token?username=XXXX&amp;password=XXXXX;
mywebsite.com/rest/default/V1/orders/
mywebsite.com/rest/default/V1/products/
mywebsite.com/rest/default/V1/inventory/source-items</code></pre>
<h2>Will this change impact deployment and downtime?</h2>
<p>No, this change will NOT impact deployment and downtime.</p>
<h2>If the project has multiple stagings, will origin cloaking be applied to all stagings?</h2>
<p>Yes, if the project has multiple stagings, the change will be applied to all stagings.</p>
<h2>When will Fastly origin cloaking be enabled?</h2>
<p>These changes will be implemented on the date indicated in your ticket between 22:00 and 1:00 UTC. In general, we perform these changes on these days of the week: Monday, Tuesday, Wednesday, and Thursday.</p>