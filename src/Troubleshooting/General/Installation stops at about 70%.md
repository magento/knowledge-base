---
title: Installation stops at about 70%
link: https://support.magento.com/hc/en-us/articles/360033773871-Installation-stops-at-about-70-
labels: Magento Commerce,installation,PHP,php.ini,wizard,how to,Varnish
---

This article provides a fix for when installation stops at about 70%.

 ### Issue

 During installation using the Setup Wizard, the process stops at about 70% (with or without sample data). No errors display on the screen.

 ### Cause

 Common causes for this issue include:

 
 * The PHP setting for [max\_execution\_time](http://php.net/manual/en/info.configuration.php#ini.max-execution-time) 
 * Timeout values for nginx and Varnish
 
 ### Solution:

 Set all of the following as appropriate.

 #### All web servers and Varnish

 
 2. Locate your php.ini using a [phpinfo.php](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo) file.
 4. As a user with root privileges, open php.ini in a text editor.
 6. Locate the max\_execution\_time setting.
 8. Change its value to 18000.
 10. Save your changes to php.ini and exit the text editor.
 12.  Restart Apache:

 
	 * CentOS: service httpd restart 
	 * Ubuntu: service apache2 restart If you use nginx or Varnish, continue with the following sections.

 
 
 #### nginx only

 If you use nginx, use our included nginx.conf.sample or add a timeout settings in the nginx host configuration file to the location ~ ^/setup/index.php section as follows:

 location ~ ^/setup/index.php { ..................... fastcgi\_read\_timeout 600s; fastcgi\_connect\_timeout 600s; } Restart nginx: service nginx restart

 #### Varnish only

 If you use Varnish, edit default.vcl and add a timeout limit value to the backend stanza as follows:

 backend default { ..................... .first\_byte\_timeout = 600s; } Restart Varnish.

  service varnish restart