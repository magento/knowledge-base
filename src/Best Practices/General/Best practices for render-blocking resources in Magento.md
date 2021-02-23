---
title: Best practices for render-blocking resources in Magento 
link: https://support.magento.com/hc/en-us/articles/360049171211-Best-practices-for-render-blocking-resources-in-Magento-
labels: Magento Commerce Cloud,Magento Commerce,2.3,best practices,2.3.x,CSS,Javascript,2.4,2.4.x
---

<p>This article provides guidance on preventing resources blocking page rendering in Magento, which can lead to a significant increase in page rendering time and cause performance degradation.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Consider delivering critical JS/CSS features inline and deferring all non-critical JS/CSS styles. For guidance, refer to web.dev <a href="https://web.dev/render-blocking-resources/">Eliminate render-blocking resources</a>.</p>
<p>If assistance is required or if there are questions or concerns, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://docs.magento.com/user-guide/system/file-optimization.html">Magento User Guide &gt; Optimizing Resource Files</a></li>
<li>
KB <a href="https://support.magento.com/hc/en-us/articles/360044482152-CSS-and-Javascript-file-optimization-on-Magento-Commerce-Cloud-and-Magento-Commerce">Optimize CSS and JS files Magento Commerce Cloud and Magento Commerce</a>
</li>
<li>DevDocs <a href="https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/css-topics/css-overview.html#css-merging-minification-and-performance">Magento &gt; Frontend Developer Guide &gt; Cascading style sheets (CSS) &gt; CSS merging, minification and performance</a>
</li>
</ul>