---
title: "MDVA-33516 Magento patch: edit bundled product Requisition List error"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,QPT 1.0.14,Magento Commerce Cloud,bundle options,error,support tools
---

The MDVA-33516 Magento patch fixes the issue where when editing the bundle product type from the Requisition List, you are redirected to a requisition list item error page. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.14 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** 

Magento Commerce Cloud 2.3.4.

 **Compatible with Magento versions:** 

Magento Commerce Cloud 2.3.0-2.3.5-p2.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Error editing bundled products on Requisition List.

 <span class="wysiwyg-underline">Prerequisites</span> :

* B2B is installed.
* Requisition List is enabled.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a bundled product with two simple products.
1. Go to the bundled product page, click on the **Customize and Add to Cart** button.
1. Select one of the options from the dropdown, click on **Add to Requisition List** to create a new requisition list. For detailed steps, refer to Magento DevDocs [Magento User Guide > My Requisition Lists > Create a requisition list.](https://docs.magento.com/user-guide/customers/account-dashboard-requisition-lists.html#create-a-requisition-list) 
1. Go to the newly created Requisition List (My Account > **My Requisition Lists** ).
1. Click the **View** button in the *Actions* column.
1. Click the **Edit** button.

 <span class="wysiwyg-underline">Expected Results:</span> No errors. <span class="wysiwyg-underline">Actual Results:</span> 

"Your Customization" page, containing a picture of the bundled product, price, and the following error message:

```clike
Fatal error: Uncaught Error: Call to a member function isAvailableForCompare() on null in /var/www/html/var/view_preprocessed/pub/static/vendor/magento/module-catalog/view/frontend/templates/product/view/addto/compare.phtml:1 Stack trace: #0 /var/www/html/vendor/magento/framework/View/TemplateEngine/Php.php(59): include() #1 /var/www/html/vendor/magento/framework/View/Element/Template.php(271): Magento\Framework\View\TemplateEngine\Php->render(Object(Magento\Catalog\Block\Product\View\AddTo\Compare), '/var/www/html/v...', Array) #2 /var/www/html/vendor/magento/framework/View/Element/Template.php(301): Magento\Framework\View\Element\Template->fetchView('/var/www/html/v...') #3 /var/www/html/vendor/magento/framework/View/Element/AbstractBlock.php(1099): Magento\Framework\View\Element\Template->_toHtml() #4 /var/www/html/vendor/magento/framework/View/Element/AbstractBlock.php(1103): Magento\Framework\View\Element\AbstractBlock->Magento\Framework\View\Element   {closure} () #5 /var/www/html/vendor/magento/framework/View/Element/ in /var/www/html/var/view_preprocessed/pub/static/vendor/magento/module-catalog/view/frontend/templates/product/view/addto/compare.phtml
  on line 1
```

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.