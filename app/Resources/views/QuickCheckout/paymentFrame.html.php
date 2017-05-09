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

<?php if (count($this->errors)): ?>
    <div class="alert alert-error">
        <?php foreach ($this->errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php $form = $this->payment ?>

<?php if ($form instanceof \Symfony\Component\Form\FormBuilderInterface) { ?>
    <p><img src="/static/img/masterpass.png"/></p>

    <p><?= $this->translate('checkout.payment.masterpass.txt') ?></p>

    <?php
    $form->remove('submitbutton');
    $form->add('submitbutton', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, ['attr' => ['class' => 'btn btn-primary'], 'label' => $this->translate('checkout.payment.paynow')]);

    $container = $this->app->getContainer();
    echo $container->get('templating.helper.form')->form($form->getForm()->createView());
    ?>

    <script type="text/javascript">
        $(document).ready(function () {
            document.getElementById('paymentForm').submit();
        });
    </script>

<?php } ?>
