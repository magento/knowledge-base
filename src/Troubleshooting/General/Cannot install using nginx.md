---
title: Cannot install using nginx
link: https://support.magento.com/hc/en-us/articles/360033782051-Cannot-install-using-nginx
labels: Magento Commerce Cloud,Magento Commerce,install,nginx,fail,how to
---

<p>This article provides a fix for a failed Magneto installation, when using the nginx web server.</p>
<h3>Issue</h3>
<p>If you use the nginx web server and you attempt to install the Magento software, the installation sometimes fails.</p>
<h3>Solution</h3>
<p>You can confirm the issue by the following error in the <code>var/report</code> directory:</p>
<pre><code class="language-php">NOTE: You cannot install Magento using the Setup Wizard because the Magento setup directory cannot be accessed.
You can install Magento using either the command line or you must restore access to the following directory: /var/www/html/setup
If you are using the sample nginx configuration, please go to http://ce.mtf03.bcn.magento.com/setup/";i:1;s:641:"#0 /var/www/html/lib/internal/Magento/Framework/App/Http.php(213): Magento\Framework\App\Http-&gt;redirectToSetup(Object(Magento\Framework\App\Bootstrap), Object(Exception))</code></pre>
<h3>Workaround</h3>
<p>Append <code>/setup</code> to the URL by which you access the Setup Wizard or install the Magento software using the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html">command line</a>.</p>