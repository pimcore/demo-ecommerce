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

/* @var \Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICart $cart */
$cart = $this->cart;


$form = $this->form;
$this->form()->setTheme($form, [':Form/Theme/BootstrapHorizontal']);
$deliveryAddress = $this->deliveryAddress;

$user = $this->app->getUser();
?>


<?= $this->template("Checkout/steps/header.html.php") ?>

<div class="row">

    <?= $this->template("Checkout/steps/sidebar.html.php") ?>

    <div class="col-xs-12 col-md-8">
        <legend><?= $this->translate("checkout.deliveryaddress") ?></legend>

        <?php if(empty($user)) { ?>
            <div class="margin-bottom-20">
                <?= $this->template(':Account/partials:social-login-buttons.html.php', ['route' => 'app_auth_oauth_login_referrer']) ?>
            </div>
        <?php } ?>

        <?php if(count($this->errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach($this->errors as $error): ?>
                    <p><?= $error->getMessage() ?></p>
                <?php endforeach; ?>
            </div>
        <?php } ?>

        <?= $this->form()->start($form, [
            'attr' => [
                    'class' => 'form-horizontal'
            ]
        ]); ?>
        <?= $this->form()->row($form['email']) ?>
        <?= $this->form()->row($form['firstname']) ?>
        <?= $this->form()->row($form['lastname']) ?>
        <?= $this->form()->row($form['company']) ?>
        <?= $this->form()->row($form['street']) ?>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="zip"><?= $this->translate("checkout.zip_city") ?> *</label>
            <div class="col-sm-3">

                <?= $this->form()->widget($form['zip'], [
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => $this->translate($form['zip']->vars['label'])
                    ]
                ]) ?>

            </div>
            <div class="col-sm-6">
                <?= $this->form()->widget($form['city'], [
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => $this->translate($form['city']->vars['label'])
                    ]
                ]) ?>

            </div>
        </div>

        <?= $this->form()->row($form['countryCode']) ?>

        <?= $this->form()->row($form['_submit'], ['attr' => ['class' => 'btn btn-primary pull-right']]) ?>


        <?= $this->form()->end($form); ?>

    </div>
</div>

