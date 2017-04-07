<?php 

return [
    "tenant" => [
        "pricecalculator" => [
            "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManagerCartPriceCalculator",
            "config" => [
                "modificators" => [
                    "shipping" => [
                        "class" => "\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceModificator\\Shipping",
                        "config" => [
                            "charge" => "500.90"
                        ]
                    ]
                ]
            ]
        ]
    ]
];
