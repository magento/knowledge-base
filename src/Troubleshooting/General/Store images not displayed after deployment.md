---
title: Store images not displayed after deployment
link: https://support.magento.com/hc/en-us/articles/360034358571-Store-images-not-displayed-after-deployment
labels: Magento Commerce Cloud,cache,images not displayed,2.3.x,2.2.x,how to,SSH
---

<p>This article provides a solution for when images are not being displayed correctly after deployment.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>When you use a storefront theme with image resizing, the images do not display or disappear from catalog pages when deployed.</p>
<h2>Cause</h2>
<p>This may occur due to loading the images from the cache. </p>
<h2>Solution</h2>
<p>If this happens, you can use Magento command to regenerate the image cache and properly display the images.</p>
<p>To perform this, you need the SSH information and the store URL available through the <a href="https://devdocs.magento.com/cloud/project/projects.html">Project Web Interface</a>.</p>
<ol>
<li>SSH to your project that was a source for the database dump, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh">SSH to environment</a>.</li>
<li>
<p>Regenerate the image cache by running:</p>
<pre><code class="language-bash">php bin/magento catalog:images:resize</code></pre>
</li>
<li>
<p>Test the category pages through the store URL.</p>
</li>
</ol>