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

$this->headScript()->appendFile('/static/js/payment/wirecard-seamless/jquery-birthday-picker.min.js');
?>
<link rel="/static/css/wirecard-checkout.css" type="text/css">
<?php
$this->headScript()->captureStart();
print '$("#payolution-birthday").birthdayPicker({dateFormat:"littleEndian"});';
$this->headScript()->captureEnd();
?>
<div class="panel-body">
    <div class="checkout-dropdown wirecard-checkout-dropdown">
        <form>
            <div class="alert alert-danger invoice-birthday-error wirecard-error" style="display:none;">
                <?= $this->translate('payment.wirecard-seamless.invoice.birthday-error') ?>
            </div>

            <div class="alert alert-danger invoice-checkbox-error wirecard-checkbox-error" style="display:none;">
                <?= $this->translate('payment.wirecard-seamless.checkbox-not-checked') ?>
            </div>

            <input type="hidden" class="payment-type" name="paymentType" value="INVOICE"/>

            <?= $this->translate('payment.wirecard-seamless.pay-now.INVOICE.birthdate') ?>
            <div id="payolution-birthday" data-year-text="<?= $this->translate('payment.wirecard.birthdate-year') ?>"
                 data-month-text="<?= $this->translate('payment.wirecard.birthdate-month') ?>"
                 data-day-text="<?= $this->translate('payment.wirecard.birthdate-day') ?>"></div>


            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-checkbox wysiwyg mb10">
                        <input id="invoice_checkbox" class="custom-checkbox__input" type="checkbox" name="#" required>
                        <span class="custom-checkbox__fake-checkbox">
                            <span class="custom-checkbox__fake-checkbox__icon icon icon-check"></span>
                        </span>
                        <?php
                        $linkOne = '<a target="_blank" href="https://payment.payolution.com/payolution-payment/infoport/agb?mId=CQ0KU21hcnRtYXh4IEdtYkg==\'"
                                        onclick="window.open(\'https://payment.payolution.com/payolution-payment/infoport/agb?mId=CQ0KU21hcnRtYXh4IEdtYkg==\',\'popup\', \'width=750,height=750,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=0,menubar=no,status=no\'); return false">'
                            . $this->translate('payment-method-prepayment.agb') .
                            '</a>';

                        $linkTwo = '<a target="_blank" href="https://payment.payolution.com/payolution-payment/infoport/dataprivacydeclaration?mId=CQ0KU21hcnRtYXh4IEdtYkg=="
                                        onclick="window.open(\'https://payment.payolution.com/payolution-payment/infoport/dataprivacydeclaration?mId=CQ0KU21hcnRtYXh4IEdtYkg==\',\'popup\', \'width=750,height=750,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=0,menubar=no,status=no\'); return false">'
                            . $this->translate('payment-method-prepayment.dataprotection') .
                            '</a>';
                        ?>
                        <?= $this->translate('checkout.prepayment-accept-terms', $linkOne, $linkTwo) ?>
                    </label>
                </div>
            </div>


            <a class="btn btn-primary js-wirecard-payment-submit"
               data-validate-url="<?= Pimcore\Tool::getHostUrl() ?><?= $this->pimcoreUrl(['controller' => 'paymentSeamless', 'action' => 'validate-invoice-payment'], 'action', true) ?>"><?= $this->translate('payment.wirecard-seamless.pay-now.INVOICE') ?></a>
        </form>
    </div>
</div>
