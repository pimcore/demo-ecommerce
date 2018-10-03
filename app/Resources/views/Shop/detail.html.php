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

use Pimcore\Bundle\EcommerceFrameworkBundle\Model\Currency;
use Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\IPrice;

/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

    $this->extend('layout.html.php');

    $this->placeholder('object_seotitle')->set( $this->product->getSeoName() );
    $this->placeholder('object_seodescription')->set( $this->product->getDescription() );

    $this->placeholder('canonical')->append('<link rel="canonical" href="' . Pimcore\Tool::getHostUrl() . $this->product->internalGetBaseProduct()->getDetailUrl().'"/>');

    $this->headLink()->appendStylesheet('/static/css/shop-homepage.css', "screen");
?>


<div class="content-wrapper">
    <div class="item-container">
        <div class="row">
            <div class="col-md-5">
                <?php if($this->product->getImages()) {?>


                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php foreach($this->product->getImages()->getItems() as $index => $item) { ?>
                                <?php if($item->getImage()) { ?>
                                    <li data-target="#product-carousel" data-slide-to="<?= $index ?>" class="active"></li>
                                <?php } ?>
                            <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php $isFirst = true; ?>
                            <?php foreach($this->product->getImages()->getItems() as $item) { ?>
                                <?php if($item->getImage()) { ?>
                                    <div class="item <?= $isFirst ? 'active' : '' ?>">
                                        <?= $item->getImage()->getThumbnail('productDetail')->getHtml() ?>
                                    </div>
                                    <?php $isFirst = false; ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <a class="left carousel-control" href="#product-carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#product-carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                <?php } ?>

            </div>


            <div class="col-md-7">
                <h1 class="product-title"><?=$this->product->getOSName()?></h1>
                <div class="product-desc">

                    <p><?= implode($this->product->getHeroAttributes($this), " | ") ?></p>

                    <?=\AppBundle\Tool\Text::cutStringRespectingWhitespace(trim(strip_tags($this->product->getDescription())), 120)?></div>
                <hr>
                <?php
                    $priceInfo = $this->product->getOSPriceInfo();

                    /** @var IPrice $originalPrice */
                    $originalPrice = $this->product->getOSPriceInfo()->getOriginalPrice();

                    /** @var IPrice $price */
                    $price = $this->product->getOSPrice();

                    $hasDiscount = $originalPrice->getAmount()->notEquals($price->getAmount());
                    $currency = $price->getCurrency();
                ?>

                <?php if($hasDiscount) { ?>
                    <div class="regular-price"><?= $this->translate("shop.detail.regularprice") ?>: <span><?= $this->product->getOSPriceInfo()->getOriginalPrice() ?></span></div>
                <?php } ?>

                <?php if($priceInfo->getRules()) { ?>
                    <div class="alert alert-success">
                        <p><strong><?= $this->translate("shop.detail.your_benefit") ?></strong></p>
                        <ul>
                            <?php foreach($priceInfo->getRules() as $rule ) { ?>
                                <?php foreach($rule->getActions() as $action) { ?>
                                    <?php if($action instanceof \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\Action\ProductDiscount) { ?>
                                        <?php if($action->getAmount() > 0) { ?>
                                            <li><?= $rule->getLabel() ?> <?= $this->translate("shop.detail.your_benefit.discount.amount", $currency->toCurrency($action->getAmount()) ) ?></li>
                                        <?php } else if($action->getPercent() > 0) { ?>
                                            <li><?= $rule->getLabel() ?> <?= $this->translate("shop.detail.your_benefit.discount.percent", $action->getPercent()) ?></li>
                                        <?php } ?>
                                    <?php } else if($action instanceof \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\Action\IGift) { ?>
                                        <li>
                                            <?= $this->translate("shop.detail.your_benefit.discount.gift", '<a href="' . $action->getProduct()->getDetailUrl() . '"> ' . $action->getProduct()->getOSName() . '</a>') ?>
                                        </li>
                                    <?php } else if($action instanceof \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\Action\FreeShipping) { ?>
                                        <li>
                                            <?= $this->translate("shop.detail.your_benefit.discount.freeshipping") ?>
                                        </li>
                                    <?php } ?>
                                <?php } ?>

                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

                <div class="product-price">

                    <?php
                        $price = $this->product->getOSPrice();
                    ?>

                    <strong><?= $price ?></strong>

                    <div class="tax">

                        <p><strong><?= $this->translate("shop.detail.included_tax") ?></strong></p>
                        <ul>
                            <?php foreach($price->getTaxEntries() as $entry) { ?>

                                <?php
                                    $amountAsCurrency = $price->getCurrency()->toCurrency($entry->getAmount());
                                ?>

                                <li><?= $entry->getEntry()->getName() ?>: <?=  $entry->getPercent() ?>% (<?= $amountAsCurrency ?>)</li>

                            <?php } ?>
                        </ul>

                    </div>
                </div>
                <hr>

                <?php if($this->product->isVariant()) { ?>
                    <div class="btn-group cart">
                        <a href="<?= $this->pimcoreUrl(["language" => $this->language, "action" => "add", "item" => $this->product->getId()], "cart") ?>" class="btn btn-success">
                            <span class="glyphicon glyphicon-shopping-cart"></span> <?= $this->translate("shop.addtocart") ?>
                        </a>
                    </div>

                    <a  href="<?= $this->pimcoreUrl(['controller' => 'cart', 'action' => 'start-quick-checkout-with-product', 'prefix' => $this->language, 'item' => $this->product->getId()], 'action') ?>" class="pull-right">
                        <img src="/static/img/masterpass.png" />
                    </a>

                <?php } ?>
               <!-- <div class="btn-group wishlist">
                    <button type="button" class="btn btn-danger">
                        Add to wishlist
                    </button>
                </div>-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 product-info">
            <ul id="myTab" class="nav nav-tabs nav_tabs">
                <?php
                    $colorVariants = $this->product->getColorVariants();
                    $sizeVariants = $this->product->getSizeVariants();
                ?>

                <?php if($this->product->getDescription() || $this->product->getTechnologies() || $colorVariants || $sizeVariants) { ?>
                    <li class="active"><a href="#service-one" data-toggle="tab"><?= $this->translate("shop.description") ?></a></li>
                <?php } ?>
                <?php if($this->hasSpec) { ?>
                    <li><a href="#service-two" data-toggle="tab"><?= $this->translate("shop.specification") ?></a></li>
                <?php } ?>

                <?php if($this->product->getRelatedProducts() || $this->similarProducts || $this->recentlyViewed) { ?>
                    <li><a href="#service-three" data-toggle="tab"><?= $this->translate("shop.detail.related_products") ?></a></li>
                <?php } ?>

            </ul>
            <div id="myTabContent" class="tab-content">

                <?php if($this->product->getDescription() || $this->product->getTechnologies() || $colorVariants || $sizeVariants) { ?>
                    <div class="tab-pane fade in active" id="service-one">

                        <div class="col-lg-12 product-info">
                            <?= $this->product->getDescription() ?>

                            <?php if($colorVariants) { ?>
                                <?php foreach($colorVariants as $variant) { ?>
                                    <a href="<?= $variant->getDetailUrl(["document" => $this->document]) ?>" class="thumbnail1">
                                        <?= $variant->getFirstImage("shopDetailThumb")->getHtml(["class" => "img-thumbnail"]) ?>
                                    </a>
                                <?php } ?>
                            <?php } ?>

                            <?php if($sizeVariants) { ?>
                                <div class="size-variants">
                                    <?php foreach($sizeVariants as $variant) { ?>
                                        <a href="<?= $variant->getDetailUrl(["document" => $this->document]) ?>" class="variant-item">
                                            <?= $variant->getSize() ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                        </div>

                        <?php if($this->product->getTechnologies()) { ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="2"><?= $this->translate("shop.technologyname") ?></th>
                                    <th scope="col"><?= $this->translate("shop.description") ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($this->product->getTechnologies() as $technology) { ?>
                                    <tr>
                                        <td width="5%">
                                            <?php if($technology->getIcon()) { ?>
                                                <img alt="<?= $technology->getName() ?>" src="<?= $technology->getIcon()->getThumbnail("shopDetailTechnology") ?>" />
                                            <?php } ?>
                                        </td>

                                        <td width="20%">
                                            <?= $technology->getName() ?>
                                        </td>
                                        <td width="70%"><?= $technology->getDescription() ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        <?php } ?>


                    </div>
                <?php } ?>
                <?php if($this->hasSpec) { ?>
                    <div class="tab-pane fade" id="service-two">

                        <div class="col-lg-12 product-info table-responsive">
                            <table width="100%" class="table table-bordered table-hover table-specifications">
                                <thead>
                                <tr>
                                    <th scope="col"><?= $this->translate("shop.label") ?></th>
                                    <th scope="col"><?= $this->translate("shop.value") ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($this->specificationOutputChannel as $property) { ?>
                                    <?= $this->productDetailSpecification($property, $this->product); ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                <?php } ?>

                <?php if($this->product->getRelatedProducts() || $this->similarProducts || $this->recentlyViewed) { ?>
                    <div class="tab-pane fade" id="service-three">

                        <?php if($this->product->getRelatedProducts()) { ?>
                            <h3><?= $this->translate("shop.detail.related_products") ?></h3>

                            <div class="row">
                                <?php foreach($this->product->getRelatedProducts() as $p) { ?>
                                    <?= $this->template('Shop/list/product.html.php', array('product'=> $p, "col" => 3)) ?>
                                <?php } ?>
                            </div>

                        <?php } ?>

                        <?php if($this->similarProducts) { ?>
                            <h3><?= $this->translate("shop.detail.similar_products") ?></h3>

                            <div class="row">
                                <?php foreach($this->similarProducts as $p) { ?>
                                    <?= $this->template('Shop/list/product.html.php', array('product'=> $p, "col" => 3)) ?>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <?php if($this->recentlyViewed) { ?>
                            <h3><?= $this->translate("shop.detail.recently_viewed_products") ?></h3>

                            <div class="row">
                                <?php foreach($this->recentlyViewed as $p) { ?>
                                    <?= $this->template('Shop/list/product.html.php', array('product'=> $p, "col" => 3)) ?>
                                <?php } ?>
                            </div>
                        <?php } ?>

                    </div>
                <?php } ?>
            </div>
            <hr>
        </div>
    </div>
</div>
