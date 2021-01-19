---
title: Bootstrap Magento 2 in a sandbox script
link: https://support.magento.com/hc/en-us/articles/360024593011-Bootstrap-Magento-2-in-a-sandbox-script
labels: Magento Commerce Cloud,Magento Commerce,Magento,bootstrap,2.x.x,how to,sandbox
---

To initialize a Magento 2 application in a sample sandbox script, execute the following script from the Magento root directory:

<?php

error\_reporting(E\_ALL | E\_STRICT);
ini\_set('display\_errors', 1);

require \_\_DIR\_\_ . '/app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $\_SERVER);
$objectManager = $bootstrap->getObjectManager();

//$model = $objectManager->get('Vendor\Module\Some\Model');
