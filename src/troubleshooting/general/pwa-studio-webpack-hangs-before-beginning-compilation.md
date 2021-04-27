---
title: PWA Studio: Webpack hangs before beginning compilation 
labels: PWA,PWA studio,hangs,how to,javascript,pwa-buildpack,stalls,webpack
---

This article talks about a suggested solution to when a javascript [Webpack](https://magento.github.io/pwa-studio/technologies/tools-libraries/#webpack) hangs for a long time before beginning compilation in Magento Progressive Web App Studio (PWA Studio).

### AFFECTED PRODUCTS AND VERSIONS

* Magento PWA Studio

## Issue

[Check what the latest release of the pwa-buildpack is,](https://github.com/magento/pwa-studio/tree/master/packages/pwa-buildpack) and the <code class="language-yaml">pwa-buildpack</code> version number will be next to the `` package.json `` filename listing. If you have an old version of the <code class="language-yaml">pwa-buildpack</code> project, the webpack may hang for a long time before beginning compilation.

Steps to reproduce:

Prerequisites: Set up a PWA Studio storefront, such as Venia, with a local Magento instance and run a <code class="language-yaml">build</code> or <code class="language-yaml">watch</code> command.

Expected result:

* If using the <code class="language-yaml">build</code> command, it generates the build artifacts for Venia normally.
* If using the <code class="language-yaml">watch</code> command, it starts the Venia storefront normally.

Actual result:

Your <code class="language-yaml">build</code> or <code class="language-yaml">watch</code> command will seem stalled and will not complete, nor will any errors be shown.

## Solutions

Update your project using the following command:

<pre><code class="language-yaml">yarn upgrade</code></pre>

Make sure you have a current version of openssl on your system using the following command:

<pre><code class="language-yaml">openssl version</code></pre>

The version should be 1.0 or above (or LibreSSL 2, in the case of OSX High Sierra.).

You can install higher versions of OpenSSL with [Homebrew](https://brew.sh/) on OSX, [Chocolatey](https://chocolatey.org/) on Windows, or your Linux distribution’s package manager.

## Related reading

* [Javascript Webpack: Concepts](https://webpack.js.org/concepts/)
* [Venia storefront setup](https://magento.github.io/pwa-studio/venia-pwa-concept/setup/)
* [PWA Buildpack](https://magento.github.io/pwa-studio/pwa-buildpack/)
* [buildpack Command Line Interface](https://magento.github.io/pwa-studio/pwa-buildpack/reference/buildpack-cli/)
* [Tools and libraries: buildpack](https://magento.github.io/pwa-studio/technologies/tools-libraries/#webpack)