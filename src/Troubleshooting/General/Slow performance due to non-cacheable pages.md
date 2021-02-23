---
title: Slow performance due to non-cacheable pages
link: https://support.magento.com/hc/en-us/articles/360039145192-Slow-performance-due-to-non-cacheable-pages
labels: Magento Commerce Cloud,Magento Commerce,slow performance,uncacheable page,cacheable page,2.x.x,how to
---

<p>This article provides solutions for increased website load times or outages due to full page cache (for example Fastly) having been disabled for any block on any page(s) that need to be cached. </p>
<h3>AFFECTED PRODUCTS AND VERSIONS </h3>
<ul>
<li>Magento Commerce Cloud 2.x.x</li>
<li>Magento Commerce 2.x.x</li>
</ul>
<h3>Issue</h3>
<p>The site experiences slow performance because there are cache blocks on pages which need to be cacheable but have been set to <code>cacheable="false"</code>. </p>
<h3>Cause</h3>
<p>There are pages that need to be cached by Magento. These pages have the biggest throughput. Each request of these types of pages not from cache, makes Magento perform slower.</p>
<p>These pages are:</p>
<ul>
<li>Catalog Category (PLP)</li>
<li>Catalog Product Page (DPD)</li>
<li>Static Content Pages (Home Page, Contact Us, etc.)</li>
</ul>
<p>Cacheable and uncacheable are terms used to indicate whether or not a page should be cached. By default, all pages are cacheable. However, if any block in a layout is designated as uncacheable, the entire page is uncacheable.</p>
<p>The screen shot below shows a block with a setting <code>cacheable="false”</code> which creates an uncacheable page.</p>
<p><img alt="non_cacheable_kb.png" src="https://support.magento.com/hc/article_attachments/360049362712/non_cacheable_kb.png"/><br/><br/>Examples of uncacheable pages include compare products, cart, and checkout pages.</p>
<p>The following list of pages are not cached (Fastly, Block, and Layout caches are avoided.). This occurs because of the “cacheable” configuration in layout.</p>
<h3>Solution</h3>
<p>Check if the files specified above have the setting <code>cacheable="false”</code>. If they have, check if this setting is needed or required. </p>
<ul>
<li>If needed, consider moving non-cacheable blocks to <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/cache/page-caching/private-content.html?itm_source=devdocs&amp;itm_medium=quick_search&amp;itm_campaign=federated_search&amp;itm_term=private%20co">private content mechanism</a> instead.</li>
<li>If not needed, remove the attribute <code>cacheable="false”</code> and flush the layout cache. </li>
</ul>
<h3>Related Reading</h3>
<p>For more information on cacheable and uncacheable pages review the DevDocs <a href="https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/cache_for_frontdevs.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=cacheable%2">Magento cache overview</a> article.</p>