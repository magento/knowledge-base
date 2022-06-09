---
title: Composer install command overides .gitignore file, Adobe Commerce
labels: troubleshooting,composer,github,Adobe Commerce,2.4.2-p1,2.3.7,cloud infrastructure
---

This article provides a solution for when a tracked `.gitignore` file is overriden by composer on Adobe Commerce on cloud infrastructure 2.4.2-p1 and 2.3.7.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.4.2-p1 and 2.3.7.

## Issue

`.gitignore` file is being overwritten when running composer install command.

<ins>Steps to reproduce</ins>:


1. Create an empty directory for your workspace.
1. Run this command in the root directory:

    ```bash
    composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition:2.4.2-p1.
    ```
    \# or 2.3.7

1. Then run the following commands:
    1. `echo "/this/line/should/stay" >> .gitignore`
    1. `git init`
    1. `git add * && git add .*`
    1. `git commit -m "Init"` # file commited to repo
    1. `rm -rf vendor/*`
    1. `composer install`
    1. `git diff`

        ```git
        diff --git a/.gitignore b/.gitignore
        index c144521..7092a56 100644
        --- a/.gitignore
        +++ b/.gitignore
        @@ -70,4 +70,3 @@ atlassian*
        /generated/*
        !/generated/.htaccess
        .DS_Store
        -/this/line/should/stay
        ```

<ins>Expected result</ins>:

`.gitignore` is not overriden by composer.

<ins>Actual result</ins>:

`.gitignore` is overriden by every composer install run.

## Solution

To keep your custom `.gitignore file` you need to ignore it in the `magento-deploy-ignore` section.

```git
{
...
"extra": {
    "magento-deploy-ignore": {
        "*": [
            "/.gitignore"
        ]
    }
    ...
}
```


## Related reading

* [Tracked .gitignore file is overriden by composer!](https://github.com/magento/magento2/issues/32888) in Magento2 GitHub.
