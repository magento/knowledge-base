---
title: PHP version error or 404 error when accessing Magento in browser
link: https://support.magento.com/hc/en-us/articles/360033117152-PHP-version-error-or-404-error-when-accessing-Magento-in-browser
labels: Magento Commerce,troubleshooting,2.3.5-p1,2.3.1,2.3.4-p2,2.3.4,2.3.0,2.3.3,2.3.2,2.3.6,2.3.5-p2,2.3.3-p1,2.3.2-p2
---

<p>This article provides solutions for the issues where you cannot access your Magento instance in a web browser and get 404 error or "unsupported PHP version" error.</p>
<h3>Affected products and versions:</h3>
<ul>
<li>Magento Commerce 2.3.x</li>
</ul>
<h2>Issue: not supported PHP version</h2>
<p>The following message displays when you try to access Magento storefront or Admin:</p>
<p><code class="bash">Magento supports PHP 7.1.3 or later. Please read Magento System Requirements.</code></p>
<h3>Solution</h3>
<p>Try the following:</p>
<ul>
<li>Upgrade PHP to version 7.3. For more information see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html#php">Magento 2.3 technology stack requirements</a> in Magento Developer Documentation. </li>
<li>Restart Apache, since it might not be using the same PHP version as is on the file system. 
<p>To restart Apache, use the following commands:</p>
<ul>
<li>Ubuntu: <code>service apache2 restart</code>
</li>
<li>CentOS: <code>service httpd restart</code>
</li>
</ul>
</li>
</ul>
<h2>Issue: error 404</h2>
<p>A 404 (Not Found) error displays when you try to access Magento storefront or Admin.</p>
<h3>Solution</h3>
<p>Try the following:</p>
<ul>
<li>Make sure <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/apache.html">Apache server rewrites</a> are enabled. If Apache server rewrites are set incorrectly, static files aren't served from the correct location.</li>
<li>There might be an issue with the base URL you entered during the installation. You specify the base URL as the value of <code>--base-url=</code> when installing Magento from the command line or as the value of the Your Store Address field on the Web Configuration page of the web installer.
<p>The base URL <em>must</em> start with the scheme (such as <code>http://</code>) and end with a trailing slash (/). Run the installer again with a valid value and try accessing Magento afterward.</p>
</li>
</ul>