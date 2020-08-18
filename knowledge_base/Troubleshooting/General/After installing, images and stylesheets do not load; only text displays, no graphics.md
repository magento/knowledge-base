<p id="details">This article describes the possible reasons and solutions for the issue where stylesheets and images do not load after installing Magento.&nbsp;</p>

### Affected products and versions

*   Magento Commerce 2.2.x, 2.3.x
*   Magento Open Source 2.2.x, 2.3.x

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   Install Magento.
2.   Navigate to the storefront or Admin.

<span class="wysiwyg-underline">Expected result</span>

Styles are applied, no UI element looks like missing styles.

<span class="wysiwyg-underline">Actual result&nbsp;</span>

Styles are not applied correctly, graphics is missing.&nbsp;&nbsp;

## Cause

The path to images and stylesheets is not correct, either because of an incorrect base URL or because server rewrites (CentOS, Ubuntu) are not set up properly.

To confirm this is the case, use a web browser inspector to check the paths to static assets and verify those assets are located on the Magento file system.

Magento static assets are located under `` &lt;magento_root&gt;/pub/static/ ``, within the `` frontend `` and `` adminhtml `` directories.

## Solution

The following are possible solutions depending on the software you use and the cause of the problem:

*   
    
    If you are using the Apache web server, verify your <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/apache.html#apache-help-rewrite" target="_self">server rewrites</a> setting and your Magento server's base URL and try again. If you set up the Apache `` AllowOverride `` directive incorrectly, the static files are not served from the correct location.
    
    
*   
    
    If you are using the nginx web server, be sure to <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/nginx.html#configure-nginx-ubuntu" target="_self">configure a virtual host file</a>. The nginx virtual host file must meet the following criteria:
    
    
    
    *   
        
        The `` include `` directive must point to the sample nginx configuration file in your Magento installation directory. For example:
        
        
        
        <pre><code class="language-bash">include /var/www/html/magento2/nginx.conf.sample;</code></pre>
        
        
    *   
        
        The `` server_name `` directive must match the base URL you specified when installing Magento. For example:
        
        
        
        <pre><code class="language-bash">server_name 192.186.33.10;</code></pre>
        
        
    
    
    
*   
    
    If the Magento application is in <a href="https://devdocs.magento.com/guides/v2.3/config-guide/bootstrap/magento-modes.html#production-mode" target="_self">production mode</a>, try deploying static view files using the command <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html" target="_self">magento setup:static-content:deploy</a>.
    
    