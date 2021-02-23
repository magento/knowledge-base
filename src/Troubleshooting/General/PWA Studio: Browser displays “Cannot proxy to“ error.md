---
title: PWA Studio: Browser displays “Cannot proxy to“ error
link: https://support.magento.com/hc/en-us/articles/360036581232-PWA-Studio-Browser-displays-Cannot-proxy-to-error
labels: ENOTFOUND,proxy,NodeJS,browser,hostfile,PWA Studio,how to,hostname
---

<p>This topic discusses a solution when your web browser displays a "<em>Cannot proxy to</em>" and the console displays an <em><code class="language-clike">ENOTFOUND</code></em> error when using Magento Progressive Web App (PWA) Studio.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento PWA Studio</li>
</ul>
<h2>Issue</h2>
<p>Step to reproduce</p>
<ul>
<li>Load your Magento store in a browser.</li>
</ul>
<p>Expected result</p>
<ul>
<li>The Magento store loads normally in your browser.</li>
</ul>
<p>Actual result</p>
<ul>
<li>Your web browser displays the “<em>Cannot proxy to“</em> error and the console displays an <em><code class="language-clike">ENOTFOUND</code></em> error.</li>
</ul>
<h2>Cause</h2>
<p>NodeJS cannot resolve the hostname of your Magento store.</p>
<h2>Solution</h2>
<ol>
<li>Make sure your Magento store loads in more than one web browser.</li>
<li>If you are running a local DNS server or VPN, add an entry to your hostfile (located in <code>/etc/hosts</code>) and manually map this domain (<a href="https://linuxize.com/post/how-to-edit-your-hosts-file/">Generic instructions on hostfile editing</a>) so NodeJS can resolve it.</li>
</ol>
<h2>Related reading</h2>
<ul>
<li><a href="https://magento.github.io/pwa-studio/">Magento PWA Studio Documentation</a></li>
<li><a href="https://magento.github.io/pwa-studio/tutorials/hello-upward/simple-server/">Creating a simple server</a></li>
<li><a href="https://magento.github.io/pwa-studio/technologies/tools-libraries/">Tools and libraries</a></li>
</ul>