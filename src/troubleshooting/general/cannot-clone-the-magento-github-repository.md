---
title: Cannot clone the Magento GitHub repository
labels: Magento Commerce,Magento Commerce Cloud,SSH key,clone,github,how to,repository
---

This article provides a fix for when you can't clone the Magento GitHub repository.

### Detail

Error is similar to the following:

<pre><code class="language-terminal">Cloning into 'magento2'...
Permission denied (publickey).
fatal: The remote end hung up unexpectedly</code></pre>

### Solution

Upload your SSH key to GitHub as discussed in [the GitHub help page](https://help.github.com/articles/generating-ssh-keys).