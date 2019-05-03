<?php 

/** 
* Generated at: 2018-07-16T21:14:18+02:00
* Inheritance: no
* Variants: no
* IP: 10.242.2.5


Fields Summary: 
- name [input]
- group [href]
- reference [input]
- calculated [checkbox]
- useAsTargetGroup [checkbox]
- targetGroup [targetGroup]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '37',
   'name' => 'CustomerSegment',
   'description' => NULL,
   'creationDate' => 0,
   'modificationDate' => 1531768458,
   'userOwner' => 0,
   'userModification' => 10,
   'parentClass' => '\\CustomerManagementFrameworkBundle\\Model\\AbstractCustomerSegment',
   'useTraits' => NULL,
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
         'labelWidth' => 100,
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
             'fieldtype' => 'fieldset',
             'labelWidth' => 180,
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Settings',
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
                 'title' => 'Segment name',
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
            ),
             'locked' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
             'fieldtype' => 'fieldset',
             'labelWidth' => 180,
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'System information',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Href::__set_state(array(
                 'fieldtype' => 'href',
                 'width' => 700,
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
                ),
                 'pathFormatterClass' => '',
                 'name' => 'group',
                 'title' => 'Group',
                 'tooltip' => 'Drag and drop segment into groups in the tree',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
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
                 'name' => 'reference',
                 'title' => 'Reference',
                 'tooltip' => 'needs to be unique within the group',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => true,
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => 0,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'calculated',
                 'title' => 'calculated',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => 0,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'useAsTargetGroup',
                 'title' => 'Use As Target Group',
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
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\TargetGroup::__set_state(array(
                 'fieldtype' => 'targetGroup',
                 'options' => 
                array (
                  0 => 
                  array (
                    'value' => 4,
                    'key' => 'basketball',
                  ),
                  1 => 
                  array (
                    'value' => 13,
                    'key' => 'blue-lover',
                  ),
                  2 => 
                  array (
                    'value' => 12,
                    'key' => 'female-interested',
                  ),
                  3 => 
                  array (
                    'value' => 5,
                    'key' => 'football',
                  ),
                  4 => 
                  array (
                    'value' => 6,
                    'key' => 'handball',
                  ),
                  5 => 
                  array (
                    'value' => 11,
                    'key' => 'male-interested',
                  ),
                  6 => 
                  array (
                    'value' => 16,
                    'key' => 'new-customer',
                  ),
                  7 => 
                  array (
                    'value' => 7,
                    'key' => 'outdoor',
                  ),
                  8 => 
                  array (
                    'value' => 17,
                    'key' => 'regular-customer',
                  ),
                  9 => 
                  array (
                    'value' => 8,
                    'key' => 'running',
                  ),
                  10 => 
                  array (
                    'value' => 10,
                    'key' => 'technical-guy',
                  ),
                  11 => 
                  array (
                    'value' => 18,
                    'key' => 'vip-customer',
                  ),
                  12 => 
                  array (
                    'value' => 9,
                    'key' => 'volleyball',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'name' => 'targetGroup',
                 'title' => 'Linked TargetGroup',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => NULL,
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
   'icon' => '/bundles/pimcorecustomermanagementframework/icons/segment.svg',
   'previewUrl' => NULL,
   'group' => 'CustomerManagement',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => NULL,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'path' => false,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'path' => false,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
