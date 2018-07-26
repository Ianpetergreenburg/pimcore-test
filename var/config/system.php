<?php 

return [
    "general" => [
        "timezone" => "Europe/Berlin",
        "path_variable" => "",
        "domain" => "",
        "redirect_to_maindomain" => FALSE,
        "language" => "en",
        "validLanguages" => "en,de",
        "fallbackLanguages" => [
            "en" => "",
            "de" => ""
        ],
        "defaultLanguage" => "",
        "loginscreencustomimage" => "",
        "disableusagestatistics" => FALSE,
        "debug_admin_translations" => TRUE,
        "devmode" => FALSE,
        "instanceIdentifier" => "",
        "show_cookie_notice" => FALSE
    ],
    "database" => [
        "params" => [
            "username" => "bn_pimcore",
            "password" => "d019e67e46",
            "dbname" => "bitnami_pimcore",
            "host" => "localhost",
            "port" => "3306"
        ]
    ],
    "documents" => [
        "versions" => [
            "days" => NULL,
            "steps" => 10
        ],
        "default_controller" => "Default",
        "default_action" => "default",
        "error_pages" => [
            "default" => "/error"
        ],
        "createredirectwhenmoved" => FALSE,
        "allowtrailingslash" => "no",
        "generatepreview" => TRUE
    ],
    "objects" => [
        "versions" => [
            "days" => NULL,
            "steps" => 10
        ]
    ],
    "assets" => [
        "versions" => [
            "days" => NULL,
            "steps" => 10
        ],
        "icc_rgb_profile" => "",
        "icc_cmyk_profile" => "",
        "hide_edit_image" => FALSE,
        "disable_tree_preview" => FALSE
    ],
    "services" => [
        "google" => [
            "client_id" => "655439141282-tic94n6q3j7ca5c5as132sspeftu5pli.apps.googleusercontent.com",
            "email" => "655439141282-tic94n6q3j7ca5c5as132sspeftu5pli@developer.gserviceaccount.com",
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
        "proxy_host" => "ip-10-10-98-226.nami",
        "proxy_port" => "80",
        "proxy_user" => "",
        "proxy_pass" => ""
    ],
    "email" => [
        "sender" => [
            "name" => "",
            "email" => ""
        ],
        "return" => [
            "name" => "",
            "email" => ""
        ],
        "method" => "mail",
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
        "method" => "mail",
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
    "branding" => [
        "color_login_screen" => "",
        "color_admin_interface" => ""
    ],
    "applicationlog" => [
        "mail_notification" => [
            "send_log_summary" => FALSE,
            "filter_priority" => NULL,
            "mail_receiver" => ""
        ],
        "archive_treshold" => "30",
        "archive_alternative_database" => ""
    ]
];
