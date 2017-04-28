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
 * @var $product \AppBundle\Model\DefaultProduct
 * @var $linkProdukt \AppBundle\Model\DefaultProduct
 */

    $product = $this->product;

    $linkProduct = $product->getLinkProduct();
    $link = $linkProduct->getDetailUrl();

    $col = $this->col ? $this->col : 4;

    $language = $this->language;
?>

<div class="col-sm-<?= $col ?> col-lg-<?= $col ?> col-md-<?= $col ?>">
    <div class="thumbnail product-list-item">
        <a href="<?= $link ?>">
            <?=$product->getFirstImage('productList')->getHtml(['class' => 'product-image'])?>

            <div class="caption">
                <h4 class="pull-right"><?=$product->getOsPrice()?></h4>

                <h4>
                    <?= $product->getOSName() ?>
                </h4>

                <p><?=\AppBundle\Tool\Text::cutStringRespectingWhitespace(trim(strip_tags($product->getDescription())), 70)?></p>

            </div>
        </a>

        <div class="buttons">
            <div class="row">
                <div class="col-md-6">
                    <!--    <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> -->
                </div>
                <div class="col-md-6">
                    <a href="<?= $this->pimcoreUrl(["language" => $language, "action" => "add", "item" => $product->getId()], "cart") ?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> <?= $this->translate("shop.buy") ?></a></div>
            </div>
        </div>
    </div>
</div>
