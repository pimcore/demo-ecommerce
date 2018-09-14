<?php

return [
    "general" => [
        "timezone" => "Europe/Berlin",
        "path_variable" => "",
        "domain" => "",
        "redirect_to_maindomain" => FALSE,
        "language" => "en",
        "validLanguages" => "en_GB,de_AT,fr_FR",
        "fallbackLanguages" => [
            "en_GB" => "",
            "de_AT" => "",
            "fr_FR" => ""
        ],
        "defaultLanguage" => "",
        "loginscreencustomimage" => "",
        "disableusagestatistics" => FALSE,
        "http_auth" => [
            "username" => "",
            "password" => ""
        ],
        "debug_admin_translations" => FALSE,
        "devmode" => FALSE,
        "instanceIdentifier" => "demo-ecommerce",
        "show_cookie_notice" => FALSE
    ],
    "database" => [
        "adapter" => "Pdo_Mysql",
        "params" => [
            "host" => "localhost",
            "username" => "ecommercedemo",
            "password" => "secretpassword",
            "dbname" => "pimcore_ecommercedemo_pimcore",
            "port" => "3306"
        ]
    ],
    "documents" => [
        "versions" => [
            "days" => NULL,
            "steps" => 1
        ],
        "default_controller" => "default",
        "default_action" => "default",
        "error_pages" => [
            "default" => "/"
        ],
        "createredirectwhenmoved" => FALSE,
        "allowtrailingslash" => "no",
        "generatepreview" => TRUE
    ],
    "objects" => [
        "versions" => [
            "days" => NULL,
            "steps" => 1
        ]
    ],
    "assets" => [
        "versions" => [
            "days" => NULL,
            "steps" => NULL
        ],
        "icc_rgb_profile" => "",
        "icc_cmyk_profile" => "",
        "hide_edit_image" => FALSE,
        "disable_tree_preview" => FALSE
    ],
    "services" => [
        "google" => [
            "client_id" => "",
            "email" => "",
            "simpleapikey" => "AIzaSyCo9Wj49hYJWW2WgOju4iMYNTvdcBxmyQ8",
            "browserapikey" => "AIzaSyBJX16kWAmUVEz1c1amzp2iKqAfumbcoQQ"
        ]
    ],
    "cache" => [
        "enabled" => FALSE,
        "lifetime" => NULL,
        "excludePatterns" => "",
        "excludeCookie" => ""
    ],
    "outputfilters" => [
        "less" => FALSE,
        "lesscpath" => ""
    ],
    "webservice" => [
        "enabled" => TRUE
    ],
    "httpclient" => [
        "adapter" => "Socket",
        "proxy_host" => "",
        "proxy_port" => "",
        "proxy_user" => "",
        "proxy_pass" => ""
    ],
    "applicationlog" => [
        "mail_notification" => [
            "send_log_summary" => FALSE,
            "filter_priority" => NULL,
            "mail_receiver" => ""
        ],
        "archive_treshold" => "30",
        "archive_alternative_database" => ""
    ],
    "email" => [
        "sender" => [
            "name" => "Pimcore Demo",
            "email" => "demoshop@pimcore.org"
        ],
        "return" => [
            "name" => "",
            "email" => ""
        ],
        "method" => "sendmail",
        "smtp" => [
            "host" => "",
            "port" => "",
            "ssl" => NULL,
            "name" => "",
            "auth" => [
                "method" => NULL,
                "username" => "admin",
                "password" => "pimcore1492"
            ]
        ],
        "debug" => [
            "emailaddresses" => ""
        ]
    ],
    "newsletter" => [
        "sender" => [
            "name" => "",
            "email" => ""
        ],
        "return" => [
            "name" => "",
            "email" => ""
        ],
        "method" => NULL,
        "smtp" => [
            "host" => "",
            "port" => "",
            "ssl" => NULL,
            "name" => "",
            "auth" => [
                "method" => NULL,
                "username" => "",
                "password" => NULL
            ]
        ],
        "debug" => NULL,
        "usespecific" => FALSE
    ],
    "flags" => [
        "useZendDate" => FALSE
    ]
];
