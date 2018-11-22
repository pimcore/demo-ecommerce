<?php 

/** 
* Generated at: 2018-05-24T08:17:53+02:00
* Inheritance: no
* Variants: no
* IP: 192.168.9.18


Fields Summary: 
- name [input]
- tokenSettings [fieldcollections]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '33',
   'name' => 'OnlineShopVoucherSeries',
   'description' => '',
   'creationDate' => 1430222406,
   'modificationDate' => 1527142673,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractVoucherSeries',
   'useTraits' => '',
   'allowInherit' => false,
   'allowVariants' => false,
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
     'collapsed' => NULL,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 150,
         'layout' => NULL,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
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
             'html' => '<b>VoucherSeries </b>to set up valid voucher tokens.&nbsp;<div>- Name: Specify a name for this voucher series. Just for finding it again ;-)&nbsp;</div><div>-&nbsp;Token Settings: Specify a token calculation type and define specific settings for token generation.&nbsp;</div><div>Actual tokens are available in additional tab \'Voucher Service\'&nbsp;</div>',
             'renderingClass' => NULL,
             'renderingData' => NULL,
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => 'padding: 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
            ),
             'locked' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
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
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => true,
             'visibleSearch' => true,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
             'fieldtype' => 'fieldcollections',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
             'allowedTypes' => 
            array (
              0 => 'VoucherTokenTypePattern',
              1 => 'VoucherTokenTypeSingle',
            ),
             'lazyLoading' => false,
             'maxItems' => 1,
             'disallowAddRemove' => false,
             'disallowReorder' => true,
             'collapsed' => false,
             'collapsible' => false,
             'name' => 'tokenSettings',
             'title' => 'Token Settings',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'queryColumnType' => NULL,
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
   'icon' => '',
   'previewUrl' => '',
   'group' => NULL,
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => NULL,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
    'search' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
  ),
   'dao' => NULL,
));
