---
title: Redirect HTTP to HTTPS for all pages on Cloud (Force TLS)
labels: 1.2.4,2.1,2.1.4,Fastly,Magento Commerce Cloud,Pro,Starter,TLS,cloud,how to,redirect,routes.yaml,security
---

Activate the Fastly's Force TLS functionality in Magento Admin to enable the global HTTP to HTTPS redirect for all pages of your Magento Commerce (Cloud) store.

This article provides detailed [steps](#steps), a quick overview of the Force TLS feature, affected versions, and links to related documentation.

## Steps

### Step 1: Configure Secure URLs

In this step, we define the secure URLs for the store. If that's already done, go to [Step 2: Enable Force TLS](#step-2-enable-force-tls).

1. Log in to Magento Admin.
1. Navigate to Stores > Configuration > General > Web.
1. Expand the Base URLs (Secure) section.  
    ![magento-admin_base-urls-secure.png](https://support.magento.com/hc/article_attachments/360008033893/magento-admin_base-urls-secure.png)
1. In the Secure Base URL field, specify the HTTPS URL of your store.
1. Set the Use Secure URLs on Storefront and the Use Secure URLs on Admin settings to Yes.  
    ![magento-admin_base-urls-secure-settings.png](https://support.magento.com/hc/article_attachments/360007995494/magento-admin_base-urls-secure-settings.png)
1. Click Save config in the upper-right corner to apply changes.

Related documentation in Magento User Guide: [Store URLs](https://docs.magento.com/m2/ee/user_guide/stores/store-urls.html).

### Step 2: Enable Force TLS

1. In Magento Admin, navigate to Stores > Configuration > Advanced > System.
1. Expand the Full Page Cache section, then Fastly Configuration, then Advanced Configuration.
1. Click the Force TLS button.  
    ![magento-admin_force-tls-button.png](https://support.magento.com/hc/article_attachments/360007999074/magento-admin_force-tls-button.png)
1. In the dialog that appears, click Upload.  
    ![magento-admin_force-tls-confirmation-dialog.png](https://support.magento.com/hc/article_attachments/360008041153/magento-admin_force-tls-confirmation-dialog.png)
1. After the dialog closes, make sure the current state of Force TLS is displayed as enabled.  
    ![magento-admin_force-tls-enabled.png](https://support.magento.com/hc/article_attachments/360008041293/magento-admin_force-tls-enabled.png)

Related Fastly documentation: [Force TLS guide](https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/FORCE-TLS.md) for Magento 1. ## About Force TLS

TLS (Transport Layer Security) is a protocol for secure HTTP connections that replaces its less secure predecessor—the SSL (Secure Socket Layer) protocol.

The Fastly's Force TLS functionality allows you to force all incoming unencrypted requests for your site pages to TLS.

>  
> It works by returning a _301 Moved Permanently_ response to any unencrypted request, which redirects to the TLS equivalent.   
> For instance, making a request for _http://www.example.com/foo.jpeg_ would redirect to _https://www.example.com/foo.jpeg_.
> 
> [Securing communications](https://docs.fastly.com/guides/securing-communications/) (Fastly documentation)
> 

## Affected versions

* Magento Commerce (Cloud):
    
    * version: 2.1.4 and later
    * plan: Starter and Pro (including Pro Legacy)
    
    
    
* Fastly: 1.2.4

## No changes needed in routes.yaml

To enable HTTP to HTTPS redirect on all pages of your store, you do not have to add the pages to the `` routes.yaml `` configuration file—enabling Force TLS globally for your entire store (using Magento Admin) is enough.

## Related Fastly documentation

* [Force TLS guide for Magento 2](https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/FORCE-TLS.md)
* [Forcing a TLS redirect](https://docs.fastly.com/guides/securing-communications/forcing-a-tls-redirect)
* [Securing communications](https://docs.fastly.com/guides/securing-communications/)