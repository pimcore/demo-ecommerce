<?php 

return [
    "Workflow-TODO" => [
        "name" => "Workflow-TODO",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE status = 'todo' OR status = 'reopened')",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE status = 'todo' OR status = 'reopened')",
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
                "id" => "extModel1041-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Key",
                "id" => "extModel1041-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Name",
                "id" => "extModel1041-3"
            ],
            [
                "name" => "artno",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Art-No",
                "id" => "extModel1041-4"
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
        "modificationDate" => 1513850254,
        "creationDate" => 1513848303,
        "id" => "Workflow-TODO"
    ],
    "Workflow-In-Review" => [
        "name" => "Workflow-In-Review",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE status = 'in_review')",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE status = 'in_review')",
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
                "id" => "extModel1035-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Key",
                "id" => "extModel1035-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Name",
                "id" => "extModel1035-3"
            ],
            [
                "name" => "artno",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Art-No",
                "id" => "extModel1035-4"
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
        "modificationDate" => 1513850199,
        "creationDate" => 1513848310,
        "id" => "Workflow-In-Review"
    ],
    "Workflow-In-Progress" => [
        "name" => "Workflow-In-Progress",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE status = 'in_progress')",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, artno FROM object_localized_12_en_GB WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE status = 'in_progress')",
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
                "id" => "extModel6487-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Key",
                "id" => "extModel6487-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Name",
                "id" => "extModel6487-3"
            ],
            [
                "name" => "artno",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Art-No",
                "id" => "extModel6487-4"
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
        "modificationDate" => 1513850622,
        "creationDate" => 1513850471,
        "id" => "Workflow-In-Progress"
    ]
];
