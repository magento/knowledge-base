This article talks about a suggested solution to when a javascript&nbsp;<a href="https://magento.github.io/pwa-studio/technologies/tools-libraries/#webpack" rel="noopener" target="_blank">Webpack</a> hangs for a long time before beginning compilation in Magento Progressive Web App Studio (PWA Studio).

### AFFECTED PRODUCTS AND VERSIONS

*   Magento PWA Studio

## Issue

<a href="https://github.com/magento/pwa-studio/tree/master/packages/pwa-buildpack" rel="noopener" target="_blank">Check what the latest release of the pwa-buildpack is,</a>&nbsp;and the <code class="language-yaml">pwa-buildpack</code> version number will be next to the `` package.json `` filename listing. If you have an old version of the <code class="language-yaml">pwa-buildpack</code> project, the webpack may hang for a long time before beginning compilation.

<span class="wysiwyg-underline">Steps to reproduce:</span>

Prerequisites: Set up a PWA Studio storefront, such as Venia, with a local Magento instance and run a <code class="language-yaml">build</code> or <code class="language-yaml">watch</code> command.

<span class="wysiwyg-underline">Expected result:</span>

*   If using the <code class="language-yaml">build</code> command, it generates the build artifacts for Venia normally.
*   If using the <code class="language-yaml">watch</code> command, it starts the Venia storefront normally.

<span class="wysiwyg-underline">Actual result:</span>

Your <code class="language-yaml">build</code> or <code class="language-yaml">watch</code> command will seem stalled and will not complete, nor will any errors be shown.

## Solutions

Update your project using the following command:

<pre><code class="language-yaml">yarn upgrade</code></pre>

Make sure you have a current version of openssl on your system using the following command:

<pre><code class="language-yaml">openssl version</code></pre>

The version should be 1.0 or above (or LibreSSL 2, in the case of OSX High Sierra.).

You can install higher versions of OpenSSL with <a href="https://brew.sh/" rel="noopener" target="_blank">Homebrew</a> on OSX, <a href="https://chocolatey.org/" rel="noopener" target="_blank">Chocolatey</a> on Windows, or your Linux distribution’s package manager.

## Related reading

*   <a href="https://webpack.js.org/concepts/" rel="noopener" target="_blank">Javascript Webpack: Concepts</a>
*   <a href="https://magento.github.io/pwa-studio/venia-pwa-concept/setup/" rel="noopener" target="_blank">Venia storefront setup</a>
*   <a href="https://magento.github.io/pwa-studio/pwa-buildpack/" rel="noopener" target="_blank">PWA Buildpack</a>
*   <a href="https://magento.github.io/pwa-studio/pwa-buildpack/reference/buildpack-cli/" rel="noopener" target="_blank">buildpack Command Line Interface</a>
*   <a href="https://magento.github.io/pwa-studio/technologies/tools-libraries/#webpack" rel="noopener" target="_blank">Tools and libraries: buildpack</a>