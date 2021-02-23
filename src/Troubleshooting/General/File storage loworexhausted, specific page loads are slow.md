---
title: File storage loworexhausted, specific page loads are slow
link: https://support.magento.com/hc/en-us/articles/360034626052-File-storage-low-exhausted-specific-page-loads-are-slow
labels: Magento Commerce Cloud,Fastly,Magento Commerce,image optimization,page loads slow,disk space,storage,how to
---

<p>This article provides a solution for the issue of low disk space caused by large, rich images.</p>
<h2>AFFECTED PRODUCTS AND VERSIONS</h2>
<ul>
<li>Magento Commerce Cloud, all supported versions</li>
<li>Magento Commerce, all supported versions</li>
<li>Magento Open Source, all supported versions</li>
</ul>
<h2>Issue</h2>
<p>Low disk storage and slow page loads can be caused by large, rich images using high amounts of storage in <code>pub/media/catalog/products</code> and the sharing of disk space between staging and production, (unless a dedicated staging environment is provisioned).</p>
<h2>Cause</h2>
<p>Images are not optimized to balance performance with viewing quality.</p>
<h2>Solution</h2>
<p>Before uploading images optimize and compress them to balance performance with viewing quality. This helps increase space and reduce page load times. PNGs give smaller sizes for images with large areas of solid color. JPEGs give smaller sizes for everything else. Use the highest compression (without noticeable degradation). This is usually 60-80%.</p>
<p>Use <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html">Fastly image optimization</a> to produce more storage efficient images.</p>
<h2>Related reading</h2>
<p>To learn about managing your disk space (if you are on Magento Commerce Cloud) see <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=manage%20disk%20space">Manage disk space in Magento Developer Documentation.</a></p>