---
title: How to add a new country to Adobe Commerce
labels: Magento Commerce Cloud,add country,configuration,data,installation,module,upgrade,Adobe Commerce
---

This article explains how to add a country that is not present in Adobe Commerce and the Zend Locale Library. This requires code and database changes that constitute Customer Customizations under your applicable agreement terms. Please note that the example materials included in this article are provided "AS IS" without a warranty of any kind. Neither Adobe nor any affiliated entity is obligated to maintain, correct, update, change, modify, or otherwise support these materials. Here we will describe the basic principles of what needs to be done in order to achieve this.

In this example, we create a new Adobe Commerce module with a data patch which is applied upon Adobe Commerce installation or upgrade process, and adds an Abstract Country with the country code XX to Adobe Commerce. The [Adobe Commerce Directory](https://devdocs.magento.com/guides/v2.4/mrg/ce/Directory.html) builds an initial country list and then it uses Setup Patches to append territories to that list. This article explains how to create a new module which will append a new country to the list. You may review the code of the existing Adobe Commerce Directory module for reference. This is because the following example module continues the Directory module job of building a list of countries and regions, and re-uses parts of the code of the Adobe Commerce Directory module Setup Patches.

## Recommended documentation

You must be familiar with Adobe Commerce module development in order to create a new one.

Please refer to the following topics in our developer documentation before attempting to create a new module:

* [PHP Developer Guide](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/bk-extension-dev-guide.html)  
* [Module overview](https://devdocs.magento.com/guides/v2.4/architecture/archi_perspectives/components/modules/mod_intro.html)
* [Create a New Module](https://devdocs.magento.com/videos/fundamentals/create-a-new-module/)
* [Module configuration files](https://devdocs.magento.com/guides/v2.4/config-guide/config/config-files.html)  

## Required Information

A new country must have a unique Name, Country ID, ISO2, and ISO3 codes throughout Adobe Commerce.

## Module structure

In this example, we are going to create a new module called \`ExtraCountries\` with the following directory structure:

(To find out more about the module structure, see [Module overview](https://devdocs.magento.com/guides/v2.4/architecture/archi_perspectives/components/modules/mod_intro.html) in our developer documentation).

<pre><ExtraCountries>
 |
 <etc>
 | |
 | config.xml
 | di.xml
 | module.xml
 |
 <Plugin>
 | |
 | <Framework>
 |   |
 |   <Locale>
 |     |
 |     TranslatedListsPlugin.php
 |
 <Setup>
 | |
 | <Patch>
 |   |
 |   <Data>
 |     |
 |     AddDataForAbstractCountry.php
 |
 composer.json
 registration.php</pre>

>![info]
>
>Note: Each Header section of this article describes files from the module structure section.

## ExtraCountries/etc/config.xml

A new module configuration is defined in this XML file. The following configurations and tags can be edited in order to adjust the new country default settings.

* `allow` - To add the newly added country to the "Allow Countries" list by default, append the new Country Code to the end of the `allow` tag content. Country codes are comma separated. Please note that this tag will overwrite the data from the `Directory` module configuration file *(Directory/etc/config.xml)* `allow` tag, that's why we repeat all the codes here plus adding the new one.
* `optional_zip_countries` - If the zip code for the newly added country should be optional, append the country code to the end of the content of the `optional_zip_countries` tag. Country codes are comma separated. Please note that this tag will overwrite the data from the `Directory` module configuration file *(Directory/etc/config.xml)* `optional_zip_countries` tag, that's why we repeat all the codes here plus adding the new one.
* `eu_countries` - If the newly added country must be a part of the European Union Countries list by default, append the country code to the end of the content of the `eu_countries` tag. Country codes are comma separated. Please note that this tag will overwrite the data from the `Store` module configuration file *(\_Store/etc/config.xml\_)* `eu_countries` tag, that's why we repeat all the codes here plus adding the new one.
* `config.xml` file example

```xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Store:etc/config.xsd">
    <default>
        <general>
            <country>
                <!-- append a new country codes to the end of this list -->
                <allow>AF,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AX,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BL,BT,BO,BQ,BA,BW,BV,BR,IO,VG,BN,BG,BF,BI,KH,CM,CA,CD,CV,KY,CF,TD,CL,CN,CX,CW,CC,CO,KM,CG,CK,CR,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GG,GH,GI,GR,GL,GD,GP,GU,GT,GN,GW,GY,HT,HM,HN,HK,HU,IS,IM,IN,ID,IR,IQ,IE,IL,IT,CI,JE,JM,JP,JO,KZ,KE,KI,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,ME,MF,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,FX,MX,FM,MD,MC,MN,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,KP,MP,NO,OM,PK,PW,PA,PG,PY,PE,PH,PN,PL,PS,PT,PR,QA,RE,RO,RS,RU,RW,SH,KN,LC,PM,VC,WS,SM,ST,SA,SN,SC,SL,SG,SK,SI,SB,SO,ZA,GS,KR,ES,LK,SD,SR,SJ,SZ,SE,CH,SX,SY,TL,TW,TJ,TZ,TH,TG,TK,TO,TT,TN,TR,TM,TC,TV,VI,UG,UA,AE,GB,US,UM,UY,UZ,VU,VA,VE,VN,WF,EH,XK,YE,ZM,ZW,XX</allow>
​
                <!-- if added countries need to belong to the European Union Countries list by default, append their codes to the end of this list -->
                <eu_countries>AT,BE,BG,CY,CZ,DK,EE,FI,FR,DE,GR,HR,HU,IE,IT,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,ES,SE,GB,XX</eu_countries>
​
                <!-- if added countries are not require zip code, append it's code to the end of this list -->
                <optional_zip_countries>HK,IE,MO,PA,GB,XX</optional_zip_countries>
            </country>
        </general>
    </default>
</config>
```

For more information on the module configuration files, see [PHP Developer Guide > Define Configurations files](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/required-configuration-files.html) in our developer documentation.

Note that these changes are optional and will only affect the default belonging of the new country to the "Allow Countries", "Zip/Postal Code is Optional for", and "European Union Countries" lists. If this file is skipped from the module structure, a new country will still be added, but it will have to be manually configured at the **Admin** > **Stores** > *Settings* > **Configuration** > **General** > **Country Options** settings page.

### ExtraCountries/etc/di.xml

The `di.xml` file configures which dependencies are injected by the object manager. See <a>PHP Developer Guide > The di.xml</a> in our developer documentation for more details on `di.xml`.

In our example, we must register a `_TranslatedListsPlugin_` which will translate newly introduced Country Codes into a full Country Names, if codes are not present in the Zend Locale Library localization data.

 `di.xml` example

```xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
    <type name="Magento\Framework\Locale\TranslatedLists">
        <plugin name="Magento_Directory" type="VendorName\ExtraCountries\Plugin\Framework\Locale\TranslatedListsPlugin"/>
    </type>
</config>
```

### ExtraCountries/etc/module.xml

In the module registration file we must specify the dependency for the "Adobe Commerce Directory" module making sure that the "Extra Countries" module will be registered and executed after the Directory module.

See [Managing module dependencies](https://devdocs.magento.com/guides/v2.4/architecture/archi_perspectives/components/modules/mod_depend.html#managing-module-dependencies) in our developer documentation for more information on module dependencies.

 `module.xml` example

```xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="VendorName_ExtraCountries" >
        <sequence>
            <module name="Magento_Directory"/>
        </sequence>
    </module>
</config>
```

### ExtraCountries/Plugin/Framework/Locale/TranslatedListsPlugin.php

In the `aroundGetCountryTranslation()` plugin method we must translate a country code into a full country name. This is a required step for countries that don't have a full name associated with a new country code in the Zend Locale Library.

```php
<?php
namespace VendorName\ExtraCountries\Plugin\Framework\Locale;
​
use Magento\Framework\Locale\ListsInterface;
​
/**
 * Plugin to add full names of added countries that are not included in Zend Locale Data
 */
class TranslatedListsPlugin
{
    /**
     * Get the full name of added countries
     *
     * Since the locale data for the added country may not be present in the Zend Locale Library,
     * we need to provide full country name matching the added code
     *
     * @param ListsInterface $subject
     * @param callable $proceed
     * @param $value
     * @param null $locale
     * @return string
     */
    public function aroundGetCountryTranslation(
        ListsInterface $subject,
        callable $proceed,
        $value,
        $locale = null
    )
    {
        if ($value == 'XX') {
            return 'Abstract Country';
        }
​
        return $proceed($value, $locale);
    }
}
```

### ExtraCountries/Setup/Patch/Data/AddDataForAbstractCountry.php

This data patch will be executed during the Adobe Commerce install/upgrade process and will add a new country record to the database.

See [Develop data and schema patches](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/declarative-schema/data-patches.html) in our developer documentation for more information on data patches.

In the example below, you can see that the `$data` array of the method `apply()` contains Country ID, ISO2, and ISO3 codes for the new country, and this data is being inserted into the database.

```php
<?php
namespace Magento\ExtraCountries\Setup\Patch\Data;
​
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
​
/**
 * Add Abstract Country data to the country list
 *
 * @package Magento\ExtraCountries\Setup\Patch
 */
class AddDataForAbstractCountry implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
​
    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }
​
    /**
     * @inheritdoc
     */
    public function apply()
    {
        /**
         * Fill table directory/country
         */
        $data = [
            ['XX', 'XX', 'XX']
        ];
​
        $columns = ['country_id', 'iso2_code', 'iso3_code'];
        $this->moduleDataSetup->getConnection()->insertArray(
            $this->moduleDataSetup->getTable('directory_country'),
            $columns,
            $data
        );
    }
​
    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
​
    /**
     * @inheritdoc
     */
    public static function getVersion()
    {
        return '0.0.1';
    }
​
    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
```

### ExtraCountries/registration.php

This is an example of the registration.php file. To find out more about module registration, see [PHP Developer Guide > Register your component](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/component-registration.html) in our developer documentation.

```php
<?php
use Magento\Framework\Component\ComponentRegistrar;
​
ComponentRegistrar::register(ComponentRegistrar::MODULE, 'VendorName_ExtraCountries', __DIR__);
```

### ExtraCountries/composer.json

This is an example of the composer.json file.

To find out more about composer.json, see [PHP Developer Guide > The composer.json file](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/composer-integration.html) in our developer documentation.

```json
{
    "name": "vendor_name/module-extra-countries",
    "description": "A module that adds extra countries to magento directory",
    "type": "magento2-module",
    "license": [
    ],
    "require": {
        "php": "~7.3.0||~7.4.0",
        "lib-libxml": "*",
        "magento/framework": "*",
        "magento/module-directory": "*"
    },
    "autoload": {
        "files": [
            "registration.php"
        ],
        "psr-4": {
            "VendorName\\ExtraCountries\\": ""
        }
    },
    "config": {
        "sort-packages": true
    }
}
```

## Module installation

To find out how to install the module, see [Module locations](https://devdocs.magento.com/guides/v2.4/architecture/archi_perspectives/components/modules/mod_intro.html#module-locations) in our developer documentation.

Once the module directory is placed in a correct location, execute `bin/magento setup:upgrade` to apply the data patches and register the translation plugin.

You may need to clean the browser cache for the new changes to work.
