---
title: Reset a theme to defaults
link: https://support.magento.com/hc/en-us/articles/360005034034-Reset-a-theme-to-defaults
labels: Magento Commerce Cloud,Magento Commerce,reset,theme,default,luma,database,store,how to,SQL
---

Depending on issues you may be encountering when customizing your themes and developing your store, you may not have access through the Magento Admin. You can clear and reset to your theme default without accessing the admin. After you clear the theme, the default Luma theme will be applied.

 While you’re developing Magento components (modules, themes, and language packages), your rapidly changing environment requires you to periodically clear certain directories and caches. Otherwise, your code runs with exceptions and won’t function properly. For details, see [Clear directories during development](https://devdocs.magento.com/guides/v2.2/howdoi/php/php_clear-dirs.html) in DevDocs.

 Environment and technologies
----------------------------

 
 * Magento Commerce
 * Magento Commerce (Cloud)
 * Magento Open Source
 
 Prerequisites
-------------

 
 * Database tools
 
 Steps
-----

 If you need to reset the store theme, but cannot access the Admin panel, you can reset it in the database by doing the following:

 
 2. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin) or access the DB manually from the command line to execute the following SQL query:  
UPDATE core\_config\_data SET value=NULL WHERE path='design/theme/theme\_id' 
 4. Clear the following directories: 
	 * pub/static/frontend
	 * var/view\_preprocessing
	 * var/cache
	 *  var/page\_cache 
 
 This way there will be no theme set on the store view level, and when you reload the store front pages, the default Luma theme will be applied.

 Additional Information
----------------------

 
 * [Clear directories during development](https://devdocs.magento.com/guides/v2.2/howdoi/php/php_clear-dirs.html)
 
