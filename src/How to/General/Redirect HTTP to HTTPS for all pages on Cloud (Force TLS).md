---
title: Redirect HTTP to HTTPS for all pages on Cloud (Force TLS)
link: https://support.magento.com/hc/en-us/articles/360006296953-Redirect-HTTP-to-HTTPS-for-all-pages-on-Cloud-Force-TLS-
labels: Magento Commerce Cloud,Fastly,security,cloud,TLS,Pro,redirect,2.1,routes.yaml,2.1.4,how to,Starter,1.2.4
---

<p>Activate the Fastly's Force TLS functionality in Magento Admin to enable the global HTTP to HTTPS redirect for all pages of your Magento Commerce (Cloud) store.</p>
<p>This article provides detailed <a href="#steps">steps</a>, a quick overview of the Force TLS feature, affected versions, and links to related documentation.</p>
<h2>Steps</h2>
<h3>Step 1: Configure Secure URLs</h3>
<p>In this step, we define the secure URLs for the store. If that's already done, go to <a href="#step-2-enable-force-tls">Step 2: Enable Force TLS</a>.</p>
<ol>
<li>Log in to Magento Admin.</li>
<li>Navigate to Stores &gt; Configuration &gt; General &gt; Web.</li>
<li>Expand the Base URLs (Secure) section.<br/><img alt="magento-admin_base-urls-secure.png" src="https://support.magento.com/hc/article_attachments/360008033893/magento-admin_base-urls-secure.png"/>
</li>
<li>In the Secure Base URL field, specify the HTTPS URL of your store.</li>
<li>Set the Use Secure URLs on Storefront and the Use Secure URLs on Admin settings to Yes.<br/><img alt="magento-admin_base-urls-secure-settings.png" src="https://support.magento.com/hc/article_attachments/360007995494/magento-admin_base-urls-secure-settings.png"/>
</li>
<li>Click Save config in the upper-right corner to apply changes.</li>
</ol>
<p>Related documentation in Magento User Guide: <a href="https://docs.magento.com/m2/ee/user_guide/stores/store-urls.html">Store URLs</a>.</p>
<h3>Step 2: Enable Force TLS</h3>
<ol>
<li>In Magento Admin, navigate to Stores &gt; Configuration &gt; Advanced &gt; System.</li>
<li>Expand the Full Page Cache section, then Fastly Configuration, then Advanced Configuration.</li>
<li>Click the Force TLS button.<br/><img alt="magento-admin_force-tls-button.png" src="https://support.magento.com/hc/article_attachments/360007999074/magento-admin_force-tls-button.png"/>
</li>
<li>In the dialog that appears, click Upload.<br/><img alt="magento-admin_force-tls-confirmation-dialog.png" src="https://support.magento.com/hc/article_attachments/360008041153/magento-admin_force-tls-confirmation-dialog.png"/>
</li>
<li>After the dialog closes, make sure the current state of Force TLS is displayed as enabled.<br/><img alt="magento-admin_force-tls-enabled.png" src="https://support.magento.com/hc/article_attachments/360008041293/magento-admin_force-tls-enabled.png"/>
</li>
</ol>
<p>Related Fastly documentation: <a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/FORCE-TLS.md">Force TLS guide</a> for Magento 2.</p>
<h2>About Force TLS</h2>
<p>TLS (Transport Layer Security) is a protocol for secure HTTP connections that replaces its less secure predecessor—the SSL (Secure Socket Layer) protocol.</p>
<p>The Fastly's Force TLS functionality allows you to force all incoming unencrypted requests for your site pages to TLS.</p>
<blockquote>
<p>It works by returning a <em>301 Moved Permanently</em> response to any unencrypted request, which redirects to the TLS equivalent. <br/>For instance, making a request for <em>http://www.example.com/foo.jpeg</em> would redirect to <em>https://www.example.com/foo.jpeg</em>.</p>
<p><a href="https://docs.fastly.com/guides/securing-communications/">Securing communications</a> (Fastly documentation)</p>
</blockquote>
<h2>Affected versions</h2>
<ul>
<li>
Magento Commerce (Cloud):
<ul>
<li>version: 2.1.4 and later</li>
<li>plan: Starter and Pro (including Pro Legacy)</li>
</ul>
</li>
<li>
Fastly: 1.2.4</li>
</ul>
<h2>No changes needed in routes.yaml</h2>
<p>To enable HTTP to HTTPS redirect on all pages of your store, you do not have to add the pages to the <code>routes.yaml</code> configuration file—enabling Force TLS globally for your entire store (using Magento Admin) is enough.</p>
<h2>Related Fastly documentation</h2>
<ul>
<li><a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/FORCE-TLS.md">Force TLS guide for Magento 2</a></li>
<li><a href="https://docs.fastly.com/guides/securing-communications/forcing-a-tls-redirect">Forcing a TLS redirect</a></li>
<li><a href="https://docs.fastly.com/guides/securing-communications/">Securing communications</a></li>
</ul>