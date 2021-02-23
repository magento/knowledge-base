---
title: PHP settings errors
link: https://support.magento.com/hc/en-us/articles/360034599631-PHP-settings-errors
labels: error,PHP,settings,xdebug,memory,how to,large forms
---

<p>This article provides solutions for PHP settings errors.</p>
<h2>PHP memory limit error</h2>
<p>The readiness checks makes sure you have at least 1GB of memory set aside for PHP processes. This setting should be sufficient for most installations, including installing optional sample data. However, we recommend at least 2GB for debugging.</p>
<p>To increase your PHP memory limit:</p>
<ol>
<li>Log in to your Magento server.</li>
<li>
<p>Locate your <code>php.ini</code> file using the following command:</p>
<pre><code class="language-bash">$ php --ini</code></pre>
</li>
<li>
<p>As a user with <code>root</code> privileges, use a text editor to open the <code>php.ini</code> specified by <code>Loaded Configuration File</code>.</p>
</li>
<li>Locate <code>memory_limit</code>.</li>
<li>Change it to a value of <code>2GB</code> for normal use and debugging.</li>
<li>Save your changes to <code>php.ini</code> and exit the text editor.</li>
<li>
<p>Restart your web server.</p>
<p>Examples follow:</p>
<ul>
<li>CentOS: <code>service httpd restart</code>
</li>
<li>Ubuntu: <code>service apache2 restart</code>
</li>
<li>nginx (both CentOS and Ubuntu): <code>service nginx restart</code>
</li>
</ul>
</li>
<li>
<p>Try the installation again.</p>
</li>
</ol>
<h2>max-input-vars error due to large forms</h2>
<p>Configurations with a high number of storeviews, products, attributes, or options can generate forms that exceed the preset PHP limit. If the number of values sent surpasses the <code>max-input-vars</code> limit set within <code>php.ini</code> (default is 1000), the remaining data is not transferred and those database values do not get updated. When this occurs, a warning appears in the PHP log:</p>
<pre><code class="language-terminal">PHP message: PHP Warning: Unknown: Input variables exceeded 1000. To increase the limit change max_input_vars in php.ini.</code></pre>
<p>There is no 'proper' value for <code>max-input-vars</code>; it depends on the size and complexity of your configuration. Modify the value in the <code>php.ini</code> file as needed. See <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html">Required PHP settings</a>.</p>
<h2>xdebug maximum function nesting level error</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360034238512">During installation, xdebug maximum function nesting level error</a>.</p>
<h2>Errors display when you access a PHTML template</h2>
<p>Error text is typically:</p>
<pre><code class="language-terminal">Parse error: syntax error, unexpected 'data' (T_STRING)</code></pre>
<h3>Solution: Set <code>asp_tags = off</code> in <code>php.ini</code>
</h3>
<p>Multiple templates have syntax for support abstract level on templates (use different templates engines like Twig) wrapped in <code>&lt;% %&gt;</code> tags, like this <a href="https://github.com/magento/magento2/blob/2.0/app/code/Magento/Catalog/view/adminhtml/templates/product/edit/base_image.phtml">template</a> for displaying a product image:</p>
<pre><code class="language-php?start_inline=1">&lt;img
    class="product-image"
    src="&lt;%- data.url %&gt;"
    data-position="&lt;%- data.position %&gt;"
    alt="&lt;%- data.label %&gt;" /&gt;</code></pre>
<p>More information about <a href="http://php.net/manual/en/ini.core.php#ini.asp-tags">asp_tags</a>.</p>
<p>Edit <code>php.ini</code> and set <code>asp_tags = off</code>. For more information, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html">Required PHP settings</a>.</p>