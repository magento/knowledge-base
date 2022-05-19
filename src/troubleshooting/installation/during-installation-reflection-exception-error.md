---
title: During installation, Reflection Exception error
labels: Error,Exception,Troubleshooting,Magento Commerce,Magento Commerce Cloud,Redis,Reflection,cache,how to,installation,Adobe Commerce
---

This article provides a solution for the Reflection Exception error during installation.

<h2 id="details">Details</h2>

During the installation, a message similar to the following displays:

```php
[ERROR] exception 'ReflectionException' with message 'Class Magento\Framework\StoreManagerInterface does not exist' in /<path>/lib/internal/Magento/Framework/Code/Reader/ClassReader.php
```

<h2 id="solution">Solution</h2>

Clear all directories and files under Adobe Commerce's `var` subdirectory and install the Adobe Commerce software again.

As the [Adobe Commerce file system owner](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html) or as a user with `root` privileges, enter the following commands:

```bash
$ cd <your Magento install directory>/var
```

```bash
$ rm -rf var/cache/* di/* generation/* page_cache/*
```

<h3 id="redis">Redis</h3>

If you use Redis and still get an error, clear the Redis cache as follows:

```bash
$ redis-cli FLUSHALL
```
