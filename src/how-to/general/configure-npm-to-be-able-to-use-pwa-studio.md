---
title: Configure NPM to be able to use PWA Studio
labels: 2.3.x,Magento Commerce Cloud,PWA,configuration,how to,npm,Adobe Commerce,cloud infrastructure
---

[Progressive Web Apps (PWA) Studio](https://magento.github.io/pwa-studio/) is a new project available for Adobe Commerce on cloud infrastructure 2.3.x or later. To be able to use and install PWA Studio, you need to set the NPM package manager version to 5.x or later to get support for Node.js 8.x. This is done in the `hooks:build` section of the `.magento.app.yaml` configuration file.

## Environment and technologies

* Adobe Commerce on cloud infrastructure 2.3.X
* PWA for Adobe Commerce

## Set NPM version: steps

To set the needed NPM version, specify it in the `.magento.app.yaml` configuration file. Follow these steps:

1. On your local development environment, locate the `.magento.app.yaml` configuration file.
1. Open the file for editing using your plain text editor or IDE.
1. Set the required version in the `hooks:build` section. In the following example, the configuration is set to install NPM v9.5.0, the highest available at the moment (February 4, 2019):
   ```yaml
   hooks:        
       build: |
           unset NPM_CONFIG_PREFIX
           curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.8/install.sh | bash            
           export NVM_DIR="$HOME/.nvm"
           [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"            
           nvm install 9.5.0    
   ```    
1. Save changes in the file.
1. Git push the edited file to your [integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter).

The changes come into effect after you Git push the updated YAML file to the environment.

## Related documentation

* [Application configuration: hooks](https://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_magento-app.html#hooks) in our developer documentation.
