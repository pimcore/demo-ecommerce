<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

$form = $this->form;

$this->form()->setTheme($form, [':Form/Theme/Bootstrap']);
?>

<?php $this->headTitle('Register') ?>

<div class="row">
    <div class="col-md-6 col-md-push-3">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?= $this->translate("general.register") ?>
                </h3>
            </div>

            <div class="panel-body">

                <?php if ($this->errors) { ?>
                    <?php foreach($this->errors as $error) { ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php } ?>
                <?php } ?>

                <?= $this->form()->start($form); ?>
                <?= $this->form()->row($form['email']) ?>
                <?php if(!$this->hidePassword) { ?>
                    <?= $this->form()->row($form['password']) ?>
                <?php } ?>
                <?= $this->form()->row($form['firstname']) ?>
                <?= $this->form()->row($form['lastname']) ?>
                <?= $this->form()->widget($form['_submit'], [
                    'attr' => [
                        'class' => 'btn btn-primary btn-block'
                    ]
                ]) ?>
                <?= $this->form()->end($form, ['render_rest' => true]); ?>

            </div>
        </div>

    </div>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-4 text-center">

        <p><a href="<?= $this->url('app_login') ?>">&larr; Back to login</a></p>

    </div>
</div>
