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

$order = $this->order;
/* @var \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder $order */
?>
<?= $this->template("QuickCheckout/steps/header.html.php", ["step" => 'completed', "noLinks" => true]) ?>

<div class="row">

    <h3><?= $this->translate("checkout.completed.ttl") ?></h3>
    <p><?= $this->translate("checkout.completed.txt") ?></p>

    <p><strong><?= $this->translate("checkout.completed.ordernumber") ?>: <?= $order->getOrdernumber() ?></strong></p>

    <div class="row">
        <?php foreach($order->getItems() as $item) { ?>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <div class="text-center" style="padding:10px">
                        <?= $item->getProduct()->getFirstImage(array('width' => 120, 'height' => 120, 'aspectratio' => true))->getHtml() ?>
                    </div>
                    <h4 class="text-center"><?= $item->getProduct()->getOSName() ?></h4>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
