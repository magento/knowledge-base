Learn how to customize (add, delete, change) the configuration options available in the <span class="glossary-term" data-toggle="popover">Magento Admin</span>. These options define the various aspects of <span class="glossary-term" data-toggle="popover">storefront</span> design.

The location of your customizations display in different locations based on your Magento version:

*   Magento Commerce and Open Source 2.0.x and earlier: Options set under __STORES__ &gt; __Configuration__ &gt; __Design__
*   Magento Commerce and Open Source 2.1.0 and later: Options set under __CONTENT &gt; Design &gt; Configuration__

## Environment and technologies

*   Magento Commerce
*   Magento Commerce (Cloud)
*   Magento Open Source

## Prerequisites

*   Magento installed
*   Credentials or access to Magento Admin

## Steps

<p class="info">The following walk-through uses version 2.1.0 and later.</p>

In Magento out of the box, when you navigate to __CONTENT__ &gt; __Design__ &gt; __Configuration__ in Admin, the first page that opens displays a grid with the available configuration scopes and assigned themes. It looks like following:

![design_conf1.png](https://support.magento.com/hc/article_attachments/360006327754/design_conf1.png)

When you click __Edit__ in any of the scope records, the page with available design options is displayed. For example, the default set of design options for the <span class="glossary-term" data-toggle="popover">store view</span> level is the following:

![design_conf2.png](https://support.magento.com/hc/article_attachments/360006365533/design_conf2.png)

Both the grid and the configuration form are implemented using UI components.

To change the grid view, you need to [customize the grid](#customize_grid) configuration by adding your custom <code class="highlighter-rouge">design\_config\_listing.xml</code> in your <span class="glossary-term" data-toggle="popover">module</span>.

To change the available design settings you need to [customize the grid](#customize_grid) configuration by adding your custom <code class="highlighter-rouge">design\_config\_form.xml</code> in your module. If you add a new field, you must also declare it in <code class="highlighter-rouge">di.xml</code> how it is processed and saved.

<h2 id="customize_grid">Customize the grid</h2>

The grid containing the configuration scopes is implemented using the [grid UI component](https://devdocs.magento.com/guides/v2.2/ui_comp_guide/components/ui-listing-grid.html).

To customize the grid view, take the following steps:

1.   
    
    In the <code class="highlighter-rouge">&lt;your\_module\_dir&gt;/view/adminhtml/ui\_component</code> directory, add the empty <code class="highlighter-rouge">design\_config\_listing.xml</code>.
    
    
2.   
    
    In the <code class="highlighter-rouge">design\_config\_listing.xml</code> file, create an element to in which to add your customizations. For example, if you want to rename the column displaying the selected theme, your grid configuration must contain the following:
    
    

<figure class="highlight">
<div class="pre-wrap">
<pre><code class="language-xml" data-lang="xml"><span class="cp">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>

<span class="nt">&lt;listing</span> <span class="na">xmlns:xsi=</span><span class="s">"http://www.w3.org/2001/XMLSchema-instance"</span> <span class="na">xsi:noNamespaceSchemaLocation=</span><span class="s">"urn:magento:module:Magento_Ui:etc/ui_configuration.xsd"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;columns</span> <span class="na">name=</span><span class="s">"design_config_columns"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;column</span> <span class="na">name=</span><span class="s">"theme_theme_id"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"data"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"config"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"label"</span> <span class="na">xsi:type=</span><span class="s">"string"</span> <span class="na">translate=</span><span class="s">"true"</span><span class="nt">&gt;</span>%New theme column name%<span class="nt">&lt;/item&gt;</span>
                <span class="nt">&lt;/item&gt;</span>
            <span class="nt">&lt;/argument&gt;</span>
        <span class="nt">&lt;/column&gt;</span>
    <span class="nt">&lt;/columns&gt;</span>
<span class="nt">&lt;/listing&gt;</span></code></pre>
</div>
</figure>

Your <code class="highlighter-rouge">design\_config\_listing.xml</code> is merged with the same files from the other modules. So there is no need to copy their content, you only need to define changes. Even if you want to customize the existing entities, you only have to mention those options, the values of which are customized.

For reference, view the grid configuration files of the Magento modules:

*   <code class="highlighter-rouge">&lt;Magento\_Backend\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_listing.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Theme\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_listing.xml</code>

If you add a certain field as additional grid column, you also need to set the field’s <code class="highlighter-rouge">use\_in\_grid</code> property in the [None](https://devdocs.magento.com/guides/v2.2/howdoi/design_config.html#meta_data).

<h2 id="customize_options">Customize the design options</h2>

These sections detail how to customize [form configuration](#customize-the-form-configuration) and [fields metadata](#meta_data).

<h3 id="customize-the-form-configuration">Customize the form configuration</h3>

Design configuration form is implemented using the [form UI component](http://devdocs.magento.com/guides/v2.2/ui_comp_guide/components/ui-form.html).

To customize the form view, take the following steps:

1.   
    
    Create an empty <code class="highlighter-rouge">design\_config\_form.xml</code> file in the <code class="highlighter-rouge">&lt;your\_module\_dir&gt;/view/adminhtml/ui\_component/</code> directory.
    
    
2.   
    
    Add content similar to the following:
    
    

<figure class="highlight">
<div class="pre-wrap">
<pre><code class="language-xml" data-lang="xml"><span class="nt">&lt;form</span> <span class="na">xmlns:xsi=</span><span class="s">"http://www.w3.org/2001/XMLSchema-instance"</span> <span class="na">xsi:noNamespaceSchemaLocation=</span><span class="s">"urn:magento:module:Magento_Ui:etc/ui_configuration.xsd"</span><span class="nt">&gt;</span>

    <span class="nt">&lt;fieldset</span> <span class="na">name=</span><span class="s">"%fieldset_name%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"data"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"config"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"label"</span> <span class="na">xsi:type=</span><span class="s">"string"</span> <span class="na">translate=</span><span class="s">"true"</span><span class="nt">&gt;</span>%Fieldset Label as displayed in UI%<span class="nt">&lt;/item&gt;</span>
                <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"sortOrder"</span> <span class="na">xsi:type=</span><span class="s">"number"</span><span class="nt">&gt;</span>%order for displaying%<span class="nt">&lt;/item&gt;</span>
            <span class="nt">&lt;/item&gt;</span>
         <span class="nt">&lt;/argument&gt;</span>
        <span class="c">&lt;!--Field sets can be nested --&gt;</span>
        <span class="nt">&lt;fieldset</span> <span class="na">name=</span><span class="s">"%nested_fieldset_name%"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"data"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"config"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"label"</span> <span class="na">xsi:type=</span><span class="s">"string"</span> <span class="na">translate=</span><span class="s">"true"</span><span class="nt">&gt;</span>%Nested fieldset Label as displayed in UI%<span class="nt">&lt;/item&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"collapsible"</span> <span class="na">xsi:type=</span><span class="s">"boolean"</span><span class="nt">&gt;</span>true<span class="nt">&lt;/item&gt;</span>
                    <span class="c">&lt;!-- Nesting level, the value should correspond to the actual nesting level in the config xml file. For the top field set level = 0 --&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"level"</span> <span class="na">xsi:type=</span><span class="s">"number"</span><span class="nt">&gt;</span>%level of nesting%<span class="nt">&lt;/item&gt;</span>
                <span class="nt">&lt;/item&gt;</span>
            <span class="nt">&lt;/argument&gt;</span>
            <span class="nt">&lt;field</span> <span class="na">name=</span><span class="s">"%field_name%"</span><span class="nt">&gt;</span>
    			<span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"data"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"config"</span> <span class="na">xsi:type=</span><span class="s">"array"</span>
                        <span class="err">&lt;item</span> <span class="na">name=</span><span class="s">"%field_option1%"</span> <span class="na">xsi:type=</span><span class="s">"%option_type%"</span><span class="nt">&gt;</span>%value%<span class="nt">&lt;/item&gt;</span>
                        <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"%field_option2%"</span> <span class="na">xsi:type=</span><span class="s">"%option_type%"</span><span class="nt">&gt;</span>%value%<span class="nt">&lt;/item&gt;</span>
....
                    <span class="nt">&lt;/item&gt;</span>
                <span class="nt">&lt;/argument&gt;</span>
            <span class="nt">&lt;/field&gt;</span>
        <span class="nt">&lt;/fieldset&gt;</span>
    <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
</div>
</figure>

Your custom fields and field sets will be available for all configuration scopes (website, store, and store view).

Your <code class="highlighter-rouge">design\_config\_form.xml</code> is merged with the same files from the other modules. So there is no need to copy their content, you only need to add your customizations.

To customize an existing entity, declare only those options, the values of which are customized, do not copy its entire configuration.

For example, if you only want to rename the __Other Settings__ field set, your form configuration must contain the following:

<figure class="highlight">
<div class="pre-wrap">
<pre><code class="language-xml" data-lang="xml"><span class="cp">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>

<span class="nt">&lt;form</span> <span class="na">xmlns:xsi=</span><span class="s">"http://www.w3.org/2001/XMLSchema-instance"</span> <span class="na">xsi:noNamespaceSchemaLocation=</span><span class="s">"urn:magento:module:Magento_Ui:etc/ui_configuration.xsd"</span><span class="nt">&gt;</span>

    <span class="nt">&lt;fieldset</span> <span class="na">name=</span><span class="s">"other_settings"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"data"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"config"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"label"</span> <span class="na">xsi:type=</span><span class="s">"string"</span> <span class="na">translate=</span><span class="s">"true"</span><span class="nt">&gt;</span>Other Settings<span class="nt">&lt;/item&gt;</span>

            <span class="nt">&lt;/item&gt;</span>
        <span class="nt">&lt;/argument&gt;</span>
    <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
</div>
</figure>

To delete an existing field, or field set, in your <code class="highlighter-rouge">design\_config\_form.xml</code> use the following syntax:

<figure class="highlight">
<div class="pre-wrap">
<pre><code class="language-xml" data-lang="xml">...
    <span class="nt">&lt;fieldset</span> <span class="na">name=</span><span class="s">"%fieldset_name%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"data"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"disabled"</span> <span class="na">xsi:type=</span><span class="s">"boolean"</span><span class="nt">&gt;</span>true<span class="nt">&lt;/item&gt;</span>
        <span class="nt">&lt;/argument&gt;</span>
    <span class="nt">&lt;/fieldset&gt;</span>
...</code></pre>
</div>
</figure>

For reference, view the form configuration files of Magento modules:

*   <code class="highlighter-rouge">&lt;Magento\_Backend\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_form.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Catalog\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_form.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Email\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_form.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Swatches\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_form.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Theme\_module\_dir&gt;/view/adminhtml/ui\_component/design\_config\_form.xml</code>

<h3 id="meta_data">Add fields’ metadata</h3>

If in the design configuration form you add new fields, in <code class="highlighter-rouge">&lt;your\_module\_dir&gt;/etc/di.xml</code> you must specify their parent field sets and the path in the database. You can also declare the backend model used for processing the field values. If you do not specify any model, the default <code class="highlighter-rouge">Magento\\Framework\\App\\Config\\Value</code> model is used.

The field declaration in a <code class="highlighter-rouge">di.xml</code> looks like following:

<figure class="highlight">
<div class="pre-wrap">
<pre><code class="language-xml" data-lang="xml">...
<span class="nt">&lt;type</span> <span class="na">name=</span><span class="s">"Magento\Theme\Model\Design\Config\MetadataProvider"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;arguments&gt;</span>
        <span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"metadata"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                <span class="c">&lt;!-- field name as described in configuration --&gt;</span>
                <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"%field name%"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                    <span class="c">&lt;!-- the path to the field in system configuration storage in DB--&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"path"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>%path in system config%<span class="nt">&lt;/item&gt;</span>
                    <span class="c">&lt;!-- the name of field set for current field, as described in form configuration --&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"fieldset"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>%parent_fieldset%<span class="nt">&lt;/item&gt;</span>
                    <span class="c">&lt;!-- The php model used for field value processing --&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"backend_model"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>%Backend\Model\For\\Field\Processing%<span class="nt">&lt;/item&gt;</span>
                    <span class="c">&lt;!-- Define whether the field value is displayed in the Design Configuration grid --&gt;</span>
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"use_in_grid"</span> <span class="na">xsi:type=</span><span class="s">"boolean"</span><span class="nt">&gt;</span>true|false<span class="err">&lt;</span>/&gt;
                    <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"base_url"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"type"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;&lt;/item&gt;</span>
                        <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"scope_info"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;&lt;/item&gt;</span>
                        <span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"value"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;&lt;/item&gt;</span>
                    <span class="nt">&lt;/item&gt;</span>
                <span class="nt">&lt;/item&gt;</span>
        <span class="nt">&lt;/argument&gt;</span>
    <span class="nt">&lt;/arguments&gt;</span>
<span class="nt">&lt;/type&gt;</span>
...</code></pre>
</div>
</figure>

Example of field declaration:

<figure class="highlight">
<div class="pre-wrap">
<pre><code class="language-xml" data-lang="xml"><span class="nt">&lt;type</span> <span class="na">name=</span><span class="s">"Magento\Theme\Model\Design\Config\MetadataProvider"</span><span class="nt">&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;arguments&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;argument</span> <span class="na">name=</span><span class="s">"metadata"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"head_shortcut_icon"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"path"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>design/head/shortcut_icon<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"fieldset"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>head<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"backend_model"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>Magento\Config\Model\Config\Backend\Image\Favicon<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"base_url"</span> <span class="na">xsi:type=</span><span class="s">"array"</span><span class="nt">&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"type"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>media<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"scope_info"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;item</span> <span class="na">name=</span><span class="s">"value"</span> <span class="na">xsi:type=</span><span class="s">"string"</span><span class="nt">&gt;</span>favicon<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/item&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/item&gt;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/argument&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/arguments&gt;</span>
<span class="nt">&lt;/type&gt;</span></code></pre>
</div>
</figure>

For more examples and reference, view the <code class="highlighter-rouge">di.xml</code> files of the Magento modules:

*   <code class="highlighter-rouge">&lt;Magento\_Backend\_module\_dir&gt;/etc/di.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Catalog\_module\_dir&gt;/etc/di.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Email\_module\_dir&gt;/etc/di.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Swatches\_module\_dir&gt;/etc/di.xml</code>
*   <code class="highlighter-rouge">&lt;Magento\_Theme\_module\_dir&gt;/etc/di.xml</code>

<h2 id="access_options">Accessing the options values in backend models</h2>

The design configuration option values are stored in the <code class="highlighter-rouge">core\_config\_data</code> table in the database, similar to the values of System Configuration options, and can be accessed using the <code class="highlighter-rouge">\\Magento\\Framework\\App\\ConfigInterface</code> mechanism.

&nbsp;