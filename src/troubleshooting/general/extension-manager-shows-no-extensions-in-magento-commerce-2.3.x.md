---
title: Extension Manager shows no extensions in Magento Commerce 2.3.x
labels: 2.3.x,Magento Commerce,command line,extension manager,extensions,known issues,marketplace
---

This article provides a workaround for missing extensions in the Admin Extension Manager in Magento Commerce 2.3.x after you purchase extensions via the Magento Marketplace.

## Affected products and versions

* Magento Commerce version 2.3.x

## Issue

When you purchase extensions via the Magento Marketplace, you are unable to install them using the core Magento Extension Manager. When you add your access keys and sync to the Marketplace, the Extension Manager shows no extensions.

The **Workaround** for the issue is to use the command line Magento installation as shown in DevDocs' [General CLI installation](https://devdocs.magento.com/extensions/install/) .

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Purchase an extension via the Magento Marketplace.
1. Add your extension's access keys and sync to the Marketplace.
1. Go to the Extension Manager section of the Magento Admin.

 <span class="wysiwyg-underline">Expected result</span> : The extension appears on the Extension Manager section of the Magento Admin.

 <span class="wysiwyg-underline">Actual result</span> : **No extension appears on the Extension Manager section of the Magento Admin, similar to the image below:** 

 **
![KB-607_Image_1.png](assets/KB-607_Image_1.png)** 

## Workaround

Use the command line Magento installation as shown in DevDocs' [General CLI installation](https://devdocs.magento.com/extensions/install/) .