---
title: MBI: troubleshooting missing Segment data
link: https://support.magento.com/hc/en-us/articles/360016730231-MBI-troubleshooting-missing-Segment-data
labels: troubleshooting,Magento Business Intelligence,missing Segment data
---

<p>This article provides a potential solution for missing data from your Segment integration. The cause of missing data might be the selective integration snippets on your website.</p>
<p>All data collected by Segment is sent to Magento BI (formerly RJMetrics) by default, but if individual snippets on your site specify which integrations data should be sent to, then these settings will be overridden. This will result in only some of your data being sent to your data warehouse.</p>
<p>If you use <a href="https://segment.com/docs/libraries/analytics.js/#selecting-integrations">selective integration snippets</a>, you'll need to add RJMetrics to the list of integrations before data will flow to your data warehouse.</p>
<p>Here's an example of a snippet that sends data to RJMetrics, Mixpanel, and KISSMetrics only:</p>
<pre><code class="language-json">}, {
  integrations: {
    'All': false,
    'RJMetrics': true,
    'Mixpanel': true,
    'KISSmetrics': true
  }
});
</code></pre>
<p>Make sure you enter 'RJMetrics' exactly as it appears in the example above.</p>
<h2>Related documentation</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360016730531">Connecting Segment</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016504192">Expected Segment data</a></li>
</ul>