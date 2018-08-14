<?php 

return [
    1 => [
        "id" => 1,
        "name" => "shop-detail",
        "pattern" => "#([a-z\\-\\_]+)/(.*?)\\~p([0-9]+)#",
        "reverse" => "/%prefix/%name~p%product",
        "module" => NULL,
        "controller" => "shop",
        "action" => "detail",
        "variables" => "prefix,name,product",
        "defaults" => NULL,
        "siteId" => NULL,
        "priority" => 3,
        "creationDate" => 1459937276,
        "modificationDate" => 1460212400
    ],
    2 => [
        "id" => 2,
        "name" => "cart",
        "pattern" => "#(\\w+)/cart/([a-z\\-\\_]++)#",
        "reverse" => "/%language/cart/%action",
        "module" => "",
        "controller" => "cart",
        "action" => "%action",
        "variables" => "language,action",
        "defaults" => NULL,
        "siteId" => NULL,
        "priority" => 1,
        "creationDate" => 1460118172,
        "modificationDate" => 1460123670
    ],
    3 => [
        "id" => 3,
        "name" => "checkout",
        "pattern" => "#(\\w+)/checkout/([\\w-]+)#",
        "reverse" => "/%language/checkout/%action",
        "module" => NULL,
        "controller" => "checkout",
        "action" => "%action",
        "variables" => "language,action",
        "defaults" => NULL,
        "siteId" => NULL,
        "priority" => 1,
        "creationDate" => 1460466830,
        "modificationDate" => 1470649590
    ],
    4 => [
        "name" => "wishlist",
        "pattern" => "#(\\w+)/wishlist/(\\w+)#",
        "reverse" => "/%country/wishlist/%action",
        "module" => NULL,
        "controller" => "wishlist",
        "action" => "%action",
        "variables" => "country,action",
        "defaults" => NULL,
        "siteId" => NULL,
        "priority" => 1,
        "creationDate" => 0,
        "modificationDate" => 0,
        "id" => 4
    ],
    6 => [
        "id" => 6,
        "name" => "shop-category-listing",
        "pattern" => "#([a-z\\-\\_]+)/(.*?)\\~c([0-9]+)#",
        "reverse" => "/%prefix/%name~c%category",
        "module" => "",
        "controller" => "shop",
        "action" => "list",
        "variables" => "prefix,name,category",
        "defaults" => NULL,
        "siteId" => NULL,
        "priority" => 2,
        "creationDate" => 1460125357,
        "modificationDate" => 1460212382
    ],
    8 => [
        "id" => 8,
        "name" => "action",
        "pattern" => "#/(.*?)/action/([a-zA-Z\\-\\_]+)/([a-z\\-]+)#",
        "reverse" => "/%prefix/action/%controller/%action",
        "module" => "",
        "controller" => "%controller",
        "action" => "%action",
        "variables" => "prefix,controller,action",
        "defaults" => NULL,
        "siteId" => [

        ],
        "priority" => 1,
        "legacy" => FALSE,
        "creationDate" => 1460199088,
        "modificationDate" => 1534249455
    ],
    9 => [
        "id" => 9,
        "name" => "payment",
        "pattern" => "#(\\w+)/checkout/([\\w-]+)#",
        "reverse" => "",
        "module" => "",
        "controller" => NULL,
        "action" => NULL,
        "variables" => NULL,
        "defaults" => NULL,
        "siteId" => NULL,
        "priority" => 0,
        "creationDate" => 1470649547,
        "modificationDate" => 1470649633
    ],
    10 => [
        "id" => 10,
        "name" => "app_login",
        "pattern" => "#(\\w+)/account/login#",
        "reverse" => "/%prefix/account/login",
        "module" => NULL,
        "controller" => "Account",
        "action" => "login",
        "variables" => "prefix",
        "defaults" => "prefix=/en",
        "siteId" => [

        ],
        "priority" => 0,
        "legacy" => FALSE,
        "creationDate" => 1507723177,
        "modificationDate" => 1507801558
    ],
    11 => [
        "id" => 11,
        "name" => "app_logout",
        "pattern" => "#(\\w+)/account/logout#",
        "reverse" => "/%prefix/account/logout",
        "module" => NULL,
        "controller" => "Account",
        "action" => "logout",
        "variables" => "prefix",
        "defaults" => "prefix=en",
        "siteId" => [

        ],
        "priority" => 0,
        "legacy" => FALSE,
        "creationDate" => 1507723278,
        "modificationDate" => 1507801561
    ]
];
