---
title: Unknown module Magento_BundleSampleData
link: https://support.magento.com/hc/en-us/articles/360034276152-Unknown-module-Magento-BundleSampleData
labels: Magento Commerce Cloud,Magento Commerce,error,module,Magento_BundleSampleData,unknown,LogicException,how to
---

<p>This article provides a fix for the Unknown module error during installation.</p>
<h2>Issue</h2>
<p>During the installation, a message similar to the following displays:</p>
<pre><code class="language-text">[ERROR] exception 'LogicException' with message 'Unknown module in the requested list: 'Magento_BundleSampleData''</code></pre>
<h2>Solution</h2>
<p>Try each of the following one at a time, then try your installation again.</p>
<ol>
<li>
<p>Run the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/web/install-web.html">Web Setup Wizard</a>.</p>
<p>On Step 4: Customize Your Store, expand Advanced Modules Configurations and clear the Magento_BundleSampleData checkbox as the following figure shows.</p>
<p><img alt="tshoot_bundlesampledata.png" src="https://support.magento.com/hc/article_attachments/360039762491/tshoot_bundlesampledata.png"/></p>
</li>
<li>Clear all browser history and data from your web browser.</li>
<li>
<p>If you have Chrome, clear all browser data related to your site.</p>
<p>Go to Settings &gt; Advanced options &gt; Privacy &gt; Content Settings &gt; All cookies and site data. In the Site column, click the address of your Magento server and click Remove All.</p>
</li>
</ol>