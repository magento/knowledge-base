---
title: Best practice for images in Magento Commerce Cloud
labels: Magento Commerce Cloud,performance,images,space,best practices,2.3.x
---

This article provides best practices for managing images in Magento Commerce Cloud to save space.  

## Affected products and versions

* Magento Commerce Cloud 2.3.x

## Best practices

* Use [Fastly Image Optimization](https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html).
* Before uploading images, optimize and compress them to balance performance with viewing quality. This helps increase space and reduce page load times. PNGs give smaller sizes for images with large areas of solid color. JPEGs give smaller sizes for everything else. Use the highest compression (without noticeable degradation). This is usually 60-80%.

## Related reading

[Poorly optimized images can lead to performance issues](https://support.magento.com/hc/en-us/articles/360034626052)