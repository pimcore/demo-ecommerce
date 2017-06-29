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

namespace AppBundle\Ecommerce\IndexService\Tenant\Config;

use AppBundle\Model\Product\Mockup;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Config\OptimizedMysql;

class MyOptimizedMysql extends OptimizedMysql
{
    /**
     * @return string
     */
    public function getTablename()
    {
        return 'ecommerceframework_optimized_productindex';
    }

    /**
     * @return string
     */
    public function getRelationTablename()
    {
        return 'ecommerceframework_optimized_productindex_relations';
    }

    public function createMockupObject($objectId, $data, $relations)
    {
        return new Mockup($objectId, $data, $relations);
    }
}
