<?php

return [
    "ecommerceframework" => [
        "environment" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Environment",
            "config" => [
                "defaultCurrency" => "EUR"
            ]
        ],
        "cartmanager" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\MultiCartManager",
            "config" => [
                "cart" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\Cart",
                    "guest" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\SessionCart"
                    ]
                ],
                "pricecalculator" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceCalculator",
                    "config" => [
                        "modificators" => [
                            "shipping" => [
                                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceModificator\\Shipping",
                                "config" => [
                                    "charge" => "5.90"
                                ]
                            ]
                        ]
                    ]
                ],
                "tenants" => [
                    "noShipping" => [
                        "pricecalculator" => [
                            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceCalculator",
                            "config" => [
                                "modificators" => "\n                                "
                            ]
                        ]
                    ],
                    "expensiveShipping" => [
                        "file" => "/ecommerce/cartmanager-expensiveShipping.php"
                    ]
                ]
            ]
        ],
        "pricesystems" => [
            "pricesystem" => [
                [
                    "name" => "default",
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PriceSystem\\AttributePriceSystem",
                    "config" => [
                        "attributename" => "price"
                    ]
                ],
                [
                    "name" => "defaultOfferToolPriceSystem",
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PriceSystem\\AttributePriceSystem",
                    "config" => [
                        "attributename" => "price"
                    ]
                ]
            ]
        ],
        "availablitysystems" => [
            "availablitysystem" => [
                "name" => "default",
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\AvailabilitySystem\\AttributeAvailabilitySystem"
            ]
        ],
        "checkoutmanager" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\CheckoutManager",
            "config" => [
                "steps" => [
                    "deliveryaddress" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\DeliveryAddress"
                    ],
                    "confirm" => [
                        "class" => "\\AppBundle\\Ecommerce\\Checkout\\Confirm"
                    ]
                ],
                "payment" => [
                    "provider" => "qpay"
                ],
                "commitorderprocessor" => [
                    "class" => "\\AppBundle\\Ecommerce\\Order\\Processor"
                ],
                "mails" => [
                    "confirmation" => "/en/emails/order-confirmation"
                ],
                "tenants" => [
                    "paypal" => [
                        "payment" => [
                            "provider" => "paypal"
                        ]
                    ],
                    "datatrans" => [
                        "payment" => [
                            "provider" => "datatrans"
                        ]
                    ],
                    "seamless" => [
                        "payment" => [
                            "provider" => "seamless"
                        ]
                    ],
                    "masterpass" => [
                        "steps" => [
                            "confirm" => [
                                "class" => "\\AppBundle\\Ecommerce\\Checkout\\Confirm"
                            ]
                        ],
                        "payment" => [
                            "provider" => "qpay"
                        ],
                        "commitorderprocessor" => [
                            "class" => "\\AppBundle\\Ecommerce\\Order\\MasterpassProcessor"
                        ],
                    ]
                ]
            ]
        ],
        "paymentmanager" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\PaymentManager",
            "statusClass" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\Status",
            "config" => [
                "provider" => [
                    [
                        "name" => "datatrans",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\Payment\\Datatrans",
                        "mode" => "sandbox",
                        "config" => [
                            "sandbox" => [
                                "merchantId" => "1000011011",
                                "sign" => "30916165706580013"
                            ],
                            "live" => [
                                "merchantId" => "",
                                "sign" => ""
                            ]
                        ]
                    ],
                    [
                        "name" => "qpay",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\Payment\\QPay",
                        "mode" => "sandbox",
                        "config" => [
                            "sandbox" => [
                                "secret" => "B8AKTPWBRMNBV455FG6M2DANE99WU2",
                                "customer" => "D200001",
                                "toolkitPassword" => "jcv45z"
                            ],
                            "live" => [
                                "secret" => "",
                                "customer" => ""
                            ]
                        ]
                    ],
                    [
                        "name" => "paypal",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\Payment\\PayPal",
                        "mode" => "sandbox",
                        "config" => [
                            "sandbox" => [
                                "api_username" => "paypal-facilitator_api1.i-2xdream.de",
                                "api_password" => "1375366858",
                                "api_signature" => "AT2PJj7VTo5Rt.wM6enrwOFBoD1fACBe1RbAEMsSshWFRhpvjAuPR8wD"
                            ]
                        ]
                    ],
                    [
                        "name" => "seamless",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\Payment\\WirecardSeamless",
                        "mode" => "sandbox",
                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method-selection.html.php",
                        "js" => "/static/js/payment/wirecard-seamless/frontend.js",
                        "config" => [
                            "sandbox" => [
                                "customerId" => "D200001",
                                "shopId" => "qmore",
                                "secret" => "B8AKTPWBRMNBV455FG6M2DANE99WU2",
                                "password" => "jcv45z",
                                "iframeCssUrl" => "/static/css/payment-iframe.css?elementsclientauth=disabled",
                                "paymentMethods" => [
                                    "PREPAYMENT" => [
                                        "icon" => "/static/img/wirecard-seamless/prepayment.png",
                                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method/prepayment.html.php"
                                    ],
                                    "CCARD" => [
                                        "icon" => "/static/img/wirecard-seamless/ccard.png",
                                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method/ccard.html.php"
                                    ],
                                    "PAYPAL" => [
                                        "icon" => "/static/img/wirecard-seamless/paypal.png"
                                    ],
                                    "SOFORTUEBERWEISUNG" => [
                                        "icon" => "/static/img/wirecard-seamless/sue.png"
                                    ],
                                    "INVOICE" => [
                                        "icon" => "/static/img/wirecard-seamless/payolution.png",
                                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method/invoice.html.php"
                                    ]
                                ]
                            ],
                            "live" => [
                                "customerId" => "",
                                "shopId" => "",
                                "secret" => "",
                                "password" => "",
                                "iframeCssUrl" => "/static/css/payment-iframe.css?elementsclientauth=disabled",
                                "paymentMethods" => [
                                    "PREPAYMENT" => [
                                        "icon" => "/static/img/wirecard-seamless/prepayment.png",
                                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method/prepayment.html.php"
                                    ],
                                    "CCARD" => [
                                        "icon" => "/static/img/wirecard-seamless/ccard.png",
                                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method/ccard.html.php"
                                    ],
                                    "PAYPAL" => [
                                        "icon" => "/static/img/wirecard-seamless/paypal.png"
                                    ],
                                    "SOFORTUEBERWEISUNG" => [
                                        "icon" => "/static/img/wirecard-seamless/sue.png"
                                    ],
                                    "INVOICE" => [
                                        "icon" => "/static/img/wirecard-seamless/payolution.png",
                                        "partial" => "PaymentSeamless/wirecard-seamless/payment-method/invoice.html.php"
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        "productindex" => [
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
                    "file" => "/ecommerce/additional-index.php",
                    "placeholders" => ["%locale%" => "de_AT"]
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
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects",
                    "filtergroup" => "relation"
                ],
                [
                    "name" => "technologies",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects",
                    "filtergroup" => "relation"
                ],
                [
                    "name" => "tentTentPegs",
                    "type" => "varchar(50)",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "tentSpecifications",
                        "fieldname" => "tentPegs"
                    ]
                ],
                [
                    "name" => "tentWaterproofRain",
                    "type" => "varchar(50)",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "tentSpecifications",
                        "fieldname" => "waterproofRain"
                    ]
                ],
                [
                    "name" => "tentWaterproofGround",
                    "type" => "varchar(50)",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "tentSpecifications",
                        "fieldname" => "waterproofGround"
                    ]
                ],
                [
                    "name" => "rucksacksVolume",
                    "type" => "double",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\Numeric",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "rucksackSpecs",
                        "fieldname" => "volume"
                    ]
                ],
                [
                    "name" => "rucksacksWeight",
                    "type" => "double",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\Numeric",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "rucksackSpecs",
                        "fieldname" => "weight"
                    ]
                ],
                [
                    "name" => "rucksacksLoad",
                    "type" => "double",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\Numeric",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "rucksackSpecs",
                        "fieldname" => "load"
                    ]
                ],
                [
                    "name" => "matsWidth",
                    "type" => "double",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "matsSpecs",
                        "fieldname" => "width"
                    ]
                ],
                [
                    "name" => "matsLength",
                    "type" => "double",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
                    "config" => [
                        "brickfield" => "specificAttributes",
                        "bricktype" => "matsSpecs",
                        "fieldname" => "length"
                    ]
                ],
                [
                    "name" => "matsHeight",
                    "type" => "double",
                    "getter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetter",
                    "filtergroup" => "double",
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
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\Soundex"
                ],
                [
                    "name" => "simularity_gender",
                    "fieldname" => "gender",
                    "hideInFieldlistDatatype" => "true",
                    "type" => "INTEGER",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\Soundex"
                ],
                [
                    "name" => "simularity_category",
                    "fieldname" => "categories",
                    "hideInFieldlistDatatype" => "true",
                    "type" => "INTEGER",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectIdSum"
                ],
                [
                    "name" => "simularity_feature",
                    "fieldname" => "features",
                    "hideInFieldlistDatatype" => "true",
                    "type" => "INTEGER",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectIdSum"
                ],
                [
                    "name" => "simularity_technolgy",
                    "fieldname" => "technologies",
                    "hideInFieldlistDatatype" => "true",
                    "type" => "INTEGER",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectIdSum"
                ],
                [
                    "name" => "simularity_attributes",
                    "fieldname" => "attributes",
                    "hideInFieldlistDatatype" => "true",
                    "type" => "INTEGER",
                    "interpreter" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectIdSum"
                ]
            ],
            "tenants" => [
                "OptimizedMysql" => [
                    "class" => "\\AppBundle\\Ecommerce\\IndexService\\Tenant\\Config\\MyOptimizedMysql",
                    "file" => "/ecommerce/OptimizedMysql.php"
                ]
            ]
        ],
        "filtertypes" => [
            "helper" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterGroupHelper",
            "FilterNumberRange" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\NumberRange",
                "script" => "Shop/filters/range.html.php"
            ],
            "FilterNumberRangeSelection" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\NumberRangeSelection",
                "script" => "Shop/filters/numberrange.html.php"
            ],
            "FilterSelect" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\Select",
                "script" => "Shop/filters/select.html.php"
            ],
            "FilterSelectFromMultiSelect" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\SelectFromMultiSelect",
                "script" => "Shop/filters/select.html.php"
            ],
            "FilterMultiSelect" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\MultiSelect",
                "script" => "Shop/filters/multiselect.html.php"
            ],
            "FilterMultiSelectFromMultiSelect" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\MultiSelectFromMultiSelect",
                "script" => "Shop/filters/multiselect.html.php"
            ],
            "FilterMultiRelation" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\MultiSelectRelation",
                "script" => "Shop/filters/multiselect-relation.html.php"
            ],
            "FilterCategory" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\SelectCategory",
                "script" => "Shop/filters/select_category.html.php"
            ],
            "FilterRelation" => [
                "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterType\\SelectRelation",
                "script" => "Shop/filters/object_relation.html.php"
            ]
        ],
        "pricingmanager" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PricingManager",
            "config" => [
                "rule" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Rule"
                ],
                "priceInfo" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PriceInfo"
                ],
                "condition" => [
                    "Bracket" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\Bracket"
                    ],
                    "DateRange" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\DateRange"
                    ],
                    "CartAmount" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\CartAmount"
                    ],
                    "CatalogProduct" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\CatalogProduct"
                    ],
                    "CatalogCategory" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\CatalogCategory"
                    ],
                    "Token" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\Token"
                    ],
                    "Sold" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\Sold"
                    ],
                    "Sales" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\Sales"
                    ],
                    "ClientIp" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\ClientIp"
                    ],
                    "VoucherToken" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Condition\\VoucherToken"
                    ]
                ],
                "action" => [
                    "ProductDiscount" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Action\\ProductDiscount"
                    ],
                    "CartDiscount" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Action\\CartDiscount"
                    ],
                    "Gift" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Action\\Gift"
                    ],
                    "FreeShipping" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Action\\FreeShipping"
                    ]
                ]
            ]
        ],
        "offertool" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\OfferTool\\DefaultService",
            "orderstorage" => [
                "offerClass" => "\\Pimcore\\Model\\Object\\OfferToolOffer",
                "offerItemClass" => "\\Pimcore\\Model\\Object\\OfferToolOfferItem",
                "parentFolderPath" => "/offertool/offers/%Y/%m"
            ]
        ],
        /* order manager */
        "ordermanager" => [
            "class" => "AppBundle\\Ecommerce\\Order\\OrderManager",
            "config" => [
                "orderList" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\Order\\Listing",
                    "classItem" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\Order\\Listing\\Item"
                ],
                "orderAgent" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\Order\\Agent"
                ],
                "orderstorage" => [
                    "orderClass" => "\\Pimcore\\Model\\Object\\OnlineShopOrder",
                    "orderItemClass" => "\\Pimcore\\Model\\Object\\OnlineShopOrderItem"
                ],
                "parentorderfolder" => "/order/%Y/%m/%d",
                "tenants" => [
                    "otherFolder" => [
                        "parentorderfolder" => "/order_otherfolder/%Y/%m/%d"
                    ]
                ]
            ]
        ],
        /* voucher service - define voucher service implementation class and map token managers */
        "voucherservice" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\VoucherService\\DefaultService",
            /* assign backend implementations to voucher token type field collections */
            "tokenmanagers" => [
                "VoucherTokenTypePattern" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\VoucherService\\TokenManager\\Pattern"
                ],
                "VoucherTokenTypeSingle" => [
                    "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\VoucherService\\TokenManager\\Single"
                ]
            ],
            "config" => [
                /*  Reservations older than x MINUTES get removed by maintenance task */
                "reservations" => [
                    "duration" => "5"
                ],
                /* Statistics older than x DAYS get removed by maintenance task */
                "statistics" => [
                    "duration" => "30"
                ]
            ]
        ],

        /*  tracking manager - define which trackers (e.g. Google Analytics Universal Ecommerce) are active and should
     be called when you track something via TrackingManager */
        "trackingmanager" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tracking\\TrackingManager",
            "config" => [
                "trackers" => [
                    [
                        "name" => "GoogleAnalyticsEnhancedEcommerce",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tracking\\Tracker\\Analytics\\EnhancedEcommerce",
                        "trackingItemBuilder" => "AppBundle\\Ecommerce\\Tracking\\TrackingItemBuilder"
                    ],
                    [
                        "name" => "GoogleAnalyticsEcommerce",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tracking\\Tracker\\Analytics\\Ecommerce",
                        "trackingItemBuilder" => "AppBundle\\Ecommerce\\Tracking\\TrackingItemBuilder"
                    ],
                    [
                        "name" => "GoogleAnalyticsUniversalEcommerce",
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tracking\\Tracker\\Analytics\\UniversalEcommerce",
                        "trackingItemBuilder" => "AppBundle\\Ecommerce\\Tracking\\TrackingItemBuilder"
                    ]
                ]
            ]
        ],

        /* pimcore EcommerceFramework Menu */
        "pimcore" => [
            "menu" => [
                "pricingRules" => [
                    "disabled" => "0"
                ],
                "orderlist" => [
                    "disabled" => "0",
                    "route" => "/admin/ecommerceframework/admin-order/list"
                ]
            ]
        ]
    ]
];
