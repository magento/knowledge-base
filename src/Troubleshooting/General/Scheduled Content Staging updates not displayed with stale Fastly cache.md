---
title: Scheduled Content Staging updates not displayed with stale Fastly cache
link: https://support.magento.com/hc/en-us/articles/360000548734-Scheduled-Content-Staging-updates-not-displayed-with-stale-Fastly-cache
labels: staging,Fastly,Magento Commerce,content,troubleshooting
---

<p>This article provides a fix for when Magento stores do not display scheduled updates when using Content Staging and Fastly. The issue is due to default enabled Fastly Soft Purge. This feature reduces application resource load and only regenerates a fresh cache on a second request. To resolve, you can enable Purge CMS page through the Magento Admin to always regenerate and serve fresh content.</p>
<h2>Issue</h2>
<p>Scheduled updates for a store content asset (page, product, block, etc.) are not displayed on storefront immediately after the start time of the update. This happens when updates have been scheduled using the <a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html">Content Staging</a> functionality.</p>
<h2>Cause</h2>
<p>Due to Fastly's Soft Purge functionality (enabled by default), the Magento storefront still receives the old (stale) cached content when sending the first request for the updated asset to Fastly. Fastly requires a second request to regenerate the site data.</p>
<p>As a result, Fastly may serve stale content until the second request for the updated content.</p>
<p>Expected caching: After we schedule an update for a content asset using Content Staging, Magento sends a request to update the cache to Fastly. Fastly invalidates the previous cached content (without deleting the content) and starts serving the updated content.</p>
<p>Actual caching: If Fastly still serves the stale content when receiving the first request for the updated content, it will only send regenerated, correct content only after receiving the second request. This behavior has been implemented to reduce server load by renewing the cache only in areas with proven traffic, without regenerating the cache for the entire website. Fastly updates the cache gradually, saving the application resources.</p>
<h2>Solution</h2>
<p>If serving stale content even for the first request is unacceptable, you may disable Soft Purge and enable Purge CMS page:</p>
<ol>
<li>Log in to your local Magento Admin as an administrator.</li>
<li>Go to Stores &gt; Configuration &gt; Advanced &gt; System &gt; Full Page Cache.</li>
<li>Expand Fastly Configuration, then expand Advanced.</li>
<li>Set Use Soft Purge to <em>No</em>.</li>
<li>Set Purge CMS page to <em>Yes</em>.</li>
<li>Click Save Config at the top of the page.</li>
</ol>
<p> <img alt="purge_options.png" src="https://support.magento.com/hc/article_attachments/360000593874/purge_options.png"/></p>
<h2>Related documentation</h2>
<ul>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#purge">Configure purge options</a> (DevDocs)</li>
<li>
<a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html">Content Staging</a> (User Guide)</li>
<li>
<a href="https://docs.fastly.com/guides/performance-tuning/serving-stale-content">Serving stale content</a> (Fastly documentation)</li>
</ul>