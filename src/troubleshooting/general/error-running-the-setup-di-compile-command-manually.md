---
title: Error running the `setup:di:compile` command manually
labels: Magento Commerce Cloud,generated_code_symlink,setup:di:compile,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a fix for when running the `setup:di:compile` command manually on Adobe Commerce on cloud infrastructure fails with an error (see the **Issue** section below) because the command tries to access the `var/di` and `var/generation` directories, which are read-only.

This is expected behavior: the `setup:di:compile` command should not be run manually on Adobe Commerce on cloud infrastructure since it is executed automatically during the deployment process.

We strongly do not recommend running `setup:di:compile` manually, but if you have a reason to do so, you need to set the following environment variable to make `var/di` and `var/generation` folders writable:

```clike
GENERATED_CODE_SYMLINK = disabled
```

Note that with code symlink generation disabled, the deployment downtime increases.

>![info]
>
>The build variable `GENERATED_CODE_SYMLINK` was removed for Adobe Commerce on cloud infrastructure 2.2 and later.

## Affected versions

* Adobe Commerce on cloud infrastructure 2.0.X, 2.1.X

## Issue

Running the `the setup:di:compile` command manually fails with the following error:

```clike
web@<path>:~$ php bin/magento setup:di:compile
The file "/app/var/generation/<path/to/resource>" cannot be deleted Warning!unlink(/app/var/generation/Composer/Console/ApplicationFactory.php): Read-only file system#0 /app/vendor/magento/framework/Filesystem/Driver/File.php(405): Magento\Framework\Filesystem\Driver\File->deleteFile('/app/var/genera...')
#1 /app/vendor/magento/framework/Filesystem/Driver/File.php(403): Magento\Framework\Filesystem\Driver\File->deleteDirectory('/app/var/genera...')
#2 /app/vendor/magento/framework/Filesystem/Driver/File.php(403): Magento\Framework\Filesystem\Driver\File->deleteDirectory('/app/var/genera...')
#3 /app/setup/src/Magento/Setup/Console/CompilerPreparation.php(68): Magento\Framework\Filesystem\Driver\File->deleteDirectory('/app/var/genera...')
#4 /app/vendor/magento/framework/Console/Cli.php(65): Magento\Setup\Console\CompilerPreparation->handleCompilerEnvironment()
#5 /app/bin/magento(22): Magento\Framework\Console\Cli->__construct('Magento CLI')
#6 {main}
PHP Fatal error:  Uncaught Error: Class 'Cli' not found in /app/bin/magento:31
Stack trace:
#0 {main}
  thrown in /app/bin/magento on line 31
Fatal error: Uncaught Error: Class 'Cli' not found in /app/bin/magento:31
Stack trace:
#0 {main}
  thrown in /app/bin/magento on line 31
```

## Cause

The error occurs because the `setup:di:compile` command tries to access the `var/di` and `var/generation` directories, which are read-only.

It is not a defect but an expected behavior on cloud environments. You should not run `setup:di:compile` manually since this command is being executed during the deployment process. The code for Adobe Commerce cannot be changed on the fly (because it is located in the read-only directories), so there is no need to recompile `var/di` and `var/generation`: there is no difference with files generated during deployment.

## Solution

Make the `var/di` and `var/generation` directories writable by setting the environment variable below:

```clike
GENERATED_CODE_SYMLINK = disabled
```

This allows you to run `setup:di:compile` manually, but the deployment process lasts longer.

## More information in our developer documentation

Environment variables are covered in the articles of the [Manage variables](https://devdocs.magento.com/cloud/env/variables-cloud.html) section.

Particular topics you might be interested in:

* [Adobe Commerce on cloud infrastructure variables](https://devdocs.magento.com/cloud/env/variables-cloud.html)
* Add environment variables via [CLI](https://devdocs.magento.com/cloud/project/project-webint-basic.html#project-conf-env-var) and the [Project Web Interface](https://devdocs.magento.com/cloud/project/project-webint-basic.html#project-conf-env-var)
