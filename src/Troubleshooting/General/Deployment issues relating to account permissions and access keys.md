---
title: Deployment issues relating to account permissions and access keys
link: https://support.magento.com/hc/en-us/articles/360031380671-Deployment-issues-relating-to-account-permissions-and-access-keys
labels: Magento Commerce Cloud,deployment,troubleshooting,access key
---

<p>This article provides a solution for issues with deploying Magento Cloud caused by access key ownership conflict.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, all supported versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Prerequisites: The Cloud license is associated with Contact A (email address: <em><u>first@e.mail</u></em>)</p>
<ol>
<li>Contact A created Magento Commerce access keys on their account (Key X) and installs it on the Cloud.</li>
<li>Contact B (email address: <em><u>second@e.mail</u></em>) purchased an extension using his account and created the access keys for installing the extension (Key Y).</li>
<li>Contact A then left the company, and the license (ownership) was then transferred to Contact B.</li>
<li>System integrator tries to install the extension on the Cloud environment using Key X.</li>
</ol>
<p>Expected result</p>
<p>Extension is successfully installed.</p>
<p>Actual result</p>
<p>Extension is not installed, because deployment fails.</p>
<h2>Cause</h2>
<p>Both keys were are seen to be assigned to the contact role, which causes a conflict.</p>
<h2>Solution</h2>
<p>If a deployment failed after a change was made to the Primary Contact on the account (with both the original account and the new account each having their own access keys), and the keys have been transferred from the original account to the new account, you need to disable the keys from the original account. In the terms of the example above, the key X should be disabled.</p>
<h3>How to disable the access key</h3>
<p>If you do not have access to the <a href="https://marketplace.magento.com/">Magento Marketplace</a> account associated with the old key, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">contact Magento Support</a> to have the key disabled.</p>
<p>If you have access to the Marketplace account associated with the old key, take the following steps to disable the key: </p>
<ol>
<li>Log in to the <a href="https://marketplace.magento.com/">Magento Marketplace</a> using the credentials from the old account.</li>
<li>
<p>Click the account name in the top-right of the page and select My Profile.</p>
</li>
<li>
<p>Click Access Keys in the Marketplace tab.<br/><br/></p>
<img alt="magento_products_access_keys_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086270131/magento_products_access_keys_2.4.1.png"/><br/><br/>
</li>
<li>Click Disable next to the access key. </li>
</ol>
<h2>Related reading</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/connect-auth.html">Get your authentication keys</a></li>
</ul>
<p> </p>