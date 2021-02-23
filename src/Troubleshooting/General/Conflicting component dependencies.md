---
title: Conflicting component dependencies 
link: https://support.magento.com/hc/en-us/articles/360033204651-Conflicting-component-dependencies-
labels: Magento Commerce Cloud,troubleshooting,web setup wizard,2.3.x,conflicting component dependencies,2.2.x
---

<p>This article provides a solution for conflicting component dependencies. When trying to setup or update Magento Commerce using the Web Setup Wizard, you see the <em>"We found conflicting component dependencies"</em> Composer error message. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce v.2.2.x, v.2.3.x</li>
<li>Magento Commerce Cloud v.2.2.x, v.2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>A conflicting component dependencies error message similar to the following (actual package names and versions will vary): </p>
<pre><code class="language-terminal">We found conflicting component dependencies.
You are trying to update package(s) magento/module-sample-data to 1.0.0-beta
We've detected conflicts with the following packages:
- magento/sample-data version 0.74.0-beta15. Please try to update it to one of the following package versions: 0.74.0-beta16, 0.74.0-beta14, 0.74.0-beta13, 0.74.0-beta12, 0.74.0-beta11, 0.74.0-beta10, 0.74.0-beta9, 0.74.0-beta8, 0.74.0-beta7</code></pre>
<h2>Cause</h2>
<p>This message is displayed if Composer cannot determine which components to install or update.</p>
<h2>Solution</h2>
<p>Two main scenarios can lead to conflicting component dependencies. Click on your scenario to get troubleshooting steps.</p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360044010932#upgrading_magento">Upgrading Magento</a></li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360044010932#incompatibility_third_party_modules">Incompatibility with third-party modules:</a>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360044010932#magento_commerce_magento_commerce_cloud">Magento Commerce and Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360044010932#opensource">Magento Open Source</a></li>
</ul>
</li>
</ul>
<h2>Upgrading Magento</h2>
<p>If you are upgrading Magento Commerce Cloud, try the following to resolve conflicting component dependencies:<br/> • Check the keys being used to upgrade. Are the keys being generated from the correct email account?<br/> • Check permissions and make sure that they match the Magento upgrade requirements. Review DevDocs' <a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/prereq/prereq_compman-checklist.html#perms">Magento Upgrade Overview &gt; Update and Upgrade Checklist &gt; File System Permissions</a>.</p>
<h2>Incompatibility with third-party modules:</h2>
<p>Conflicting component dependencies can also be caused by third-party modules that depend on earlier Magento components than the ones you have installed. Try the following:</p>
<ol>
<li>In the preceding <a href="https://support.magento.com/hc/en-us/articles/360044010932#example">example</a>, the installed package magento/sample-data version 0.74.0-beta15 cannot be upgraded to 1.0.0-beta. However, 0.74.0-beta15 can be upgraded to 0.74.0-beta16 (or others). Edit <code>composer.json</code> to make any of these changes.<em> </em>Typically, the versions your project is requesting will be defined in the <code>require</code> or <code>require-dev</code>property of the object in that JSON file. Depending on the options of package versions provided, they might specify a specific version or a constraint. For general guidance on how to use composer, if you are on Magento Commerce Cloud, you can refer to DevDocs <a href="https://devdocs.magento.com/cloud/reference/cloud-composer.html#files">Magento Commerce Cloud &gt; Technologies and Requirements &gt; Composer</a>. If you are on Magento Commerce, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.4/install-gde/composer.html">Magento &gt; Installation Guide &gt; Install Magento Using the Composer</a>.</li>
<li>Now try the readiness check. Review DevDocs' <a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/module-man/compman-readiness.html">Magento Upgrade Overview &gt; Run the Module Manager &gt; Step 1 Readiness Check</a>.</li>
<li>If the readiness check fails with another Component dependency check failure message, click on the following links depending on whether you are using <a href="https://support.magento.com/hc/en-us/articles/360044010932#magento_commerce_magento_commerce_cloud">Magento Commerce and Magento Commerce Cloud</a> or <a href="https://support.magento.com/hc/en-us/articles/360044010932#opensource">Magento Open Source,</a> to get further troubleshooting steps.</li>
</ol>
<h2>Magento Commerce and Magento Commerce Cloud</h2>
<p>1. Reach out to the developer of the extension so they can assist you. You can find their contact information on the page you purchased the extension from on the Magento Marketplace. Look for the Contact Seller button shown on the right panel. All Magento developers are required to provide a user's and installation guide when they publish an extension on Marketplace. You can find both on the right side of their landing page.<br/> 2. If you do not receive a response from the Seller in a reasonable amount of time, please <a href="https://marketplacesupport.magento.com/">let Magento Marketplace know</a> so that we can remind them of their customer support commitments.</p>
<h2>Magento Open Source</h2>
<p>Request assistance at <a href="https://community.magento.com/">our main forum</a> or <a href="https://magento.com/find-a-partner">contact a Magento Partner</a> that assists in Open Source issues.</p>