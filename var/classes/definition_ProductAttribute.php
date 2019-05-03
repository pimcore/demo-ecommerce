<?php 

/** 
* Generated at: 2018-05-24T08:17:53+02:00
* Inheritance: no
* Variants: no
* IP: 192.168.9.18


Fields Summary: 
- localizedfields [localizedfields]
-- icon [image]
-- name [input]
-- seoname [input]
-- description [wysiwyg]
-- link [link]
-- images [multihref]
-- documents [multihref]
-- videos [multihref]
-- downloads [multihref]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '23',
   'name' => 'ProductAttribute',
   'description' => '',
   'creationDate' => 1366290920,
   'modificationDate' => 1527142673,
   'userOwner' => 1,
   'userModification' => 2,
   'parentClass' => '',
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
      Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
         'fieldtype' => 'localizedfields',
         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'fieldtype' => 'region',
             'name' => 'Layout',
             'type' => '',
             'region' => 'center',
             'title' => '',
             'width' => '',
             'height' => 800,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => '',
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => '',
                 'name' => 'Layout',
                 'type' => '',
                 'region' => 'center',
                 'title' => 'Base',
                 'width' => '',
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => '',
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                     'fieldtype' => 'image',
                     'width' => 200,
                     'height' => 200,
                     'uploadPath' => '',
                     'queryColumnType' => 'int(11)',
                     'columnType' => 'int(11)',
                     'phpdocType' => '\\Pimcore\\Model\\Asset\\Image',
                     'name' => 'icon',
                     'title' => 'Icon',
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
                     'name' => 'name',
                     'title' => 'Name',
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
                     'name' => 'seoname',
                     'title' => 'SEO Name',
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
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                     'fieldtype' => 'wysiwyg',
                     'width' => 580,
                     'height' => 450,
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
                     'style' => '',
                     'permissions' => '',
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                  4 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Link::__set_state(array(
                     'fieldtype' => 'link',
                     'queryColumnType' => 'text',
                     'columnType' => 'text',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Link',
                     'name' => 'link',
                     'title' => 'Further Details Document (read more)',
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
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => '',
                 'name' => 'Layout',
                 'type' => '',
                 'region' => 'east',
                 'title' => 'Media',
                 'width' => 330,
                 'height' => '',
                 'collapsible' => false,
                 'collapsed' => '',
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => '',
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
                     'fieldtype' => 'multihref',
                     'width' => 300,
                     'height' => 200,
                     'maxItems' => '',
                     'assetUploadPath' => '',
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
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
                     'fieldtype' => 'multihref',
                     'width' => 300,
                     'height' => 200,
                     'maxItems' => '',
                     'assetUploadPath' => '',
                     'queryColumnType' => 'text',
                     'phpdocType' => 'array',
                     'relationType' => true,
                     'objectsAllowed' => false,
                     'assetsAllowed' => false,
                     'assetTypes' => 
                    array (
                    ),
                     'documentsAllowed' => true,
                     'documentTypes' => 
                    array (
                    ),
                     'lazyLoading' => false,
                     'classes' => 
                    array (
                    ),
                     'pathFormatterClass' => NULL,
                     'name' => 'documents',
                     'title' => 'Documents',
                     'tooltip' => 'Link to Documents',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
                     'fieldtype' => 'multihref',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'assetUploadPath' => '',
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
                     'title' => 'Videos',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
                     'fieldtype' => 'multihref',
                     'width' => '',
                     'height' => '',
                     'maxItems' => '',
                     'assetUploadPath' => '',
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
                     'title' => 'Downloads',
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
                ),
                 'locked' => false,
              )),
            ),
             'locked' => false,
          )),
        ),
         'name' => 'localizedfields',
         'region' => '',
         'layout' => 'fit',
         'title' => 'Base',
         'width' => '',
         'height' => '',
         'maxTabs' => NULL,
         'labelWidth' => NULL,
         'hideLabelsWhenTabsReached' => NULL,
         'referencedFields' => 
        array (
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
