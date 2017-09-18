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


<?= $this->template("QuickCheckout/steps/header.html.php") ?>

<div class="row">

    <?= $this->template("Checkout/steps/sidebar.html.php") ?>

    <div class="col-xs-12 col-md-8">

        <legend><?= $this->translate("checkout.confirm-order") ?></legend>


        <?php if(count($this->errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach($this->errors as $error): ?>
                    <p><?= $this->translate("checkout.error.confirm." . $error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php } ?>

        <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
        </p>

        <form method="post" role="form" action="<?= $this->pimcoreUrl(['controller' => 'quickCheckout', 'action' => 'confirm', 'prefix' => $this->language, 'cartName' => $this->cartName], 'action', true) ?>" >

            <div class="agb col-sm-12" style="margin-top: 20px">

                <input type="checkbox" value="true" name="agb-accepted" id="agb-accept" />
                <?php
                $agbLink = "<a href='" . $this->document->getProperty("terms") . "' target='_blank'>" . $this->document->getProperty("terms")->getTitle() . "</a>";
                ?>
                <label for="agb-accept" class="<?= in_array('agb', $this->errors) ? 'text-error':'' ?>"><?= $this->translate("checkout.confirm.agbs", array($agbLink)) ?></label>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary"><?= $this->translate("checkout.confirm.order") ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
