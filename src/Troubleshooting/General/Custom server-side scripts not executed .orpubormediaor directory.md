---
title: Custom server-side scripts not executed .orpubormediaor directory
link: https://support.magento.com/hc/en-us/articles/360017549092-Custom-server-side-scripts-not-executed-pub-media-directory
labels: Magento Commerce Cloud,troubleshooting,executable,scripts,2.3.x,2.2.x,2.1.x,2.4.x
---

<p>This article provides a fix for when custom server-side scripts are not executed if placed in the <code>./pub/media/</code> directory of your Magento Commerce Cloud application. This is an expected security limitation, since the <code>./pub/media/</code> directory is writable. To make scripts executable, place them in non-writable directories of your Magento Cloud app, such as <code>./app/code/</code> or <code>./pub/</code>.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce Cloud: 2.1.X and later, Starter and Pro plans, Wings and Legacy architectures</li>
</ul>
<h2>Issue: scripts not executed</h2>
<p>Custom server-side scripts cannot be executed when initiated.</p>
<p>For example, when the end user (Magento shopper) clicks the link that leads to the *.php file with the script (like <em>domain.com/media/directory/script.php</em>), the script is being downloaded instead of executing.</p>
<h2>Cause: incorrect location of script file</h2>
<p>The issue occurs when the script files are located in the <code>./pub/media/</code> directory of a Magento Commerce Cloud application. This is an expected behavior: due to security limitations, files from the writable directories (<code>./pub/media/</code>) are never executed.</p>
<h2>Solution: place scripts in non-writable directories</h2>
<p>Store the server-side scripts in non-writable directories, such as <code>./app/code/</code> or <code>./pub/</code><code></code></p>
<h2>Related documentation</h2>
<ul>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-start.html#write-dir">Writable directories in Magento Commerce Cloud</a> (DevDocs)</li>
</ul>