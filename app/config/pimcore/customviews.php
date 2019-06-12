<?php

return [
    "views" => [
        [
            "treetype" => "object",
            "name" => "Products",
            "condition" => NULL,
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-product.svg",
            "id" => 1,
            "rootfolder" => "/products",
            "showroot" => FALSE,
            "classes" => "",
            "position" => "left",
            "sort" => "3",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Orders",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-cart.svg",
            "id" => 2,
            "showroot" => FALSE,
            "rootfolder" => "/",
            "classes" => "",
            "position" => "left",
            "sort" => "4",
            "expanded" => TRUE,
            "where" => "(o_path LIKE '/order%' OR o_path LIKE '/order_otherfolder%' OR o_key = 'order' OR o_key = 'order_otherfolder') AND (o_type = \"folder\" || o_className = \"OnlineShopOrder\"  || o_className = \"OnlineShopOrderItem\" )"
        ],
        [
            "treetype" => "object",
            "name" => "Products",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-product.svg",
            "id" => 3,
            "showroot" => FALSE,
            "rootfolder" => "/products/products",
            "classes" => "12",
            "position" => "left",
            "sort" => "4",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Categories",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-category.svg",
            "id" => 4,
            "showroot" => false,
            "rootfolder" => "/products/categories/products",
            "classes" => "14",
            "position" => "left",
            "sort" => "4",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Product Attributes",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-setting.svg",
            "id" => 5,
            "showroot" => FALSE,
            "rootfolder" => "/products",
            "classes" => "23,15,16",
            "position" => "left",
            "sort" => "4",
            "expanded" => TRUE,
            "where" => "(o_path LIKE '/products/materials%' OR o_key = 'materials' OR o_path LIKE '/products/seasons%' OR o_key = 'seasons' OR o_path LIKE '/products/specifications%' OR o_key = 'specifications' OR o_path LIKE '/products/technologies%' OR o_key = 'technologies')"
        ],
        [
            "treetype" => "document",
            "name" => "Katalog",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-print.svg",
            "id" => 6,
            "showroot" => FALSE,
            "rootfolder" => "/print",
            "position" => "left",
            "sort" => "5",
            "expanded" => FALSE
        ]
    ]
];
