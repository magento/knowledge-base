---
title: Store images not displayed after deployment
labels: 2.2.x,2.3.x,Magento Commerce Cloud,SSH,cache,how to,images not displayed,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when images are not being displayed correctly after deployment.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x

## Issue

When you use a storefront theme with image resizing, the images do not display or disappear from catalog pages when deployed.

## Cause

This may occur due to loading the images from the cache.

## Solution

If this happens, you can use the Magento command to regenerate the image cache and properly display the images.

To perform this, you need the SSH information and the store URL available through the [Project Web Interface](https://devdocs.magento.com/cloud/project/projects.html).

1. SSH to your project that was a source for the [database dump](https://support.magento.com/hc/en-us/articles/360003254334-Create-database-dump-on-Cloud), as described in [SSH to environment](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh) in our developer documentation.
1. Regenerate the image cache by running:

    ```bash    
    php bin/magento catalog:images:resize    
    ```    

1. Test the category pages through the store URL.    
