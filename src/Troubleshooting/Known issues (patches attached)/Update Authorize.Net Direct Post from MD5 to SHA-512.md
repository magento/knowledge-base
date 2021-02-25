---
title: Update Authorize.Net Direct Post from MD5 to SHA-512
link: https://support.magento.com/hc/en-us/articles/360024368392-Update-Authorize-Net-Direct-Post-from-MD5-to-SHA-512
labels: Magento Commerce Cloud,Magento Commerce,patch,Authorize.net,troubleshooting,Direct Post,SHA,MDA,deprecated,known issues,2.2.x,2.1.x
---

UPDATED on April 12th, 2019

Magento's implementation of the Authorize.Net Direct Post payment method uses MD5 based hash. Authorize.net will [stop supporting MD5 based hash](https://support.authorize.net/s/article/MD5-Hash-End-of-Life-Signature-Key-Replacement) usage on [June 28, 2019](http://app.payment.authorize.net/e/es.aspx?s=986383348&amp;e=1691349&amp;elqTrackId=b307147cf4ef4925bd108180234867d4&amp;elq=22c763e5e2354d988ebfea2681020c6b&amp;elqaid=903&amp;elqat=1). This will result in Magento merchants not being able to process payments using Authorize.Net Direct Post. To avoid this, merchants need to apply the patch provided by Magento and replace the existing MD5 hash with a Signature Key (SHA-512) in the Magento Admin configuration settings.

<p class="info">Magento released a new Authorize.Net extension to replace Direct Post in upcoming 2019 releases, starting with v2.3.1 for Commerce and Open Source. </p>

<p class="info">The core Magento Authorize.Net payment integration is deprecated since 2.3.4 and will be completely removed in 2.4.1. Use the <a href="https://marketplace.magento.com/authorizenet-magento-module-authorizenet.html">official extension</a> from marketplace instead.</p>

### Affected versions

* Magento Commerce 1.X.X
* Magento Open Source 1.X.X
* Magento Commerce 2.X.X
* Magento Open Source 2.X.X
* Magento Commerce Cloud 2.X.X
* Authorize.Net Direct Post

## Issue

Magento implements the Authorize.Net Direct Post payment method, using Authorize.Net's AIM (Advanced Integration Method) and DPM (Direct Post method) APIs, which use MD5 based hash.

