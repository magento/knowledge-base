---
title: How to apply a composer patch provided by Magento
link: https://support.magento.com/hc/en-us/articles/360028367731-How-to-apply-a-composer-patch-provided-by-Magento
labels: Magento Commerce Cloud,Magento Commerce,patch,apply patch,composer,git,how to
---

<p>This article instructs how to apply a composer patch for Magento Commerce, Magento Commerce Cloud, and Magento Open Source.</p>
<p class="warning">We strongly recommend applying and testing the patch on the Staging/Integration environment, before applying it Production. We also recommend you have a recent backup before any manipulations.</p>
<h3>How to apply a composer patch for Magento Commerce Cloud</h3>
<ol>
<li>If you do not have a directory named <code>m2-hotfixes</code> in the project root, please create one.</li>
<li>Copy the <code>%patch_name%.composer.patch</code> file(s) to the <code>m2-hotfixes</code> directory.</li>
<li>
<p>Add, commit, and push your code changes:</p>
<pre><code class="language-git">git add -A </code></pre>
<pre><code class="language-git">git commit -m "Apply %patch_name%.composer.patch patch"</code></pre>
<pre><code class="language-git">git push origin</code></pre>
</li>
</ol>
<p>For additional information about applying patches to Cloud projects, see <a href="https://devdocs.magento.com/cloud/project/project-patch.html">Apply patches</a> in Magento Developer Documentation.</p>
<h3>How to apply a composer patch for Magento Commerce and Open Source</h3>
<ol>
<li>Upload the patch to your Magento root directory.</li>
<li>Run the following SSH command:
<pre><code class="language-git">patch -p1 &lt; <code>%patch_name%</code>.composer.patch</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>