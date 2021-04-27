---
title: MBI: troubleshooting missing Segment data
labels: Magento Business Intelligence,missing Segment data,troubleshooting
---

This article provides a potential solution for missing data from your Segment integration. The cause of missing data might be the selective integration snippets on your website.

All data collected by Segment is sent to Magento BI (formerly RJMetrics) by default, but if individual snippets on your site specify which integrations data should be sent to, then these settings will be overridden. This will result in only some of your data being sent to your data warehouse.

If you use [selective integration snippets](https://segment.com/docs/libraries/analytics.js/#selecting-integrations), you'll need to add RJMetrics to the list of integrations before data will flow to your data warehouse.

Here's an example of a snippet that sends data to RJMetrics, Mixpanel, and KISSMetrics only:

<pre><code class="language-json">}, {
  integrations: {
    'All': false,
    'RJMetrics': true,
    'Mixpanel': true,
    'KISSmetrics': true
  }
});
</code></pre>

Make sure you enter 'RJMetrics' exactly as it appears in the example above.

## Related documentation

* [Connecting Segment](https://support.magento.com/hc/en-us/articles/360016730531)
* [Expected Segment data](https://support.magento.com/hc/en-us/articles/360016504192)