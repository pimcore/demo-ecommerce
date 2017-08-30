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

use Pimcore\Model\DataObject\Product;

class SizeSort
{
    public static $order = [
        's0' => 'XXXS',
        's1' => 'XXS',
        's2' => 'XS',
        's3' => 'S',
        's4' => 'M',
        's5' => 'L',
        's6' => 'XL',
        's7' => 'XXL'
    ];

    /**
     * @static
     *
     * @param Product\Listing $unorderedSizes
     *
     * @return array;
     */
    public static function sort($unorderedSizes)
    {
        $unorderedArray = [];
        $orphanSizes = [];

        foreach ($unorderedSizes as $unorderedSize) {
            $size = trim($unorderedSize->getSize());

            if (is_numeric($size)) {
                $unorderedArray[$size] = $unorderedSize;
            } else {
                if ($size = array_search(strtoupper($size), self::$order)) {
                    $unorderedArray[$size] = $unorderedSize;
                } else {
                    $orphanSizes[] = $unorderedSize;
                }
            }
        }

        ksort($unorderedArray);

        $orderedSizes = $unorderedArray;
        $orderedSizes = array_merge($orderedSizes, $orphanSizes);

        return $orderedSizes;
    }
}
