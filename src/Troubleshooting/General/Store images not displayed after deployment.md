This article provides a solution for when images are not being displayed correctly after deployment.

### Affected products and versions

*   Magento Commerce Cloud 2.2.x, 2.3.x

<h2 id="lost-images-on-deployment-images-">Issue</h2>

When you use a storefront theme with image resizing, the images do not display or disappear from catalog pages when deployed.

## Cause

This may occur due to loading the images from the cache.&nbsp;

## Solution

If this happens, you can use Magento command to regenerate the image cache and properly display the images.

To perform this, you need the SSH information and the store URL available through the <a href="https://devdocs.magento.com/cloud/project/projects.html" target="_self">Project Web Interface</a>.

1.   SSH to your project that was a source for the database dump, as described in <a class="external-link" href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh" rel="nofollow">SSH to environment</a>.
2.   
    
    Regenerate the image cache by running:
    
    
    
    <pre><code class="language-bash">php bin/magento catalog:images:resize</code></pre>
    
    
3.   
    
    Test the category pages through the store URL.
    
    