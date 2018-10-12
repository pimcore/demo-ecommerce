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
   'key' => 'outdoor',
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
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_01.png"/> zip-in system',
                'value' => 'outdoor.zip-in-system',
              ),
              1 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_02.png"/> Airflow system',
                'value' => 'outdoor.airflow-system',
              ),
              2 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_03.png"/> Zip-off hood',
                'value' => 'outdoor.zip-off-hood',
              ),
              3 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_04.png"/> pre formed elbow',
                'value' => 'outdoor.pre-formed-elbow',
              ),
              4 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_05.png"/> double storm flap',
                'value' => 'outdoor.double-storm-flap',
              ),
              5 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_06.png"/> partial waist elastic',
                'value' => 'outdoor.partial-waist-elastic',
              ),
              6 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_07.png"/> Bottom-zip opening',
                'value' => 'outdoor.bottom-zip-opening',
              ),
              7 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_08.png"/> snap-off storm hood',
                'value' => 'outdoor.snap-off-storm-hood',
              ),
              8 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_09.png"/> storm hood',
                'value' => 'outdoor.storm-hood',
              ),
              9 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_10.png"/> roll-in storm hood',
                'value' => 'outdoor.roll-in-storm-hood',
              ),
              10 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_11.png"/> Full side zip',
                'value' => 'outdoor.full-side-zip',
              ),
              11 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_12.png"/> Detachable suspender',
                'value' => 'outdoor.detachable-suspender',
              ),
              12 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_13.png"/> Bottom gaitor',
                'value' => 'outdoor.bottom-gaitor',
              ),
              13 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_14.png"/> pre formed knee',
                'value' => 'outdoor.pre-formed-knee',
              ),
              14 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_15.png"/> flatlock seams',
                'value' => 'outdoor.flatlock-seams',
              ),
              15 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_16.png"/> moisture mamagement',
                'value' => 'outdoor.moisture-management',
              ),
              16 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_17.png"/> Snap-in system',
                'value' => 'outdoor.snap-in-system',
              ),
              17 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_18.png"/> Packable hood',
                'value' => 'outdoor.packable-hood',
              ),
              18 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_19.png"/> welded pocket',
                'value' => 'outdoor.welded-pocket',
              ),
              19 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_20.png"/> Collar adjustment',
                'value' => 'outdoor.collar-adjustment',
              ),
              20 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_21.png"/> Detachable snowskirt',
                'value' => 'outdoor.detachable-snowskirt',
              ),
              21 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_22.png"/> Napoleon pocket',
                'value' => 'outdoor.napoleon-pocket',
              ),
              22 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_23.png"/> Waist adjustment',
                'value' => 'outdoor.waist-adjustment',
              ),
              23 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_24.png"/> Elastic glove',
                'value' => 'outdoor.elastic-glove',
              ),
              24 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_25.png"/> Lasercut pocket',
                'value' => 'outdoor.lasercut-pocket',
              ),
              25 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_26.png"/> abrasion resistent print',
                'value' => 'outdoor.abrasion-resistent-print',
              ),
              26 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_27.png"/> separate packable bag',
                'value' => 'outdoor.separate-packable-bag',
              ),
              27 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_28.png"/> packable pants',
                'value' => 'outdoor.packable-pants',
              ),
              28 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_29.png"/> packable T-shirt',
                'value' => 'outdoor.packable-t-shirt',
              ),
              29 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_30.png"/> Roll up sleeve',
                'value' => 'outdoor.roll-up-sleeve',
              ),
              30 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_31.png"/> <img src="/static/backend/img/bricks/outdoor/icon_32.png"/> stow pocket pants',
                'value' => 'outdoor.stow-pocket-pants',
              ),
              31 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_33.png"/> <img src="/static/backend/img/bricks/outdoor/icon_34.png"/> <img src="/static/backend/img/bricks/outdoor/icon_35.png"/> packable T- Shirt',
                'value' => 'outdoor.packable-t-shirt',
              ),
              32 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_36.png"/> Bottom Adjustment',
                'value' => 'outdoor.bottom-adjustment',
              ),
              33 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_37.png"/> Zip-off pant',
                'value' => 'outdoor.zipp-off-pant',
              ),
              34 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_38.png"/> Integrated belt',
                'value' => 'outdoor.integrated-belt',
              ),
              35 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_39.png"/> Waterproof zips',
                'value' => 'outdoor.waterproof-zips',
              ),
              36 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_40.png"/> Chin guard',
                'value' => 'outdoor.chin-guard',
              ),
              37 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_41.png"/> Ventilation system (Shirt)',
                'value' => 'outdoor.ventilation-system-shirt',
              ),
              38 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_42.png"/> fixed snowskirt',
                'value' => 'outdoor.fixed-snowskirt',
              ),
              39 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_43.png"/> backpack function',
                'value' => 'outdoor.backpack-function',
              ),
              40 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/outdoor/icon_44.png"/> packable in pocket',
                'value' => 'outdoor.packable-in-pocket',
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
             'index' => '',
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
