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

<?php $this->headTitle('Login') ?>

<div class="row">
    <div class="col-md-6 col-md-push-3">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?= $this->translate("general.login") ?>
                </h3>
            </div>

            <div class="panel-body">
                <?php if ($this->error) { ?>
                    <div class="alert alert-danger"><?php echo $this->error->getMessage() ?></div>
                <?php } ?>

                <?= $this->form()->start($form); ?>
                <?= $this->form()->row($form['_username']) ?>
                <?= $this->form()->row($form['_password']) ?>
                <?= $this->form()->widget($form['_submit'], [
                    'attr' => [
                        'class' => 'btn btn-primary btn-block'
                    ]
                ]) ?>
                <?= $this->form()->end($form); ?>


            </div>

        </div>
        <div class="row justify-content-center margin-bottom-10">
            <div class="col-4 text-center">

                <?= $this->template(':Account/partials:social-login-buttons.html.php') ?>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-4 text-center ">

                <p><?= $this->translate('login.no-account') ?>
                    <a href="<?= $this->url('action', [
                        'prefix' => $this->language,
                        'controller' => 'account',
                        'action' => 'register'
                    ]);?>">
                        <?= $this->translate('login.register-now') ?>
                    </a>
                </p>

            </div>
        </div>

    </div>
</div>
