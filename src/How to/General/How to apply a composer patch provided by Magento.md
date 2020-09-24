This article instructs how to apply a composer patch for Magento Commerce, Magento Commerce Cloud, and Magento Open Source.

<p class="warning">We strongly recommend applying and testing the patch on the Staging/Integration environment, before applying it Production. We also recommend to have a recent backup before any manipulations.</p>

<h3 id="cloud">How to apply a composer patch for Magento Commerce Cloud</h3>

1.   If you do not have a directory named `` m2-hotfixes `` in the project root, please create one.
2.   Copy the `` %patch_name%.composer.patch `` file(s) to the `` m2-hotfixes `` directory.
3.   
    
    Add, commit, and push your code changes:
    
    
    
    <pre><code class="language-git">git add -A &amp;&amp; git commit -m "Apply %patch_name%.composer.patch patch" &amp;&amp; git push origin</code></pre>
    
    

For detailed instructions see the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html" target="_self">Apply custom patch</a> article on Magento Devdocs.

<h3 id="commerce">How to apply a composer patch for Magento Commerce&nbsp;and Open Source</h3>

1.   Upload the patch to your Magento root directory.
2.   Run the following SSH command:
    
    <pre><code class="language-git">patch -p1 &lt; <code>%patch_name%</code>.composer.patch</code></pre>
    
    (If the above command does not work, try using `` -p2 `` instead of `` -p1 ``)
3.   For the changes to be reflected, refresh the cache in the Admin under __System__ &gt; __Cache Management__.