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
   'key' => 'featuresBenefitsBackpacks',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'fieldtype' => 'multiselect',
             'options' => 
            array (
              0 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_01.png"/> Adjustable top lid',
                'value' => 'fb_BP.adjustable-top-lid',
              ),
              1 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_02.png"/> Integrated side pocket',
                'value' => 'fb_BP.integrated-side-pocket',
              ),
              2 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_03.png"/> Bottle holder',
                'value' => 'fb_BP.bottle-holder',
              ),
              3 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_04.png"/> Trekking pole fixation',
                'value' => 'fb_BP.trekking-pole-fixation',
              ),
              4 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_05.png"/> Ice axe fixation',
                'value' => 'fb_BP.ice-axe-fixation',
              ),
              5 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_06.png"/> Integrated raincover',
                'value' => 'fb_BP.integrated-raincover',
              ),
              6 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_07.png"/> Hipbelt pocket',
                'value' => 'fb_BP.hipbelt-pocket',
              ),
              7 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_08.png"/> Direct side entry',
                'value' => 'fb_BP.direct-side-entry',
              ),
              8 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_09.png"/> Front opening',
                'value' => 'fb_BP.front-opening',
              ),
              9 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_10.png"/> Top lid pocket',
                'value' => 'fb_BP.top-lid-pocket',
              ),
              10 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_11.png"/> Helmet fixation',
                'value' => 'fb_BP.helmet-fixation',
              ),
              11 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_12.png"/> Reflecting parts',
                'value' => 'fb_BP.reflecting-parts',
              ),
              12 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_13.png"/> Detachable daybag',
                'value' => 'fb_BP.detachable-daybag',
              ),
              13 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_14.png"/> Organizer',
                'value' => 'fb_BP.organizer',
              ),
              14 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_15.png"/> Ski fixation',
                'value' => 'fb_BP.ski-fixation',
              ),
              15 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_16.png"/> Snowshoe fixation',
                'value' => 'fb_BP.snowshoe-fixation',
              ),
              16 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_17.png"/> Snowboard fixation',
                'value' => 'fb_BP.snowboard-fixation',
              ),
              17 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_18.png"/> Stowable fixation',
                'value' => 'fb_BP.stowable-fixation',
              ),
              18 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_19.png"/> Internal shovel and avalanche probe pocket',
                'value' => 'fb_BP.internal-shovel-and-avalanche-probe-pocket',
              ),
              19 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_20.png"/> Stowable ice axe fixation',
                'value' => 'fb_BP.stowable-ice-axe-fixation',
              ),
              20 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_21.png"/> Music player compatible',
                'value' => 'fb_BP.music-player-compatible',
              ),
              21 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_22.png"/> Handy pocket',
                'value' => 'fb_BP.handy-pocket',
              ),
              22 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_23.png"/> Ykk zip',
                'value' => 'fb_BP.ykk-zip',
              ),
              23 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_24.png"/> Trolley system',
                'value' => 'fb_BP.trolley-system',
              ),
              24 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_25.png"/> Including sun roof',
                'value' => 'fb_BP.including-sun-roof',
              ),
              25 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_26.png"/> Neck-protector',
                'value' => 'fb_BP.neck-protector',
              ),
              26 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_27.png"/> Cosmetic bag',
                'value' => 'fb_BP.cosmetic-bag',
              ),
              27 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_28_a.png"/> Detachable hipbelt',
                'value' => 'fb_BP.detachable-hipbelt',
              ),
              28 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_28_b.png"/> Woman specific hipbelt',
                'value' => 'fb_BP.woman-specific-hipbelt',
              ),
              29 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_29_a.png"/> Shoulder straps',
                'value' => 'fb_BP.shoulder-straps',
              ),
              30 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_29_b.png"/> Woman specific shoulder straps',
                'value' => 'fb_BP.woman-specific-shoulder-straps',
              ),
              31 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_30.png"/> Woman specific shortened back length',
                'value' => 'fb_BP.woman-specific-shortened-back-length',
              ),
              32 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_31.png"/> Lightweight',
                'value' => 'fb_BP.lightweight',
              ),
              33 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_32.png"/> Laptop case',
                'value' => 'fb_BP.laptop-case',
              ),
              34 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_33.png"/> Insulated hydro sleeve',
                'value' => 'fb_BP.insulated-hydro-sleeve',
              ),
              35 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_34.png"/> Meets most airline carry-on requirements',
                'value' => 'fb_BP.meets-most-airline-carry-on-requirements',
              ),
              36 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_35.png"/> Snatrix',
                'value' => 'fb_BP.snatrix',
              ),
              37 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_36.png"/> Fleece lined goggle pocket',
                'value' => 'fb_BP.fleece-lined-goggle-pocket',
              ),
              38 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_37.png"/> Internal mesh pocket',
                'value' => 'fb_BP.internal-mesh-pocket',
              ),
              39 => 
              array (
                'key' => '<img src="/static/backend/img/bricks/featuresBenefits/icon_38.png"/> Chest belt',
                'value' => 'fb_BP.chest-belt',
              ),
            ),
             'width' => 800,
             'height' => 600,
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
