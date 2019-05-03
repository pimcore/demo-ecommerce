<?php 

/** 
* Generated at: 2018-10-12T14:02:48+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (19)
* IP: 192.168.9.95


Fields Summary: 
- localizedfields [localizedfields]
-- name [input]
-- seoname [input]
-- colorName [input]
-- price [numeric]
-- priceOld [numeric]
-- fromPrice [checkbox]
-- description [wysiwyg]
-- material [wysiwyg]
-- downloads [multihref]
-- videos [multihref]
-- rotation [href]
-- youtubeVideo [input]
-- textsAvailable [calculatedValue]
- artno [input]
- ean [input]
- size [input]
- brand [href]
- gender [multiselect]
- categories [objects]
- features [objects]
- technologies [objects]
- attributes [objects]
- collection [objects]
- color [multiselect]
- materialComposition [objectsMetadata]
- secondaryMaterialComposition [objectsMetadata]
- imagesInheritance [select]
- images [fieldcollections]
- specificAttributes [objectbricks]
- relatedProducts [objects]
- attributesAvailable [calculatedValue]
- variantsAvailable [calculatedValue]
- wfstate [multiselect]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '12',
   'name' => 'Product',
   'description' => '',
   'creationDate' => 1366282442,
   'modificationDate' => 1539345768,
   'userOwner' => 1,
   'userModification' => 19,
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractProduct',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'allowInherit' => true,
   'allowVariants' => true,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'name' => 'Layout',
         'type' => '',
         'region' => '',
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => '',
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
             'fieldtype' => 'localizedfields',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => NULL,
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => NULL,
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'Basic',
                     'type' => NULL,
                     'region' => '',
                     'title' => '',
                     'width' => '',
                     'height' => '',
                     'collapsible' => true,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => 300,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => NULL,
                         'name' => 'name',
                         'title' => 'Name',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left; margin-right:20px;',
                         'permissions' => '',
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => 300,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => NULL,
                         'name' => 'seoname',
                         'title' => 'SEO Name',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left;',
                         'permissions' => '',
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => 300,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => NULL,
                         'name' => 'colorName',
                         'title' => 'Color Name',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => true,
                         'locked' => false,
                         'style' => 'clear:both;',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                      )),
                    ),
                     'locked' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'Price',
                     'type' => NULL,
                     'region' => '',
                     'title' => 'Prices',
                     'width' => '',
                     'height' => '',
                     'collapsible' => true,
                     'collapsed' => false,
                     'bodyStyle' => 'clear:both;',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => 100,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => false,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => NULL,
                         'decimalSize' => 19,
                         'decimalPrecision' => 4,
                         'name' => 'price',
                         'title' => 'Regular Price',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left; margin: 0 10px 0;',
                         'permissions' => '',
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => 100,
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => false,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => NULL,
                         'decimalSize' => 19,
                         'decimalPrecision' => 4,
                         'name' => 'priceOld',
                         'title' => 'Price (old)',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left; margin: 0 10px 0 10px;',
                         'permissions' => '',
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                         'fieldtype' => 'checkbox',
                         'defaultValue' => 0,
                         'queryColumnType' => 'tinyint(1)',
                         'columnType' => 'tinyint(1)',
                         'phpdocType' => 'boolean',
                         'name' => 'fromPrice',
                         'title' => 'Price is from',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left; margin: 0 10px;',
                         'permissions' => '',
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => true,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'Text',
                     'type' => NULL,
                     'region' => '',
                     'title' => 'Marketing Text & Material',
                     'width' => '',
                     'height' => '',
                     'collapsible' => true,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                         'fieldtype' => 'wysiwyg',
                         'width' => 450,
                         'height' => 400,
                         'queryColumnType' => 'longtext',
                         'columnType' => 'longtext',
                         'phpdocType' => 'string',
                         'toolbarConfig' => '',
                         'name' => 'description',
                         'title' => 'Description',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left; margin: 0 30px 0 0;',
                         'permissions' => '',
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                         'fieldtype' => 'wysiwyg',
                         'width' => 450,
                         'height' => 400,
                         'queryColumnType' => 'longtext',
                         'columnType' => 'longtext',
                         'phpdocType' => 'string',
                         'toolbarConfig' => '',
                         'name' => 'material',
                         'title' => 'Material',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => 'float:left;',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 150,
                     'name' => 'Assets',
                     'type' => NULL,
                     'region' => '',
                     'title' => 'Videos, 360 etc',
                     'width' => '',
                     'height' => '',
                     'collapsible' => true,
                     'collapsed' => true,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
                         'fieldtype' => 'multihref',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => '',
                         'assetUploadPath' => NULL,
                         'queryColumnType' => 'text',
                         'phpdocType' => 'array',
                         'relationType' => true,
                         'objectsAllowed' => false,
                         'assetsAllowed' => true,
                         'assetTypes' => 
                        array (
                        ),
                         'documentsAllowed' => false,
                         'documentTypes' => 
                        array (
                        ),
                         'lazyLoading' => false,
                         'classes' => 
                        array (
                        ),
                         'pathFormatterClass' => NULL,
                         'name' => 'downloads',
                         'title' => 'Downloads (PDFs for Instructions etc)',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => '',
                         'datatype' => 'data',
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
                         'fieldtype' => 'multihref',
                         'width' => 500,
                         'height' => '',
                         'maxItems' => '',
                         'assetUploadPath' => NULL,
                         'queryColumnType' => 'text',
                         'phpdocType' => 'array',
                         'relationType' => true,
                         'objectsAllowed' => false,
                         'assetsAllowed' => true,
                         'assetTypes' => 
                        array (
                          0 => 
                          array (
                            'assetTypes' => 'video',
                          ),
                        ),
                         'documentsAllowed' => false,
                         'documentTypes' => 
                        array (
                        ),
                         'lazyLoading' => false,
                         'classes' => 
                        array (
                        ),
                         'pathFormatterClass' => NULL,
                         'name' => 'videos',
                         'title' => 'Videos (f4v)',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => '',
                         'datatype' => 'data',
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Href::__set_state(array(
                         'fieldtype' => 'href',
                         'width' => 300,
                         'assetUploadPath' => NULL,
                         'relationType' => true,
                         'queryColumnType' =>
                        array (
                          'id' => 'int(11)',
                          'type' => 'enum(\'document\',\'asset\',\'object\')',
                        ),
                         'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                         'objectsAllowed' => false,
                         'assetsAllowed' => true,
                         'assetTypes' => 
                        array (
                        ),
                         'documentsAllowed' => true,
                         'documentTypes' => 
                        array (
                          0 => 
                          array (
                            'documentTypes' => 'link',
                          ),
                        ),
                         'lazyLoading' => false,
                         'classes' => 
                        array (
                        ),
                         'pathFormatterClass' => NULL,
                         'name' => 'rotation',
                         'title' => '360° Rotation',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => '',
                         'datatype' => 'data',
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      3 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => 300,
                         'queryColumnType' => 'varchar',
                         'columnType' => 'varchar',
                         'columnLength' => 255,
                         'phpdocType' => 'string',
                         'regex' => '',
                         'unique' => NULL,
                         'name' => 'youtubeVideo',
                         'title' => 'YouTube Video',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                  )),
                ),
                 'locked' => false,
              )),
            ),
             'name' => 'localizedfields',
             'region' => '',
             'layout' => '',
             'title' => 'Attributes',
             'width' => '',
             'height' => '',
             'maxTabs' => NULL,
             'labelWidth' => NULL,
             'hideLabelsWhenTabsReached' => NULL,
             'referencedFields' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                 'fieldtype' => 'localizedfields',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                     'fieldtype' => 'calculatedValue',
                     'width' => 0,
                     'calculatorClass' => '\\AppBundle\\Tool\\QualityCalculator',
                     'queryColumnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                     'name' => 'textsAvailable',
                     'title' => '  Texts Available',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                ),
                 'name' => 'localizedfields',
                 'region' => NULL,
                 'layout' => NULL,
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'maxTabs' => NULL,
                 'labelWidth' => 150,
                 'hideLabelsWhenTabsReached' => NULL,
                 'referencedFields' => 
                array (
                ),
                 'fieldDefinitionsCache' => NULL,
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => NULL,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
            ),
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => '',
             'locked' => false,
             'style' => '',
             'permissions' => '',
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => true,
             'visibleSearch' => true,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 150,
             'layout' => '',
             'name' => 'Base Data',
             'type' => '',
             'region' => '',
             'title' => 'Base Data',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => '',
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 200,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 255,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => NULL,
                 'name' => 'artno',
                 'title' => 'Article Number',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => true,
                 'locked' => false,
                 'style' => 'float:left; margin-right:20px;',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 200,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 255,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => NULL,
                 'name' => 'ean',
                 'title' => 'EAN-Code',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => 'float:left;',
                 'permissions' => '',
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 200,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 255,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => NULL,
                 'name' => 'size',
                 'title' => 'Size',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => true,
                 'locked' => false,
                 'style' => 'clear:both;',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Href::__set_state(array(
                 'fieldtype' => 'href',
                 'width' => '',
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' =>
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'productBrand',
                  ),
                ),
                 'pathFormatterClass' => NULL,
                 'name' => 'brand',
                 'title' => 'Brand',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => '',
                 'datatype' => 'data',
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                 'fieldtype' => 'multiselect',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Men',
                    'value' => 'm',
                  ),
                  1 => 
                  array (
                    'key' => 'Women',
                    'value' => 'w',
                  ),
                  2 => 
                  array (
                    'key' => 'Boys',
                    'value' => 'b',
                  ),
                  3 => 
                  array (
                    'key' => 'Girls',
                    'value' => 'g',
                  ),
                ),
                 'width' => 150,
                 'height' => '',
                 'maxItems' => '',
                 'renderType' => 'list',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'queryColumnType' => 'text',
                 'columnType' => 'text',
                 'phpdocType' => 'array',
                 'name' => 'gender',
                 'title' => 'Gender',
                 'tooltip' => 'Hold CTRL to select more options',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
                 'fieldtype' => 'objects',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'lazyLoading' => false,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'ProductCategory',
                  ),
                ),
                 'pathFormatterClass' => NULL,
                 'name' => 'categories',
                 'title' => 'Categories',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => '',
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
                 'fieldtype' => 'objects',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'ProductAttribute',
                  ),
                  1 => 
                  array (
                    'classes' => 'ProductTechnology',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'features',
                 'title' => 'Features',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              7 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
                 'fieldtype' => 'objects',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'ProductTechnology',
                  ),
                  1 => 
                  array (
                    'classes' => 'ProductAttribute',
                  ),
                ),
                 'pathFormatterClass' => NULL,
                 'name' => 'technologies',
                 'title' => 'Technologies',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
                 'fieldtype' => 'objects',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => NULL,
                 'name' => 'attributes',
                 'title' => 'Attributes',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => '',
                 'datatype' => 'data',
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              9 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
                 'fieldtype' => 'objects',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => NULL,
                 'name' => 'collection',
                 'title' => 'Collection',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'fieldtype' => 'region',
             'name' => 'Material / Appearance',
             'type' => NULL,
             'region' => '',
             'title' => 'Material / Appearance',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => '',
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => 'center',
                 'title' => 'Colors',
                 'width' => '',
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                     'fieldtype' => 'multiselect',
                     'options' => 
                    array (
                      0 => 
                      array (
                        'key' => 'Black <span style="background:#000; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'black',
                      ),
                      1 => 
                      array (
                        'key' => 'Gray  <span style="background:#808080; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'gray',
                      ),
                      2 => 
                      array (
                        'key' => 'Maroon  <span style="background:#800000; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'maroon',
                      ),
                      3 => 
                      array (
                        'key' => 'Red  <span style="background:#FF0000; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'red',
                      ),
                      4 => 
                      array (
                        'key' => 'Green  <span style="background:#008000; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'green',
                      ),
                      5 => 
                      array (
                        'key' => 'Lime  <span style="background:#00FF00; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'lime',
                      ),
                      6 => 
                      array (
                        'key' => 'Olive  <span style="background:#808000; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'olive',
                      ),
                      7 => 
                      array (
                        'key' => 'Yellow  <span style="background:#FFFF00; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'yellow',
                      ),
                      8 => 
                      array (
                        'key' => 'Navy  <span style="background:#000080; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'navy',
                      ),
                      9 => 
                      array (
                        'key' => 'Blue  <span style="background:#0000FF; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'blue',
                      ),
                      10 => 
                      array (
                        'key' => 'Purple  <span style="background:#800080; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'purple',
                      ),
                      11 => 
                      array (
                        'key' => 'Fuchsia  <span style="background:#FF00FF; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'fuchsia',
                      ),
                      12 => 
                      array (
                        'key' => 'Teal  <span style="background:#008080; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'teal',
                      ),
                      13 => 
                      array (
                        'key' => 'Aqua  <span style="background:#00FFFF; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'aqua',
                      ),
                      14 => 
                      array (
                        'key' => 'Silver  <span style="background:#C0C0C0; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'silver',
                      ),
                      15 => 
                      array (
                        'key' => 'White  <span style="background:#FFFFFF;border:1px solid black; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'white',
                      ),
                      16 => 
                      array (
                        'key' => 'Orange <span style="background:#ff9600; width:80px; display:block; float:left;margin-right:20px">&nbsp;</span>',
                        'value' => 'Orange',
                      ),
                      17 => 
                      array (
                        'key' => 'empty',
                        'value' => '0',
                      ),
                    ),
                     'width' => 300,
                     'height' => 350,
                     'maxItems' => '',
                     'renderType' => NULL,
                     'optionsProviderClass' => NULL,
                     'optionsProviderData' => NULL,
                     'queryColumnType' => 'text',
                     'columnType' => 'text',
                     'phpdocType' => 'array',
                     'name' => 'color',
                     'title' => 'Color(s)',
                     'tooltip' => 'Choose the main color(s)',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => true,
                     'visibleSearch' => true,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ObjectsMetadata::__set_state(array(
                     'allowedClassId' => 'ProductTechnology',
                     'visibleFields' => '',
                     'columns' => 
                    array (
                      0 => 
                      array (
                        'position' => 1,
                        'key' => 'percent',
                        'label' => 'Percent',
                        'type' => 'number',
                        'value' => '',
                        'width' => 150,
                        'id' => 'extModel8439-1',
                      ),
                    ),
                     'fieldtype' => 'objectsMetadata',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'queryColumnType' => 'text',
                     'relationType' => true,
                     'lazyLoading' => true,
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => NULL,
                     'name' => 'materialComposition',
                     'title' => 'Material Composition',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'columnKeys' => 
                    array (
                      0 => 'percent',
                    ),
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\ObjectsMetadata::__set_state(array(
                     'allowedClassId' => 'ProductTechnology',
                     'visibleFields' => '',
                     'columns' => 
                    array (
                      0 => 
                      array (
                        'position' => 1,
                        'key' => 'percent',
                        'label' => 'Percent',
                        'type' => 'number',
                        'value' => '',
                        'width' => 150,
                        'id' => 'extModel8523-1',
                      ),
                    ),
                     'fieldtype' => 'objectsMetadata',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'queryColumnType' => 'text',
                     'relationType' => true,
                     'lazyLoading' => true,
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => NULL,
                     'name' => 'secondaryMaterialComposition',
                     'title' => 'Secondary Material Composition',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'columnKeys' => 
                    array (
                      0 => 'percent',
                    ),
                  )),
                ),
                 'locked' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => '',
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => 'east',
                 'title' => 'Images',
                 'width' => 350,
                 'height' => NULL,
                 'collapsible' => true,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                     'fieldtype' => 'select',
                     'options' => 
                    array (
                      0 => 
                      array (
                        'key' => 'Yes',
                        'value' => 'true',
                      ),
                      1 => 
                      array (
                        'key' => 'No',
                        'value' => 'false',
                      ),
                    ),
                     'width' => 120,
                     'defaultValue' => '',
                     'optionsProviderClass' => NULL,
                     'optionsProviderData' => NULL,
                     'queryColumnType' => 'varchar',
                     'columnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => 'string',
                     'name' => 'imagesInheritance',
                     'title' => 'Inheritance',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                     'fieldtype' => 'fieldcollections',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                     'allowedTypes' => 
                    array (
                      0 => 'productImages',
                    ),
                     'lazyLoading' => false,
                     'maxItems' => '',
                     'disallowAddRemove' => NULL,
                     'disallowReorder' => NULL,
                     'collapsed' => NULL,
                     'collapsible' => NULL,
                     'name' => 'images',
                     'title' => 'Images',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => '',
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                ),
                 'locked' => false,
              )),
            ),
             'locked' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => '',
             'name' => 'Product Specific Attributes',
             'type' => '',
             'region' => '',
             'title' => 'Product Specific Attributes',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => '',
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Objectbrick',
                 'allowedTypes' => 
                array (
                  0 => 'apparel',
                  1 => 'approvals',
                  2 => 'featuresBenefitsBackpacks',
                  3 => 'featuresBenefitsMats',
                  4 => 'featuresBenefitsShoes',
                  5 => 'featuresBenefitsSleepingbags',
                  6 => 'featuresBenefitsTents',
                  7 => 'featuresHeadlamps',
                  8 => 'matsSpecs',
                  9 => 'outdoor',
                  10 => 'rucksackSpecs',
                  11 => 'shoeDetails',
                  12 => 'shoe',
                  13 => 'snowsport',
                  14 => 'specsSleepingbags',
                  15 => 'tentGroundsheet',
                  16 => 'tentSpecifications',
                  17 => 'weight',
                ),
                 'maxItems' => '',
                 'name' => 'specificAttributes',
                 'title' => 'Attributes',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => '',
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => '',
             'name' => 'Cross Selling',
             'type' => NULL,
             'region' => '',
             'title' => 'Cross Selling',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
                 'fieldtype' => 'objects',
                 'width' => '',
                 'height' => '',
                 'maxItems' => 2,
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'Product',
                  ),
                ),
                 'pathFormatterClass' => NULL,
                 'name' => 'relatedProducts',
                 'title' => 'Related Products',
                 'tooltip' => 'You can add up to two related Products',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => '',
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 160,
             'layout' => NULL,
             'name' => 'Data Quality',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Data Quality',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
                 'fieldtype' => 'text',
                 'html' => '',
                 'renderingClass' => '\\AppBundle\\Tool\\QualityCalculator',
                 'renderingData' => '',
                 'name' => 'QualitySummary',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => '',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => 'padding: 10px; background-color: #d9edf7; border-color: #bce8f1 !important',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                ),
                 'locked' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                 'fieldtype' => 'localizedfields',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                     'fieldtype' => 'calculatedValue',
                     'width' => 0,
                     'calculatorClass' => '\\AppBundle\\Tool\\QualityCalculator',
                     'queryColumnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                     'name' => 'textsAvailable',
                     'title' => '  Texts Available',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                ),
                 'name' => 'localizedfields',
                 'region' => NULL,
                 'layout' => NULL,
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'maxTabs' => NULL,
                 'labelWidth' => 150,
                 'hideLabelsWhenTabsReached' => NULL,
                 'referencedFields' => 
                array (
                ),
                 'fieldDefinitionsCache' => NULL,
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => NULL,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                 'fieldtype' => 'calculatedValue',
                 'width' => 0,
                 'calculatorClass' => '\\AppBundle\\Tool\\QualityCalculator',
                 'queryColumnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                 'name' => 'attributesAvailable',
                 'title' => '  Attributes Available',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                 'fieldtype' => 'calculatedValue',
                 'width' => 0,
                 'calculatorClass' => '\\AppBundle\\Tool\\QualityCalculator',
                 'queryColumnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                 'name' => 'variantsAvailable',
                 'title' => '  Variants Available',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                 'fieldtype' => 'multiselect',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => '<div class="pimcore-workflow-place-indicator" style="background-color: #bfdadc; color:#000000">Start Product Magic</div>',
                    'value' => 'in_progress',
                  ),
                  1 => 
                  array (
                    'key' => '<div class="pimcore-workflow-place-indicator" style="background-color: green; color:#ffffff">Edit Texts</div>',
                    'value' => 'edit_text',
                  ),
                  2 => 
                  array (
                    'key' => '<div class="pimcore-workflow-place-indicator" style="background-color: red; color:#ffffff">Edit Images</div>',
                    'value' => 'edit_images',
                  ),
                  3 => 
                  array (
                    'key' => '<div class="pimcore-workflow-place-indicator" style="background-color: #bfdadc; color:#000000">Done Edit Texts</div>',
                    'value' => 'done_text',
                  ),
                  4 => 
                  array (
                    'key' => '<div class="pimcore-workflow-place-indicator" style="background-color: #bfdadc; color:#000000">Done Edit Images</div>',
                    'value' => 'done_images',
                  ),
                  5 => 
                  array (
                    'key' => '<div class="pimcore-workflow-place-indicator" style="background-color: #bfdadc; color:#000000">Product completed and Done</div>',
                    'value' => 'done_all',
                  ),
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'renderType' => 'tags',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'queryColumnType' => 'text',
                 'columnType' => 'text',
                 'phpdocType' => 'array',
                 'name' => 'wfstate',
                 'title' => 'wfstate',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '@AppBundle\\Model\\Product\\LinkGenerator',
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => false,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => false,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
