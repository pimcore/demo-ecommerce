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

$this->extend('layout.html.php');

$cart = $this->cart;
/* @var \Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICart $cart */
?>

<div class="row">
    <div class="col-sm-12">

        <h1><?= $this->translate("cart.ttl") ?></h1>

        <?php if(count($cart->getItems()) === 0) { ?>
            <?= $this->translate("cart.empty") ?>
        <?php } else { ?>
            <form method="post" action="<?= $this->pimcoreUrl(["action" => "update"], "cart")?>">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?= $this->translate("cart.productname") ?></th>
                        <th class="text-center"><?= $this->translate("cart.unitprice") ?></th>
                        <th class="text-center"><?= $this->translate("cart.quantity") ?></th>
                        <th class="text-center"><?= $this->translate("cart.totalprice") ?></th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($cart->getItems() as $item) {  ?>
                        <?php
                            $linkDetail = $item->getProduct()->getDetailUrl();
                        ?>

                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <div class="media-left pull-left">
                                        <a class="thumbnail" href="<?= $linkDetail ?>">
                                            <?= $item->getProduct()->getFirstImage(array('width' => 70, 'height' => 70, 'aspectratio' => true))->getHtml(["class" => "media-object"]) ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="<?= $linkDetail ?>"><?= $item->getProduct()->getOSName() ?></a></h4>
                                        <p><?= implode($item->getProduct()->getHeroAttributes($this), " | ") ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong><?= $item->getPrice() ?></strong></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="number" class="js-quantity form-control text-center" name="qty[<?= $item->getItemKey() ?>]" value="<?= $item->getCount() ?>">
                            </td>
                            <td class="col-sm-1 col-md-1 text-right"><strong><?= $item->getTotalPrice() ?></strong></td>
                            <td class="col-sm-1 col-md-1">
                                <a class="btn btn-danger pull-right" href="<?= $this->pimcoreUrl(array('action' => 'remove', 'item' => $item->getItemKey()), 'cart') ?>">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a></td>
                        </tr>
                    <?php } ?>
                    <?php if(count($cart->getItems()) > 0 && count($cart->getGiftItems()) > 0) { ?>

                        <tr>
                            <td colspan="5"><h4><?= $this->translate("cart.gifts") ?></h4></td>
                        </tr>
                        <?php foreach($cart->getGiftItems() as $item) { ?>

                            <tr>
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <div class="media-left pull-left">
                                            <a class="thumbnail" href="#">
                                                <?= $item->getProduct()->getFirstImage(array('width' => 70, 'height' => 70, 'aspectratio' => true))->getHtml(["class" => "media-object"]) ?>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#"><?= $item->getProduct()->getOSName() ?></a></h4>
                                            <p><?= implode($item->getProduct()->getHeroAttributes($this), " | ") ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <?= $item->getCount() ?>
                                </td>
                                <td class="col-sm-1 col-md-1 text-right"><strong></strong></td>
                                <td class="col-sm-1 col-md-1"></td>
                            </tr>

                        <?php } ?>

                    <?php } ?>
                    <tr>
                        <td>   </td>
                        <td colspan="2" class="text-right"><h5><?= $this->translate("cart.subtotal") ?></h5></td>
                        <td class="text-right"><h5><strong><?= $cart->getPriceCalculator()->getSubTotal() ?></strong></h5></td>
                        <td>   </td>
                    </tr>
                    <?php foreach ($cart->getPriceCalculator()->getPriceModifications() as $name => $modification) { ?>
                        <tr>
                            <td>   </td>
                            <td colspan="2" class="text-right"><h5><?= $modification->getDescription() ? $modification->getDescription() : $this->translate("cart_modification_" . $name) ?></h5></td>
                            <td class="text-right"><h5><strong><?= $modification ?></strong></h5></td>
                            <td>   </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td>   </td>
                        <td colspan="2" class="text-right"><h3><?= $this->translate("cart.grandtotal") ?></h3></td>
                        <td class="text-right"><h3><strong><?= $cart->getPriceCalculator()->getGrandTotal() ?></strong></h3></td>
                        <td>   </td>
                    </tr>

                    <?php $grandTotal = $cart->getPriceCalculator()->getGrandTotal() ?>

                    <?php if($grandTotal->getTaxEntries()) { ?>

                        <tr>
                            <td>   </td>
                            <td colspan="2" class="text-right"><h5><?= $this->translate("cart.taxes") ?></h5></td>
                            <td class="text-right"></td>
                            <td>   </td>
                        </tr>

                        <?php foreach($grandTotal->getTaxEntries() as $taxEntry) { ?>

                            <?php
                                $amountAsCurrency = $grandTotal->getCurrency()->toCurrency($taxEntry->getAmount());
                            ?>
                            <tr>
                                <td>   </td>
                                <td colspan="2" class="text-right"><p><?= $taxEntry->getEntry()->getName() ?></p></td>
                                <td class="text-right"><p><strong><?= $taxEntry->getPercent() ?>% (<?= $amountAsCurrency ?>)</strong></p></td>
                                <td>   </td>
                            </tr>

                        <?php } ?>
                    <?php } ?>

                    <tr>
                        <td colspan="4">
                            <a href="/<?= $this->language?>/shop" type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> <?= $this->translate("general.continue-shopping") ?>
                            </a>

                            <span id="js-checkout-button">
                                <a href="<?= $this->pimcoreUrl(array('action' => 'delivery'), 'checkout') ?>" class="btn btn-success pull-right">
                                    <?= $this->translate("cart.checkoutnow") ?> <span class="glyphicon glyphicon-play"></span>
                                </a>
                                <br/><br/>
                                <a  href="<?= $this->pimcoreUrl(['controller' => 'quickCheckout', 'action' => 'confirm', 'prefix' => $this->language], 'action') ?>" class="pull-right">
                                    <img src="/static/img/masterpass.png" />
                                </a>
                            </span>

                            <button id="js-update-button" type="submit" class="btn btn-success pull-right hidden">
                                <span class="glyphicon glyphicon-refresh"></span> <?= $this->translate("cart.update") ?>
                            </button>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </form>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= $this->translate("cart.voucher-tokens-headline") ?></div>

                        <?php if($cart->getVoucherTokenCodes()) { ?>
                            <ul class="list-group">
                                <?php foreach ($cart->getVoucherTokenCodes() as $index => $code) { ?>
                                    <li class="list-group-item">
                                        <?=$code?>
                                        <a href="<?= $this->pimcoreUrl(['action' => 'release-voucher', 'voucherToken' => $code], 'cart') ?>" class="btn btn-danger btn-xs pull-right" type="submit"><span class="glyphicon glyphicon-remove"></span></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <div class="panel-body">
                            <form class="col-xs-12 form-inline" id="add-voucher-form" action="<?= $this->pimcoreUrl(array('action' => 'add-voucher'), 'cart') ?>">
                                <div class="form-group">
                                    <input type="text" name="voucherToken" class="form-control" value="<?php if ($this->voucherError) { ?><?=$this->getParam('voucherToken')?><?php } ?>">
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit"><span class="glyphicon glyphicon-plus"></span></button>
                                <?php if ($this->voucherError) { ?>
                                    <div style="margin-top: 20px" class="alert alert-danger js-fadeout"><?= $this->voucherError ?></div>
                                <?php } ?>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        <?php } ?>
    </div>
</div>

<?php
$this->headScript()->appendScript("
    $(document).ready(function(){
        $('.js-quantity').on('change', function() {
            $('#js-update-button').removeClass('hidden');
            $('#js-checkout-button').hide();
        });
    });
");
?>
