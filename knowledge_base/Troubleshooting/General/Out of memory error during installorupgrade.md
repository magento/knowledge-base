This article talks about solutions for the out of memory error during installing/upgrading Magento on-premis products.&nbsp;

### Affected products and versions

*   Magento Commerce 2.3.x
*   Magento Open Source 2.3.x

## Issue

When installing or updating the Magento application or components like extensions, themes, or language packages, using the Web Setup Wizard, an error similar to the following displays:

<pre><code class="language-bash">Could not complete update {"components":[
{"name":"magento/module-bundle-sample-data","version":"100.1.0"}
]} successfully: proc_open(): fork failed - Cannot allocate memory</code></pre>

The error <code class="language-bash">proc\_open(): fork failed - Cannot allocate memory</code> can also display on the command line.

<h2 id="solution">Solution</h2>

We recommend you <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html" target="_self">allocate 2GB of memory to PHP</a> to make sure your installation or upgrade succeeds.

If you've already done that, create a swap file on your machine. A Linux machine uses _swap space_ if it needs more memory resources and the RAM is full. The swap space is used for inactive pages in memory.

The following are suggestions only; other options might be available. Consult a network administrator or another knowledgeable resource before you continue. You must run the commands to create a swap file as a user with `` root `` privileges.

<h4 id="swap-file-on-ubuntu">Swap file on Ubuntu</h4>

Use the `` fallocate `` command as discussed in these references:

*   [How To Add Swap on Ubuntu 14.04 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-ubuntu-14-04)
*   [How To Add Swap Space on Ubuntu 16.04 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-space-on-ubuntu-16-04)
*   [SwapFaq (help.ubuntu.com)](https://help.ubuntu.com/community/SwapFaq)

<h4 id="swap-file-on-centos">Swap file on CentOS</h4>

Use the `` mkswap `` command as discussed in these references:

*   [How To Add Swap on CentOS 6 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-6)
*   [How To Add Swap on CentOS 7 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-7)
*   [Swap Space (RedHat customer portal)](https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/6/html/Storage_Administration_Guide/ch-swapspace.html)