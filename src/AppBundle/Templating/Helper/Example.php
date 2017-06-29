<?php
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

namespace AppBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;

class Example extends Helper
{
    /**
     * @var int
     */
    protected $count = 0;

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'fooBar';
    }

    /**
     * @inheritDoc
     */
    public function __invoke()
    {
        return 'Example: ' . $this->count++;
    }
}
