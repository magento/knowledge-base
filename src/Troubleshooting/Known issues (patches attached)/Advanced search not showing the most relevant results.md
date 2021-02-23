---
title: Advanced search not showing the most relevant results
link: https://support.magento.com/hc/en-us/articles/360027707452-Advanced-search-not-showing-the-most-relevant-results
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,2.x.x,Advanced search,not relevant results
---

<p>This article provides a patch for the known Magento issue, where the Advanced search does not show most relevant results first.</p>
<h3>Affected versions</h3>
<ul>
<li>Magento Commerce 2.X.X</li>
<li>Magento Commerce Cloud 2.X.X</li>
<li>Magento Open Source 2.X.X</li>
</ul>
<h2>Issue</h2>
<p>The advanced search function is not returning the most relevant results first, like the quick search is doing. The issue does not depend on the selected search engine type.</p>
<p>Steps to reproduce:</p>
<ol>
<li>On the storefront, go to the quick search and search for "Fitted Jacket".</li>
<li>Notice "Orion Two-Tone Fitted Jacket" is the first result.</li>
<li>Go to advanced search and search for "Fitted Jacket" in the name field.</li>
</ol>
<p>Expected result:</p>
<p>The "Orion Two-Tone Fitted Jacket" is the first result when using Advanced search, as the most relevant result.</p>
<p>Actual result:</p>
<p>The "Orion Two-Tone Fitted Jacket" is not the first result, though it is the most relevant.</p>
<h2>Solution</h2>
<p>To solve the issue, apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360027842872/MDVA-7256_EE_2.1.7_v1.composer.patch">Download MDVA-7256_EE_2.1.7_v1.composer.patch</a></p>
<p>The patch adds the implementation for sorting by relevance for advanced search results as the default sorting field.</p>
<p>The patch is compatible with all affected versions and editions.</p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached files</h2>