---
title: Cannot access the latest Beta version
link: https://support.magento.com/hc/en-us/articles/360048169471-Cannot-access-the-latest-Beta-version
labels: Magento Commerce,composer,download,early access,how to,Beta
---

<p>This article provides solutions for issues when trying to utilize the latest Beta versions of Magento Commerce code. Beta code is only available for official Adobe partners that have followed the process described in <a href="https://github.com/magento/magento2/wiki/Magento-Beta-Program">Magento Beta Program</a>.</p>
<h2>Issue</h2>
<p>This article covers the following issues with accessing the early access code:</p>
<ul>
<li>Magento Commerce Beta version is not available for download under My Account &gt; Downloads on <a href="https://account.magento.com/customer/account/login">magento.com</a>.</li>
<li>Failure to download the early access Magento Commerce version from <a href="https://account.magento.com/customer/account/login">magento.com</a> using Composer.</li>
</ul>
<h2>Cause</h2>
<p>These are the most common causes of issues:</p>
<ul>
<li>You are looking for the early access code in the wrong location.</li>
<li>You are using the wrong MageID.</li>
<li>Developer needs access keys from the correct MageID.</li>
<li>Your account is not a part of the Beta program.</li>
</ul>
<h2>Solution</h2>
<h3>Early access code location</h3>
<p>During beta access periods, release packages are only available via Composer on <a href="https://repo.magento.com/">repo.magento.com</a>. Release packages are not available on GitHub and Magento portals during this period, and we will publish them to these locations on the GA date. For more details on how to use Composer, please click <a href="https://devdocs.magento.com/guides/v2.3/install-gde/composer.html">here</a>.</p>
<h3>MageID you need to use</h3>
<p>You must use the primary MageID associated with your Partner account. The Beta program is not linked to any contact having shared access. Early access can only be accessed via Composer or <a href="https://repo.magento.com/">repo.magento.com</a> by the MageID associated with your Partner license.</p>
<h4>How do I find out if my MageID is the primary one</h4>
<p>To find out if your MageID is primary, try the following:</p>
<ol>
<li>Log into <a href="https://account.magento.com/customer/account/login">magento.com</a> and go to the My Product and Services tab. In the Partners sub-section, check if you see the active Partner license information:
<ul>
<li>If you see the active Partner license information, then your MageID is primary. The Partner license is active if the END DATE value is a date in the future. </li>
<li>If you do not see the active Partner license information, then your MageID only has shared access. To find out who is the primary ID holder, go to the Shared with me Notice the SHARENAME specified there. Click Switch Accounts and select the value you've noted in SHARENAME. On the welcome page you will see the email of the primary ID holder.</li>
</ul>
</li>
<li>If for any reason you cannot find this information on <a href="https://account.magento.com/customer/account/login">magento.com</a>, please contact your Partner Manager.</li>
<li>If none of the above works, please <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">contact Support</a>.</li>
</ol>
<h4>Developer doesn’t have correct access to keys</h4>
<p>If you are the primary MageID owner and need to give access to a developer on your team follow the below steps:</p>
<ol>
<li>Have the primary MageID owner login into <a href="https://account.magento.com/customer/account/login">account.magento.com</a>.</li>
<li>Select the Marketplace tab and then click Access Keys.</li>
<li>Select Create A New Access key and name it.</li>
<li>Send the keys to your developer.</li>
</ol>
<h3>Not a part of the early access program</h3>
<p>Our Beta Access program is only available to our Solution and Technical Partners, so they can evaluate our pre-production code. To be included in the Beta Access program, your organization must have an active Adobe Partner account that is in good standing and have signed the Beta NDA <a href="https://github.com/magento/magento2/wiki/Magento-Beta-Program">here</a>. If you believe you meet these criteria and cannot access the beta code, please contact <a href="mailto:magebeta@adobe.com">magebeta@adobe.com</a>.</p>