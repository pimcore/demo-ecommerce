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
   'key' => 'featuresBenefitsShoes',
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
         'type' => '',
         'region' => '',
         'title' => '',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'fieldtype' => 'multiselect',
             'options' => 
            array (
              0 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> Nr. 36 Fabric',
                'value' => 'fB_SH.nr36Fabric',
              ),
              1 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> synthetic',
                'value' => 'fB_SH.synthetic',
              ),
              2 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> nubuk leather',
                'value' => 'fB_SH.nubuk-leather',
              ),
              3 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> oiled leather',
                'value' => 'fB_SH.oiled-leather',
              ),
              4 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> Mesh',
                'value' => 'fB_SH.mesh',
              ),
              5 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> PU',
                'value' => 'fB_SH.pu',
              ),
              6 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> rubber cup outsole',
                'value' => 'fB_SH.rubber-cup-outsole',
              ),
              7 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> TPR',
                'value' => 'fB_SH.tpr',
              ),
              8 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> Phylon / Rubber',
                'value' => 'fB_SH.phylon-rubber',
              ),
              9 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> EVA / Rubber',
                'value' => 'fB_SH.eva-rubber',
              ),
              10 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> PU / Rubber',
                'value' => 'fB_SH.pu-rubber',
              ),
              11 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_89.png"/> Suede leather',
                'value' => 'fB_SH.suede-leather',
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
   'dao' => NULL,
));
