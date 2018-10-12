<?php 

/** 
* Generated at: 2018-10-12T14:05:37+02:00


Fields Summary: 
 - specs [multiselect]
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
   'key' => 'shoeDetails',
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
         'title' => '',
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
                'key' => '<img src="/static/backend/img/bricks/details/icon_01.png"/> Die-cut EVA midsole',
                'value' => 'details.die-cut-eva-midsole',
              ),
              1 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_02.png"/> Rubber toe protection',
                'value' => 'details.rubber-toe-protection',
              ),
              2 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_03.png"/> Pro lacing system',
                'value' => 'details.pro-lacing-system',
              ),
              3 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_04.png"/> Heel protector a',
                'value' => 'details.heel-protector-a',
              ),
              4 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_05.png"/> Heel protector b',
                'value' => 'details.heel-protector-b',
              ),
              5 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_06.png"/> Comfort lacing system',
                'value' => 'details.comfort-lacing-system',
              ),
              6 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_07.png"/> Stabilizer',
                'value' => 'details.stabilizer',
              ),
              7 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_08.png"/> Molded EVA midsole',
                'value' => 'details.molded-eva-midsole',
              ),
              8 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_09.png"/> Multigrip sole',
                'value' => 'details.multigrip-sole',
              ),
              9 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_10.png"/> Water-flow insole',
                'value' => 'details.water-flow-insole',
              ),
              10 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_11.png"/> Comfort cushion system',
                'value' => 'details.comfort-cushion-system',
              ),
              11 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_12.png"/> Flex zone',
                'value' => 'details.flex-zone',
              ),
              12 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_13.png"/> Microfibre footbed',
                'value' => 'details.microfibre-footbed',
              ),
              13 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_14.png"/> EVA footbed',
                'value' => 'details.eva-footbed',
              ),
              14 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_15.png"/> Crampon compatible',
                'value' => 'details.crampon-compatible',
              ),
              15 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_16.png"/> 2nd density midsole',
                'value' => 'details.2nd-density-midsole',
              ),
              16 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/details/icon_17.png"/> Vibram',
                'value' => 'details.vibram',
              ),
            ),
             'width' => 800,
             'height' => 400,
             'maxItems' => '',
             'renderType' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'text',
             'columnType' => 'text',
             'phpdocType' => 'array',
             'name' => 'specs',
             'title' => '',
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
   'dao' => NULL,
));
