---
title: Update Authorize.Net Direct Post from MD5 to SHA-512
link: https://support.magento.com/hc/en-us/articles/360024368392-Update-Authorize-Net-Direct-Post-from-MD5-to-SHA-512
labels: Magento Commerce Cloud,Magento Commerce,patch,Authorize.net,troubleshooting,Direct Post,SHA,MDA,deprecated,known issues,2.2.x,2.1.x
---

<p>UPDATED on April 12th, 2019</p>
<p>Magento's implementation of the Authorize.Net Direct Post payment method uses MD5 based hash. Authorize.net will <a href="https://support.authorize.net/s/article/MD5-Hash-End-of-Life-Signature-Key-Replacement">stop supporting MD5 based hash</a> usage on <a href="http://app.payment.authorize.net/e/es.aspx?s=986383348&amp;e=1691349&amp;elqTrackId=b307147cf4ef4925bd108180234867d4&amp;elq=22c763e5e2354d988ebfea2681020c6b&amp;elqaid=903&amp;elqat=1">June 28, 2019</a>. This will result in Magento merchants not being able to process payments using Authorize.Net Direct Post. To avoid this, merchants need to apply the patch provided by Magento and replace the existing MD5 hash with a Signature Key (SHA-512) in the Magento Admin configuration settings.</p>
<p class="info">Magento released a new Authorize.Net extension to replace Direct Post in upcoming 2019 releases, starting with v2.3.1 for Commerce and Open Source. </p>
<p class="info">The core Magento Authorize.Net payment integration is deprecated since 2.3.4 and will be completely removed in 2.4.0. Use the <a href="https://marketplace.magento.com/authorizenet-magento-module-authorizenet.html">official extension</a> from marketplace instead.</p>
<h3>Affected versions</h3>
<ul>
<li>Magento Commerce 1.X.X</li>
<li>Magento Open Source 1.X.X</li>
<li>Magento Commerce 2.X.X</li>
<li>Magento Open Source 2.X.X</li>
<li>Magento Commerce Cloud 2.X.X</li>
<li>Authorize.Net Direct Post</li>
</ul>
<h2>Issue</h2>
<p>Magento implements the Authorize.Net Direct Post payment method, using Authorize.Net's AIM (Advanced Integration Method) and DPM (Direct Post method) APIs, which use MD5 based hash.</p>
<p><a href="https://support.authorize.net/s/article/MD5-Hash-End-of-Life-Signature-Key-Replacement">Authorize.net will stop supporting MD5 based hash usage on March 14, 2019</a>. Starting from this date, Magento Open Source, Magento Commerce and Magento Cloud merchants will not be able to process payments using Authorize.Net Direct Post payment method. To be able to continue successfully process payments using these methods, merchants need to apply the patch provided by Magento and replace the existing MD5 hash with a Signature Key in the Magento Admin configuration settings.</p>
<h2>Solution</h2>
<p>Further are described the three general steps you need to take be able to continue using Authorize.Net Direct Post payment method.</p>
<p>Alternatively, you can upgrade to version 2.2.8 or 2.3.1 and get all updates and a <a href="https://docs.magento.com/m2/ce/user_guide/payment/authorize-net.html">new Authorize.net payment method option</a>.</p>
<h3>1. Download the patch</h3>
<h4>Magento Cloud and Magento Commerce</h4>
<p>Patches are attached to this article. To download a patch, scroll down to the end of the article and click the file name, or click one the following links:</p>
<ul>
<ul>
<li>For versions 2.2.0-2.2.7 and 2.3.0 - <a href="https://support.magento.com/hc/en-us/article_attachments/360026121671/Auth.net.md5-2019-02-28-05-04-05.composer-2019-03-04-07-33-26.patch">Download Auth.net.md5-2019-02-28-05-04-05.composer-2019-03-04-07-33-26.patch</a>
</li>
<li>For versions 2.0.0-2.0.18 and 2.1.0-2.1.16 - <a href="https://support.magento.com/hc/en-us/article_attachments/360026127972/MDVA-17212_EE_2.1.0_v1.composer-2019-03-05-12-05-22.patch">Download MDVA-17212_EE_2.1.0_v1.composer-2019-03-05-12-05-22.patch<br/></a>
</li>
</ul>
</ul>
<h4>Magento Commerce</h4>
<ul>
<li>For versions 1.10.1.0-1.14.4.1 - <a href="https://support.magento.com/hc/en-us/article_attachments/360026121651/PATCH_SUPEE-11085_EE_1.14.4.0_v1-2019-02-28-04-59-38.sh">Download PATCH_SUPEE-11085_EE_1.14.4.0_v1-2019-02-28-04-59-38.sh</a>
</li>
</ul>
<h4>Magento Open Source</h4>
<ol>
<li>Click a link to download: <a href="https://magento.com/tech-resources/download#download2280">M1 patch</a> or <a href="https://magento.com/tech-resources/download#download2279">M2 patch</a>.</li>
<li>For Select your format, select a format best matching your needs. For M1, there is just one option. For M2, choose between Git-based or Composer-based.</li>
</ol>
<h3>2. Apply the patch</h3>
<p>You may require developer assistance to apply the update. To update, you can download and install packages for your Magento edition and version. Download patches also available for those who installed with Composer.</p>
<h4>Magento Cloud</h4>
<p>For Magento Commerce Cloud, apply the M2 patch and deploy. For details, see <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-patch.html">Apply custom patches</a>.</p>
<h4>Magento 2.X Commerce</h4>
<p>For Magento Commerce 2.X and Open Source 2.X, follow these steps to install the Composer-based patch:</p>
<ol>
<li>Upload the patch to your Magento root directory.</li>
<li>Run the following SSH command:
<pre><code class="language-git">patch -p1 &lt; %patch_name%</code></pre>
(If the above command does not work, try using <code>-p2</code> instead of <code>-p1</code>)</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h4>Magento 2.X Open Source</h4>
<p>For Magento Open Source 2.X, follow these steps to install the Composer-based patch:</p>
<ol>
<li>Upload the patch to your Magento root directory.</li>
<li>Run the following SSH command:
<pre><code class="language-git">patch -p0 &lt; %patch_name%</code></pre>
</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h4>Magento 1.X Commerce and Open Source</h4>
<p>For Magento Commerce 1.X and Open Source 1.X, follow these steps to install the patch:</p>
<ol>
<li>Upload the patch to your Magento root directory.</li>
<li>Run the following SSH command:
<pre><code class="language-bash">sh %patch_name%.sh</code></pre>
</li>
<li>For the changes to be reflected, refresh the cache in the Admin under System &gt; Cache Management.</li>
</ol>
<h3>3. Get a new Signature Key</h3>
<p>You need to get a new Signature Key and add it to your Magento Admin configuration. For more information, see <a href="https://support.authorize.net/s/article/What-is-a-Signature-Key">What is a Signature Key?</a></p>
<ol>
<li>Log into the Merchant Interface at <a href="https://account.authorize.net/">https://account.authorize.net</a>.</li>
<li>Click Account from the main toolbar.</li>
<li>Click Settings in the main left-side menu.</li>
<li>Click API Credentials &amp; Keys.</li>
<li>Select New Signature Key. Review the options available.</li>
<li>Click Submit to continue.</li>
<li>Request and enter PIN for verification.</li>
<li>Your new Signature Key is displayed. Copy this key to add to your Magento Admin configuration.</li>
</ol>
<h3>4. Update Magento Admin configuration</h3>
<p>Take the following steps to update the Magento Admin configuration:</p>
<ol>
<li>Log into the Magento Admin.</li>
<li>On the Admin sidebar, click Stores. Then under Settings, click Configuration.</li>
<li>In the panel, click Sales then Payment Methods.</li>
<li>Expand the Authorize.net Direct Post section.</li>
<li>In the Signature Key enter the SHA-512 Signature Key.</li>
<li>Click Save Config.</li>
</ol>
<p><img alt="auth-net-signature-key-m2.png" src="https://support.magento.com/hc/article_attachments/360022986671/auth-net-signature-key-m2.png"/></p>
<p><em>Magento 2 Authorize.Net Direct Post configuration screen</em></p>
<p><em><img alt="auth-net-signature-key-m1.png" src="https://support.magento.com/hc/article_attachments/360022986751/auth-net-signature-key-m1.png"/></em></p>
<p><em>Magento 1 Authorize.Net Direct Post configuration screen</em></p>
<p>The process is successful if the Signature Key updates and payment processing continues. If you have issues, verify the Signature Key with Authorize.Net.</p>
<h2>More information </h2>
<ul>
<li>
<a href="https://magento.com/technical-resources">Tech Resources</a> for Magento Open Source and Commerce documentation
<ul>
<li>Open Source <a href="https://docs.magento.com/m2/ce/user_guide/payment/authorize-net-direct-post.html">2.3</a>, <a href="https://docs.magento.com/m2/2.2/ce/user_guide/payment/authorize-net-direct-post.html">2.2</a>, <a href="https://docs.magento.com/m2/2.1/ce/user_guide/payment/authorize-net-direct-post.html">2.1</a>
</li>
<li>Commerce and Commerce Cloud <a href="https://docs.magento.com/m2/ee/user_guide/payment/authorize-net-direct-post.html">2.3</a>, <a href="https://docs.magento.com/m2/2.2/ee/user_guide/payment/authorize-net-direct-post.html">2.2</a>, <a href="https://docs.magento.com/m2/2.1/ee/user_guide/payment/authorize-net-direct-post.html">2.1</a>
</li>
<li>Magento 1 <a href="https://docs.magento.com/m1/ce/user_guide/payment/authorize-net-direct-post.html">Open Source</a> and <a href="https://docs.magento.com/m1/ee/user_guide/payment/authorize-net-direct-post.html">Commerce</a>
</li>
</ul>
</li>
<li>Authorize.Net announcement: <a href="https://support.authorize.net/s/article/MD5-Hash-End-of-Life-Signature-Key-Replacement">MD5 Hash End of Life &amp; Signature Key Replacement</a>
</li>
</ul>