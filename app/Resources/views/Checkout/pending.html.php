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


<?= $this->template("Checkout/steps/header.html.php") ?>


<div class="row">

    <?= $this->template("Checkout/steps/sidebar.html.php") ?>

    <div class="col-xs-12 col-md-8 checkout-container">

        <legend><?= $this->translate("checkout.payment.pending") ?></legend>

        <a class="btn btn-default"
           href="<?= Pimcore\Tool::getHostUrl() ?><?= $this->pimcoreUrl(['action' => 'payment', 'controller' => 'payment', 'prefix' => $this->language], 'action', true) ?>"
           target="_top"><?= $this->translate('payment.retry') ?>
        </a>

    </div>
</div>

