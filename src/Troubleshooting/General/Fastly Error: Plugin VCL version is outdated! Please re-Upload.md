This article covers the issue where you see the message "_Plugin VCL version is outdated! Please re-Upload._" in Fastly Configuration, in the Magento admin, due to not having installed the latest Fastly module.&nbsp;

## AFFECTED PRODUCTS AND VERSIONS

Magento Commerce Cloud 2.2.x., 2.3.x  
 Fastly: This&nbsp;error can affect all versions of the Fastly module except the latest one. For information on the latest release see&nbsp;<a href="https://github.com/fastly/fastly-magento2/releases" rel="noopener" target="_blank">Fastly release notes</a>&nbsp;on GitHub.

## Issue

1.   Log in to the Magento admin panel.
2.   Navigate to __Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __System__ &gt; __Full Page Cache__&nbsp;__Fastly Cache.__
3.   In the __Automatic Upload &amp; Service Activation__ section, there will be a "_Plugin VCL version is outdated! Please re-Upload._" notification.
4.   You attempt to upload the VCL snippets by clicking on the "Upload VCL to Fastly" button but you still see the warning "_Plugin VCL version is outdated! Please re-Upload._"

## Cause

The Fastly extension was updated (along with a bundled VCL configuration and templates), but the updated VCL config has not been uploaded to the Fastly service. When you update the Magento module `` Fastly_Cdn ``, you have to upload an updated VCL config to Fastly again.

## Solution

<ol><ol>
<li>Check that you have the latest ECE-Tools installed and at the <a href="https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html" rel="noopener" target="_blank">current version</a>. ECE-Tools has a version of the Fastly package in its dependencies.
<p class="info">This may not be the latest version of the Fastly plugin, but it is likely to be a later version than the one you have currently installed, and it is best practice to have&nbsp;the latest ECE-Tools installed.</p>
</li>
<li>If you are not on the current version of ECE-Tools, follow these steps to <a href="https://devdocs.magento.com/guides/v2.2/cloud/project/ece-tools-update.html" rel="noopener" target="_blank">upgrade</a>.</li>
<li>After&nbsp;you have upgraded ECE-Tools, check if you now have a&nbsp;current version of the <a href="https://github.com/fastly/fastly-magento2/tree/master/etc/vcl_snippets" rel="noopener" target="_blank">Fastly plugin</a>&nbsp;installed.</li>
<li>If the Fastly plugin is not the current version, follow these steps to&nbsp;<a class="external-link" href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#upgrade" rel="nofollow noopener" target="_blank" title="Follow link">upgrade the plugin to the most current version</a>.</li>
</ol></ol>

## Related reading

*   For information about setting up and configuring Fastly, see DevDocs&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-fastly.html" rel="noopener" target="_blank">Configure Fastly services</a>.
*   For general information about Fastly, see <a href="https://www.fastly.com/" rel="noopener" target="_blank">fastly.com</a>