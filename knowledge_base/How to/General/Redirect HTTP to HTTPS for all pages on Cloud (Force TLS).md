Activate the Fastly's __Force TLS__ functionality in Magento Admin to enable the global HTTP to HTTPS redirect for all pages of your Magento Commerce (Cloud) store.

This article provides detailed [steps](#steps), a quick overview of the Force TLS feature, affected versions, and links to related documentation.

<h2 id="steps">Steps</h2>

<h3 id="step-1-configure-secure-urls">Step 1: Configure Secure URLs</h3>

In this step, we define the secure URLs for the store. If that's already done, go to [Step 2: Enable Force TLS](#step-2-enable-force-tls).

<ol><li>Log in to Magento Admin.</li><li>Navigate to&nbsp;<strong>Stores</strong> &gt; <strong>Configuration</strong> &gt; <strong>General</strong> &gt; <strong>Web</strong>.</li><li>Expand the <strong>Base URLs (Secure)</strong> section.<br/><img alt="magento-admin_base-urls-secure.png" height="392" src="https://support.magento.com/hc/article_attachments/360008033893/magento-admin_base-urls-secure.png" width="701"/>
</li><li>In the <strong>Secure Base URL</strong> field, specify the HTTPS URL of your store.</li><li>Set the <strong>Use Secure URLs on Storefront</strong>&nbsp;and the <strong>Use Secure URLs on&nbsp;Admin</strong>&nbsp;settings to <strong>Yes</strong>.<br/><img alt="magento-admin_base-urls-secure-settings.png" height="383" src="https://support.magento.com/hc/article_attachments/360007995494/magento-admin_base-urls-secure-settings.png" width="701"/>
</li><li>Click <strong>Save config</strong>&nbsp;in the upper-right corner to apply changes.</li></ol>

__Related documentation in Magento User Guide:__ [Store URLs](https://docs.magento.com/m2/ee/user_guide/stores/store-urls.html).

<h3 id="step-2-enable-force-tls">Step 2: Enable Force TLS</h3>

<ol><li>In Magento Admin, navigate to <strong>Stores</strong> &gt; <strong>Configuration</strong> &gt; <strong>Advanced</strong> &gt; <strong>System</strong>.</li><li>Expand the <strong>Full Page Cache</strong> section, then <strong>Fastly Configuration</strong>, then <strong>Advanced Configuration</strong>.</li><li>Click the <strong>Force TLS</strong> button.<br/><img alt="magento-admin_force-tls-button.png" height="183" src="https://support.magento.com/hc/article_attachments/360007999074/magento-admin_force-tls-button.png" width="501"/>
</li><li>In the dialog that appears, click <strong>Upload</strong>.<br/><img alt="magento-admin_force-tls-confirmation-dialog.png" height="130" src="https://support.magento.com/hc/article_attachments/360008041153/magento-admin_force-tls-confirmation-dialog.png" width="498"/>
</li><li>After the dialog closes, make sure the current state of Force TLS is displayed as&nbsp;<strong>enabled</strong>.<br/><img alt="magento-admin_force-tls-enabled.png" height="167" src="https://support.magento.com/hc/article_attachments/360008041293/magento-admin_force-tls-enabled.png" width="500"/>
</li></ol>

__Related Fastly documentation:__&nbsp;[Force TLS guide](https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/FORCE-TLS.md) for Magento 2.

## About Force TLS

TLS (Transport Layer Security) is a protocol for secure HTTP connections that replaces&nbsp;its less secure predecessor—the SSL (Secure Socket Layer) protocol.

The Fastly's Force TLS functionality allows you to force all incoming unencrypted requests for your site pages to TLS.

>  
> It works by returning a _301 Moved Permanently_ response to any unencrypted request, which redirects to the TLS equivalent.   
> For instance, making a request for _http://www.example.com/foo.jpeg_ would redirect to _https://www.example.com/foo.jpeg_.
> 
> [Securing communications](https://docs.fastly.com/guides/securing-communications/) (Fastly documentation)
> 

## Affected versions

*   __Magento Commerce (Cloud):__
    
    *   version: 2.1.4 and later
    *   plan: Starter and Pro (including Pro Legacy)
    
    
    
*   __Fastly:__ 1.2.4

## No changes needed in routes.yaml

To enable HTTP to HTTPS redirect on __all__ pages of your store, you do not have to add the pages to the `` routes.yaml `` configuration&nbsp;file—enabling Force TLS globally for your entire store (using Magento Admin) is enough.

## Related Fastly documentation

*   [Force TLS guide for Magento 2](https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/FORCE-TLS.md)
*   [Forcing a TLS redirect](https://docs.fastly.com/guides/securing-communications/forcing-a-tls-redirect)
*   [Securing communications](https://docs.fastly.com/guides/securing-communications/)