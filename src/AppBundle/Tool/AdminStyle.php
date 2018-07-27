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

namespace AppBundle\Tool;

use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Product;

class AdminStyle extends \Pimcore\Model\Element\AdminStyle
{
    public function __construct($element)
    {
        parent::__construct($element);

        if ($element instanceof Product) {
            $backup = AbstractObject::doGetInheritedValues($element);
            AbstractObject::setGetInheritedValues(true);
            if ($element->getParent() instanceof Product) {
                $this->elementIcon = '/bundles/pimcoreadmin/img/icon/tag_green.png';
                $this->elementIconClass = null;
            } else {
                $this->elementIcon = '/bundles/pimcoreadmin/img/icon/tag_blue.png';
                $this->elementIconClass = null;
            }

            if($element->getTextsAvailable() == "not completed") {
                $this->elementCssClass = 'qa-text-not-completed';
            } else if($element->getAttributesAvailable() == "not completed") {
                $this->elementCssClass = 'qa-attributes-not-completed';
            }

            AbstractObject::setGetInheritedValues($backup);
        }
    }
}
