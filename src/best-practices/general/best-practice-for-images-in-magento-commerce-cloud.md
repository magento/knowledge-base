---
title: Best practice for images in Adobe Commerce on cloud infrastructure
labels: 2.3.x,Magento Commerce Cloud,best practices,images,performance,space,Fastly,Magento,Adobe Commerce,cloud infrastructure
---

This article provides best practices for managing images in Adobe Commerce on cloud infrastructure to save space.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.3.x

## Best practices

* Use [Fastly Image Optimization](https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html).
* Before uploading images, optimize and compress them to balance performance with viewing quality. This helps increase space and reduce page load times. PNGs give smaller sizes for images with large areas of solid color. JPEGs give smaller sizes for everything else. Use the highest compression (without noticeable degradation). This is usually 60-80%.

## Related reading

[Poorly optimized images can lead to performance issues](https://support.magento.com/hc/en-us/articles/360034626052) in our support knowledge base.
