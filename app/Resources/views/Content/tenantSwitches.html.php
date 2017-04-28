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

$wide = $this->document->getProperty("content_wide");
?>

<div class="row">

    <div>
        <h1 class="page-title"><?= $this->input("healine") ?></h1>


        <h3>Checkout Tenants</h3>

        <?php foreach($this->checkoutTenants as $checkoutTenant) { ?>
            <a href="?change-checkout-tenant=<?= $checkoutTenant ?>" class="btn btn-block <?= $checkoutTenant == $this->currentCheckoutTenant ? "btn-success" : "" ?>" type="button">
                <?= $checkoutTenant ?>
            </a>
        <?php } ?>



        <h3>Assortment Tenants</h3>

        <?php foreach($this->assortmentTenants as $assortmentTenant) { ?>
            <a href="?change-assortment-tenant=<?= $assortmentTenant ?>" class="btn btn-block <?= $assortmentTenant == $this->currentAssortmentTenant ? "btn-success" : "" ?>" type="button">
                <?= $assortmentTenant ?>
            </a>
        <?php } ?>


    </div>

</div><!-- end row -->

