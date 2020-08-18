<div class="wiki-content">
<p>This article gives quick answers to questions about getting SSL (TLS) certificates for your Magento Commerce Cloud site.&nbsp;</p>
<h2 id="SSL(TLS)certificates:FAQ(versionforpublishing)-Whocangetacertificate?">Who can get a certificate?</h2>
<p><strong>All Magento Commerce Cloud clients</strong>&nbsp;can get a shared SSL certificate powered by Fastly.</p>
<h2 id="SSL(TLS)certificates:FAQ(versionforpublishing)-Whichdomainsdoesacertificatecover?">Which domains does a certificate cover?</h2>
<p>Staging and Production domain names, as well as the first-level subdomain names.</p>
<p><strong>For example:</strong> if your Production domain name is <em>example.com,</em> the Fastly wildcard SSL certificate covers <em>*.example.com</em> (like Staging domain names in the format of <em>staging.example.com</em> or <em>prod.example.com</em>).</p>
<h2 id="SSL(TLS)certificates:FAQ(versionforpublishing)-Howtorequestacertificate?">How to request a certificate?</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a> asking for a certificate.</p>
<p><strong>Include the list of domain names</strong> you want to use the certificate for. Please remember:&nbsp;before submitting a ticket, a Client or a System Integrator should create these domain names and point them to Fastly.</p>
<p>As a response&nbsp;to your support ticket, Magento provides&nbsp;a TXT record to be added to your DNS records for the corresponding domain names.&nbsp;This TXT record is used for SSL certificate validation, so please let the Magento Support Team know once the record is added.</p>
<h2 id="SSL(TLS)certificates:FAQ(versionforpublishing)-CanIuseowncertificates?">Can I use my own certificates?</h2>
<p>Yes.</p>
<p>You have the following options: include your certificate to Fastly (involves a fee) or bypass Fastly.</p>
<h3 id="SSL(TLS)certificates:FAQ(versionforpublishing)-IncludeyourcertificatetoFastly(paid)">Include your certificate to&nbsp;Fastly (paid)</h3>
<p><a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a> requesting to include your certificate to Fastly.</p>
<p>This variant allows you to use the certificate without bypassing Fastly; although, it is a&nbsp;paid&nbsp;service. Please&nbsp;contact your&nbsp;Magento&nbsp;Customer&nbsp;Success&nbsp;Manager for&nbsp;details.</p>
<h3 id="SSL(TLS)certificates:FAQ(versionforpublishing)-UseyourcertificateandbypassFastly">Use your certificate and bypass Fastly</h3>
<p>In this case, your domain name should bypass Fastly (CNAME to the origin domain name, like&nbsp;<em>*.c.&lt;your_client_id&gt;.ent.magento.cloud</em>). The difficulty here is that <strong>Fastly is required for Magento Commerce Cloud</strong>; thus, Magento does not recommend bypassing it.</p>
<h2 id="SSL(TLS)certificates:FAQ(versionforpublishing)-RelatedarticlesonDevDocs">Related articles on DevDocs</h2>
<ul>
<li><a class="external-link" href="https://devdocs.magento.com/cloud/cdn/cloud-fastly.html" rel="nofollow" target="_self">Configure Fastly</a></li>
<li><a class="external-link" href="https://devdocs.magento.com/cloud/cdn/configure-fastly.html#fastly-tls" rel="nofollow" target="_self">TLS and Fastly</a></li>
</ul>
<p>&nbsp;</p>
</div>