---
title: Two-Factor Authentication in Admin Panel on Magento FAQ
link: https://support.magento.com/hc/en-us/articles/360051134432-Two-Factor-Authentication-in-Admin-Panel-on-Magento-FAQ
labels: Magento Commerce Cloud,Magento Commerce,configuration,security,admin,authentication,attack,FAQ,browser,ACL,2.3.0,2.4.0,2.3.6,2.4.1,2.4.0-p1,2.4.1-p1,two factor authentication
---

<ol>
<li>
What’s Two-Factor Authentication on the Admin Panel? What’s changed?<br/>Two-factor authentication (2FA) is an extra layer of security to verify your identity so only you can access your admin account, even if someone knows your password. Adobe added support for 2FA in the Magento Commerce Admin Panel in 2.3.0 to protect the admin account from unauthorized access. In 2.4.0, 2FA is enabled by default on the Admin Panel and is required to be configured before logging into the Admin through either the UI or a web API. Adobe strongly recommends against disabling the 2FA module.<br/><br/>
</li>
<li>
 Why was 2FA enabled by default in 2.4.0?<br/>Providing an extra layer of authentication through 2FA, is a secure-by-default setting which provides an extra layer of authentication to make the admin portal more secure, reducing attack surface for skimming attacks and decreasing the potential risk for security incidents.<br/><br/>
</li>
<li>
Can this 2FA setting be disabled on 2.4.0?<br/>We strongly recommend that this security best practice and extra layer of protection with two-factor authentication should not be disabled.<br/><br/>
</li>
<li>
What versions have support for 2FA?<br/>Support for 2FA was added in 2.3.0 however it is enabled by default in 2.4.0.<br/><br/>
</li>
<li>
How can I enable 2FA on 2.3?<br/>For steps to enable 2FA on Magento 2.3, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/security/two-factor-authentication.html#install-2fa">Magento Configuration Guide &gt; Install 2FA</a>.<br/><br/>
</li>
<li>
Will 2FA for Admin be required regardless of IP or network across the board?<br/>In 2.4.0, 2FA is enabled by default and is required regardless of IP or network across the board. This is a security best practice that we recommend all our customers to follow. Additional details on 2FA can be found here DevDocs <a href="https://devdocs.magento.com/guides/v2.4/security/two-factor-authentication.html">Magento Configuration Guide &gt; Two-Factor Authentication</a>.<br/><br/>
</li>
<li>
I do not own a smartphone, how do I enable 2FA?<br/>2FA on the Admin Panel supports the following authenticators: Google authenticator, Authy, U2F key and Duo Security.<br/>Admin users who do not own a smartphone can either use a U2F key or use browser extensions for authenticators like Google authenticator.<br/><br/>
</li>
<li>
Can you activate 2FA for just a few users in Magento or does everyone have to use 2FA when they log in?<br/>Magento recommends all admin users to have 2FA enabled when logging into their admin account. For webstores running on Magento 2.4 and higher, 2FA is enabled by default for every user.<br/><br/>
</li>
<li>
What is the expected behavior when configuring 2FA on the Admin Panel, can I use the link from the email received while configuring and use a different browser from where I already logged in and requested 2FA configuration?<br/>The user should be able to open the email link in any browser whether they are logged in or not. For security reasons they can only have one session opened during this process and will be required to authenticate again if they switch browsers.<br/><br/>The benefit of 2FA is to force the user to verify their identity using two different methods. In this configuration scenario, access to the user's email is only one method which means they still have to provide another. At that point in the process there is only password as a second option. Therefore, the user cannot use the email link by itself to login and will be prompted for a password before they can continue if they switch browsers or were not already logged in.<br/><br/>
</li>
<li>
Does 2FA configuration require change in ACL settings and grant access to non-admin users to change 2FA admin settings to allow individual users to configure their personal 2FA?<br/>There are two “Two Factor Auth” <a href="https://devdocs.magento.com/guides/v2.4/ext-best-practices/tutorials/create-access-control-list-rule.html">ACL </a>resources in the interface. One allows the global configuration (Stores &gt; Settings &gt; Configuration &gt; SECURITY &gt; 2FA) and the other allows users to use their personal 2FA (System &gt; Permissions &gt; 2FA). The global configuration is for the admin type users to configure the system and the second type of ACL is required by the non-admin user to login and set their own 2FA setting.<br/><br/>The ACL which allows global configuration would allow admin with rights to configuration settings to set global configuration and would not need individual users to change settings.<br/>When the user has logs in and sees the "Access denied" screen, they can visit https://&lt;magento store&gt;/&lt;admin_path&gt;/tfa/tfa/requestconfig/ to access the personal configuration. <br/>This is a known issue in 2.4.1/2.3.6/2.4.0-p1 (security package 1.1.0) and will be resolved in 2.4.2/2.3.7/2.4.1-p1 (security package 1.1.1).</li>
</ol>