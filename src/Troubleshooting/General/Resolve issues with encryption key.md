---
title: Resolve issues with encryption key
link: https://support.magento.com/hc/en-us/articles/360033978652-Resolve-issues-with-encryption-key
labels: Magento Commerce Cloud,database,encryption,crypt_key,2.3.x,2.2.x,how to
---

<p>This article talks about how to fix the issues caused by the encryption key not being moved together with DB dump to the other environment. </p>
<h3>Products and versions affected</h3>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>After importing a database dump from Production to Staging/Integration environments, saved credit card numbers appear wrong and/or payments fail for payment integrations requiring usage of merchant credentials. </p>
<h2>Cause</h2>
<p>The encryption key used to encrypt sensitive data, like credit card numbers and merchant credentials, is not stored in the database, and therefore does not get transferred to other environment after database dump import/export. </p>
<h2>Solution</h2>
<p>You need to copy the encryption key from the source environment and add it to the destination environment.</p>
<p>To copy the encryption key:</p>
<ol>
<li>SSH to your project that was the source for the database dump, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh">SSH to environment</a>.</li>
<li>Open <code>app/etc/env.php</code> in a text editor.</li>
<li>
<p>Copy the value of <code>key</code> for <code>crypt</code>.</p>
<pre><code class="language-php">return array (
  'crypt' =&gt;
  array (
    'key' =&gt; '&lt;your encryption key&gt;',
   ),
);</code></pre>
</li>
</ol>
<p>To set the key value for the destination project:</p>
<p>1. Open your Project Web UI and locate your project. </p>
<p>2. Set the value of the <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=CRYPT_KEY#crypt_key">CRYPT_KEY</a> variable, as described in <a href="https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-var">Configure your project.</a> This will trigger the deployment process and <code>CRYPT_KEY</code> will be overridden in the <code>app/etc/env.php</code> file on every deployment.</p>
<p>Optionally, you can manually override the encryption key in the <code>app/etc/env.php</code> file:</p>
<ol>
<li>SSH to the destination environment.</li>
<li>Open <code>app/etc/env.php</code> in a text editor.</li>
<li>Paste the copied data as the <code>key</code> value for <code>crypt</code>.</li>
<li>Save the edited <code>env.php</code> .</li>
<li>Clean cache on the destination environment by running <code>bin/magento cache:clean</code> or in Magento Admin under System &gt; Tools &gt; Cache Management.</li>
</ol>