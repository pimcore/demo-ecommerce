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

$this->extend('payment-iframe.html.php');

?>

<?php if ($this->errors && count($this->errors)): ?>
    <div class="alert alert-error">
        <?php foreach ($this->errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php $form = $this->payment ?>

<?php if ($form instanceof \Symfony\Component\Form\FormBuilderInterface) { ?>
    <p><img src="https://www.wirecard.at/fileadmin/templates/images/wirecard-logo.png"/></p>

    <p><?= $this->translate('checkout.payment.txt') ?></p>

    <?php
        $form->remove('submitbutton');
        $form->add('submitbutton', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, ['attr' => ['class' => 'btn btn-primary'], 'label' => $this->translate('checkout.payment.paynow')]);

        echo $this->form()->form($form->getForm()->createView());
    ?>

    <script type="text/javascript">
        $(document).ready(function () {
           document.getElementById('paymentForm').submit();
        });
    </script>

<?php } elseif (is_string($this->payment)){ ?>

    <?php if(0 === strpos($this->payment, 'http')) { ?>
        <a href="<?= $this->payment ?>" target="_top"><img
                src="https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif"/></a>
    <?php } else { ?>
        <?= $this->payment ?>
    <?php } ?>

<?php } ?>
