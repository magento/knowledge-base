---
title: Magento Admin URL location disclosed
link: https://support.magento.com/hc/en-us/articles/360027916892-Magento-Admin-URL-location-disclosed
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,2.x.x,Admin URL disclosed
---

<p>This article provides a patch for the Magento 2 security issue where the URL location of a Magento Admin panel can be disclosed. Knowing the URL location could make it easier to automate attacks.</p>
<h3>Affected versions:</h3>
<ul>
<li>Magento Commerce Cloud 2.X.X</li>
<li>Magento Commerce 2.X.X</li>
<li>Magento Open Source  2.X.X</li>
</ul>
<h2>Issue</h2>
<p>An issue has been discovered in Magento Open Source and Magento Commerce that can be used to disclose the URL location of a Magento Admin panel. While there is currently no reason to believe this issue would lead to a compromise directly, knowing the URL location could make it easier to automate attacks.</p>
<h2>Solution </h2>
<p>To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<ul>
<li>Download <a href="https://support.magento.com/hc/en-us/article_attachments/360059699111/PRODSECBUG-2432_EE_2.1.17_composer.patch">PRODSECBUG-2432_EE_2.1.17_composer.patch</a> - for versions 2.1.13-2.1.17, Magento Commerce, Magento Open Source</li>
<li>Download <a href="https://support.magento.com/hc/en-us/article_attachments/360059699131/PRODSECBUG-2432_EE_2.2.8_composer.patch">PRODSECBUG-2432_EE_2.2.8_composer.patch</a> - for versions 2.2.0-2.2.8, all editions</li>
<li>Download <a href="https://support.magento.com/hc/en-us/article_attachments/360059699151/PRODSECBUG-2432_EE_2.3.1_composer.patch">PRODSECBUG-2432_EE_2.3.1_composer.patch</a> - for versions 2.3.0-2.3.1, all editions</li>
</ul>
<p>If you do see a patch for your product/version, please upgrade to the latest security release and then apply the patch.</p>
<p>Magento strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms of an attack.</p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Other security recommendations</h2>
<p>Magento also strongly recommends that merchants deploy tools to secure their admin panel, including two-factor authentication, VPN, IP AllowListing, and more. For detailed information, see the following blogs and documentation:</p>
<ul>
<li><a href="https://magento.com/security/best-practices/5-immediate-actions-protect-against-brute-force-attacks">5 Immediate Actions to Protect Against Brute Force Attacks</a></li>
<li><a href="https://magento.com/security/best-practices/protect-your-magento-installation-password-guessing-new-update">Protect Your Magento Installation Password Guessing New Update</a></li>
<li><a href="https://magento.com/security/best-practices/security-best-practices">Security Best Practices</a></li>
<li>Adding and Configuring Two-Factor Authentication in Magento for  <a href="https://docs.magento.com/m2/2.1/ce/user_guide/stores/security-two-factor-authentication.html">2.1.x</a>,  <a href="https://docs.magento.com/m2/2.2/ce/user_guide/stores/security-two-factor-authentication.html">2.2.x</a>, and  <a href="https://docs.magento.com/m2/ce/user_guide/stores/security-two-factor-authentication.html">2.3.x</a>
</li>
</ul>
<h2>Attached files</h2>