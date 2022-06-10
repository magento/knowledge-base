---
title: Troubleshoot upgrade compatibility tool errors
labels: troubleshooting,upgrade compatibility tool,uct,upgrade,adobe commerce,2.4.4
---

This article explains errors you may experience while using the Upgrade Compatibility Tool, and provides solutions to fix those errors so that you can succesfully execute the tool.

## Affected products and versions

* [Upgrade Compatibility Tool](https://experienceleague.adobe.com/docs/commerce-operations/upgrade-guide/upgrade-compatibility-tool/overview.html) is compatible with Adobe Commerce versions 2.3.0 to 2.4.4.

## Segmentation fault error

<ins>Cause</ins>:

When two modules have the same name the Upgrade Compatibility Tool shows a segmentation fault error.

<ins>Solution</ins>:

To avoid this error it is recommended to run the `bin` command with the added option `-m`:

```bash
bin/uct upgrade:check /<dir>/<instance-name> --coming-version=2.4.1 -m /vendor/<vendor-name>/<module-name>
```

>![info]
>
> The `<dir>` value is the directory where your Adobe Commerce instance is located.

### Adding the `-m` option

The `-m` option allows the Upgrade Compatibility Tool to analyze each specific module independently to avoid encountering two modules with the same name in your Adobe Commerce instance.

This command option also allows the Upgrade Compatibility Tool to analyze a folder containing several modules:

```bash
bin/uct upgrade:check /<dir>/<instance-name> --coming-version=2.4.1 -m /vendor/<vendor-name>/
```

This option also helps with memory issues that can occur when executing the Upgrade Compatibility Tool.

## Empty output

<ins>Steps to reproduce</ins>:

1. If after running this command:

   ```bash
   bin/uct upgrade:check INSTALLATION_DIR -c M2_VERSION
   ```

1. The only output is `Upgrade compatibility tool`:

   ```terminal
   bin/uct upgrade:check /var/www/project/magento/ -c 2.4.1
   Upgrade compatibility tool
   ```

<ins>Cause</ins>:

The likely cause is a PHP memory limitation.

<ins>Solution</ins>:

Override the memory limitation by setting `memory_limit` to `-1`:

```bash
php -d memory_limit=-1 /bin/uct upgrade:check INSTALLATION_DIR -c M2_VERSION
```

>![info]
>
> The `M2_VERSION` is the target Adobe Commerce version you want to compare to your Adobe Commerce instance.

