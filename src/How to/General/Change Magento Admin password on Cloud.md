## Method 1: Forgot Your Password (reset via email)

<img alt="login_panel_s.png" src="https://support.magento.com/hc/article_attachments/115005807073/login_panel_s.png" style="width: 451px; height: 482px;"/>

Read the steps in the <a href="https://docs.magento.com/m2/ee/user_guide/stores/admin-signin.html#reset-your-password" target="_self">Reset your password section of Admin Sign In</a> in the Magento User Guide.

Below are the critical usage notes.

### Enable outgoing emails

Before using the __Forgot your password__ form, [enable outgoing emails](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#email) using your [Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html).

### Check your Junk Email folder

If you cannot find the message with a Reset Password link, check your _Junk Email_ folder. The name of the email is _Password Reset Confirmation for Admin Username_.

## Method 2: Add a New Admin User

If you cannot restore or reset the password for the existing user, you can create a new Admin user and set a password for this user. To do so, take the following steps:

1.   <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh" target="_self">SSH to your environment.</a>
2.   Run the following command:   
    `` bin/magento admin:user:create   --admin-user=%user_name% --admin-password=%your_password% --admin-email=%your_email% --admin-firstname=%admin_user_first_name% --admin-lastname=%admin_user_last_name% ``