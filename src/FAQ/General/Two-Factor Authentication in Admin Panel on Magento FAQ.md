---
title: Two-Factor Authentication in Admin Panel on Magento FAQ
link: https://support.magento.com/hc/en-us/articles/360051134432-Two-Factor-Authentication-in-Admin-Panel-on-Magento-FAQ
labels: Magento Commerce Cloud,Magento Commerce,configuration,security,admin,authentication,attack,FAQ,browser,ACL,2.3.0,2.4.0,2.3.6,2.4.1,2.4.0-p1,2.4.1-p1,two factor authentication
---



1. 
**What’s Two-Factor Authentication on the Admin Panel? What’s changed?**  
Two-factor authentication (2FA) is an extra layer of security to verify your identity so only you can access your admin account, even if someone knows your password. Adobe added support for 2FA in the Magento Commerce Admin Panel in 2.3.0 to protect the admin account from unauthorized access. In 2.4.0, 2FA is enabled by default on the Admin Panel and is required to be configured before logging into the Admin through either the UI or a web API. Adobe strongly recommends against disabling the 2FA module.  
 

1. 
**Why was 2FA enabled by default in 2.4.0?**  
Providing an extra layer of authentication through 2FA, is a secure-by-default setting which provides an extra layer of authentication to make the admin portal more secure, reducing attack surface for skimming attacks and decreasing the potential risk for security incidents.  
 

1. 
**Can this 2FA setting be disabled on 2.4.0?**  
We strongly recommend that this security best practice and extra layer of protection with two-factor authentication should not be disabled.  
 

1. 
**What versions have support for 2FA?**  
Support for 2FA was added in 2.3.0 however it is enabled by default in 2.4.0.  
 

10. 
**How can I enable 2FA on 2.3?**  
For steps to enable 2FA on Magento 2.3, refer to DevDocs [Magento Configuration Guide > Install 2FA](https://devdocs.magento.com/guides/v2.3/security/two-factor-authentication.html#install-2fa).  
 

12. 
**Will 2FA for Admin be required regardless of IP or network across the board?**  
In 2.4.0, 2FA is enabled by default and is required regardless of IP or network across the board. This is a security best practice that we recommend all our customers to follow. Additional details on 2FA can be found here DevDocs [Magento Configuration Guide > Two-Factor Authentication](https://devdocs.magento.com/guides/v2.4/security/two-factor-authentication.html). 

14. 
**I do not own a smartphone, how do I enable 2FA?**  
2FA on the Admin Panel supports the following authenticators: Google authenticator, Authy, U2F key and Duo Security.  
Admin users who do not own a smartphone can either use a U2F key or use browser extensions for authenticators like Google authenticator.  
 

16. 
**Can you activate 2FA for just a few users in Magento or does everyone have to use 2FA when they log in?**  
Magento recommends all admin users to have 2FA enabled when logging into their admin account. For webstores running on Magento 2.4 and higher, 2FA is enabled by default for every user.  
 

18. 
**What is the expected behavior when configuring 2FA on the Admin Panel, can I use the link from the email received while configuring and use a different browser from where I already logged in and requested 2FA configuration?**  
The user should be able to open the email link in any browser whether they are logged in or not. For security reasons they can only have one session opened during this process and will be required to authenticate again if they switch browsers.  
  
The benefit of 2FA is to force the user to verify their identity using two different methods. In this configuration scenario, access to the user's email is only one method which means they still have to provide another. At that point in the process there is only password as a second option. Therefore, the user cannot use the email link by itself to login and will be prompted for a password before they can continue if they switch browsers or were not already logged in.  
 

20. 
**Does 2FA configuration require change in ACL settings and grant access to non-admin users to change 2FA admin settings to allow individual users to configure their personal 2FA?**  
There are two “Two Factor Auth” [ACL](https://devdocs.magento.com/guides/v2.4/ext-best-practices/tutorials/create-access-control-list-rule.html)resources in the interface. One allows the global configuration (**Stores** > Settings > **Configuration** > **SECURITY** > **2FA**) and the other allows users to use their personal 2FA (**System** > **Permissions** > **2FA**). The global configuration is for the admin type users to configure the system and the second type of ACL is required by the non-admin user to login and set their own 2FA setting.  
  
The ACL which allows global configuration would allow admin with rights to configuration settings to set global configuration and would not need individual users to change settings.  
When the user has logs in and sees the "Access denied" screen, they can visit https://<magento store>/<admin\_path>/tfa/tfa/requestconfig/ to access the personal configuration.   
This is a known issue in 2.4.1/2.3.6/2.4.0-p1 (security package 1.1.0) and will be resolved in 2.4.2/2.3.7/2.4.1-p1 (security package 1.1.1).
