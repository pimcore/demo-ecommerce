<?php
namespace Testing\Page;

use Testing\AcceptanceTester;

class Test {

    /**
     * @var AcceptanceTester
     */
    protected $tester;

    /**
     * @param AcceptanceTester $I
     */
    public function __construct(AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function addToCart() {
        $this->tester->wantTo("Add Item to Cart");
        $this->tester->click([
            'css' => "body > div.container > div.pimcore_area_productteaser.pimcore_area_content > div > div:nth-child(1) > div > div > div > div:nth-child(2) > a"
        ]);


        $this->tester->waitForElementVisible("#content > div.col-md-12 > div > div > form > table");
        $this->tester->seeElement("#js-checkout-button");
    }


}
