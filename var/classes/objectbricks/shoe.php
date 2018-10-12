<?php 

/** 
* Generated at: 2018-10-12T14:05:37+02:00


Fields Summary: 
 - footTypes [multiselect]
 - gaitTypes [multiselect]
*/ 


return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Product',
      'fieldname' => 'specificAttributes',
    ),
  ),
   'title' => NULL,
   'group' => NULL,
   'key' => 'shoe',
   'parentClass' => '',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'name' => NULL,
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
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 100,
         'layout' => '',
         'name' => 'Layout',
         'type' => NULL,
         'region' => '',
         'title' => 'Shoe Data',
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
             'fieldtype' => 'fieldset',
             'labelWidth' => 100,
             'name' => 'Layout',
             'type' => NULL,
             'region' => '',
             'title' => 'Foot Type',
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
                    'key' => 'Normal Foot',
                    'value' => 'normal',
                  ),
                  1 => 
                  array (
                    'key' => 'High Arch',
                    'value' => 'high',
                  ),
                  2 => 
                  array (
                    'key' => 'Low Arch',
                    'value' => 'low',
                  ),
                  3 => 
                  array (
                    'key' => 'Flat Foot',
                    'value' => 'flat',
                  ),
                ),
                 'width' => 400,
                 'height' => '',
                 'maxItems' => '',
                 'renderType' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'text',
                 'columnType' => 'text',
                 'phpdocType' => 'array',
                 'name' => 'footTypes',
                 'title' => 'Foot Type',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                 'fieldtype' => 'multiselect',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Over Pronator',
                    'value' => 'overpronator',
                  ),
                  1 => 
                  array (
                    'key' => 'Severe Over Pornator',
                    'value' => 'severeoverpronator',
                  ),
                  2 => 
                  array (
                    'key' => 'Under Pronator',
                    'value' => 'underpronator',
                  ),
                  3 => 
                  array (
                    'key' => 'Neutral',
                    'value' => 'neutral',
                  ),
                ),
                 'width' => 400,
                 'height' => '',
                 'maxItems' => '',
                 'renderType' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'text',
                 'columnType' => 'text',
                 'phpdocType' => 'array',
                 'name' => 'gaitTypes',
                 'title' => 'Gait Types',
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
   'dao' => NULL,
));
