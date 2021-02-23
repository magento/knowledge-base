---
title: robots.txt gives 404 error Magento Commerce Cloud 2.3.x  
link: https://support.magento.com/hc/en-us/articles/360040594911-robots-txt-gives-404-error-Magento-Commerce-Cloud-2-3-x-
labels: Magento Commerce Cloud,robots.txt,nginx,404 error,2.3.x,search engine robots,how to
---

<p>This article provides a fix for when the <code>robots.txt</code> file throws a 404 error in Magento Commerce Cloud 2.3.x.</p>
<h2>Affected products and versions</h2>
<p>Magento Commerce Cloud versions 2.3.x</p>
<h2>Issue</h2>
<p>The <code>robots.txt</code> file is not working and throws a Nginx exception. The <code>robots.txt</code> file is generated dynamically "on the fly." The <code>robots.txt</code> file is not accessible by the <code>/robots.txt</code> URL because Nginx has a rewrite rule which forcibly redirects all <code>/robots.txt</code> requests to the <code>/media/robots.txt</code> file that does not exist.</p>
<h2>Cause</h2>
<p>This typically happens when Nginx is not configured properly.</p>
<h2>Solution</h2>
<p>The solution is to disable the Nginx rule.</p>
<p><a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a Magento Support ticket</a> requesting removal of the Nginx redirect rule from <code>/robots.txt</code> requests to <code>/media/robots.txt</code>.</p>
<h2>Related Reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360039447892">How to block malicious traffic for Magento Commerce Cloud on Fastly level</a></li>
<li>DevDocs' <a href="https://devdocs.magento.com/cloud/trouble/robots-sitemap.html">Add site map and search engine robots</a>
</li>
<li>MerchDocs' <a href="https://docs.magento.com/user-guide/marketing/search-engine-robots.html">Search Engine Robots</a>
</li>
</ul>