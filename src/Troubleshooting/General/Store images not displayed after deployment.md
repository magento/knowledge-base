---
title: Store images not displayed after deployment
link: https://support.magento.com/hc/en-us/articles/360034358571-Store-images-not-displayed-after-deployment
labels: Magento Commerce Cloud,cache,images not displayed,2.3.x,2.2.x,how to,SSH
---

This article provides a solution for when images are not being displayed correctly after deployment.

 ### Affected products and versions

 
 * Magento Commerce Cloud 2.2.x, 2.3.x
 
 Issue
-----

 When you use a storefront theme with image resizing, the images do not display or disappear from catalog pages when deployed.

 Cause
-----

 This may occur due to loading the images from the cache. 

 Solution
--------

 If this happens, you can use Magento command to regenerate the image cache and properly display the images.

 To perform this, you need the SSH information and the store URL available through the [Project Web Interface](https://devdocs.magento.com/cloud/project/projects.html).

 
 2. SSH to your project that was a source for the database dump, as described in [SSH to environment](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh).
 4.  Regenerate the image cache by running:

 php bin/magento catalog:images:resize 
 6.  Test the category pages through the store URL.

 
 
