This article provides a patch for the Magento 2 security issue where the URL location of a Magento Admin panel can be disclosed. Knowing the URL location could make it easier to automate attacks.

### Affected versions:

*   Magento Commerce Cloud 2.X.X
*   Magento Commerce 2.X.X
*   Magento Open Source &nbsp;2.X.X

## Issue

An issue has been discovered in Magento Open Source and Magento Commerce that can be used to disclose the URL location of a Magento Admin panel. While there is currently no reason to believe this issue would lead to a compromise directly, knowing the URL location could make it easier to automate attacks.

## Solution&nbsp;

To fix the issue, please apply the patch attached to this article.&nbsp;To download it, scroll down to the end of the article and click the file name, or click the following link:

*   Download&nbsp;<a href="https://support.magento.com/hc/en-us/article_attachments/360028207611/composer_2.1.17.patch" rel="noopener" target="_blank">composer\_2.1.17.patch</a>&nbsp;- for versions 2.1.13-2.1.17, Magento Commerce, Magento Open Source
*   Download&nbsp;<a href="https://support.magento.com/hc/en-us/article_attachments/360028207631/composer_2.2.8.patch" rel="noopener" target="_blank">composer\_2.2.8.patch</a>&nbsp;- for versions 2.2.0-2.2.8, all editions
*   Download&nbsp;<a href="https://support.magento.com/hc/en-us/article_attachments/360028207671/composer_2.3.1.patch" rel="noopener" target="_blank">composer\_2.3.1.patch</a>&nbsp;- for versions 2.3.0-2.3.1, all editions

If you do see a patch for your product/version, please upgrade to the latest&nbsp;security release and then apply the patch.

Magento strongly recommends applying the patch as soon as possible, even if you have not experienced any symptoms of an attack.

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Other security recommendations

Magento also strongly recommends that merchants deploy tools to secure their admin panel, including two-factor authentication, VPN, IP whitelisting, and more. For detailed information, see the following blogs and documentation:

*   [5 Immediate Actions to Protect Against Brute Force Attacks](https://magento.com/security/best-practices/5-immediate-actions-protect-against-brute-force-attacks)
*   [Protect Your Magento Installation Password Guessing New Update](https://magento.com/security/best-practices/protect-your-magento-installation-password-guessing-new-update)
*   [Security Best Practices](https://magento.com/security/best-practices/security-best-practices)
*   Adding and Configuring Two-Factor Authentication in Magento for &nbsp;[2.1.x](https://docs.magento.com/m2/2.1/ce/user_guide/stores/security-two-factor-authentication.html), &nbsp;[2.2.x](https://docs.magento.com/m2/2.2/ce/user_guide/stores/security-two-factor-authentication.html), and &nbsp;[2.3.x](https://docs.magento.com/m2/ce/user_guide/stores/security-two-factor-authentication.html)

## Attached files