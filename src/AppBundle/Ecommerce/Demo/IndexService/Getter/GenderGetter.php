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

namespace AppBundle\Ecommerce\Demo\IndexService\Getter;

use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Getter\IGetter;

class GenderGetter implements IGetter
{
    public static function get($object, $config = null)
    {
        if ($object->isFemaleProduct()) {
            return ['w'];
        }

        $genders = $object->getGender();
        if ($genders) {
            $men = in_array('m', $genders);
            $women = in_array('w', $genders);
            if ($men && $women) {
                $genders[array_search('w', $genders)] = 'm';
            }
            $genders = array_unique($genders);

            return $genders;
        }
    }
}