[Authorize.net will stop supporting MD5 based hash usage on March 14, 2019](https://support.authorize.net/s/article/MD5-Hash-End-of-Life-Signature-Key-Replacement). Starting from this date, Magento Open Source, Magento Commerce and Magento Cloud merchants will not be able to process payments using Authorize.Net Direct Post payment method. To be able to continue successfully process payments using these methods, merchants need to apply the patch provided by Magento and replace the existing MD5 hash with a Signature Key in the Magento Admin configuration settings.

## Solution

Further are described the three general steps you need to take be able to continue using Authorize.Net Direct Post payment method.

Alternatively, you can upgrade to version 2.2.8 or 2.3.1 and get all updates and a [new Authorize.net payment method option](https://docs.magento.com/m2/ce/user_guide/payment/authorize-net.html).

### 1. Download the patch

#### Magento Cloud and Magento Commerce

Patches are attached to this article. To download a patch, scroll down to the end of the article and click the file name, or click one the following links:

* For versions 2.2.0-2.2.7 and 2.3.0 - [Download Auth.net.md5-2019-02-28-05-04-05.composer-2019-03-04-07-33-26.patch](https://support.magento.com/hc/en-us/article_attachments/360026121671/Auth.net.md5-2019-02-28-05-04-05.composer-2019-03-04-07-33-26.patch)
* For versions 2.0.0-2.0.18 and 2.1.0-2.1.16 - [Download MDVA-17212\_EE\_2.1.0\_v1.composer-2019-03-05-12-05-22.patch  
    ](https://support.magento.com/hc/en-us/article_attachments/360026127972/MDVA-17212_EE_2.1.0_v1.composer-2019-03-05-12-05-22.patch)

#### Magento Commerce

* For versions 1.10.1.0-1.14.4.1 - [Download PATCH\_SUPEE-11085\_EE\_1.14.4.0\_v1-2019-02-28-04-59-38.sh](https://support.magento.com/hc/en-us/article_attachments/360026121651/PATCH_SUPEE-11085_EE_1.14.4.0_v1-2019-02-28-04-59-38.sh)

#### Magento Open Source

1. Click a link to download: [M1 patch](https://magento.com/tech-resources/download#download2280) or [M2 patch](https://magento.com/tech-resources/download#download2279).
1. For Select your format, select a format best matching your needs. For M1, there is just one option. For M2, choose between Git-based or Composer-based.

### 1. Apply the patch

You may require developer assistance to apply the update. To update, you can download and install packages for your Magento edition and version. Download patches also available for those who installed with Composer.

#### Magento Cloud

For Magento Commerce Cloud, apply the M2 patch and deploy. For details, see [Apply custom patches](https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html).

#### Magento 2.X Commerce

For Magento Commerce 2.X and Open Source 2.X, follow these steps to install the Composer-based patch:

1. Upload the patch to your Magento root directory.
1. Run the following SSH command:
    
    <pre><code class="language-git">patch -p1 &lt; %patch_name%</code></pre>
    
    (If the above command does not work, try using `` -p2 `` instead of `` -p1 ``)
1. For the changes to be reflected, refresh the cache in the Admin under System > Cache Management.

#### Magento 2.X Open Source

For Magento Open Source 2.X, follow these steps to install the Composer-based patch:

1. Upload the patch to your Magento root directory.
1. Run the following SSH command:
    
    <pre><code class="language-git">patch -p0 &lt; %patch_name%</code></pre>
    
    
1. For the changes to be reflected, refresh the cache in the Admin under System > Cache Management.

#### Magento 1.X Commerce and Open Source

For Magento Commerce 1.X and Open Source 1.X, follow these steps to install the patch:

1. Upload the patch to your Magento root directory.
1. Run the following SSH command:
    
    <pre><code class="language-bash">sh %patch_name%.sh</code></pre>
    
    
1. For the changes to be reflected, refresh the cache in the Admin under System > Cache Management.

### 1. Get a new Signature Key

You need to get a new Signature Key and add it to your Magento Admin configuration. For more information, see [What is a Signature Key?](https://support.authorize.net/s/article/What-is-a-Signature-Key)

1. Log into the Merchant Interface at [https://account.authorize.net](https://account.authorize.net/).
1. Click Account from the main toolbar.
1. Click Settings in the main left-side menu.
1. Click API Credentials &amp; Keys.
1. Select New Signature Key. Review the options available.
1. Click Submit to continue.
1. Request and enter PIN for verification.
1. Your new Signature Key is displayed. Copy this key to add to your Magento Admin configuration.

### 1. Update Magento Admin configuration

Take the following steps to update the Magento Admin configuration:

1. Log into the Magento Admin.
1. On the Admin sidebar, click Stores. Then under Settings, click Configuration.
1. In the panel, click Sales then Payment Methods.
1. Expand the Authorize.net Direct Post section.
1. In the Signature Key enter the SHA-512 Signature Key.
1. Click Save Config.

![auth-net-signature-key-m2.png](https://support.magento.com/hc/article_attachments/360022986671/auth-net-signature-key-m2.png)

_Magento 2 Authorize.Net Direct Post configuration screen_

_![auth-net-signature-key-m1.png](https://support.magento.com/hc/article_attachments/360022986751/auth-net-signature-key-m1.png)_

_Magento 1 Authorize.Net Direct Post configuration screen_

The process is successful if the Signature Key updates and payment processing continues. If you have issues, verify the Signature Key with Authorize.Net.

## More information 

* [Tech Resources](https://magento.com/technical-resources) for Magento Open Source and Commerce documentation
    
    * Open Source [2.3](https://docs.magento.com/m2/ce/user_guide/payment/authorize-net-direct-post.html), [2.2](https://docs.magento.com/m2/2.2/ce/user_guide/payment/authorize-net-direct-post.html), [2.1](https://docs.magento.com/m2/2.1/ce/user_guide/payment/authorize-net-direct-post.html)
    * Commerce and Commerce Cloud [2.3](https://docs.magento.com/m2/ee/user_guide/payment/authorize-net-direct-post.html), [2.2](https://docs.magento.com/m2/2.2/ee/user_guide/payment/authorize-net-direct-post.html), [2.1](https://docs.magento.com/m2/2.1/ee/user_guide/payment/authorize-net-direct-post.html)
    * Magento 1 [Open Source](https://docs.magento.com/m1/ce/user_guide/payment/authorize-net-direct-post.html) and [Commerce](https://docs.magento.com/m1/ee/user_guide/payment/authorize-net-direct-post.html)
    
    
    
* Authorize.Net announcement: [MD5 Hash End of Life &amp; Signature Key Replacement](https://support.authorize.net/s/article/MD5-Hash-End-of-Life-Signature-Key-Replacement)