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

        <legend><?= $this->translate("checkout.payment") ?></legend>


        <?php if ($this->errors && count($this->errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($this->errors as $error) { ?>
                    <p><?= $this->translate("checkout.error.delivery." . $error) ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if ($this->paymentErrors && count($this->paymentErrors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($this->paymentErrors as $error) { ?>
                    <p><?= $error ?></p>
                <?php } ?>
            </div>
        <?php } ?>


        <iframe id="payment-frame"
                src="<?= $this->pimcoreUrl(['action' => 'payment-frame', 'controller' => 'payment', 'prefix' => $this->language], "action"); ?>"
                frameborder="0" scrolling="auto" style="width: 100%; height: 900px; border: 0">
        </iframe>

    </div>
</div>

