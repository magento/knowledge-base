---
title: Exceptions during installation
link: https://support.magento.com/hc/en-us/articles/360033432231-Exceptions-during-installation
labels: Magento Commerce,installation,var,generated,install,web setup wizard,exception,2.3.x,2.2.x,how to
---

<p>This article provide a possible solution for the issues with installing Magento using Web Setup Wizard.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Exceptions display during installation. Users have reported a variety of exceptions, including the following:</p>
<pre><code class="language-bash">Module 'Magento_Indexer':
Running recurring..
[ERROR] exception 'Exception' with message 'Recoverable Error: Argument 1 passed to Magento\Indexer\Model\Config\Data::__construct() must be an instance of Magento\Framework\Indexer\Config\Reader, instance of Magento\Indexer\Model\Config\Reader given, called in /home/magento2_dev/
public_html/generated/code/Magento/Indexer/Model/Config/Data/Interceptor.php on line 14 and defined in /home/magento2_dev/public_html/
app/code/Magento/Indexer/Model/Config/Data.php on line 22' in /home/magento2_dev/public_html/lib/internal/Magento/Framework/App/ErrorHandler.php:67
Stack trace:
#0 /home/magento2_dev/public_html/app/code/Magento/Indexer/Model/Config/Data.php(22): Magento\Framework\App\ErrorHandler-&gt;handler(4096,
'Argument 1 pass...', '/home/magento2...', 22, Array)
#1 /home/magento2_dev/public_html/generated/code/Magento/Indexer/Model/Config/Data/Interceptor.php(14): Magento\Indexer\Model\Config\Data-&gt;
__construct(Object(Magento\Indexer\Model\Config\Reader), Object(Magento\Framework\App\Cache\Type\Config), Object(Magento\Indexer\Model\Resource\Indexer\State\Collection), 'indexer_config')
#2 /home/magento2_dev/public_html/lib/internal/Magento/Framework/ObjectManager/Factory/AbstractFactory.php(103): Magento\Indexer\Model\Config\Data\Interceptor-&gt;__construct(Object(Magento\Indexer\Model\Config\Reader), Object(Magento\Framework\App\Cache\Type\Config),
Object(Magento\Indexer\Model\Resource\Indexer\State\Collection), 'indexer_config')

... more ...</code></pre>
<h2>Solution</h2>
<p>Clear the <code>&lt;magento_root&gt;/generated/code</code> and other directories under <code>var</code> and <code>generated</code> as follows:</p>
<pre><code class="language-bash">rm -rf &lt;magento_root&gt;/generated/code/* &lt;magento_root&gt;/generated/metadata/* &lt;magento_root&gt;/var/cache/*</code></pre>
<p>After clearing the directories, try the installation again.</p>