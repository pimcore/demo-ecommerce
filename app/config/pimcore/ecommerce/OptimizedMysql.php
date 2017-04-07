<?php 

return [
    "tenant" => [
        "generalSearchColumns" => [
            [
                "name" => "name"
            ],
            [
                "name" => "seoname"
            ],
            [
                "name" => "color"
            ]
        ],
        "columns" => [
            [
                "name" => "description",
                "type" => "text",
                "locale" => "en_GB",
                "filtergroup" => "string"
            ],
            [
                "name" => "firstImageAsset",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_DefaultRelations"
            ],
            [
                "name" => "firstCategory",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_DefaultRelations"
            ],
            [
                "name" => "linkProduct",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_DefaultRelations"
            ],
            [
                "name" => "name",
                "type" => "varchar(255)",
                "locale" => "en_GB",
                "filtergroup" => "string"
            ],
            [
                "name" => "seoname",
                "type" => "varchar(255)",
                "filtergroup" => "string"
            ],
            [
                "name" => "color",
                "type" => "varchar(255)",
                "filtergroup" => "multiselect"
            ],
            [
                "name" => "gender",
                "type" => "varchar(100)",
                "filtergroup" => "multiselect"
            ],
            [
                "name" => "features",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_DefaultObjects",
                "filtergroup" => "relation"
            ],
            [
                "name" => "technologies",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_DefaultObjects",
                "filtergroup" => "relation"
            ],
            [
                "name" => "tentTentPegs",
                "type" => "varchar(50)",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "tentSpecifications",
                    "fieldname" => "tentPegs"
                ]
            ],
            [
                "name" => "tentWaterproofRain",
                "type" => "varchar(50)",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "tentSpecifications",
                    "fieldname" => "waterproofRain"
                ]
            ],
            [
                "name" => "tentWaterproofGround",
                "type" => "varchar(50)",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "tentSpecifications",
                    "fieldname" => "waterproofGround"
                ]
            ],
            [
                "name" => "rucksacksVolume",
                "type" => "double",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_Numeric",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "rucksackSpecs",
                    "fieldname" => "volume"
                ]
            ],
            [
                "name" => "rucksacksWeight",
                "type" => "double",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_Numeric",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "rucksackSpecs",
                    "fieldname" => "weight"
                ]
            ],
            [
                "name" => "rucksacksLoad",
                "type" => "double",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_Numeric",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "rucksackSpecs",
                    "fieldname" => "load"
                ]
            ],
            [
                "name" => "matsWidth",
                "type" => "double",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "matsSpecs",
                    "fieldname" => "width"
                ]
            ],
            [
                "name" => "matsLength",
                "type" => "double",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "matsSpecs",
                    "fieldname" => "length"
                ]
            ],
            [
                "name" => "matsHeight",
                "type" => "double",
                "getter" => "OnlineShop_Framework_IndexService_Getter_DefaultBrickGetter",
                "filtergroup" => "string",
                "config" => [
                    "brickfield" => "specificAttributes",
                    "bricktype" => "matsSpecs",
                    "fieldname" => "height"
                ]
            ],
            [
                "name" => "simularity_color",
                "fieldname" => "color",
                "hideInFieldlistDatatype" => "true",
                "type" => "INTEGER",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_Soundex"
            ],
            [
                "name" => "simularity_gender",
                "fieldname" => "gender",
                "hideInFieldlistDatatype" => "true",
                "type" => "INTEGER",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_Soundex"
            ],
            [
                "name" => "simularity_category",
                "fieldname" => "categories",
                "hideInFieldlistDatatype" => "true",
                "type" => "INTEGER",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_ObjectIdSum"
            ],
            [
                "name" => "simularity_feature",
                "fieldname" => "features",
                "hideInFieldlistDatatype" => "true",
                "type" => "INTEGER",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_ObjectIdSum"
            ],
            [
                "name" => "simularity_technolgy",
                "fieldname" => "technologies",
                "hideInFieldlistDatatype" => "true",
                "type" => "INTEGER",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_ObjectIdSum"
            ],
            [
                "name" => "simularity_attributes",
                "fieldname" => "attributes",
                "hideInFieldlistDatatype" => "true",
                "type" => "INTEGER",
                "interpreter" => "OnlineShop_Framework_IndexService_Interpreter_ObjectIdSum"
            ]
        ]
    ]
];
