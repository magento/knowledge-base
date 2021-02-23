---
title: Cached images are not loaded after 2.2.X to 2.3.X upgrade
link: https://support.magento.com/hc/en-us/articles/360027822171-Cached-images-are-not-loaded-after-2-2-X-to-2-3-X-upgrade
labels: Magento Commerce Cloud,404,cache,Pro,troubleshooting,images,2.3.x,2.2.x
---

<p>This article provides the solution for the issue with cached images not being displayed after upgrading from Magento Commerce Cloud 2.2.X to 2.3.X.</p>
<h3>Affected versions and editions:</h3>
<ul>
<li>Magento Commerce Cloud 2.2.X, 2.3.X, Pro Plan</li>
</ul>
<h2>Issue</h2>
<p>After Magento is upgraded from 2.2.X to 2.3.X, the cached product images are not available, a 404 page is displayed instead.</p>
<p>The issue is caused by the incorrect Nginx configuration set in <code>.magento.app.yaml</code>: <code>index.php</code> (or none) is used for the <code>"/media"</code> location instead of <code>passthru: /get.php</code>.</p>
<h2>Solution</h2>
<ol>
<li>Check your <code>.magento.app.yaml</code> configuration file, at the <code>"/media"</code> location. The correct configuration looks like following:<br/>
<pre><code class="language-yaml">"/media":
    root: "pub/media"
    allow: true
    scripts: false
    expires: 1y
    passthru: "/get.php"
</code></pre>
</li>
<li>If <code>passthru</code> is not set to <code>"/get.php"</code> and <code>expires</code> is not set, take the following steps.</li>
<li>Correct the configuration file.
<ul>
<li>Starter Plan: correct the file yourself and push the changes.</li>
<li>Pro Plan:
<ul>
<li>Integration: correct the file yourself and push the changes.</li>
<li>Staging and Production: correct the file yourself, push the changes, and create a <a href="https://support.magento.com/hc/en-us/articles/360019088251">Magento Support ticket</a> to have it applied.</li>
</ul>
</li>
</ul>
</li>
<li>Enable Fastly image optimization in the Magento Admin (Fastly must be configured prior), as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html">https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html</a>
</li>
</ol>
<p>If the configuration is correct, but you are still experiencing the issue, continue investigation or contact <a href="https://support.magento.com/hc/en-us/articles/360019088251">Magento Support</a>.</p>
<p> </p>