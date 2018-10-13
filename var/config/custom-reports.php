<?php 

return [
    "Workflow-TODO" => [
        "name" => "Workflow-TODO",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'todo' OR place = 'reopened')",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'todo' OR place = 'reopened')",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "o_id",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "ID",
                "columnAction" => "openObject",
                "id" => "extModel4526-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Key",
                "id" => "extModel4526-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Name",
                "id" => "extModel4526-3"
            ],
            [
                "name" => "artno",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Art-No",
                "id" => "extModel4526-4"
            ]
        ],
        "niceName" => "[Workflow] TODO",
        "group" => "Workflow",
        "groupIconClass" => "",
        "iconClass" => "pimcore_icon_workflow_action",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => NULL,
        "pieColumn" => NULL,
        "pieLabelColumn" => NULL,
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1539346244,
        "creationDate" => 1513848303,
        "id" => "Workflow-TODO"
    ],
    "Workflow-In-Review" => [
        "name" => "Workflow-In-Review",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'inReview')",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'inReview')",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "o_id",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "ID",
                "id" => "extModel4157-1",
                "columnAction" => "openObject"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Key",
                "id" => "extModel4157-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Name",
                "id" => "extModel4157-3"
            ],
            [
                "name" => "artno",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Art-No",
                "id" => "extModel4157-4"
            ]
        ],
        "niceName" => "[Workflow] In Review",
        "group" => "Workflow",
        "groupIconClass" => "",
        "iconClass" => "pimcore_icon_workflow_action ",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => NULL,
        "pieColumn" => NULL,
        "pieLabelColumn" => NULL,
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1539450964,
        "creationDate" => 1513848310,
        "id" => "Workflow-In-Review"
    ],
    "Workflow-In-Progress" => [
        "name" => "Workflow-In-Progress",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'inProgress')",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'inProgress')",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "o_id",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => NULL,
                "label" => "ID",
                "columnAction" => "openObject",
                "id" => "extModel4815-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Key",
                "id" => "extModel4815-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Name",
                "id" => "extModel4815-3"
            ],
            [
                "name" => "artno",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Art-No",
                "id" => "extModel4815-4"
            ]
        ],
        "niceName" => "[Workflow] In Progress",
        "group" => "Workflow",
        "groupIconClass" => "",
        "iconClass" => "pimcore_icon_workflow_action ",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => NULL,
        "pieColumn" => NULL,
        "pieLabelColumn" => NULL,
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1539346261,
        "creationDate" => 1513850471,
        "id" => "Workflow-In-Progress"
    ]
];
