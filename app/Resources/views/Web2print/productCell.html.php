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


/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

/**
 * @var $product \AppBundle\Model\DefaultProduct
 */
$product = $this->product;


?>


<div class="productCell">

    <?php if($product) { ?>

        <div class="texts">
            <h4><?= $product->getName() ?></h4>

            <div class="infoblock">

                <?php if($product->getArtno()) { ?>
                    <p><label>SKU:</label> <?= $product->getArtno() ?></p>
                <?php } ?>

                <?php if($this->sizes) { ?>
                    <p><label>Size:</label> <?= implode(" | ", $this->sizes) ?></p>
                <?php } ?>

            </div>

        </div>

        <?php if(count($this->colorVariants) > 1) { ?>

            <div class="colorvariants">
                <?php foreach($this->colorVariants as $variant) { ?>

                    <img src="<?= $variant->getFirstImage("print_productcell_small") ?>" />

                <?php } ?>
            </div>

        <?php } ?>


        <div class="mainImage">
            <img src="<?= $product->getFirstImage("print_productcell") ?>" />
        </div>



    <?php } else if($this->editmode) { ?>

        <p>Drag a product here</p>

    <?php } ?>
</div>

