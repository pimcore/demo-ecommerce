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

$this->headLink()->appendStylesheet('/static/bootstrap/css/bootstrap.css');

$isCommited = $this->order && $this->order->getOrderState() == \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder::ORDER_STATE_COMMITTED;
$state = $this->getParam('state');
?>


<script type="text/javascript">
    <?php if($isCommited) {?>
    window.open('<?= Pimcore\Tool::getHostUrl() ?><?= $this->pimcoreUrl(['action' => 'completed', 'controller' => 'checkout', 'id' => $this->order->getId(),'prefix'=>$this->language], 'action', true)?>', '_top');
    <?php } ?>
</script>


<?php if ($isCommited) { ?>

    <h3><?= $this->translate('payment.complete.state.success') ?></h3>
    <!-- redirect to order completed page -->

<?php } elseif (in_array($state, [\Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless::PAYMENT_RETURN_STATE_FAILURE, \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless::PAYMENT_RETURN_STATE_CANCEL])) { ?>

    <h3><?= $this->translate('payment.complete.state.' . $state) ?></h3>

    <!-- output errors and handle failures and cancel  -->
    <!-- give retry possibility -->

    <?php if ($state == \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless::PAYMENT_RETURN_STATE_FAILURE) { ?>
        <?php

        //extract error information out of payment info
        $lastPaymentInfoEntry = $this->order->getLastPaymentInfo();

        if ($lastPaymentInfoEntry && $lastPaymentInfoEntry->getPaymentState() == \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\IStatus::STATUS_CANCELLED) {

            $seamlessResponse = \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless::extractSeamlessResponse($lastPaymentInfoEntry);

            if ($seamlessResponse && $seamlessResponse['errors']) { ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php for ($i = 1; $i <= $seamlessResponse['errors']; $i++) { ?>
                            <li><?= $seamlessResponse['error_' . $i . '_consumerMessage'] ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }
        }
        ?>
    <?php } ?>

    <a class="btn btn-default"
       href="<?= Pimcore\Tool::getHostUrl() ?><?= $this->pimcoreUrl(['action' => 'payment', 'controller' => 'payment', 'prefix'=>$this->language], 'action', true) ?>"
       target="_top"><?= $this->translate('payment.retry') ?></a>

<?php } elseif ($state == \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless::PAYMENT_RETURN_STATE_PENDING) { ?>

    <h3><?= $this->translate('payment.complete.state.' . $state) ?></h3>
    <!-- handle payment pending state -->

<?php } else { ?>

    <h3><?= $this->translate('payment.complete.state.success.running') ?></h3>
    <!-- payment stillt running, poll for status updates (ie. refresh page) -->
    <script type="text/javascript">
        setInterval(function () {
            location.reload();
        }, 2000);
    </script>

<?php } ?>

<style type="text/css">
    body {
        width: 100%;
    }
</style>
