---
title: Error (read-only file system) when accessing the read-only directory var generation
labels: Magento Commerce Cloud,deploy,generated_code_symlink,troubleshooting,var,var/generation,Adobe Commerce,error,cloud infrastructure,2.0,2.1
---

This article provides a fix for when on Adobe Commerce on cloud infrastructure you receive an error when the application accesses the `var/generation` directory. This might occur due to a missing constructor dependency injection. As an immediate workaround, you may turn off the symlink generation via this deployment variable:

```clike
GENERATED_CODE_SYMLINK = disabled
```

>![warning]
>
>The build variable `GENERATED_CODE_SYMLINK` was removed for Adobe Commerce on cloud infrastructure 2.2 and later.

## Affected versions

Adobe Commerce on cloud infrastructure 2.0.X, 2.1.X

## Issue

When the Adobe Commerce application tries to access resources located in the `var/generation` directory, errors like the following ones might occur:

```clike
"/app/var/generation/<path/to/resource>" file could not be written Warning!file_put_contents(/app/var/generation/<path/to/resource>): failed to open stream: Read-only file system in /app/vendor/magento/<path/to/resource>
The file "/app/var/generation/<path/to/resource>" cannot be deleted Warning!unlink(/app/var/generation/<path/to/resource>): Read-only file system
```

## Cause

The problem occurs when the constructor dependency injection has not been implemented for an optional or required dependency of the affected object. In this case, Adobe Commerce tries to generate the missing constructor dependencies on the fly, which causes an error because the var/generation directory is read-only during runtime.

## Possible solution

As an immediate fix, you may change the flow of the deployment process by disabling the symlink generation using the following environment variable:

```clike
GENERATED_CODE_SYMLINK = disabled
```

In this case, the generated objects are being copied directly to the destination directory instead of being symlinked. Thus, Adobe Commerce can successfully generate objects on the fly.

>![warning]
>
>Turning off symlink generation may increase the potential downtime of your environment during deployment.

### Permissions to change variables on Development, Staging, and Production

You may set the environment variable yourself on the local and Integration (Development) environments. For Staging and Production environments, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to change the variable.

## More information in our developer documentation:

* [Dependency injection](http://devdocs.magento.com/guides/v2.2/extension-dev-guide/depend-inj.html)
* [Code compiler](http://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-compiler.html)
* [Adobe Commerce application environment variables](http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html)
