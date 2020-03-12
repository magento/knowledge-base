Depending on issues you may be encountering when customizing your themes and developing your store, you may not have access through the Magento Admin. You can clear and reset to your theme default without accessing the admin. After you clear the theme, the default Luma theme will be applied.

While you’re developing Magento components (modules, themes, and language packages), your rapidly changing environment requires you to periodically clear certain directories and caches. Otherwise, your code runs with exceptions and won’t function properly. For details, see&nbsp;[Clear directories during development](https://devdocs.magento.com/guides/v2.2/howdoi/php/php_clear-dirs.html) in DevDocs.

## Environment and technologies

*   Magento Commerce
*   Magento Commerce (Cloud)
*   Magento Open Source

## Prerequisites

*   Database tools

## Steps

If you need to reset the store theme, but cannot access the <span class="glossary-term" data-toggle="popover">Admin</span> panel, you can reset it in the database by doing the following:

<ol><li>Use a database tool such as <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin">phpMyAdmin</a> or access the DB manually from the command line to execute the following SQL query:<br/><code>UPDATE core_config_data SET value=NULL WHERE path='design/theme/theme_id'</code>
</li><li value="2">Clear the following directories:
<ul>
<li value="2"><code class="highlighter-rouge">pub/static/frontend</code></li>
<li value="2"><code class="highlighter-rouge">var/view_preprocessing</code></li>
<li value="2"><code class="highlighter-rouge">var/cache</code></li>
<li value="2">
<code class="highlighter-rouge">var/page_cache</code> </li>
</ul>
</li></ol>

This way there will be no <span class="glossary-term" data-toggle="popover">theme</span> set on the <span class="glossary-term" data-toggle="popover">store view</span> level, and when you reload the store front pages, the default Luma theme will be applied.

## Additional Information

*   [Clear directories during development](https://devdocs.magento.com/guides/v2.2/howdoi/php/php_clear-dirs.html)