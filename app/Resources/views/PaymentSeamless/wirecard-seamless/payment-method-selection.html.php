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

<link rel="stylesheet" href="/static/css/wirecard-checkout.css" type="text/css"/>

<script src="<?=$this->javascriptUrl?>"></script>

<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<script src="<?=$this->wirecardFrontendScript?>"></script>


<div class="panel-group payment-accordion"
     data-generate-redirect-url="<?= Pimcore\Tool::getHostUrl()?><?= ltrim($this->pimcoreUrl(['controller' => "paymentSeamless",'action'=>'get-wirecard-redirect-url'],'action',true),'/')?>"
     id="checkout-accordion" role="tablist" aria-multiselectable="true">
    <?php foreach ($this->paymentMethods as $paymentMethod => $options) {
        if (is_array($this->config['disabledPaymentMethods']) and in_array($paymentMethod, $this->config['disabledPaymentMethods'])) {
            continue;
        }
        ?>
        <div class="panel panel-default">
            <a role="button" data-toggle="collapse" data-parent="#checkout-accordion"
               href="#collapse<?= $paymentMethod ?>" aria-controls="collapse<?= $paymentMethod ?>" aria-expanded="false"
               class="collapsed">
                <div class="panel-heading" role="tab">
                    <div class=" row">
                        <div class="col col-sm-3">
                            <?php if ($icon = $options['icon']) { ?>
                                <img src="<?= $icon ?>" width="100" class="wirecard-payment-icon"/>
                            <?php } ?>
                        </div>
                        <div class="col col-sm-9">
                            <h4 class="panel-title">
                                <?= $this->translate('payment.wirecard-seamless.payment-method.' . $paymentMethod) ?>
                            </h4>
                            <p><?= $this->translate('payment.wirecard-seamless.payment-method.description.' . $paymentMethod) ?></p>
                        </div>
                    </div>
                </div>
            </a>

            <div id="collapse<?= $paymentMethod ?>" class="panel-collapseN collapse" role="tabpanel">
                <?php if ($options['partial']) { ?>
                    <?= $this->template($options['partial']) ?>
                <?php } else { ?>
                    <div class="panel-body">
                        <div class="checkout-dropdown wirecard-checkout-dropdown">
                            <form>
                                <input type="hidden" class="payment-type" name="paymentType"
                                       value="<?= $paymentMethod ?>"/>

                                <a class="btn btn-primary js-wirecard-payment-submit"><?= $this->translate('payment.wirecard-seamless.pay-now.' . $paymentMethod) ?></a>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

</div>
