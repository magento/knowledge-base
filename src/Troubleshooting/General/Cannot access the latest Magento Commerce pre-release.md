---
title: Cannot access the latest Magento Commerce pre-release
link: https://support.magento.com/hc/en-us/articles/360034120932-Cannot-access-the-latest-Magento-Commerce-pre-release
labels: Magento Commerce,troubleshooting,early access,pre-release,how to,MageID
---

<p>This article provides solutions for issues when trying to utilize the latest pre-release code of Magento Commerce.</p>
<p class="info">Note: if you are having problems with Beta access refer to the <a href="https://support.magento.com/hc/en-us/articles/360048169471">Cannot access the latest Beta version</a> article.</p>
<h2>Issue</h2>
<p>This article covers the following issues with accessing the pre-release code:</p>
<ul>
<li>You cannot locate the pre-release code.</li>
<li>Failure to download the early access Magento Commerce version from <a href="https://account.magento.com/customer/account/login">magento.com</a> using Composer.</li>
</ul>
<h2>Cause</h2>
<p>These are the most common causes of issues:</p>
<ul>
<li>You are looking for the early access code in the wrong location.</li>
<li>You are using the wrong MageID when accessing the code via Composer.</li>
<li>Your account is not a part of the Pre-release program.</li>
</ul>
<h2>Solution</h2>
<h3>Early access code location</h3>
<p>During the pre-release, release packages are available in two locations:</p>
<ol>
<li>Via Composer on <a href="https://repo.magento.com/">magento.com</a> using the primary MageID for the account. For more details on how to use Composer, please refer to <a href="https://devdocs.magento.com/guides/v2.3/install-gde/composer.html">Install Magento using Composer</a> in Magento Developer Documentation.</li>
<li>
My Account &gt; Downloads on <a href="https://account.magento.com/customer/account/login">account.magento.com</a>.</li>
</ol>
<p class="info">Note: Release packages are not available on GitHub until the GA date.</p>
<h3>MageID you need to use</h3>
<p>You must use the primary MageID associated with your Magento Commerce or Partner account. The Pre-release program is not linked to any contact having shared access. Early access can only be accessed via Composer or <a href="https://repo.magento.com/">repo.magento.com</a> by the MageID associated with your Magento Commerce license or Partner license. </p>
<h4>How do I find out if my MageID is the primary one?</h4>
<p>For merchants</p>
<p>To find out if your MageID is primary, try the following:</p>
<ol>
<li>Log into <a href="https://account.magento.com/customer/account/login">magento.com</a> and go to the My Product and Services tab. Check if you see the Magento Commerce license information there:
<ul>
<li>If you see the Magento Commerce license information, then your MageID is primary.</li>
<li>If you do not see the Magento Commerce license information, then your MageID only has shared access. To find out who is the primary ID holder, go to the Shared with me Notice the SHARENAME specified there. Click Switch Accounts and select the value you've noted in SHARENAME. On the welcome page you will see the email of the primary ID holder.</li>
</ul>
</li>
<li>If for any reason you cannot find this information on <a href="https://account.magento.com/customer/account/login">magento.com</a>, please contact your Customer Success Manager (CSM).</li>
<li>If none of the above works, please <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">contact Support</a>.</li>
</ol>
<p>For partners</p>
<p>To find out if your MageID is primary, try the following:</p>
<ol>
<li>Log into <a href="https://account.magento.com/customer/account/login">magento.com</a> and go to the My Product and Services tab. In the Partners sub-section, check if you see the active Partner license information:<br/>
<ul>
<li>If you see the active Partner license information, then your MageID is primary. The Partner license is active if the END DATE value is a date in the future. </li>
<li>If you do not see the active Partner license information, then your MageID only has shared access. To find out who is the primary ID holder, go to the Shared with me Notice the SHARENAME specified there. Click Switch Accounts and select the value you've noted in SHARENAME. On the welcome page you will see the email of the primary ID holder.</li>
</ul>
</li>
<li>If for any reason you cannot find this information on <a href="https://account.magento.com/customer/account/login">magento.com</a>, please contact your Partner Manager.</li>
<li>If none of the above works, please <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">сontact Support</a>.</li>
</ol>
<h3>Not a part of pre-release program</h3>
<p>To be included in the Pre-release Access program, your organization must have an active Magento Commerce or Partner account that is in good standing. If you believe you meet this criteria and cannot access the pre-release code, please <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">contact Support</a> with your MageID.</p>