---
title: Magento 2.4.0 known issue: integration tests fail
link: https://support.magento.com/hc/en-us/articles/360046906191-Magento-2-4-0-known-issue-integration-tests-fail
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,2.4.0,integration tests,dotdigital
---

<p>This article provides a patch for the Magento 2.4.0 issue where integration tests are failing because the declaration of <code>Dotdigitalgroup\Email\Test\Integration\Model\Sync\Importer\ImporterFailedTest::setUp()</code> is not compatible with PHPUnit 9 which is used for 2.4.0. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.0</li>
<li>Magento Commerce 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Run 2.4.0 integration tests.</p>
<p>Expected result </p>
<p>Tests pass.</p>
<p>Actual result</p>
<p><em>PHP Fatal error: Declaration of Dotdigitalgroup\Email\Test\Integration\Model\Sync\Importer\ImporterFailedTest::setUp() must be compatible with PHPUnit\Framework\TestCase::setUp(): void in /var/www/vendor/dotmailer/dotmailer-magento2-extension/Test/Integration/Model/Sync/Importer/ImporterFailedTest.php on line 36</em></p>
<h2>Solution</h2>
<p>Apply the patch provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360063994752/BUNDLE-2684-composer.patch">BUNDLE-2684-composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud 2.4.0</li>
<li>Magento Commerce 2.4.0</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>