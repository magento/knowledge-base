---
title: Out of memory error during install or upgrade
labels: 2.3.x,Magento Commerce,PHP,how to,out of memory,troubleshooting,web setup wizard,Adobe Commerce,on-premises,Magento Open Source
---

This article talks about solutions for the out of memory error during installing/upgrading Adobe Commerce on-premises and Magento Open Source on-premises products.

## Affected products and versions

* Adobe Commerce on-premises 2.3.x
* Magento Open Source on-premises 2.3.x

## Issue

When installing or updating the Adobe Commerce or Magento Open Source application or components like extensions, themes, or language packages, using the Web Setup Wizard, an error similar to the following displays:

```bash
Could not complete update {"components":[
{"name":"magento/module-bundle-sample-data","version":"100.1.0"}
]} successfully: proc_open(): fork failed - Cannot allocate memory
```

The error

```bash
proc_open(): fork failed - Cannot allocate memory
```

can also display on the command line.

<h2 id="solution">Solution</h2>

We recommend you [allocate 2GB of memory to PHP](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html) in our developer documentation to make sure your installation or upgrade succeeds.

If you've already done that, create a swap file on your machine. A Linux machine uses *swap space* if it needs more memory resources and the RAM is full. The swap space is used for inactive pages in memory.

The following are suggestions only; other options might be available. Consult a network administrator or another knowledgeable resource before you continue. You must run the commands to create a swap file as a user with `root` privileges.

<h3 id="swap-file-on-ubuntu">Swap file on Ubuntu</h3>

Use the `fallocate` command as discussed in these references:

* [How To Add Swap on Ubuntu 14.04 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-ubuntu-14-04)
* [How To Add Swap Space on Ubuntu 16.04 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-space-on-ubuntu-16-04)
* [SwapFaq (help.ubuntu.com)](https://help.ubuntu.com/community/SwapFaq)

<h3 id="swap-file-on-centos">Swap file on CentOS</h3>

Use the `mkswap` command as discussed in these references:

* [How To Add Swap on CentOS 6 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-6)
* [How To Add Swap on CentOS 7 (Digitalocean)](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-7)
* [Swap Space (RedHat customer portal)](https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/6/html/Storage_Administration_Guide/ch-swapspace.html)
