---
title: Best practice for images in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360045603832-Best-practice-for-images-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,performance,images,space,best practices,2.3.x
---

<p>This article provides best practices for managing images in Magento Commerce Cloud to save space.  </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.3.x</li>
</ul>
<h2>Best practices</h2>
<ul>
<li>Use <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html">Fastly Image Optimization</a>.</li>
<li>Before uploading images, optimize and compress them to balance performance with viewing quality. This helps increase space and reduce page load times. PNGs give smaller sizes for images with large areas of solid color. JPEGs give smaller sizes for everything else. Use the highest compression (without noticeable degradation). This is usually 60-80%.</li>
</ul>
<h2>Related reading</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360034626052">Poorly optimized images can lead to performance issues</a></p>