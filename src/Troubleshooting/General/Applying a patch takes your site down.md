---
title: Applying a patch takes your site down 
link: https://support.magento.com/hc/en-us/articles/360030867871-Applying-a-patch-takes-your-site-down-
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,remove patch
---

<p>This article talks about the issue where a patch you just applied takes your site down. To resolve it, you can remove the patch.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, all supported versions</li>
<li>Magento Commerce Cloud, all supported versions</li>
</ul>
<h2>Issue</h2>
<p>After you apply a patch, your site goes down.</p>
<h2>Cause</h2>
<p>This issue might appear because of a version incompatibility between the patch you just applied to your website, your customizations, other patches you had applied in the past, or some other error.</p>
<h2>Solution</h2>
<p>Remove the patch. The method of patch removal is different for Magento Commerce Cloud than for Magento Commerce and Magento Open Source.</p>
<h3>Magento Commerce, Magento Open Source, all 1.X versions</h3>
<p>For Magento Commerce and Magento Open Source 1.X versions, </p>
<ul>
<li>Run the following SSH command:
<pre><code class="language-git">sh SUPEE_patch --revert</code></pre>
</li>
</ul>
<h3>Magento Commerce, Magento Open Source, all 2.X versions</h3>
<p>For Magento Commerce and Magento Open Source 2.X versions, </p>
<ol>
<li>Run the following SSH command:
<pre><code class="language-git">patch -p1 -R &lt; <code>%patch_name%</code>.composer.patch</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h3>Magento Commerce Cloud, all versions</h3>
<p>For Magento Commerce Cloud, all versions,</p>
<ol>
<li>Remove the <code>%patch_name%.composer.patch</code> file(s) from the <code>m2-hotfixes</code> directory.</li>
<li>
<p>Commit and push your code changes:</p>
<pre><code class="language-git">git commit -m "Remove %patch_name%.composer.patch patch" &amp;&amp; git push origin</code></pre>
</li>
</ol>
<p> </p>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html">Apply patches (Magento Commerce Cloud)</a></li>
<li><a href="https://devdocs.magento.com/guides/m1x/other/ht_install-patches.html">How to Apply and Revert [Magento 1] Patches</a></li>
</ul>
