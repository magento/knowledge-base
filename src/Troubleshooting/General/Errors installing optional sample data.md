---
title: Errors installing optional sample data
link: https://support.magento.com/hc/en-us/articles/360033824571-Errors-installing-optional-sample-data
labels: Magento Commerce Cloud,Magento Commerce,error,PHP,wizard,setup,sample,data,how to
---

<p>This topic discusses solutions to errors you might encounter installing optional sample data.</p>
<h2>Symptom (file system permissions)</h2>
<p>Error in the console log during sample data installation using the Setup Wizard:</p>
<pre><code class="language-php">Module 'Magento_CatalogRuleSampleData':
[ERROR] exception 'Magento\Framework\Exception\LocalizedException' with message 'Can't create directory /var/www/html/magento2/generated/code/Magento/CatalogRule/Model/.' in /var/www/html/magento2/lib/internal/Magento/Framework/Code/Generator.php:103

(more)

Next exception 'ReflectionException' with message 'Class Magento\CatalogRule\Model\RuleFactory does not exist' in /var/www/html/magento2/lib/internal/Magento/Framework/Code/Reader/ClassReader.php:29

(more)</code></pre>
<p>These exceptions result from file system permissions settings.</p>
<h4>Solution</h4>
<p><a href="https://devdocs.magento.com/guides/v2.3/config-guide/prod/prod_file-sys-perms.html">Set file system ownership and permissions again</a> as a user with <code>root</code> privileges.</p>
<h2>Symptom (production mode)</h2>
<p>If you're currently set for <a href="https://devdocs.magento.com/guides/v2.3/config-guide/bootstrap/magento-modes.html#production-mode">production mode</a>, sample data installation fails if you use the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-sample-data-composer.html">magento sampledata:deploy</a> command:</p>
<pre><code class="language-php">PHP Fatal error: Uncaught TypeError: Argument 1 passed to Symfony\Component\Console\Input\ArrayInput::__construct() must be of the type array, object given, called in /&lt;path&gt;/vendor/magento/framework/ObjectManager/Factory/AbstractFactory.php on line 97 and defined in /&lt;path&gt;/vendor/symfony/console/Symfony/Component/Console/Input/ArrayInput.php:37</code></pre>
<h4>Solution</h4>
<p>Don't install sample data in production mode. Switch to developer mode and clear some <code>var</code> directories and try again.</p>
<p>Enter the following commands in the order shown as the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html">Magento file system owner</a>:</p>
<pre><code class="language-php">cd &lt;magento_root&gt;
bin/magento deploy:mode:set developer
rm -rf generated/code/* generated/metadata/*
bin/magento sampledata:deploy</code></pre>
<h2>Symptom (security)</h2>
<p>During installation of optional sample data, a message similar to the following displays:</p>
<pre><code class="language-php">PHP Fatal error: Call to undefined method Magento\Catalog\Model\Resource\Product\Interceptor::getWriteConnection() in /var/www/magento2/app/code/Magento/SampleData/Module/Catalog/Setup/Product/Gallery.php on line 144</code></pre>
<h4>Solution</h4>
<p>During sample data installation, disable SELinux using a resource such as:</p>
<ul>
<li><a href="http://www.crypt.gen.nz/selinux/disable_selinux.html#DIS2">crypt.gen.nz</a></li>
<li><a href="https://docs.centos.org/en-US/docs/">CentOS documentation</a></li>
</ul>
<h2>Symptom (develop branch)</h2>
<p>Other errors display, such as:</p>
<pre><code class="language-php">[Magento\Setup\SampleDataException] Error during sample data installation: Class Magento\Sales\Model\Service\OrderFactory does not exist</code></pre>
<h4>Solution</h4>
<p>There are known issues with using sample data with the Magento 2 develop branch. Use the master branch instead. You can switch to the master branch as follows:</p>
<pre><code class="language-php">cd &lt;magento_root&gt;
git checkout master
git pull origin master</code></pre>
<h2>Symptom (max_execution_time)</h2>
<p>The installation stops before the sample data installation finishes. An example follows:</p>
<pre><code class="language-php">(more)

Module 'Magento_CustomerSampleData':
Installing data...</code></pre>
<p>Sample data installation does not finish.</p>
<p>This error occurs when the maximum configured execution time of your PHP scripts is exceeded. Because sample data can take a long time to load, you can increase the value during your installation.</p>
<h4>Solution</h4>
<p>As a user with <code>root</code> privileges, modify <code>php.ini</code> to increase the value of <code>max_execution_time</code> to 600 or more. (600 seconds is 10 minutes. You can increase the value to whatever you want.) You should change <code>max_execution_time</code> back to its previous value after the installation is successful.</p>
<p>If you're not sure where <code>php.ini</code> is located, enter the following command:</p>
<pre><code class="language-php">php --ini</code></pre>
<p>The value of <code>Loaded Configuration File</code> is the <code>php.ini</code> you must modify.</p>