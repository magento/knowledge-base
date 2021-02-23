---
title: Replace depreciated Google Image Charts with Image-Charts
link: https://support.magento.com/hc/en-us/articles/360024850172-Replace-depreciated-Google-Image-Charts-with-Image-Charts
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,Google Image Charts
---

<p>Updated April 16th</p>
<p>Most Magento editions and versions currently use <a href="https://developers.google.com/chart/image/">Google Image Charts</a> to render static charts in Admin dashboards. As of March 14, 2019, Google will stop supporting Google Image Charts. To resolve this issue, we are providing a patch to replace Google Image Charts with <a href="https://www.image-charts.com/">Image-Charts</a> free service.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento 1.X all editions</li>
<li>Magento 2.X all editions</li>
</ul>
<p class="info">Magento Commerce 1.14.4.1, Magento Open Source 1.9.4.1, Magento Commerce and Cloud 2.3.2 will include this chart update. Upgrading to these versions continues support for image charts without additional patches.</p>
<h2>Issue</h2>
<p>Google stop supporting Google Image Charts on March 14, 2019. Users of Magento 1.X and Magento 2.2.X all versions will not be able to view static charts unless they download and apply the patch, replacing Google Image Charts with Image-Charts solution. Displayed charts will have the same design and functionality of Google Image Charts through the Image-Charts free account service with a <a href="https://www.image-charts.com/data-processing-addendum.html">GDPR</a> compliance privacy policy. For additional options, please see <a href="https://www.image-charts.com/">Image-Charts</a>.</p>
<h2>Solution</h2>
<p>To be able to view static charts in Magento Admin, download and apply the patch provided by Magento. No additional configuration is necessary.</p>
<h3>Magento 2 Commerce </h3>
<ol>
<li>Save the <a href="https://support.magento.com/hc/en-us/article_attachments/360026447212/MAGETWO-98833_composer_patch-2019-04-15-04-38-57.patch">attached MAGETWO-98833_composer_patch-2019-04-15-04-38-57.patch</a> patch and upload it to your Magento root directory.</li>
<li>Run the following SSH command, having replaced the patch name with actual one:
<pre><code class="language-git">patch -p1 &lt; MAGETWO-98833_composer_patch-2019-04-15-04-38-57.patch</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h3>Magento 2 Cloud</h3>
<p>For Cloud merchants, the patch will be included to the nearest ECE-tools update.</p>
<h3>Magento 2 Open Source </h3>
<ol>
<li>Go to <a href="https://magento.com/tech-resources/download#download2291">https://magento.com/tech-resources/download#download2291</a>.</li>
<li>In the Select your format drop-down list, select the composer version and click Download.</li>
<li>Upload the patch to your Magento root directory.</li>
<li>Run the following SSH command, having replaced the patch name with actual one:
<pre><code class="language-git">patch -p1 &lt; MAGETWO-98833_composer_patch-2019-04-15-04-37-48.patch</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h3>Magento 1 Commerce</h3>
<p>Follow these steps to download and apply the patch:</p>
<ol>
<li>Save the <a href="https://support.magento.com/hc/en-us/article_attachments/360026461371/MPERF-10509-EE-2019-03-13-06-32-19.diff">attached MPERF-10509-EE-2019-03-13-06-32-19.diff</a> patch and upload it to your Magento root directory.</li>
<li>Run the following SSH command:
<pre><code class="language-git">patch -p1 &lt; MPERF-10509-EE-2019-03-13-06-32-19.diff</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h3>Magento 1 Open Source</h3>
<p>Follow these steps to download and apply the patch:</p>
<ol>
<li>Click <a href="https://magento.com/tech-resources/download#download2283">this link</a> to locate the Admin Dashboard Charts Patch.</li>
<li>Select <code class="language-git">MPERF-10509.diff</code> from the Select your format drop-down and click Download.</li>
<li>Upload the file to the Magento root directory.</li>
<li>Run the following SSH command:
<pre><code class="language-git">patch -p1 &lt; MPERF-10509.diff</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h2>Attached Files</h2>