---
title: Out of memory error during installorupgrade
link: https://support.magento.com/hc/en-us/articles/360032980432-Out-of-memory-error-during-install-upgrade
labels: Magento Commerce,troubleshooting,PHP,out of memory,web setup wizard,2.3.x,how to
---

<p>This article talks about solutions for the out of memory error during installing/upgrading Magento on-premis products. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.3.x</li>
<li>Magento Open Source 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>When installing or updating the Magento application or components like extensions, themes, or language packages, using the Web Setup Wizard, an error similar to the following displays:</p>
<pre><code class="language-bash">Could not complete update {"components":[
{"name":"magento/module-bundle-sample-data","version":"100.1.0"}
]} successfully: proc_open(): fork failed - Cannot allocate memory</code></pre>
<p>The error <code class="language-bash">proc_open(): fork failed - Cannot allocate memory</code> can also display on the command line.</p>
<h2>Solution</h2>
<p>We recommend you <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html">allocate 2GB of memory to PHP</a> to make sure your installation or upgrade succeeds.</p>
<p>If you've already done that, create a swap file on your machine. A Linux machine uses <em>swap space</em> if it needs more memory resources and the RAM is full. The swap space is used for inactive pages in memory.</p>
<p>The following are suggestions only; other options might be available. Consult a network administrator or another knowledgeable resource before you continue. You must run the commands to create a swap file as a user with <code>root</code> privileges.</p>
<h4>Swap file on Ubuntu</h4>
<p>Use the <code>fallocate</code> command as discussed in these references:</p>
<ul>
<li><a href="https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-ubuntu-14-04">How To Add Swap on Ubuntu 14.04 (Digitalocean)</a></li>
<li><a href="https://www.digitalocean.com/community/tutorials/how-to-add-swap-space-on-ubuntu-16-04">How To Add Swap Space on Ubuntu 16.04 (Digitalocean)</a></li>
<li><a href="https://help.ubuntu.com/community/SwapFaq">SwapFaq (help.ubuntu.com)</a></li>
</ul>
<h4>Swap file on CentOS</h4>
<p>Use the <code>mkswap</code> command as discussed in these references:</p>
<ul>
<li><a href="https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-6">How To Add Swap on CentOS 6 (Digitalocean)</a></li>
<li><a href="https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-7">How To Add Swap on CentOS 7 (Digitalocean)</a></li>
<li><a href="https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/6/html/Storage_Administration_Guide/ch-swapspace.html">Swap Space (RedHat customer portal)</a></li>
</ul>