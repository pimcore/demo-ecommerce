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


$cart = $this->cart;
/* @var \Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICart $cart */

$deviceDetector = \Pimcore\Tool\DeviceDetector::getInstance();
$isPhone = $deviceDetector->isPhone() && !$this->showSummary;

?>

<div class="col-md-4">
    <?php if($isPhone) { ?>
        <a role="button" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="collapseExample">
            <legend>
                <span style="font-size: 16px" class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> <?= $this->translate("cart.summary") ?>
            </legend>
        </a>
    <?php } else { ?>
        <legend>
            <?= $this->translate("cart.summary") ?>
        </legend>
    <?php } ?>

    <div id="sidebar" class="<?= $isPhone ? 'collapse' : '' ?> sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= $this->translate("cart.summary") ?>
            </div>
            <div class="panel-body">
                <table class="table table-condensed">
                    <tbody>

                    <?php foreach($cart->getItems() as $item) { ?>
                        <tr>
                            <td><?= $item->getName() ?> (<?= $item->getCount() ?>x)</td>
                            <td class="text-right"><?= $item->getTotalPrice() ?></td>
                        </tr>
                    <?php } ?>

                    <tr class="active">
                        <td><strong><?= $this->translate("cart.subtotal") ?></strong></td>
                        <td class="text-right"><strong><?= $cart->getPriceCalculator()->getSubTotal() ?></strong></td>
                    </tr>

                    <?php foreach ($cart->getPriceCalculator()->getPriceModifications() as $name => $modification) { ?>
                        <tr>
                            <td><?= $modification->getDescription() ? $modification->getDescription() : $this->translate("cart_modification_" . $name) ?></td>
                            <td class="text-right"><?= $modification ?></td>
                        </tr>
                    <?php } ?>

                    <tr class="active">
                        <td><strong><?= $this->translate("cart.grandtotal") ?></strong></td>
                        <td class="text-right"><strong><?= $cart->getPriceCalculator()->getGrandTotal() ?></strong></td>
                    </tr>

                    <?php $grandTotal = $cart->getPriceCalculator()->getGrandTotal() ?>

                    <?php if($grandTotal->getTaxEntries()) { ?>

                        <tr>
                            <td><?= $this->translate("cart.taxes") ?></td>
                            <td class="text-right">
                                <?php foreach($grandTotal->getTaxEntries() as $taxEntry) { ?>
                                    <?php
                                    $amountAsCurrency = $grandTotal->getCurrency()->toCurrency($taxEntry->getAmount());
                                    ?>
                                    <?= $taxEntry->getEntry()->getName() ?>: <?= $taxEntry->getPercent() ?>% (<?= $amountAsCurrency ?>)<br/>
                                <?php } ?>
                            </td>
                        </tr>


                    <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>

        <?php if($this->deliveryAddress) { ?>
            <?php
                $deliveryAddress = $this->deliveryAddress;
                $locale = Pimcore::getContainer()->get('pimcore.locale');
                $regionArray = $locale->getDisplayRegions();
            ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $this->translate("checkout.deliveryaddress") ?>
                </div>
                <div class="panel-body">
                    <address>
                        <strong><?= $deliveryAddress->firstname?> <?= $deliveryAddress->lastname?> </strong><br>
                        <?= $deliveryAddress->street ?><br>
                        <?= $deliveryAddress->zip ?> <?= $deliveryAddress->city ?> <br>
                        <?= strtoupper($regionArray[$deliveryAddress->countryCode]) ?><br/>
                        <a href="mailto:<?= $deliveryAddress->email ?>"><?= $deliveryAddress->email ?></a>
                    </address>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
