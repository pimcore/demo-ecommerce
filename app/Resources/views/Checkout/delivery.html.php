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
 * @var \Pimcore\Templating\GlobalVariables\GlobalVariables $app
 */

$this->extend('layout.html.php');

$cart = $this->cart;
/* @var \Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICart $cart */
?>


<?= $this->template("Checkout/steps/header.html.php") ?>

<div class="row">

    <?= $this->template("Checkout/steps/sidebar.html.php") ?>

    <div class="col-xs-12 col-md-8">
        <form class="form-horizontal" role="form" action="<?= $this->pimcoreUrl(array('action' => 'delivery'), 'checkout', true) ?>" method="POST">
            <fieldset>

                <?php $deliveryAddress = $this->deliveryAddress->getData() ?>

                <legend><?= $this->translate("checkout.deliveryaddress") ?></legend>

                <?php if(count($this->errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php foreach($this->errors as $error): ?>
                            <p><?= $this->translate("checkout.error.delivery." . $error) ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email"><?= $this->translate("checkout.email") ?> *</label>
                    <div class="col-sm-9">
                        <input id="email" name="email" type="email" placeholder="<?= $this->translate("checkout.email") ?>" required class="form-control" value="<?= $deliveryAddress->email ? $deliveryAddress->email : $this->escape($this->getParam("email")) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="firstname"><?= $this->translate("checkout.firstname") ?> *</label>
                    <div class="col-sm-9">
                        <input id="firstname" name="firstname" type="text" placeholder="<?= $this->translate("checkout.firstname") ?>" required class="form-control" value="<?= $deliveryAddress->firstname ? $deliveryAddress->firstname : $this->escape($this->getParam("firstname")) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="lastname"><?= $this->translate("checkout.lastname") ?> *</label>
                    <div class="col-sm-9">
                        <input id="lastname" name="lastname" type="text" placeholder="<?= $this->translate("checkout.lastname") ?>" required class="form-control" value="<?= $deliveryAddress->lastname ? $deliveryAddress->lastname : $this->escape($this->getParam("lastname")) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="company"><?= $this->translate("checkout.company") ?></label>
                    <div class="col-sm-9">
                        <input id="company" name="company" type="text" placeholder="<?= $this->translate("checkout.company") ?>" class="form-control" value="<?= $deliveryAddress->company ? $deliveryAddress->company : $this->escape($this->getParam("company")) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="address"><?= $this->translate("checkout.address") ?> *</label>
                    <div class="col-sm-9">
                        <input id="address" name="address" type="text" placeholder="<?= $this->translate("checkout.address") ?>" required class="form-control" value="<?= $deliveryAddress->address ? $deliveryAddress->address : $this->escape($this->getParam("address")) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="zip"><?= $this->translate("checkout.zip_city") ?> *</label>
                    <div class="col-sm-3">
                        <input id="zip" name="zip" type="text" placeholder="<?= $this->translate("checkout.zip") ?>" required class="form-control" value="<?= $deliveryAddress->zip ? $deliveryAddress->zip : $this->escape($this->getParam("zip")) ?>">
                    </div>
                    <div class="col-sm-6">
                        <input id="city" name="city" type="text" placeholder="<?= $this->translate("checkout.city") ?>" required class="form-control" value="<?= $deliveryAddress->city ? $deliveryAddress->city : $this->escape($this->getParam("city")) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="address"><?= $this->translate("checkout.country") ?> *</label>
                    <div class="col-sm-9">

                        <?php
                        $shippingCountry = array('AT', 'DE');
                        ?>
                        <select name="deliverycountry" class="form-control">
                            <?php foreach($shippingCountry as $country): ?>
                                <option <?= ($country == $this->getParam('deliverycountry') || $country == $deliveryAddress->country) ? 'selected="selected"' : '' ?> value="<?= $country ?>" > <?= Zend_Locale::getTranslation(strtoupper($country), 'Country') ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary"><?= $this->translate("checkout.submit-address") ?></button>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>