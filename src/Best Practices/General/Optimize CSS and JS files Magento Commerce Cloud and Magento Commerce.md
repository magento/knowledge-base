---
title: Optimize CSS and JS files Magento Commerce Cloud and Magento Commerce
link: https://support.magento.com/hc/en-us/articles/360044482152-Optimize-CSS-and-JS-files-Magento-Commerce-Cloud-and-Magento-Commerce
labels: Magento Commerce Cloud,Magento Commerce,configuration,performance,2.3,best practices,CSS,Javascript,file optimization
---

<p>This article provides best practices for CSS and Javascript (JS) file optimization, in Magento.</p>
<h2>Issue by affected products and versions </h2>
<p>The time it takes to load CSS and Javascript (JS) files can be reduced by merging, minifying, and bundling separate files into a single file:<em><br/></em></p>
<ul>
<li>JS merging is available for all versions of Magento Commerce and Magento Commerce Cloud including the currently supported version 2.3 (as of July 2020). </li>
<li>JS bundling is available for all versions of Magento Commerce and Magento Commerce Cloud including the currently supported version 2.3 (as of July 2020). </li>
<li>CSS merging and minification is available for all versions of Magento Commerce and Magento Commerce Cloud including the currently supported version 2.3 (as of July 2020). </li>
</ul>
<h2>Best practices</h2>
<p>How to merge or minify CSS files:</p>
<p>To enable CSS merging or minification go into Admin &gt; Stores &gt; Setting &gt; Configuration &gt; Advanced &gt; Developer &gt; CSS Settings.</p>
<p>How to minify JS files</p>
<p>On the <em>Admin</em> sidebar, go to Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; Developer &gt; JavaScript Settings. </p>
<p>How to merge and bundle JS files:</p>
<ul>
<li>You can turn on merging or bundling in Magento’s Admin UI (merging and bundling cannot be enabled at the same time): <br/>Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; Developer &gt; JavaScript Settings.</li>
<li>You can also enable Magento’s built-in bundling (basic bundling) from the command line:<br/><code>php -f bin/magento config:set dev/js/enable_js_bundling 1</code>
</li>
</ul>
<h2>Related reading</h2>
<p>Review the following links:</p>
<ul>
<li>
<p>To learn more about optimizing resource files, refer to MerchDocs' <a href="https://docs.magento.com/user-guide/system/file-optimization.html">Magento User Guide &gt; Optimizing Resource Files</a>.</p>
</li>
<li>
<p>To learn to enable CSS file optimization, refer to DevDocs' <a href="https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/css-topics/css-overview.html#css-merging-minification-and-performance">Magento &gt; Frontend Developer Guide &gt; Cascading style sheets (CSS) &gt; CSS merging, minification and performance</a>.</p>
</li>
</ul>