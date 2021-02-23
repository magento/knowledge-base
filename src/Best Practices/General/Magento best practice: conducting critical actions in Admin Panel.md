---
title: Magento best practice: conducting critical actions in Admin Panel
link: https://support.magento.com/hc/en-us/articles/360050107831-Magento-best-practice-conducting-critical-actions-in-Admin-Panel
labels: Magento Commerce Cloud,Magento Commerce,log,event,2.3,cache invalidation,2.3.x,2.4,critical,2.4.x,actions,save,flush,move
---

<p>It is best practice to not conduct critical actions in the Magento Admin Panel during business hours to avoid performance degradation.</p>
<p>Examples of critical actions:</p>
<ul>
<li>Save (update) a product attribute.</li>
<li>Flush caches after import.</li>
<li>Move product subcategory to another category.</li>
</ul>
<p>These critical actions lead to cache invalidation (a procedure for 1 or more objects, that removes data regarding the objects from all caches) and cause a significant negative performance impact on the site during business hours, and can potentially be a root cause of site outages.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practice</h2>
<p>Perform any critical actions during off-business hours.</p>
<h2>Related reading</h2>
<ul>
<li>DevDocs' <a href="https://devdocs.magento.com/guides/v2.4/extension-dev-guide/cache/page-caching/private-content.html#invalidate-private-content">Private content: Invalidate private content</a>
</li>
<li>DevDocs' <a href="https://devdocs.magento.com/guides/v2.4/performance-best-practices/hardware.html#caches">Hardware recommendations: Caches</a>
</li>
<li>DevDocs' <a href="https://devdocs.magento.com/guides/v2.4/performance-best-practices/advanced-setup.html#set-up-redis">Advanced setup: Set up Redis</a>
</li>
<li>Varnish's <a href="https://www.varnish-software.com/glossary/what-is-cache-invalidation/">What is cache invalidation?</a>
</li>
</ul>