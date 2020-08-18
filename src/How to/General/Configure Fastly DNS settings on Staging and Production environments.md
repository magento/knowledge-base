To use Fastly on your Staging and Production environments with Magento Commerce (Cloud), you must create and point the corresponding CNAME aliases or domain names to one of the following:

*   Fastly CNAME hostname, or&nbsp;
*   all four Fastly Anycast IP addresses using A records

<h2 id="fastly-cname-anycast-ip">Fastly CNAME and Anycast IP's</h2>

Fastly CNAME hostname:&nbsp;

<pre><code class="language-clike">prod.magentocloud.map.fastly.net</code></pre>

Fastly Anycast IP addresses:

<pre><code class="language-clike">151.101.1.124
151.101.65.124
151.101.129.124
151.101.193.124
</code></pre>

## Staging environment (Pro plan only)

You may add a subdomain and use a short URL (like&nbsp;`` staging.&lt;your_domain_name&gt;.com ``, which is more convenient for real-life testing scenarios) instead of the long&nbsp;origin URL of your Staging environment. Such being the case, you must update your DNS record to include the Staging subdomain.

To configure the DNS record for your Staging environment to use Fastly, follow these steps:

1.   Add the Staging subdomain to your DNS settings.
2.   Point the new Staging subdomain to Fastly using [Fastly's CNAME or Anycast IP's](#fastly-cname-anycast-ip).
3.   Add the DNS TXT record for subdomain validation.
4.   [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to validate your SSL certificate.
5.   Change the Magento Base URL's.

### Naming convention for Staging subdomain

The usual naming convention is:&nbsp;`` staging.&lt;your_domain_name&gt;.com. ``

Any subdomain names you are using in your Magento Commerce (Cloud) Project must match the ones specified in your&nbsp;Onboarding UI.

### DNS TXT record for SSL certificate

You are supposed to obtain the corresponding DNS TXT record for your apex domain name after your onboarding meeting. The corresponding SSL certificate will cover all first-level subdomains (like `` staging.&lt;your_domain_name&gt;.com ``, `` prod.&lt;your_domai_name&gt;.com ``).

If you cannot find the DNS TXT record, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting it. In the ticket, specify the production domain name URL.

You must [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to validate your SSL certificate once you add the TXT record to your DNS settings.

### Subdomains are not available on Staging for Starter plan

The ability to add subdomains on your Staging environment is only available for the Pro plan users. For the Starter plan, you may only test your Staging site using the origin URL.

## Production environment

To configure your live DNS record to use Fastly, follow these steps:

1.   Add the new production domain name&nbsp;to your DNS settings (if the domain name has not been added already).
2.   Point the production domain to Fastly using [Fastly's CNAME or Anycast IP's](#fastly-cname-anycast-ip).
3.   Add the DNS TXT record for subdomain validation (optional).
4.   Submit a support ticket requesting to validate your SSL certificate (optional).
5.   Change the Magento Base URL's.

### SSL validation on Staging and Production

If you have successfully validated the SSL certificate for your Staging domain, you may use the same certificate for your Production domain.

### Recommendation: add your Production subdomain to Fastly

We highly recommend requesting that the Production subdomain you are using for pre-launch testing (`` prod.&lt;your_domain_name&gt;.com ``)&nbsp;is added to Fastly as well. You may point the Production subdomain to Fastly the same way as for the Staging environment.

If your Production subdomain is added to Fastly, you are able to test your store on the Production environment with Fastly enabled before going live, especially if you are migrating and do not want to use the current (live) domain name for testing purposes on Production.

## Using Staging subdomain with your existing Staging domain

If you are already using the same Staging name in your previous Magento development site, create a separate DNS record for your Staging subdomain as a CNAME that points to the&nbsp;`` prod.magentocloud.map.fastly.net `` hostname.

To create a hostname that allows you to connect directly to the cluster and bypass Fastly, point your CNAME record to the&nbsp;`` c.&lt;project_ID&gt;.ent.magento.cloud `` hostname. Make sure to mention this in your Onboarding UI.

## Important notes

### Domain names in your Onboarding UI

You can find the DNS information in your Onboarding UI on the _DNSSSLCDN_ tab.

The tab includes the following info:

*   your requested domain names, Fastly and origin (with ``  *.c.&lt;your_client_id&gt;.ent.magento.cloud ``)&nbsp;
*   all Fastly Anycast IP addresses and the CNAME alias

If you don't have access to the Onboarding UI, ask your Magento Commerce account owner to grant access.

### CNAME to origin domain name to bypass Fastly (not recommended)

You can CNAME your domain names directly to the origin domain name (with ``  *.c.&lt;your_client_id&gt;.ent.magento.cloud ``) to bypass Fastly. In this case, you need to use your own SSL (TLS) certificate.

However, if you bypass Fastly, we cannot guarantee a satisfactory site performance since Fastly is highly recommended for your Magento Commerce (Cloud) store.

## Related documentation

### Knowledge Base

*   [Set up Fastly for Starter plan on Cloud](https://support.magento.com/hc/en-us/articles/360002491773)
*   [Potential blockers for launching on Magento Commerce (Cloud)](https://support.magento.com/hc/en-us/articles/115002517274)

### DevDocs

*   <a class="external-link" href="http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html" rel="nofollow">Fastly Overview</a>
*   <a class="external-link" href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html" rel="nofollow">Fastly Setup for Magento Cloud</a>
*   <a class="external-link" href="http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html" rel="nofollow">Custom Fastly Varnish Configuration Language (VCL) snippets</a>