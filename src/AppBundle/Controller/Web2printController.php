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

namespace AppBundle\Controller;

use AppBundle\Model\DefaultProduct;
use Pimcore\Model\DataObject\Product;
use Symfony\Component\HttpFoundation\Request;

class Web2printController extends AbstractController
{
    public function defaultAction(Request $request)
    {
        foreach ($request->attributes as $key => $value) {
            $this->view->$key = $value;
        }
    }

    public function containerAction(Request $request)
    {
        foreach ($request->attributes as $key => $value) {
            $this->view->$key = $value;
        }

        $allChildren = $this->document->getAllChildren();

        $this->view->allChildren = $allChildren;
    }

    public function productCellAction(Request $request)
    {
        $product = Product::getById($request->get('id'));
        if ($product instanceof DefaultProduct) {
            $this->view->product = $product->internalGetBaseProduct();

            $colorVariants = $product->getColorVariants(false);
            $sizes = [];
            foreach ($colorVariants as $colorVariant) {
                $sizeVariants = $colorVariant->getSizeVariants();
                foreach ($sizeVariants as $sizeVariant) {
                    $sizes[] = $sizeVariant->getSize();
                }
            }

            $this->view->colorVariants = $colorVariants;
            $this->view->sizes = array_unique($sizes);
        }
    }
}
