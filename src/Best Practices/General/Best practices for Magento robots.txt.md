---
title: Best practices for Magento robots.txt 
link: https://support.magento.com/hc/en-us/articles/360048754931-Best-practices-for-Magento-robots-txt-
labels: Magento Commerce Cloud,Magento Commerce,security,robots.txt,2.3,best practices,2.3.x,search engine robots,2.4,2.4.x,seo
---

<p>This article provides best practices for using <code>robots.txt</code> in Magento. This includes configuration and security. The <code>robots.txt</code> file is a text file that instructs web robots (typically search engine robots) how to crawl pages on their website.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p><u>Configuration:</u></p>
<ul>
<li>By not configuring the <code>robots.txt</code> file, site performance can be negatively impacted leading to a potential for site outages. </li>
<li>Configure the <code>robots.txt</code> file to avoid unnecessary Bots scanning and indexing the wrong content. For steps, refer to Magento User Guide <a href="https://docs.magento.com/user-guide/marketing/search-engine-robots.html">Search Engine Robots</a>.</li>
</ul>
<p>Security:</p>
<p>Do not expose your Magento Admin path in your <code>robots.txt</code> file. Having the Admin path exposed is a vulnerability for site hacking and potential loss of data. Remove the Admin path from the <code>robots.txt</code> file.</p>
<p>For steps to edit the <code>robots.txt</code> file and remove all entries of the admin path, refer to Magento <a href="https://docs.magento.com/user-guide/marketing/search-engine-robots.html">Marketing User Guide &gt; SEO and Search &gt; Search Engine Robots</a>.</p>
<p>If assistance is required or if there are questions or concerns, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.<a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket"><br/></a></p>
<h2>Related reading</h2>
<ul>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360039447892">How to block malicious traffic for Magento Commerce Cloud on Fastly level</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360040594911">robots.txt gives a 404 error in Magento Commerce Cloud 2.3.x</a>
</li>
</ul>
<p> </p>