---
title: Display Magento error report number instead of Fastly's 503 error on Cloud
link: https://support.magento.com/hc/en-us/articles/360018126211-Display-Magento-error-report-number-instead-of-Fastly-s-503-error-on-Cloud
labels: staging,production,Magento Commerce Cloud,Fastly,error,Pro,debug,503,how to,reports
---

<p>By default, Fastly hides all Magento errors behind the 503 Service Unavailable error. To display the Magento error log report number (to be able to find it in logs and see the error details), open the website omitting Fastly using these steps:</p>
<ol>
<li>Add your application's domain and IP address to your hosts file on your local machine.</li>
<li>Clear the browser cache and cookies (or switch to incognito mode).</li>
<li>Open your store's website again to see the Magento error.</li>
</ol>
<p>Once you see the authentic Magento error and the error report number, you may get details in the error report file by following these steps:</p>
<ol>
<li>SSH to the affected environment (<a href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh">read how</a>).</li>
<li>Locate the <code>./var/report/{error_number}</code> file.</li>
</ol>
<h2>Add application domain and IP address to your hosts file: detailed steps</h2>
<ol>
<li>Check the server IP of your store by executing the <code>nslookup</code> command in the command line on your local machine:</li>
</ol><ul>
<li>Pro plan users, Staging and Production environments:<br/>
<pre><code class="language-clike">nslookup {your_project_id}.ent.magento.cloud</code></pre>
</li>
<li>Starter plan users, all environments; Pro plan users, Integration environment:<br/>
<pre><code class="language-clike">nslookup gw.{your_region}.magentosite.cloud</code></pre>
</li>
</ul>
<li>Add your store domain and application server IP to the hosts file on your local machine using the following format:<br/>
<pre><code class="language-clike">{server_IP} {store_domain}</code></pre>
</li>
