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

namespace AppBundle\EventListener;

use Pimcore\Event\Model\ObjectEvent;

class TestListener
{
    /**
     * @param ObjectEvent $event
     */
    public function onObjectPreUpdate(ObjectEvent $event)
    {
        $object = $event->getObject();
        // do with the object whatever you want ;-)
    }
}
