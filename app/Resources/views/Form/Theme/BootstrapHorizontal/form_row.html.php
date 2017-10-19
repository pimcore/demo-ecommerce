<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$isValid = $form->vars['valid'];
?>

<div class="form-group <?= $isValid ? '' : 'has-error' ?>">
    <?= $this->form()->label($form, null, ['label_attr' => ['class' => 'col-sm-3 control-label']]) ?>
    <div class="col-sm-9">
        <?= $this->form()->widget($form, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => $this->translate($form->vars['label'])
            ]
        ]) ?>
    </div>
</div>