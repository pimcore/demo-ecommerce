<?php
namespace Testing;

use Codeception\Example;
use Testing\Page\Test;


class FirstAcceptanceCest
{

    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage("/");
    }


    protected function _after()
    {
    }
 
    // tests
    public function testAddCart(Test $page)
    {
        $page->addToCart();
    }
}