<?php

namespace Testing\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Exception\ModuleException;
use Codeception\Module\WebDriver;

class Acceptance extends \Codeception\Module
{
    /**
     * Get WebDriver module
     *
     * @return WebDriver
     * @throws ModuleException
     */
    public function getWebDriverModule()
    {
        /** @var WebDriver $module */
        $module = $this->getModule('WebDriver');

        return $module;
    }
}
