<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace AppBundle;

use HWI\Bundle\OAuthBundle\HWIOAuthBundle;
use Pimcore\HttpKernel\Bundle\DependentBundleInterface;
use Pimcore\HttpKernel\BundleCollection\BundleCollection;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle implements DependentBundleInterface
{
    public static function registerDependentBundles(BundleCollection $collection)
    {
        // activate bundle for SSO oauth login/register functionality
        if (class_exists('\Http\HttplugBundle\HttplugBundle')) {
            $collection->addBundle( new \Http\HttplugBundle\HttplugBundle());
        }
        $collection->addBundle(HWIOAuthBundle::class);
    }
}
