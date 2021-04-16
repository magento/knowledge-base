---
title: Bootstrap Magento 2 in a sandbox script
labels: 2.x.x,Magento,Magento Commerce,Magento Commerce Cloud,bootstrap,how to,sandbox
---

To initialize a Magento 2 application in a sample sandbox script, execute the following script from the Magento root directory:

<pre><code class="language-php">&lt;?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require __DIR__ . '/app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

//$model = $objectManager->get('Vendor\Module\Some\Model');
</code></pre>