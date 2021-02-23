---
title: Disable Magento Banner output to improve site performance    
link: https://support.magento.com/hc/en-us/articles/360035285852-Disable-Magento-Banner-output-to-improve-site-performance-
labels: Magento Commerce Cloud,Magento Commerce,performance,disable,banner,AJAX requests,2.3.x,2.2.x,2.x.x,how to
---

<p>This article provides a fix for low site performance. Low site performance can be caused by the Magento Banner module being enabled but not used. Disabling the module output can improve site performance. Review the article for resolution steps.</p>
<p class="info">If you use the Magento Banner functionality, see the <a href="https://support.magento.com/hc/en-us/articles/360039286472-High-throughput-AJAX-requests-cause-poor-performance">High throughput AJAX requests cause poor performance</a> article for recommendations on how to avoid performance issues caused by excessive Ajax requests.</p>
<h3>AFFECTED PRODUCTS AND VERSIONS</h3>
<ul>
<li>Magento Commerce Cloud, v.2.x.x </li>
<li>Magento Commerce, v.2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>The Magento Banner module is enabled, but not used. </p>
<p>To check if this is the case:</p>
<p>For Magento Commerce Cloud 2.2.x:</p>
<ol>
<li>Log in to the Magento Admin.</li>
<li>Navigate to Content &gt; <em>Elements</em> &gt; Banners. </li>
<li>If the grid displayed on this page is empty - you do not have any banners. </li>
</ol>
<p>If you do not see the Banners option under Content &gt; <em>Elements</em>, then this is not the case, and the recommendations from this article cannot be applied. </p>
<p>For Magento Commerce Cloud 2.3.x (the functionality was <a href="https://devdocs.magento.com/guides/v2.3/release-notes/ReleaseNotes2.3.0Commerce.html#banner-now-dynamic-block">renamed in v 2.3.x</a>): </p>
<ol>
<li>Log in to the Magento Admin.</li>
<li>Navigate to Content &gt; <em>Elements &gt; </em>Dynamic Blocks.</li>
<li>If the grid displayed on this page is empty - you do not have any dynamic blocks (banners). </li>
</ol>
<p>If you do not see the Dynamic Blocks option under Content &gt; <em>Elements</em>, then this is not the case, and the recommendations from this article cannot be applied. </p>
<h2>Cause</h2>
<p>When the Magento Banner module is enabled, Magento sends Ajax requests from the storefront to the server to get the banner information. These Ajax requests have a performance impact, especially in high-load (high-volume and high-traffic) conditions. If the functionality is not used, it is recommended that you disable the module output. It is not recommended to disable the module, because of the dependency issues. </p>
<h2>Solution</h2>
<p class="warning">We strongly recommend testing changes on Staging/Integration environment first, before applying it to Production. We also recommend having a recent backup before any manipulations.</p>
<ol>
<li>Disable the Magento Banner module output, as described in <a href="https://devdocs.magento.com/guides/v2.3/config-guide/config/disable-module-output.html">Disable module output</a>. The module name you need to use is <code>Magento_Banner</code>.</li>
<li>Deploy your code. For Magento Commerce Cloud, deploy as described in the <a href="https://devdocs.magento.com/guides/v2.3/cloud/live/stage-prod-live.html">Deploy your store</a> article.</li>
</ol>
<p> </p>