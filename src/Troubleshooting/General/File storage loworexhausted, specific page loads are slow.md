---
title: File storage loworexhausted, specific page loads are slow
link: https://support.magento.com/hc/en-us/articles/360034626052-File-storage-low-exhausted-specific-page-loads-are-slow
labels: Magento Commerce Cloud,Fastly,Magento Commerce,image optimization,page loads slow,disk space,storage,how to
---

This article provides a solution for the issue of low disk space caused by large, rich images.

 AFFECTED PRODUCTS AND VERSIONS
------------------------------

 
 * Magento Commerce Cloud, all supported versions
 * Magento Commerce, all supported versions
 * Magento Open Source, all supported versions
 
 Issue
-----

 Low disk storage and slow page loads can be caused by large, rich images using high amounts of storage in pub/media/catalog/products and the sharing of disk space between staging and production, (unless a dedicated staging environment is provisioned).

 Cause
-----

 Images are not optimized to balance performance with viewing quality.

 Solution
--------

 Before uploading images optimize and compress them to balance performance with viewing quality. This helps increase space and reduce page load times. PNGs give smaller sizes for images with large areas of solid color. JPEGs give smaller sizes for everything else. Use the highest compression (without noticeable degradation). This is usually 60-80%.

 Use [Fastly image optimization](https://devdocs.magento.com/guides/v2.3/cloud/cdn/fastly-image-optimization.html) to produce more storage efficient images.

 Related reading
---------------

 To learn about managing your disk space (if you are on Magento Commerce Cloud) see [Manage disk space in Magento Developer Documentation.](https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=manage%20disk%20space)

