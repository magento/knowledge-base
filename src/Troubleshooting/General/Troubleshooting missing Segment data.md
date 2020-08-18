If you've noticed some missing data from your Segment integration, the culprit might be the&nbsp;__selective integration snippets__&nbsp;on your website.

All data collected by Segment is sent to Magento BI (formerly RJMetrics) by default, but if&nbsp;individual snippets on your site specify which integrations data should be sent to, then these settings will be overridden. This will result in only some of your data being sent to your data warehouse.

__If you use&nbsp;<a href="https://segment.com/docs/libraries/analytics.js/#selecting-integrations" rel="noopener" target="_blank">selective integration snippets</a>,&nbsp;__you'll need to add RJMetrics to the list of integrations before data will flow to your data warehouse.

Here's&nbsp;an example of a snippet that sends data to RJMetrics, Mixpanel, and KISSMetrics&nbsp;__only:__

<pre><code class="language-json">}, {
 &nbsp;integrations: {
 &nbsp;&nbsp;&nbsp;'All': false,
    'RJMetrics': true,
 &nbsp;&nbsp;&nbsp;'Mixpanel': true,
 &nbsp;&nbsp;&nbsp;'KISSmetrics': true
 &nbsp;}
});
</code></pre>

Make sure you enter 'RJMetrics' exactly as it appears in the example above.

<h2 class="related">Related documentation</h2>

<ul class="related">
<li><a href="https://support.magento.com/hc/en-us/articles/360016730531">Connecting Segment</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016504192">Expected Segment data</a></li>
</ul>