This article describes how to fix the issue where you get the&nbsp;_"Vendor autoload is not found. Please run 'composer install' under application root directory."_ error message, while updating the composer using the `` composer update `` command.

### Affected products and versions

*   Magento Open Source 2.X.X

## <span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">Issue</span>

<span class="wysiwyg-underline">Step to reproduce</span>

*   Update composer using the `` composer update `` command.

<span class="wysiwyg-underline">Expected result</span>

Everything works correctly, the composer is updated with the necessary dependency files.

<span class="wysiwyg-underline">Actual result</span>

Failure with the error message&nbsp;saying:  
 _Composer\\Downloader\\TransportException\] The "https://\[insert bad composer repository address here\]/packages.json" file could not be downloaded: php\_network\_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known failed to open stream: php\_network\_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known_

## Cause

The cause of the problem is you are not using the only correct composer repository link of <a href="https://repo.magento.com/" target="_self">https://repo.magento.com/</a>. You must use <a href="https://repo.magento.com/" target="_self">https://repo.magento.com/</a> because it is the only correct composer repository server address. Using any other composer repository server address will lead to this error.

There are two main reasons why this could happen:&nbsp;

*   You are using an old Magento repository address.
*   You are using an old repository address hosted on some non-Magento server elsewhere on the Internet, because you are using offsite, and possibly outdated, instructions that are not the Magento installation instructions in DevDocs: <a href="https://devdocs.magento.com/guides/v2.3/install-gde/composer.html" target="_self">Install Magento using Composer</a>.

## Solution

The common solution for both reasons would be to use the only correct and current composer repository, <a href="https://repo.magento.com/" target="_self">https://repo.magento.com/</a>.

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/dev_reinstall.html" target="_self">Reinstall the Magento software</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/sample-data-before-composer.html" target="_self">Install using Composer</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/intro/intro-composer.html" target="_self">Introduction to Composer</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/trouble/tshoot_composer-install.html" target="_self">Cannot run 'composer install'</a>