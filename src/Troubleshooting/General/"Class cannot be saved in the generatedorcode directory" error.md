---
title: "Class cannot be saved in the generatedorcode directory" error
link: https://support.magento.com/hc/en-us/articles/360032133671--Class-cannot-be-saved-in-the-generated-code-directory-error
labels: Cloud,generated
---

This article describes how to fix the issue where the way you specified dependencies prevents classes to be auto-generated on the fly, and you get the _"Class cannot be saved in the generated/code directory"_ error message.

### Affected products and versions

* Magento Commerce Cloud 2.2.0 or later

## Issue

Steps to reproduce

1. In your local environment, write a custom class with a dependency on the auto-generated class.
1. Run the scenario, where your custom class is triggered, and see it working correctly.
1. Commit and push your changes to the integration environment. This would trigger the deployment process. Deployment is successful.
1. In the [integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter), run the scenario where your custom class is triggered.

Expected result

Everything works correctly, the same way as in your local environment.

Actual result

Failure with the error message saying that your class cannot be saved in the `` generated/code `` directory.

## Cause

The cause of the problem is that the class on which you have dependency, does not get generated during the deployment, and cannot be generated later on the fly when the class is triggered, because the `` generated/code  ``directory is unavailable for writing after deployment is completed.

There are two main reasons why this could happen: 

* Case 1: The class with dependencies on auto-generated classes is located in the entry point (like `` index.php ``), which is not scanned for dependencies during deployment.
* Case 2: The dependency to the auto-generated class is specified directly (compare to the recommended usage of constructor to declare dependency).

## Solution

One common solution for both cases would be creating a real factory instead of the auto-generated class.

Or there is a particular solution for each case.

### Case 1 specific solution

Move your class code from the entry point to a separate module and then use it in the entry point.

Example

Original code in, for example, `` index2.php ``:

<pre><code class="language-php">&lt;?php
use YourVendor\SomeModule\Model\GeneratedFactory;

require realpath(__DIR__) . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

class SomeClass
{
    private $generatedFactory;

    public function __construct(GeneratedFactory $generatedFactory)
    {
        $this->generatedFactory = $generatedFactory;
    }

    // Some code here...
}

$someObject = $bootstrap->getObjectManager()->create(SomeClass::class);

// There is some code that uses $someObject</code></pre>

You need to take the following steps:

1. Move the class definition to `` app/code/YourVendor/YourModule ``:
    
    <pre><code class="language-php">&lt;?php
namespace YourVendor\YourModule;

use YourVendor\YourModule\Model\GeneratedFactory;

class YourClass
{
    private $generatedFactory;

    public function __construct(GeneratedFactory $generatedFactory)
    {
        $this->generatedFactory = $generatedFactory;
    }

    // Some code here...
}</code></pre>
    
    
1. Edit the entry point `` my_api/index.php `` so that it looks like following:
    
    <pre><code class="language-php">&lt;?php

use YourVendor\YourModule\YourClass;

require realpath(__DIR__) . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

$someObject = $bootstrap->getObjectManager()->create(YourClass::class);

// Some code using $someObject</code></pre>
    
    

### Case 2 specific solution

Move dependency declaration to the constructor.

Example

Original class declaration:

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
        $this--->someParam = $someParam;
        $this->generatedFactory = ObjectManager::getInstance()->get(GeneratedFactory::class);
    }

    // Some code here...
}</code></pre>

You need to change its constructor as following:

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
        $this->someParam = $someParam;
        $this->generatedFactory = $generatedFactory ?: ObjectManager::getInstance()->get(GeneratedFactory::class);
    }

    // Some code here...
}</code></pre>

## Related reading

* [Code generation](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/code-generation.html) on Devdocs