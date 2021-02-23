---
title: PWA Studio: Webpack hangs before beginning compilation 
link: https://support.magento.com/hc/en-us/articles/360039475011-PWA-Studio-Webpack-hangs-before-beginning-compilation-
labels: PWA,hangs,stalls,webpack,PWA studio,pwa-buildpack,javascript,how to
---

<p>This article talks about a suggested solution to when a javascript <a href="https://magento.github.io/pwa-studio/technologies/tools-libraries/#webpack">Webpack</a> hangs for a long time before beginning compilation in Magento Progressive Web App Studio (PWA Studio).</p>
<h3>AFFECTED PRODUCTS AND VERSIONS</h3>
<ul>
<li>Magento PWA Studio</li>
</ul>
<h2>Issue</h2>
<p><a href="https://github.com/magento/pwa-studio/tree/master/packages/pwa-buildpack">Check what the latest release of the pwa-buildpack is,</a> and the <code class="language-yaml">pwa-buildpack</code> version number will be next to the <code>package.json</code> filename listing. If you have an old version of the <code class="language-yaml">pwa-buildpack</code> project, the webpack may hang for a long time before beginning compilation.</p>
<p>Steps to reproduce:</p>
<p>Prerequisites: Set up a PWA Studio storefront, such as Venia, with a local Magento instance and run a <code class="language-yaml">build</code> or <code class="language-yaml">watch</code> command.</p>
<p>Expected result:</p>
<ul>
<li>If using the <code class="language-yaml">build</code> command, it generates the build artifacts for Venia normally.</li>
<li>If using the <code class="language-yaml">watch</code> command, it starts the Venia storefront normally.</li>
</ul>
<p>Actual result:</p>
<p>Your <code class="language-yaml">build</code> or <code class="language-yaml">watch</code> command will seem stalled and will not complete, nor will any errors be shown.</p>
<h2>Solutions</h2>
<p>Update your project using the following command:</p>
<pre><code class="language-yaml">yarn upgrade</code></pre>
<p>Make sure you have a current version of openssl on your system using the following command:</p>
<pre><code class="language-yaml">openssl version</code></pre>
<p>The version should be 1.0 or above (or LibreSSL 2, in the case of OSX High Sierra.).</p>
<p>You can install higher versions of OpenSSL with <a href="https://brew.sh/">Homebrew</a> on OSX, <a href="https://chocolatey.org/">Chocolatey</a> on Windows, or your Linux distribution’s package manager.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://webpack.js.org/concepts/">Javascript Webpack: Concepts</a></li>
<li><a href="https://magento.github.io/pwa-studio/venia-pwa-concept/setup/">Venia storefront setup</a></li>
<li><a href="https://magento.github.io/pwa-studio/pwa-buildpack/">PWA Buildpack</a></li>
<li><a href="https://magento.github.io/pwa-studio/pwa-buildpack/reference/buildpack-cli/">buildpack Command Line Interface</a></li>
<li><a href="https://magento.github.io/pwa-studio/technologies/tools-libraries/#webpack">Tools and libraries: buildpack</a></li>
</ul>