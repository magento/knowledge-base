---
title: Configure NPM to be able to use PWA Studio
link: https://support.magento.com/hc/en-us/articles/360022507012-Configure-NPM-to-be-able-to-use-PWA-Studio
labels: Magento Commerce Cloud,configuration,PWA,npm,2.3.x,how to
---

<p><a href="https://magento.github.io/pwa-studio/">Magento Progressive Web Apps (PWA) Studio</a> is a new project available for Magento Commerce Cloud 2.3.x or later. To be able to use and install PWA studio, you need to set the NPM package manager version to 5.x or later to get support for Node.js 8.x. This is done in the <code>hooks:build</code> section of the <code>.magento.app.yaml</code> configuration file. </p>
<h2>Environment and technologies</h2>
<ul>
<li>Magento Commerce Cloud 2.3.X</li>
<li>Magento PWA Studio</li>
</ul>
<h2>Set NPM version: steps</h2>
<p>To set the needed NPM version, specify it in the <code>.magento.app.yaml</code> configuration file. Follow these steps:</p>
<ol>
<li>On your local development environment, locate the <code>.magento.app.yaml</code> configuration file.</li>
<li>Open the file for editing using your plain text editor or IDE.</li>
<li>Set the required version in the <code>hooks:build</code> section.<br/> In the following example, the configuration is set to install NPM v9.5.0, the highest available at the moment (February 4, 2019):<br/>
<pre><code class="language-yaml">hooks:
    build: |
        unset NPM_CONFIG_PREFIX
        curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.8/install.sh | bash
        export NVM_DIR="$HOME/.nvm"
        [ -s "$NVM_DIR/nvm.sh" ] &amp;&amp; \. "$NVM_DIR/nvm.sh"
        nvm install 9.5.0</code></pre>
</li>
<li>Save changes in the file.</li>
<li>Git push the edited file to your Integration environment.</li>
</ol>
<p>The changes come into effect after you Git push the updated YAML file to the environment.</p>
<h2>Related documentation</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_magento-app.html#hooks">Application configuration: hooks</a></li>
</ul>