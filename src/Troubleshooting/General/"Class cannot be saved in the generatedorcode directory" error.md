---
title: "Class cannot be saved in the generatedorcode directory" error
link: https://support.magento.com/hc/en-us/articles/360032133671--Class-cannot-be-saved-in-the-generated-code-directory-error
labels: Cloud,generated
---

<p>This article describes how to fix the issue where the way you specified dependencies prevents classes to be auto-generated on the fly, and you get the <em>"Class cannot be saved in the generated/code directory"</em> error message.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud 2.2.0 or later</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>In your local environment, write a custom class with a dependency on the auto-generated class.</li>
<li>Run the scenario, where your custom class is triggered, and see it working correctly.</li>
<li>Commit and push your changes to the integration environment. This would trigger the deployment process. Deployment is successful.</li>
<li>In the <a href="https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter">integration environment</a>, run the scenario where your custom class is triggered.</li>
</ol>
<p>Expected result</p>
<p>Everything works correctly, the same way as in your local environment.</p>
<p>Actual result</p>
<p>Failure with the error message saying that your class cannot be saved in the <code>generated/code</code> directory.</p>
<h2>Cause</h2>
<p>The cause of the problem is that the class on which you have dependency, does not get generated during the deployment, and cannot be generated later on the fly when the class is triggered, because the <code>generated/code </code>directory is unavailable for writing after deployment is completed.</p>
<p>There are two main reasons why this could happen: </p>
<ul>
<li>Case 1: The class with dependencies on auto-generated classes is located in the entry point (like <code>index.php</code>), which is not scanned for dependencies during deployment.</li>
<li>Case 2: The dependency to the auto-generated class is specified directly (compare to the recommended usage of constructor to declare dependency).</li>
</ul>
<h2>Solution</h2>
<p>One common solution for both cases would be creating a real factory instead of the auto-generated class.</p>
<p>Or there is a particular solution for each case.</p>
<h3>Case 1 specific solution</h3>
<p>Move your class code from the entry point to a separate module and then use it in the entry point.</p>
<p>Example</p>
<p>Original code in, for example, <code>index2.php</code>:</p>
<pre><code class="language-php">&lt;?php
use YourVendor\SomeModule\Model\GeneratedFactory;

require realpath(__DIR__) . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

class SomeClass
{
    private $generatedFactory;

    public function __construct(GeneratedFactory $generatedFactory)
    {
        $this-&gt;generatedFactory = $generatedFactory;
    }

    // Some code here...
}

$someObject = $bootstrap-&gt;getObjectManager()-&gt;create(SomeClass::class);

// There is some code that uses $someObject</code></pre>
<p>You need to take the following steps:</p>
<ol>
<li>Move the class definition to <code>app/code/YourVendor/YourModule</code>:
<pre><code class="language-php">&lt;?php
namespace YourVendor\YourModule;

use YourVendor\YourModule\Model\GeneratedFactory;

class YourClass
{
    private $generatedFactory;

    public function __construct(GeneratedFactory $generatedFactory)
    {
        $this-&gt;generatedFactory = $generatedFactory;
    }

    // Some code here...
}</code></pre>
</li>
<li>Edit the entry point <code>my_api/index.php</code> so that it looks like following:
<pre><code class="language-php">&lt;?php

use YourVendor\YourModule\YourClass;

require realpath(__DIR__) . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

$someObject = $bootstrap-&gt;getObjectManager()-&gt;create(YourClass::class);

// Some code using $someObject</code></pre>
</li>
</ol>
<h3>Case 2 specific solution</h3>
<p>Move dependency declaration to the constructor.</p>
<p>Example</p>
<p>Original class declaration:</p>
<pre><code class="language-php">&lt;?php
namespace YourVendor\YourModule;

use YourVendor\SomeModule\Model\GeneratedFactory;
use Magento\Framework\App\ObjectManager;

class YourClass
{
    private $generatedFactory;
    private $someParam;

    public function __construct($someParam)
    {
        $this---&gt;someParam = $someParam;
        $this-&gt;generatedFactory = ObjectManager::getInstance()-&gt;get(GeneratedFactory::class);
    }

    // Some code here...
}</code></pre>
<p>You need to change its constructor as following:</p>
<pre><code class="language-php">&lt;?php
namespace YourVendor\YourModule;

use YourVendor\YourModule\Model\GeneratedFactory;
use Magento\Framework\App\ObjectManager;

class YourClass
{
    private $generatedFactory;
    private $someParam;

    public function __construct($someParam, GeneratedFactory $generatedFactory = null)
    {
        $this-&gt;someParam = $someParam;
        $this-&gt;generatedFactory = $generatedFactory ?: ObjectManager::getInstance()-&gt;get(GeneratedFactory::class);
    }

    // Some code here...
}</code></pre>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/code-generation.html">Code generation</a> on Devdocs</li>
</ul>