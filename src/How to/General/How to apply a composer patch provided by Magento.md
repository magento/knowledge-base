---
title: How to apply a composer patch provided by Magento
labels: Magento Commerce Cloud,Magento Commerce,patch,apply patch,composer,git,how to
---

This article instructs how to apply a composer patch for Magento Commerce, Magento Commerce Cloud, and Magento Open Source.

<p class="warning">We strongly recommend applying and testing the patch on the Staging/Integration environment, before applying it Production. We also recommend you have a recent backup before any manipulations.</p>

### How to apply a composer patch for Magento Commerce Cloud

1. If you do not have a directory named `` m2-hotfixes `` in the project root, please create one.
1. Copy the `` %patch_name%.composer.patch `` file(s) to the `` m2-hotfixes `` directory.
1. Add, commit, and push your code changes:
    
    
    
    <pre><code class="language-git">git add -A </code></pre>
    
    
    
    <pre><code class="language-git">git commit -m "Apply %patch_name%.composer.patch patch"</code></pre>
    
    
    
    <pre><code class="language-git">git push origin</code></pre>
    
    

For additional information about applying patches to Cloud projects, see [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in Magento Developer Documentation.

### How to apply a composer patch for Magento Commerce and Open Source

1. Upload the patch to your Magento root directory.
1. Run the following SSH command:
    
    <pre><code class="language-git">patch -p1 &lt; <code>%patch_name%</code>.composer.patch</code></pre>
    
    (If the above command does not work, try using `` -p2 `` instead of `` -p1 ``)
1. For the changes to be reflected, refresh the cache in the Admin under System > Cache Management.