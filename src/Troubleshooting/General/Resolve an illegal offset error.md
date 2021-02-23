---
title: Resolve an illegal offset error
link: https://support.magento.com/hc/en-us/articles/360034597391-Resolve-an-illegal-offset-error
labels: Magento Commerce Cloud,Magento Commerce,error,PHP,illegal,offset,OPcache,how to,Apache
---

<p>This article provides a solution for when in Magento 2.1 or later, you receive a Resolve an illegal offset error when creating a new product in the Magento Admin.</p>
<p>In Magento 2.1 or later, when creating a new product in the Magento Admin, the following error might display:</p>
<pre><code class="language-text">Warning: Illegal string offset 'is_in_stock' in [...]/vendor/
magento/module-catalog-inventory/Ui/DataProvider/Product/Form/
Modifier/AdvancedInventory.php on line 87</code></pre>
<h2>Detail</h2>
<p>Magento 2.1 and later use PHP code comments in the <code>getDocComment</code> validation call in the <a href="https://github.com/magento/magento2/blob/2.3/lib/internal/Magento/Framework/Api/ExtensionAttributesFactory.php#L64-L73"><code>getExtensionAttributes</code></a> method in <code>Magento\Framework\Api\ExtensionAttributesFactory.php</code>.</p>
<p>If you enabled the PHP OPcache (which we recommend), this error displays because by default, the OPcache setting <a href="http://php.net/manual/en/opcache.configuration.php#ini.opcache.save_comments"><code>opcache.save_comments</code></a> is disabled.</p>
<h2>Workaround</h2>
<p>To solve the issue, locate your OPcache configuration settings and enable <code>opcache.save_comments</code> as follows:</p>
<h4>Step 1: Locate your OPcache configuration</h4>
<h4>To find OPcache configuration settings:</h4>
<p>PHP OPcache settings are typically located either in <code>php.ini</code> or <code>opcache.ini</code>. The location might depend on your operating system and PHP version. The OPcache configuration file might have an <code>[opcache]</code> section or settings like <code>opcache.enable</code>.</p>
<p>Use the following guidelines to find it:</p>
<ul>
<li>
<p>Apache web server:</p>
<p>For Ubuntu with Apache, OPcache settings are typically located in <code>php.ini</code>.</p>
<p>For CentOS with Apache or nginx, OPcache settings are typically located in <code>/etc/php.d/opcache.ini</code>.</p>
<p>If not, use the following command to locate it:</p>
<pre><code class="language-bash">$ sudo find / -name 'opcache.ini'</code></pre>
</li>
<li>
<p>nginx web server with PHP-FPM: <code>/etc/php5/fpm/php.ini</code>.</p>
</li>
</ul>
<p>If you have more than one <code>opcache.ini</code>, modify all of them.</p>
<p> </p>
<h4>Step 2: Enable <code>opcache.save_comments</code>
</h4>
<ol>
<li>Open your OPcache configuration file in a text editor.</li>
<li>Locate <code>opcache.save_comments</code> and uncomment it if necessary.</li>
<li>Make sure its value is set to <code>1</code>.</li>
<li>Save your changes and exit the text editor.</li>
<li>
<p>Restart your web server:</p>
<ul>
<li>Apache, Ubuntu: <code>service apache2 restart</code>
</li>
<li>Apache, CentOS: <code>service httpd restart</code>
</li>
<li>nginx, Ubuntu and CentOS: <code>service nginx restart</code>
</li>
</ul>
</li>
<li>
<p>Regenerate DI configuration and all missing classes that can be auto-generated:</p>
<pre><code class="language-bash">$ bin/magento setup:di:compile`</code></pre>
</li>
</ol>