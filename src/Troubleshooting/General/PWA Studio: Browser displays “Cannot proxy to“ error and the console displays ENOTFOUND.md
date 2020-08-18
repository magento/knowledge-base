This topic discusses a solution when your web browser displays a "_Cannot proxy to_" and the console displays an _<code class="language-clike">ENOTFOUND</code>_ error when using Magento Progressive Web App (PWA) Studio.

### Affected products and versions

*   Magento PWA Studio

## Issue

<span class="wysiwyg-underline">Step to reproduce</span>

*   Load your Magento store in a browser.

<span class="wysiwyg-underline">Expected result</span>

*   The Magento store loads normally in your browser.

<span class="wysiwyg-underline">Actual result</span>

*   Your web browser displays the “_Cannot proxy to“_ error and the console displays an _<code class="language-clike">ENOTFOUND</code>_ error.

## Cause

NodeJS cannot resolve the hostname of your Magento store.

## Solution

1.   Make sure your Magento store loads in more than one web browser.
2.   If you are running a local DNS server or VPN, add an entry to your hostfile (located in `` /etc/hosts ``) and manually map this domain (<a href="https://linuxize.com/post/how-to-edit-your-hosts-file/" target="_self">Generic instructions on hostfile editing</a>) so NodeJS can resolve it.

## Related reading

*   <a href="https://magento.github.io/pwa-studio/" target="_self">Magento PWA Studio Documentation</a>
*   [Creating a simple server](https://magento.github.io/pwa-studio/tutorials/hello-upward/simple-server/)
*   <a href="https://magento.github.io/pwa-studio/technologies/tools-libraries/" target="_self">Tools and libraries</a>