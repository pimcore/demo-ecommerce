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
?>

<div class="panel-body">
    <div class="checkout-dropdown wirecard-checkout-dropdown">
        <div id="wirecard-cc-result"></div>

        <div id="creditcardDataIframe"></div>
        <a class="btn btn-primary" id="js-wirecard-show-cc-form"><?= $this->translate('payment.wirecard-seamless.pay-now.ccard') ?></a>

        <a class="btn btn-primary" id="js-wirecard-submit-cc-form" style="display:none;"><?= $this->translate('payment.wirecard-seamless.pay-now.ccard') ?></a>
        <p><small style="color: grey;">Sandbox: 9500000000000001</small>
        </p>
    </div>
</div>
