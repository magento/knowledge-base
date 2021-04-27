---
title: Errors installing optional sample data
labels: Magento Commerce,Magento Commerce Cloud,PHP,data,error,how to,sample,setup,wizard
---

This topic discusses solutions to errors you might encounter installing optional sample data.

## Symptom (file system permissions)

Error in the console log during sample data installation using the Setup Wizard:

<pre><code class="language-php">Module 'Magento_CatalogRuleSampleData':
[ERROR] exception 'Magento\Framework\Exception\LocalizedException' with message 'Can't create directory /var/www/html/magento2/generated/code/Magento/CatalogRule/Model/.' in /var/www/html/magento2/lib/internal/Magento/Framework/Code/Generator.php:103

(more)

Next exception 'ReflectionException' with message 'Class Magento\CatalogRule\Model\RuleFactory does not exist' in /var/www/html/magento2/lib/internal/Magento/Framework/Code/Reader/ClassReader.php:29

(more)</code></pre>

These exceptions result from file system permissions settings.

### Solution

[Set file system ownership and permissions again](https://devdocs.magento.com/guides/v2.3/config-guide/prod/prod_file-sys-perms.html) as a user with `` root `` privileges.

## Symptom (production mode)

If you're currently set for [production mode](https://devdocs.magento.com/guides/v2.3/config-guide/bootstrap/magento-modes.html#production-mode), sample data installation fails if you use the [magento sampledata:deploy](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-sample-data-composer.html) command:

<pre><code class="language-php">PHP Fatal error: Uncaught TypeError: Argument 1 passed to Symfony\Component\Console\Input\ArrayInput::__construct() must be of the type array, object given, called in /&lt;path>/vendor/magento/framework/ObjectManager/Factory/AbstractFactory.php on line 97 and defined in /&lt;path>/vendor/symfony/console/Symfony/Component/Console/Input/ArrayInput.php:37</code></pre>

### Solution

Don't install sample data in production mode. Switch to developer mode and clear some `` var `` directories and try again.

Enter the following commands in the order shown as the [Magento file system owner](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html):

<pre><code class="language-php">cd &lt;magento_root>
bin/magento deploy:mode:set developer
rm -rf generated/code/* generated/metadata/* bin/magento sampledata:deploy</code></pre>

## Symptom (security)

During installation of optional sample data, a message similar to the following displays:

<pre><code class="language-php">PHP Fatal error: Call to undefined method Magento\Catalog\Model\Resource\Product\Interceptor::getWriteConnection() in /var/www/magento2/app/code/Magento/SampleData/Module/Catalog/Setup/Product/Gallery.php on line 144</code></pre>

### Solution

During sample data installation, disable SELinux using a resource such as:

* [crypt.gen.nz](http://www.crypt.gen.nz/selinux/disable_selinux.html#DIS2)
* [CentOS documentation](https://docs.centos.org/en-US/docs/)

## Symptom (develop branch)

Other errors display, such as:

<pre><code class="language-php">[Magento\Setup\SampleDataException] Error during sample data installation: Class Magento\Sales\Model\Service\OrderFactory does not exist</code></pre>

### Solution

There are known issues with using sample data with the Magento 2 develop branch. Use the master branch instead. You can switch to the master branch as follows:

<pre><code class="language-php">cd &lt;magento_root>
git checkout master
git pull origin master</code></pre>

## Symptom (max\_execution\_time)

The installation stops before the sample data installation finishes. An example follows:

<pre><code class="language-php">(more)

Module 'Magento_CustomerSampleData':
Installing data...</code></pre>

Sample data installation does not finish.

This error occurs when the maximum configured execution time of your PHP scripts is exceeded. Because sample data can take a long time to load, you can increase the value during your installation.

### Solution

As a user with `` root `` privileges, modify `` php.ini `` to increase the value of `` max_execution_time `` to 600 or more. (600 seconds is 10 minutes. You can increase the value to whatever you want.) You should change `` max_execution_time `` back to its previous value after the installation is successful.

If you're not sure where `` php.ini `` is located, enter the following command:

<pre><code class="language-php">php --ini</code></pre>

The value of `` Loaded Configuration File `` is the `` php.ini `` you must modify.

<p class="info">We are aware that this article may still contain industry-standard software terms that some may find racist, sexist, or oppressive and which may make the reader feel hurt, traumatized, or unwelcome. Adobe is working to remove these terms from our code, documentation, and user experiences.</p>