---
title: Exceptions during installation
link: https://support.magento.com/hc/en-us/articles/360033432231-Exceptions-during-installation
labels: Magento Commerce,installation,var,generated,install,web setup wizard,exception,2.3.x,2.2.x,how to
---

This article provide a possible solution for the issues with installing Magento using Web Setup Wizard.

### Affected products and versions

* Magento Commerce 2.2.x, 2.3.x

* Magento Open Source 2.2.x, 2.3.x

## Issue

Exceptions display during installation. Users have reported a variety of exceptions, including the following:

Module 'Magento\_Indexer':
Running recurring..
[ERROR] exception 'Exception' with message 'Recoverable Error: Argument 1 passed to Magento\Indexer\Model\Config\Data::\_\_construct() must be an instance of Magento\Framework\Indexer\Config\Reader, instance of Magento\Indexer\Model\Config\Reader given, called in /home/magento2\_dev/
public\_html/generated/code/Magento/Indexer/Model/Config/Data/Interceptor.php on line 14 and defined in /home/magento2\_dev/public\_html/
app/code/Magento/Indexer/Model/Config/Data.php on line 22' in /home/magento2\_dev/public\_html/lib/internal/Magento/Framework/App/ErrorHandler.php:67
Stack trace:
#0 /home/magento2\_dev/public\_html/app/code/Magento/Indexer/Model/Config/Data.php(22): Magento\Framework\App\ErrorHandler->handler(4096,
'Argument 1 pass...', '/home/magento2...', 22, Array)
#1 /home/magento2\_dev/public\_html/generated/code/Magento/Indexer/Model/Config/Data/Interceptor.php(14): Magento\Indexer\Model\Config\Data->
\_\_construct(Object(Magento\Indexer\Model\Config\Reader), Object(Magento\Framework\App\Cache\Type\Config), Object(Magento\Indexer\Model\Resource\Indexer\State\Collection), 'indexer\_config')
#2 /home/magento2\_dev/public\_html/lib/internal/Magento/Framework/ObjectManager/Factory/AbstractFactory.php(103): Magento\Indexer\Model\Config\Data\Interceptor->\_\_construct(Object(Magento\Indexer\Model\Config\Reader), Object(Magento\Framework\App\Cache\Type\Config),
Object(Magento\Indexer\Model\Resource\Indexer\State\Collection), 'indexer\_config')

... more ...
## Solution

Clear the <magento\_root>/generated/code and other directories under var and generated as follows:

rm -rf <magento\_root>/generated/code/* <magento\_root>/generated/metadata/* <magento\_root>/var/cache/*
After clearing the directories, try the installation again.

