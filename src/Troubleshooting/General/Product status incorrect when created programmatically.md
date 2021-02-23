---
title: Product status incorrect when created programmatically
link: https://support.magento.com/hc/en-us/articles/360028995932-Product-status-incorrect-when-created-programmatically
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,create product,2.x.x,product status
---

<p>This article provides a fix for when product status is Disabled and products are not displayed on the store front, or are assigned to the wrong store views, when created/updated programmatically.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, Magento Commerce</li>
<li>2.X.X</li>
</ul>
<h2>Issue</h2>
<p>When the catalog products get created or updated programmatically from a script with Magento application bootstrapped, products might have Disabled status and/or assigned to the wrong store views.</p>
<h2>Cause</h2>
<p>The issue might appear because of ACL restrictions set for the Magento instance admin roles. In case of bootstrapped application, there will be no initialized admin sessions with appropriate ACL settings. That would cause validations to fail in the Magento_AdminGws module, which is responsible for permissions check on such actions.</p>
<h2>Solution for incorrect product status</h2>
<p>Set a dynamic DI preference for the <code>Magento\Framework\Authorization\PolicyInterface</code>, as described in the <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/object-manager.html#programmatic-product-updates">ObjectManager&gt;Programmatic product updates</a> topic.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://github.com/magento/magento2/issues/5664">Github: Can not change product status which product created with productRepository</a></li>
</ul>