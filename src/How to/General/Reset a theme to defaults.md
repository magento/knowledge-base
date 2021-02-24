---
title: Reset a theme to defaults
link: https://support.magento.com/hc/en-us/articles/360005034034-Reset-a-theme-to-defaults
labels: Magento Commerce Cloud,Magento Commerce,reset,theme,default,luma,database,store,how to,SQL
---

<p>Depending on issues you may be encountering when customizing your themes and developing your store, you may not have access through the Magento Admin. You can clear and reset to your theme default without accessing the admin. After you clear the theme, the default Luma theme will be applied.</p>
<p>While you’re developing Magento components (modules, themes, and language packages), your rapidly changing environment requires you to periodically clear certain directories and caches. Otherwise, your code runs with exceptions and won’t function properly. For details, see <a href="https://devdocs.magento.com/guides/v2.2/howdoi/php/php_clear-dirs.html">Clear directories during development</a> in DevDocs.</p>
<h2>Environment and technologies</h2>
<ul>
<li>Magento Commerce</li>
<li>Magento Commerce (Cloud)</li>
<li>Magento Open Source</li>
</ul>
<h2>Prerequisites</h2>
<ul>
<li>Database tools</li>
</ul>
<h2>Steps</h2>
<p>If you need to reset the store theme, but cannot access the Admin panel, you can reset it in the database by doing the following:</p>
<ol>
<li>Use a database tool such as <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin">phpMyAdmin</a> or access the DB manually from the command line to execute the following SQL query:<br/><code>UPDATE core_config_data SET value=NULL WHERE path='design/theme/theme_id'</code>
</li>
<li>Clear the following directories:
<ul>
<li><code class="highlighter-rouge">pub/static/frontend</code></li>
<li><code class="highlighter-rouge">var/view_preprocessing</code></li>
<li><code class="highlighter-rouge">var/cache</code></li>
<li>
<code class="highlighter-rouge">var/page_cache</code> </li>
</ul>
</li>
</ol>
<p>This way there will be no theme set on the store view level, and when you reload the store front pages, the default Luma theme will be applied.</p>
<h2>Additional Information</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.2/howdoi/php/php_clear-dirs.html">Clear directories during development</a></li>
</ul>