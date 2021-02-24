---
title: Main Menu (Categories) not displayed on subpages with Fastly enabled
link: https://support.magento.com/hc/en-us/articles/115003567594-Main-Menu-Categories-not-displayed-on-subpages-with-Fastly-enabled
labels: Magento Commerce Cloud,Fastly,Magento Commerce,cms,troubleshooting,Varnish,storefront menu
---

<p>This article provides a fix for when the Main Menu (or the <a href="https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html">Category Top Navigation menu</a>) is not displayed on storefront for subpages (for example, <em>blog/page</em>) when Fastly or Varnish is enabled.</p>
<p>Cause: the non-permitted <code>/</code> character (slash) in the <em>URL Key</em> parameter of the page (Search Engine Optimization settings). The character is usually added when <em>URL Path</em> (with entire page location) is mistakenly specified instead of <em>URL Key</em>: for example, <em>blog/page_name</em> instead of just <em>page_name</em>.</p>
<p>Solution: remove the <code>/</code> character (slash); for the <em>URL Key</em> parameter, specify only the page name.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce 2.X.X</li>
<li>Magento Commerce Cloud 2.X.X</li>
<li>Fastly or Varnish</li>
</ul>
<h2>Issue</h2>
<p>The Main Menu (also referred to as the <a href="https://docs.magento.com/m2/ce/user_guide/catalog/navigation-top.html">Category Top Navigation menu</a>) is not displayed on storefront for subpages when Fastly or other Varnish-based services are enabled.</p>
<h2>Cause</h2>
<p>The issue is caused by the non-permitted <code>/</code> character (slash), added to the <em>URL Key</em> parameter (Search Engine Optimization settings).</p>
<p>The character is usually added when <em>URL Path</em> (with entire page location, including the parent resource/directory of the page) is mistakenly specified instead of <em>URL Key</em>: for example, <em>blog/page_name</em> instead of just <em>page_name</em>.</p>
<p><img alt="URL Key parameter for SEO settings" src="https://support.magento.com/hc/article_attachments/115004301374/seo_url_key.png"/></p>
<h2>Solution</h2>
<p>Remove the <code>/</code> character (slash) from the <em>URL Key</em> parameter for all pages of your store.</p>
<p>In other words, use <em>URL Key</em> instead of <em>URL Path</em>: mention just the page name with no parent resource/directory.</p>
<h3>Recommendations on page hierarchy and SEO</h3>
<p>To set the page hierarchy, use the Hierarchy section of the Edit Page menu.</p>
<p><img alt="Hierarchy settings" src="https://support.magento.com/hc/article_attachments/115004308814/hierarchy_hr.png"/></p>
<p>You may also use the Content &gt; Elements &gt; Hierarchy menu — for more complex hierarchy solutions.</p>
<p>For SEO purposes on product pages, use URL Rewrites (Marketing &gt; SEO &amp; Search &gt; URL Rewrites).</p>
<h2>More information in Magento User Guide</h2>
<p>The <em>URL Key</em> parameter for SEO:</p>
<ul>
<li><a href="http://docs.magento.com/m2/ee/user_guide/catalog/categories-search-engine-optimization.html?Highlight=%22url%20key%22">Search Engine Optimization</a></li>
<li><a href="http://docs.magento.com/m2/ee/user_guide/cms/page-add.html">Adding a New Page</a></li>
</ul>
<p>Page Hierarchy:</p>
<ul>
<li><a href="http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy.html?Highlight=hierarchy">Overview</a></li>
<li><a href="http://docs.magento.com/m2/ee/user_guide/cms/page-hierarchy-node-add.html?Highlight=hierarchy">Adding a Node</a></li>
</ul>