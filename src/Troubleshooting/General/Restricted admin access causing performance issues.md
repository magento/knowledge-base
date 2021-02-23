---
title: Restricted admin access causing performance issues
link: https://support.magento.com/hc/en-us/articles/360036323211-Restricted-admin-access-causing-performance-issues
labels: Magento Commerce Cloud,Magento Commerce,user,admin,permissions,2.3.x,2.2.x,how to,restricted access
---

<p>This article provides solutions for when performance is negatively impacted by using <a href="https://docs.magento.com/m2/ee/user_guide/system/permissions-user-roles.html#step-2assign-resources">Admin roles with role scope restricted by website</a>.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>When an Admin user, with the role scope restricted by website, performs operations in the Admin panel (including logging in, saving products and so on), Magento rebuilds the stored cache. Rebuilding the cache negatively impacts performance and can lead to a site outage, especially during business and/or high-traffic hours.</p>
<p>The issue is fixed in Magento Commerce 2.2.10 and 2.3.3.</p>
<h2>Solution </h2>
<p>Following are the options to avoid the issue:</p>
<ul>
<li>Upgrade the Magento application version to 2.2.10 or 2.3.3. (for instructions, see the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-upgrade.html">Upgrade Magento version (Commerce Cloud</a>) Magento DevDocs article).</li>
<li>Avoid restricting Admin user role scope by website, if possible.</li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Submit a Magento Support ticket</a>, to request a patch, if it is available.</li>
</ul>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/system/permissions-user-roles.html">User roles</a> in Magento User Guide.</li>
</ul>
<p> </p>